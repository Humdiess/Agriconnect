<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FAQAccordion extends Component
{
    public $question;
    public $answer;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question, $answer, $id)
    {
        $this->question = $question;
        $this->answer = $answer;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.f-a-q-accordion');
    }
}
