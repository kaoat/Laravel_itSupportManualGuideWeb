<?php

namespace App\View\Components\faqmanagement;

use Illuminate\View\Component;

class faqlist extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $faqList;


    public function __construct($faqList)
    {
        //
        $this->faqList=$faqList;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faqmanagement.faqlist');
    }
}
