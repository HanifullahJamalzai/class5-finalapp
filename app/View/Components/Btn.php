<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Btn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $name;
    public function __construct($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->type);
        return view('components.btn');
    }
}
