<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $title;
    public $desc;
    public $image;
    public $link;
    public $rating;
    public $date;
    public $votes;
 
    /**
     * Create a new component instance.
     */ 
    public function __construct($title = '', 
                                $desc = '', 
                                $image = 'https://play-lh.googleusercontent.com/EicDCzuN6l-9g4sZ6uq0fkpB-1AcVzd6HeZ6urH3KIGgjw-wXrrtpUZapjPV2wgi5R4', 
                                $link = 'https://youtu.be/dQw4w9WgXcQ?si=ErS3ma0RqynxPs4H',
                                $rating = '',
                                $date = '',
                                $votes = 0)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->image = $image;
        $this->link = $link;
        $this->rating = $rating;
        $this->date = $date;
        $this->votes = $votes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
