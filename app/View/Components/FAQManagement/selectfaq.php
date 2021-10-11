<?php

namespace App\View\Components\faqmanagement;

use Illuminate\View\Component;

class selectfaq extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $faqDropdown;
    public function __construct($faqDropdown)
    {
        //
        $this->faqDropdown=$faqDropdown;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faqmanagement.selectfaq');
    }
}
