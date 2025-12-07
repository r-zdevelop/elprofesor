@extends('layouts.admin')

@section('title', 'Create Project')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <x-admin.page-header title="Create Project" />

    <x-admin.form-container :action="route('admin.projects.store')">
        <div class="grid grid-cols-6 gap-6">
            <x-admin.form.input
                label="Title"
                name="title"
                :required="true"
                col-span="col-span-6" />

            <x-admin.form.input
                label="Type"
                name="type"
                :required="true"
                placeholder="e.g., Web App, Mobile App, Course"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.input
                label="URL"
                name="url"
                type="url"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.input
                label="Duration"
                name="project_duration"
                placeholder="e.g., 3 months, 2024-2025"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.input
                label="Featured Image URL"
                name="featured_image"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.textarea
                label="Description"
                name="description"
                :rows="5"
                :required="true"
                col-span="col-span-6" />

            <x-admin.form.textarea
                label="Course Description"
                name="course_description"
                :rows="3"
                col-span="col-span-6" />

            <x-admin.form.input
                label="Display Order"
                name="order"
                type="number"
                value="0"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.checkbox
                label="Active"
                name="is_active"
                :checked="true"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.checkbox-group
                label="Technologies"
                name="technologies"
                :items="$technologies"
                :selected-ids="old('technologies', [])"
                col-span="col-span-6" />
        </div>

        <x-admin.form-actions
            :cancel-route="route('admin.projects.index')"
            submit-label="Create Project" />
    </x-admin.form-container>
</div>
@endsection
