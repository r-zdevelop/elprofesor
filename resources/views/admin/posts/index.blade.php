@extends('layouts.admin')

@section('title', 'Posts')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Posts</h1>
        <a href="{{ route('admin.posts.create') }}"
           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            Create Post
        </a>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            @forelse($posts as $post)
                <li>
                    <div class="px-4 py-4 flex items-center sm:px-6">
                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                            <div class="truncate">
                                <div class="flex text-sm">
                                    <p class="font-medium text-indigo-600 truncate">{{ $post->title }}</p>
                                    <p class="ml-1 flex-shrink-0 font-normal text-gray-500">
                                        by {{ $post->user->name }}
                                    </p>
                                </div>
                                <div class="mt-2 flex">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <p>
                                            Category: {{ $post->category?->name ?? 'None' }}
                                            @if($post->tags->count() > 0)
                                                | Tags: {{ $post->tags->pluck('name')->join(', ') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                                <div class="flex items-center space-x-4">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        @if($post->status === 'published') bg-green-100 text-green-800
                                        @elseif($post->status === 'draft') bg-yellow-100 text-yellow-800
                                        @else bg-gray-100 text-gray-800 @endif">
                                        {{ ucfirst($post->status) }}
                                    </span>
                                    <a href="{{ route('admin.posts.edit', $post) }}"
                                       class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-medium">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li class="px-4 py-8 text-center text-gray-500">
                    No posts yet. <a href="{{ route('admin.posts.create') }}" class="text-indigo-600 hover:text-indigo-900">Create one now</a>
                </li>
            @endforelse
        </ul>
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
@endsection
