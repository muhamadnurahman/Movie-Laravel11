<?php

namespace App\View\Components\Movie;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
Use Illuminate\Support\Str;

class Card extends Component
{
    public $index;
    public $title;
    public $releasedate;
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct($index, $title, $releasedate, $image)
    {
        $this->index = $index;
        $this->title = $title;
        $this->releasedate = Carbon::parse($releasedate)->format('M d, Y');
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->title = Str::upper($this->title);
        return view('components.movie.card');
    }
}
