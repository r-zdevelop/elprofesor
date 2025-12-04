<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $technologies = [
            'WordPress' => ['slug' => 'wordpress', 'icon' => null, 'color' => '#21759b'],
            'PHP' => ['slug' => 'php', 'icon' => null, 'color' => '#777bb4'],
            'HTML5' => ['slug' => 'html5', 'icon' => null, 'color' => '#e34f26'],
            'CSS3' => ['slug' => 'css3', 'icon' => null, 'color' => '#1572b6'],
            'JavaScript' => ['slug' => 'javascript', 'icon' => null, 'color' => '#f7df1e'],
            'MySQL' => ['slug' => 'mysql', 'icon' => null, 'color' => '#4479a1'],
            'Custom Themes' => ['slug' => 'custom-themes', 'icon' => null, 'color' => null],
            'Plugin Development' => ['slug' => 'plugin-development', 'icon' => null, 'color' => null],
        ];

        $createdTechnologies = [];
        foreach ($technologies as $name => $data) {
            $createdTechnologies[$name] = Technology::create([
                'name' => $name,
                'slug' => $data['slug'],
                'icon' => $data['icon'],
                'color' => $data['color'],
            ]);
        }

        $gymworld = Project::create([
            'title' => 'GymWorld',
            'slug' => 'gymworld',
            'type' => 'WordPress',
            'url' => 'https://gymworld.elprofesor.dev',
            'project_duration' => '4 weeks',
            'description' => 'A comprehensive fitness website built with WordPress, featuring dynamic content management, custom theme development, and advanced WordPress functionality.',
            'course_description' => 'This project demonstrates the practical application of converting static designs into fully functional WordPress websites, showcasing mastery of WordPress theme hierarchy and dynamic content management.',
            'featured_image' => null,
            'is_active' => true,
            'order' => 1,
        ]);

        $gymworld->technologies()->attach([
            $createdTechnologies['WordPress']->id,
            $createdTechnologies['PHP']->id,
            $createdTechnologies['HTML5']->id,
            $createdTechnologies['CSS3']->id,
            $createdTechnologies['JavaScript']->id,
            $createdTechnologies['MySQL']->id,
            $createdTechnologies['Custom Themes']->id,
            $createdTechnologies['Plugin Development']->id,
        ]);
    }
}
