@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Projects</h1>
        <a href="{{ route('admin.projects.create') }}"
           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-secondary hover:bg-dark transition-colors duration-200">
            Create Project
        </a>
    </div>

    <div class="shadow overflow-hidden sm:rounded-md bg-accent">
        <ul class="divide-y divide-gray-200">
            @forelse($projects as $project)
                <li>
                    <div class="px-4 py-4 flex items-center sm:px-6">
                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                            <div class="truncate">
                                <div class="flex text-sm">
                                    <p class="font-medium truncate text-secondary">{{ $project->title }}</p>
                                    <p class="ml-1 flex-shrink-0 font-normal text-gray-500">
                                        - {{ $project->type }}
                                    </p>
                                </div>
                                <div class="mt-2 flex">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <p>
                                            Order: {{ $project->order }}
                                            @if($project->technologies->count() > 0)
                                                | Technologies: {{ $project->technologies->pluck('name')->join(', ') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                                <div class="flex items-center space-x-4">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $project->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                        {{ $project->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                    <a href="{{ route('admin.projects.edit', $project) }}"
                                       class="text-sm font-medium text-secondary hover:text-dark transition-colors duration-200">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this project?')">
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
