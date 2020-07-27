<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $class;
    public $href;
    
    public function __construct($type = 'link', $route = null, $url = null, $to = null)
    {
        $this->type = $type;
        $this->route = $route;
        $this->url = $url;
        $this->to = $to;
        
        $this->class = 'p-3 border-solid border border-blue-900 m-2 rounded hover:bg-blue-900 hover:text-white disabled:opacity-75';
        $this->href = null;
        
        if($route != null) {
            $this->href = route($route);
        }
        else if($url != null) {
            $this->href = url($url);
        }
        else if($to != null && $type == 'router-link') {
            $this->href = $to;
        }
        else if($to != null && $type != 'router-link') {
            $this->href = url($to);
        }
    }

    
    public function render()
    {
        return view('components.button');
    }
}
