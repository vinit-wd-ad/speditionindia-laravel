<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    public function index()
    {
        $apiUrl = "https://www.speditionindia.com/wp-json/tribe/events/v1/events?start_date=2020-01-01&per_page=100";

        try {
            $response = Http::withOptions([
                'verify' => false,
                'timeout' => 15,
            ])
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                ])
                ->get($apiUrl);

            $allEvents = $response->successful() ? ($response->json()['events'] ?? []) : [];

            $upcomingEvents = [];
            $previousEvents = [];
            $now = Carbon::now();

            foreach ($allEvents as $event) {
                $startDate = Carbon::parse($event['start_date']);

                if ($startDate->greaterThanOrEqualTo($now)) {
                    $upcomingEvents[] = $event;
                } else {
                    $previousEvents[] = $event;
                }
            }

            $previousEvents = array_reverse($previousEvents);

            return view('news-events', compact('upcomingEvents', 'previousEvents'));
        } catch (\Exception $e) {
            Log::error('Events API Error: ' . $e->getMessage());

            $upcomingEvents = [];
            $previousEvents = [];

            return view('news-events', compact('upcomingEvents', 'previousEvents'));
        }
    }

    public function show($slug)
    {
        $apiUrl = "https://www.speditionindia.com/wp-json/tribe/events/v1/events/by-slug/{$slug}";

        try {
            $response = Http::withOptions([
                'verify' => false,
                'timeout' => 15,
            ])
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                ])
                ->get($apiUrl);

            if (!$response->successful()) {
                abort(404, 'Event not found');
            }

            $event = $response->json();

            $startDate = !empty($event['start_date']) ? Carbon::parse($event['start_date']) : null;
            $endDate = !empty($event['end_date']) ? Carbon::parse($event['end_date']) : null;

            $dateRange = '';
            if ($startDate) {
                $dateRange = $startDate->format('d F Y');
                if ($endDate && $startDate->format('Y-m-d') !== $endDate->format('Y-m-d')) {
                    $dateRange .= ' - ' . $endDate->format('d F Y');
                }
            }

            $venue = $event['venue'] ?? null;
            $locationText = "Location TBA";
            if ($venue && !empty($venue['venue'])) {
                $locationParts = array_filter([$venue['venue'], $venue['city'] ?? null, $venue['country'] ?? null]);
                $locationText = implode(', ', $locationParts);
            }

            return view('event-details', compact('event', 'dateRange', 'locationText'));
        } catch (\Exception $e) {
            Log::error('Event Details API Error: ' . $e->getMessage());
            abort(404, 'Event details not found or removed.');
        }
    }
}
