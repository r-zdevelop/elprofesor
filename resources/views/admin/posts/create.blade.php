@extends('layouts.admin')

@section('title', 'Create Post')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <x-admin.page-header title="Create Post" />

    <x-admin.form-container :action="route('admin.posts.store')">
        <div class="grid grid-cols-6 gap-6">
            <x-admin.form.input
                label="Title"
                name="title"
                :required="true"
                col-span="col-span-6" />

            <x-admin.form.textarea
                label="Excerpt"
                name="excerpt"
                :rows="3"
                col-span="col-span-6" />

            <x-admin.form.textarea
                label="Content"
                name="content"
                :rows="10"
                :required="true"
                col-span="col-span-6" />

            <x-admin.form.select
                label="Category"
                name="category_id"
                col-span="col-span-6 sm:col-span-3">
                <option value="">None</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </x-admin.form.select>

            <x-admin.form.select
                label="Status"
                name="status"
                :required="true"
                col-span="col-span-6 sm:col-span-3">
                <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                <option value="archived" {{ old('status') === 'archived' ? 'selected' : '' }}>Archived</option>
            </x-admin.form.select>

            <x-admin.form.input
                label="Published At"
                name="published_at"
                type="datetime-local"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.input
                label="Featured Image URL"
                name="featured_image"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.checkbox-group
                label="Tags"
                name="tags"
                :items="$tags"
                :selected-ids="old('tags', [])"
                grid-cols="space-y-2"
                col-span="col-span-6" />

            <x-admin.form.textarea
                label="Meta Description"
                name="meta_description"
                :rows="2"
                col-span="col-span-6" />

            <x-admin.form.input
                label="Meta Keywords"
                name="meta_keywords"
                placeholder="keyword1, keyword2, keyword3"
                col-span="col-span-6" />
        </div>

        <x-admin.form-actions
            :cancel-route="route('admin.posts.index')"
            submit-label="Create Post" />
    </x-admin.form-container>
</div>
@endsection
