<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogSwiper extends Component
{
    public $blog;
    public  $slidesPerView;
    public function __construct($blog, $slidesPerView = '')
    {
        $this->blog = $blog;
        $this->slidesPerView = $slidesPerView;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-swiper');
    }
}
