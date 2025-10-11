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
                'type' => 'WordPress Website',
                'url' => 'https://gymworld.elprofesor.dev',
                'description' => 'A dynamic fitness website built with WordPress that demonstrates advanced theme development techniques and dynamic content management.',
                'course_description' => 'This project showcases the practical application of converting static designs into fully functional WordPress websites with dynamic content, custom functionality, and optimized performance.',
                'technologies' => [
                    'WordPress',
                    'PHP',
                    'HTML/CSS',
                    'JavaScript',
                    'Advanced Custom Fields',
                    'Custom Post Types'
                ],
                'features' => [
                    'Dynamic Content Management',
                    'Custom Post Types for Classes & Trainers',
                    'Advanced Custom Fields Integration',
                    'Dynamic Menu System',
                    'Blog with Search & Filtering',
                    'Responsive Design',
                    'Performance Optimization',
                    'SEO Optimization',
                    'Contact Forms & Booking System'
                ],
                'key_highlights' => [
                    'Converted from static HTML/CSS/JS to dynamic WordPress',
                    'Custom theme development following WordPress hierarchy',
                    'Dynamic content for classes, trainers, and schedules',
                    'Integrated booking and contact functionality',
                    'Optimized for speed and search engines',
                    'Mobile-responsive design',
                    'Easy content management for gym owners'
                ],
                'development_approach' => [
                    'Static Design Analysis',
                    'WordPress Theme Structure Planning',
                    'Custom Post Types Implementation',
                    'Advanced Custom Fields Setup',
                    'Dynamic Content Integration',
                    'Performance Optimization',
                    'Testing & Deployment'
                ],
                'project_duration' => 'Completed as part of comprehensive WordPress course',
                'client_benefits' => 'Easy content management, dynamic updates, professional appearance',
                'technical_achievements' => [
                    'Successfully converted static design to dynamic WordPress site',
                    'Implemented custom functionality without heavy plugins',
                    'Achieved fast loading times and good performance',
                    'Created user-friendly admin interface',
                    'Deployed to production with proper optimization'
                ]
            ]
        ];
    }
}
