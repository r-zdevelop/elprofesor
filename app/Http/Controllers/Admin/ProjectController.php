<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['technologies', 'user'])
            ->ordered()
            ->paginate(20);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $technologies = Technology::all();

        return view('admin.projects.create', compact('technologies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'url' => 'nullable|url|max:255',
            'project_duration' => 'nullable|string|max:255',
            'description' => 'required|string',
            'course_description' => 'nullable|string',
            'featured_image' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
            'technologies' => 'nullable|array',
            'technologies.*' => 'exists:technologies,id',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['user_id'] = auth()->id();
        $validated['is_active'] = $request->boolean('is_active', true);
        $validated['order'] = $validated['order'] ?? 0;

        $project = Project::create($validated);

        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        $technologies = Technology::all();

        return view('admin.projects.edit', compact('project', 'technologies'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'url' => 'nullable|url|max:255',
            'project_duration' => 'nullable|string|max:255',
            'description' => 'required|string',
            'course_description' => 'nullable|string',
            'featured_image' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
            'technologies' => 'nullable|array',
            'technologies.*' => 'exists:technologies,id',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active', true);

        $project->update($validated);

        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
