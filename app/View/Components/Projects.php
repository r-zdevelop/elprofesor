<?php

namespace App\View\Components;

use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Projects extends Component
{
    /**
     * The projects data
     */
    public Collection $projects;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->projects = Project::with('technologies')
            ->active()
            ->ordered()
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.projects');
    }
}
