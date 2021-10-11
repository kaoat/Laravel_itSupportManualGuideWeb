<?php

namespace App\View\Components\faqmanagement;

use Illuminate\View\Component;

class create-edit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $faq;
    public function __construct($faq)
    {
        //
        $this->faq=$faq;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faqmanagement.create-edit');
    }
}
