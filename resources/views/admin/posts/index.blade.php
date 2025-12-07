@extends('layouts.admin')

@section('title', 'Posts')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <x-admin.index-header
        title="Posts"
        :create-route="route('admin.posts.create')"
        create-label="Create Post" />

    <div class="shadow overflow-hidden sm:rounded-md bg-accent">
        <ul class="divide-y divide-gray-200">
            @forelse($posts as $post)
                <x-admin.list-item
                    :title="$post->title"
                    :edit-route="route('admin.posts.edit', $post)"
                    :delete-route="route('admin.posts.destroy', $post)"
                    :status="$post->status"
                    delete-confirm-message="Are you sure you want to delete this post?">
                    <x-slot name="subtitle">
                        by {{ $post->user->name }}
                    </x-slot>
                    <x-slot name="metadata">
                        <p>
                            Category: {{ $post->category?->name ?? 'None' }}
                            @if($post->tags->count() > 0)
                                | Tags: {{ $post->tags->pluck('name')->join(', ') }}
                            @endif
                        </p>
                    </x-slot>
                </x-admin.list-item>
            @empty
                <li class="px-4 py-8 text-center text-gray-500">
                    No posts yet. <a href="{{ route('admin.posts.create') }}" class="text-secondary hover:text-dark transition-colors duration-200">Create one now</a>
                </li>
            @endforelse
        </ul>
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
@endsection
