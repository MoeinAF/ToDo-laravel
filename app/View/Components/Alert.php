<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $route;
    public $index;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $index)
    {
        $this->route = $route;
        $this->index = $index;
    }

//    public function typeClass()
//    {
//        if($this->type === 'error')
//            return 'h-25 d-inline-block bg-danger text-white';
//        return 'bg-success text-white';
//    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
