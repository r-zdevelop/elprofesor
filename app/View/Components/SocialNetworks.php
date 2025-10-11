<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialNetworks extends Component
{
    /**
     * Social networks data
     */
    public array $networks;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->networks = $this->getSocialNetworks();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.social-networks');
    }

    /**
     * Define social networks configuration
     * 
     * @return array
     */
    private function getSocialNetworks(): array
    {
        return [
            [
                'name' => 'Email',
                'url' => 'mailto:regynald.zambrano@gmail.com',
                'icon' => 'mail',
                'color' => 'text-gray-600 hover:text-blue-600',
                'description' => 'Send me an email'
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com/in/regynald-zambrano-0521161a9/',
                'icon' => 'linkedin',
                'color' => 'text-gray-600 hover:text-blue-600',
                'description' => 'Connect on LinkedIn'
            ],
            [
                'name' => 'GitHub',
                'url' => 'https://github.com/r-zdevelop',
                'icon' => 'github',
                'color' => 'text-gray-600 hover:text-blue-600',
                'description' => 'View my code on GitHub'
            ],
            [
                'name' => 'X',
                'url' => 'https://x.com/develop_rz',
                'icon' => 'x',
                'color' => 'text-gray-600 hover:text-blue-600',
                'description' => 'Follow me on X'
            ],
        ];
    }
}
