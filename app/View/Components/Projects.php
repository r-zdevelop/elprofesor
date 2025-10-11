<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Projects extends Component
{
    /**
     * The projects data
     */
    public array $projects;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->projects = $this->getProjectsData();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.projects');
    }

    /**
     * Get projects data
     */
    private function getProjectsData(): array
    {
        return [
            [
                'title' => 'GymWorld',
                'type' => 'WordPress',
                'url' => 'https://gymworld.elprofesor.dev',
                'project_duration' => '4 weeks',
                'description' => 'A comprehensive fitness website built with WordPress, featuring dynamic content management, custom theme development, and advanced WordPress functionality.',
                'course_description' => 'This project demonstrates the practical application of converting static designs into fully functional WordPress websites, showcasing mastery of WordPress theme hierarchy and dynamic content management.',
                'technologies' => [
                    'WordPress',
                    'PHP',
                    'HTML5',
                    'CSS3',
                    'JavaScript',
                    'MySQL',
                    'Custom Themes',
                    'Plugin Development'
                ],
            ]
        ];
    }
}
