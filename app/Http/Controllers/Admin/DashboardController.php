<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::where('status', 'published')->count(),
            'draft_posts' => Post::where('status', 'draft')->count(),
            'total_projects' => Project::count(),
            'active_projects' => Project::active()->count(),
        ];

        $recent_posts = Post::with('category')->latest()->take(5)->get();
        $recent_projects = Project::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_posts', 'recent_projects'));
    }
}
