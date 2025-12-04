@extends('layouts.admin')

@section('title', 'Create Post')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Create Post</h1>
    </div>

    <div class="bg-white shadow sm:rounded-lg">
        <form action="{{ route('admin.posts.store') }}" method="POST" class="px-4 py-5 sm:p-6">
            @csrf

            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text"
                           name="title"
                           id="title"
                           required
                           value="{{ old('title') }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6">
                    <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt</label>
                    <textarea name="excerpt"
                              id="excerpt"
                              rows="3"
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('excerpt') border-red-500 @enderror">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6">
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea name="content"
                              id="content"
                              rows="10"
                              required
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id"
                            id="category_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">None</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status"
                            id="status"
                            required
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                        <option value="archived" {{ old('status') === 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="published_at" class="block text-sm font-medium text-gray-700">Published At</label>
                    <input type="datetime-local"
                           name="published_at"
                           id="published_at"
                           value="{{ old('published_at') }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured Image URL</label>
                    <input type="text"
                           name="featured_image"
                           id="featured_image"
                           value="{{ old('featured_image') }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6">
                    <label class="block text-sm font-medium text-gray-700">Tags</label>
                    <div class="mt-2 space-y-2">
                        @foreach($tags as $tag)
                            <div class="flex items-center">
                                <input type="checkbox"
                                       name="tags[]"
                                       value="{{ $tag->id }}"
                                       id="tag-{{ $tag->id }}"
                                       {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}
                                       class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="tag-{{ $tag->id }}" class="ml-2 block text-sm text-gray-900">
                                    {{ $tag->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-span-6">
                    <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                    <textarea name="meta_description"
                              id="meta_description"
                              rows="2"
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('meta_description') }}</textarea>
                </div>

                <div class="col-span-6">
                    <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords</label>
                    <input type="text"
                           name="meta_keywords"
                           id="meta_keywords"
                           value="{{ old('meta_keywords') }}"
                           placeholder="keyword1, keyword2, keyword3"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end space-x-3">
                <a href="{{ route('admin.posts.index') }}"
                   class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </a>
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create Post
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
