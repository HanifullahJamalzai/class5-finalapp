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
    public $item;
    public function __construct($type, $name, $item)
    {
        $this->type = $type;
        $this->name = $name;
        $this->item = $item;
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
