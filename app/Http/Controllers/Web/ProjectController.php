<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $project = Project::where('slug', $slug)
            ->where('is_active', true)
            ->with([
                'children' => function ($query) {
                    $query->where('is_active', true)->orderBy('sort_order');
                },
                'children.images', 
                'images', 
                'parent'
            ])
            ->firstOrFail();

        return view('moment-workstyle', compact('project'));
    }
}
