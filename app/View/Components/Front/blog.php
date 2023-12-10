<?php

namespace App\View\Components\Front;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blog extends Component
{
    public $name;
    public $blogs;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $blogs)
    {
        $this->name = $name;
        $this->blogs = $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.blog');
    }
}
