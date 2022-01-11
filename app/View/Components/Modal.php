<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $show;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->show = false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }

    public function show()
    {
        $this->show = true;
    }

    public function hide()
    {
        $this->show = false;
    }
}
