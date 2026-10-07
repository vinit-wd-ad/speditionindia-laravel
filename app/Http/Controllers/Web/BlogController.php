<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $currentPage = $request->get('page', 1);
        $postsPerPage = 6;
        $apiUrl = "https://www.speditionindia.com/wp-json/wp/v2/posts";

        try {
            $response = Http::withOptions([
                'verify' => false,
                'timeout' => 15,
            ])
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                ])
                ->get($apiUrl, [
                    '_embed' => true,
                    'per_page' => $postsPerPage,
                    'page' => $currentPage,
                ]);

            if ($response->failed()) {
                return view('blogs.index', [
                    'posts' => [],
                    'currentPage' => 1,
                    'totalPages' => 1,
                    'error' => 'Unable to fetch blogs from WordPress API (Status: ' . $response->status() . ')'
                ]);
            }

            $totalPages = (int) $response->header('X-WP-TotalPages', 1);
            $posts = $response->json();

            return view('blogs', compact('posts', 'currentPage', 'totalPages'));
        } catch (\Exception $e) {
            return view('blogs', [
                'posts' => [],
                'currentPage' => 1,
                'totalPages' => 1,
                'error' => 'API Error: ' . $e->getMessage()
            ]);
        }
    }

    public function show($slug)
    {
        $wpApiUrl = "https://www.speditionindia.com/wp-json/wp/v2/posts";

        try {
            $postResponse = Http::withOptions([
                'verify' => false,
                'timeout' => 15,
            ])
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                ])
                ->get($wpApiUrl, [
                    'slug' => $slug,
                    '_embed' => true,
                ]);

            if ($postResponse->failed()) {
                Log::error('WordPress Post API Request Failed. Status: ' . $postResponse->status());
                abort(502, 'Unable to fetch blog data from source.');
            }

            $posts = $postResponse->json();

            if (empty($posts)) {
                abort(404, 'Blog post not found.');
            }

            $post = $posts[0];

            $recentResponse = Http::withOptions([
                'verify' => false,
                'timeout' => 15,
            ])
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                ])
                ->get($wpApiUrl, [
                    'per_page' => 5,
                    '_embed' => true,
                ]);

            $recentPosts = $recentResponse->successful() ? $recentResponse->json() : [];

            return view('blog-details', compact('post', 'recentPosts'));
        } catch (\Exception $e) {
            Log::error('Blog Detail Page Exception: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);

            abort(500, 'Something went wrong. Please try again later.');
        }
    }
}
