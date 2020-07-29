<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Message extends Component
{
    public $message;
    public $classes = '';
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $this->classes = 'p-3 mx-auto text-center w-full';
        
        if($this->message != null) {
            if($this->message['success']) {
               $this->classes .= ' bg-green-200 text-green-800';
            }
            else {
                $this->classes .= ' bg-red-200 text-red-800';
            }
        }
        else {
            $this->classes .= " bg-gray-100 text-gray-500";
            $this->message['message'] = 'No messages.';
        }
          
        return view('components.message');
    }
}
