<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FeatureCard extends Component
{
    public $icon;
    public $title;
    public $description;
    public function __construct($icon, $title, $description)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
    }
    public function render(): View|Closure|string
    {
        return view('components.feature-card');
    }
}
