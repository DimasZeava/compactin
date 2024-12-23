<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProductCard extends Component
{
    public $titleProduct;
    public $category;
    public $imageSrc;
    public $link;

    public function __construct($titleProduct, $category, $imageSrc, $link)
    {
        $this->titleProduct = $titleProduct;
        $this->category = $category;
        $this->imageSrc = $imageSrc;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}