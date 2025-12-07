@extends('layouts.admin')

@section('title', 'Edit Project')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <x-admin.page-header title="Edit Project" />

    <x-admin.form-container :action="route('admin.projects.update', $project)" method="PUT">
        <div class="grid grid-cols-6 gap-6">
            <x-admin.form.input
                label="Title"
                name="title"
                :required="true"
                :value="$project->title"
                col-span="col-span-6" />

            <x-admin.form.input
                label="Type"
                name="type"
                :required="true"
                :value="$project->type"
                placeholder="e.g., Web App, Mobile App, Course"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.input
                label="URL"
                name="url"
                type="url"
                :value="$project->url"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.input
                label="Duration"
                name="project_duration"
                :value="$project->project_duration"
                placeholder="e.g., 3 months, 2024-2025"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.input
                label="Featured Image URL"
                name="featured_image"
                :value="$project->featured_image"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.textarea
                label="Description"
                name="description"
                :rows="5"
                :required="true"
                :value="$project->description"
                col-span="col-span-6" />

            <x-admin.form.textarea
                label="Course Description"
                name="course_description"
                :rows="3"
                :value="$project->course_description"
                col-span="col-span-6" />

            <x-admin.form.input
                label="Display Order"
                name="order"
                type="number"
                :value="$project->order"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.checkbox
                label="Active"
                name="is_active"
                :checked="$project->is_active"
                col-span="col-span-6 sm:col-span-3" />

            <x-admin.form.checkbox-group
                label="Technologies"
                name="technologies"
                :items="$technologies"
                :selected-ids="old('technologies', $project->technologies->pluck('id')->toArray())"
                col-span="col-span-6" />
        </div>

        <x-admin.form-actions
            :cancel-route="route('admin.projects.index')"
            submit-label="Update Project" />
    </x-admin.form-container>
</div>
@endsection
