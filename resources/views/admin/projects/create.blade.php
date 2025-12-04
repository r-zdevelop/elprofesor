@extends('layouts.admin')

@section('title', 'Create Project')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Create Project</h1>
    </div>

    <div class="bg-white shadow sm:rounded-lg">
        <form action="{{ route('admin.projects.store') }}" method="POST" class="px-4 py-5 sm:p-6">
            @csrf

            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" required value="{{ old('title') }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                    <input type="text" name="type" id="type" required value="{{ old('type') }}"
                           placeholder="e.g., Web App, Mobile App, Course"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('type') border-red-500 @enderror">
                    @error('type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                    <input type="url" name="url" id="url" value="{{ old('url') }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('url') border-red-500 @enderror">
                    @error('url')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="project_duration" class="block text-sm font-medium text-gray-700">Duration</label>
                    <input type="text" name="project_duration" id="project_duration" value="{{ old('project_duration') }}"
                           placeholder="e.g., 3 months, 2024-2025"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured Image URL</label>
                    <input type="text" name="featured_image" id="featured_image" value="{{ old('featured_image') }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="5" required
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6">
                    <label for="course_description" class="block text-sm font-medium text-gray-700">Course Description</label>
                    <textarea name="course_description" id="course_description" rows="3"
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('course_description') }}</textarea>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="order" class="block text-sm font-medium text-gray-700">Display Order</label>
                    <input type="number" name="order" id="order" value="{{ old('order', 0) }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <div class="flex items-center h-full">
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">
                            Active
                        </label>
                    </div>
                </div>

                <div class="col-span-6">
                    <label class="block text-sm font-medium text-gray-700">Technologies</label>
                    <div class="mt-2 grid grid-cols-2 sm:grid-cols-3 gap-2">
                        @foreach($technologies as $technology)
                            <div class="flex items-center">
                                <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" id="tech-{{ $technology->id }}"
                                       {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}
                                       class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="tech-{{ $technology->id }}" class="ml-2 block text-sm text-gray-900">
                                    {{ $technology->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end space-x-3">
                <a href="{{ route('admin.projects.index') }}"
                   class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Create Project
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
