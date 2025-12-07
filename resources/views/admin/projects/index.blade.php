@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <x-admin.index-header
        title="Projects"
        :create-route="route('admin.projects.create')"
        create-label="Create Project" />

    <div class="bg-white shadow-lg overflow-hidden rounded-xl border border-gray-100">
        <ul class="divide-y divide-gray-200">
            @forelse($projects as $project)
                <x-admin.list-item
                    :title="$project->title"
                    :edit-route="route('admin.projects.edit', $project)"
                    :delete-route="route('admin.projects.destroy', $project)"
                    :status="$project->is_active"
                    delete-confirm-message="Are you sure you want to delete this project?">
                    <x-slot name="subtitle">
                        - {{ $project->type }}
                    </x-slot>
                    <x-slot name="metadata">
                        <p>
                            Order: {{ $project->order }}
                            @if($project->technologies->count() > 0)
                                | Technologies: {{ $project->technologies->pluck('name')->join(', ') }}
                            @endif
                        </p>
                    </x-slot>
                </x-admin.list-item>
            @empty
                <li class="px-4 py-8 text-center text-gray-500">
                    No projects yet. <a href="{{ route('admin.projects.create') }}" class="text-secondary hover:text-dark transition-colors duration-200">Create one now</a>
                </li>
            @endforelse
        </ul>
    </div>

    <div class="mt-6">
        {{ $projects->links() }}
    </div>
</div>
@endsection
