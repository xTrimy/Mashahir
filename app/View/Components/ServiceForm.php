<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class ServiceForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $data = "";
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::all();
        return view('components.service-form',['data'=>$this->data,'categories'=>$categories]);
    }
}
