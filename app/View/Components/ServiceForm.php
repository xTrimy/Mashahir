<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Service;
use Illuminate\View\Component;

class ServiceForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $id = "";
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::all();
        $service = null;
        if($this->id){
            $service = Service::where('id',$this->id)->with('upgrades')->first();
        }
        return view('components.service-form',['service'=> $service,'categories'=>$categories]);
    }
}
