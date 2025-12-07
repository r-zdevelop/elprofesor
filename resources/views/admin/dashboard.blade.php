@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-dark">Dashboard</h1>
        <p class="text-gray-600 mt-2">Welcome back! Here's an overview of your content.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mb-8">
        <!-- Total Posts Card -->
        <div class="bg-white overflow-hidden shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-600 mb-1">Total Posts</p>
                        <p class="text-3xl font-bold text-dark">{{ $stats['total_posts'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Published Posts Card -->
        <div class="bg-white overflow-hidden shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-600 mb-1">Published Posts</p>
                        <p class="text-3xl font-bold text-dark">{{ $stats['published_posts'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Draft Posts Card -->
        <div class="bg-white overflow-hidden shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-600 mb-1">Draft Posts</p>
                        <p class="text-3xl font-bold text-dark">{{ $stats['draft_posts'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-accent-alt" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Projects Card -->
        <div class="bg-white overflow-hidden shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-600 mb-1">Total Projects</p>
                        <p class="text-3xl font-bold text-dark">{{ $stats['total_projects'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Projects Card -->
        <div class="bg-white overflow-hidden shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-600 mb-1">Active Projects</p>
                        <p class="text-3xl font-bold text-dark">{{ $stats['active_projects'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-gradient-to-r from-secondary to-dark shadow-xl rounded-xl p-8 mb-8 text-white">
        <h2 class="text-2xl font-bold mb-6">Quick Actions</h2>
        <div class="flex flex-wrap gap-4">
            <a href="{{ route('admin.posts.create') }}"
               class="inline-flex items-center px-6 py-3 bg-accent hover:bg-accent-alt text-dark font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl hover:transform hover:-translate-y-1">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create New Post
            </a>
            <a href="{{ route('admin.projects.create') }}"
               class="inline-flex items-center px-6 py-3 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold rounded-lg border border-white/20 transition-all duration-300 hover:scale-105">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create New Project
            </a>
        </div>
    </div>

    <!-- Recent Posts -->
    <div class="bg-white shadow-lg rounded-xl p-6 mb-8 border border-gray-100">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-dark">Recent Posts</h2>
            <a href="{{ route('admin.posts.index') }}" class="text-sm font-medium text-secondary hover:text-dark transition-colors duration-200 inline-flex items-center">
                View all
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded-tl-lg">Title</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded-tr-lg">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recent_posts as $post)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 text-sm font-medium text-dark">{{ $post->title }}</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-lg
                                    @if($post->status === 'published') bg-green-100 text-green-800
                                    @elseif($post->status === 'draft') bg-accent/20 text-accent-alt
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($post->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $post->category?->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $post->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-sm text-gray-500">No posts yet</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Recent Projects -->
    <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-dark">Recent Projects</h2>
            <a href="{{ route('admin.projects.index') }}" class="text-sm font-medium text-secondary hover:text-dark transition-colors duration-200 inline-flex items-center">
                View all
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded-tl-lg">Title</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded-tr-lg">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recent_projects as $project)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 text-sm font-medium text-dark">{{ $project->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $project->type }}</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-lg
                                    {{ $project->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $project->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $project->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-sm text-gray-500">No projects yet</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
