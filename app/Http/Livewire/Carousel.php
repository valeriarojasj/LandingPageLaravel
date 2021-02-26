<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carousel as CarouselModel;

class Carousel extends Component
{
    public $carousels;
    public function render()
    {
        return view('livewire.carousel');
    }
    public function mount(){
        $this->carousels = CarouselModel::
            join('job_openings', 'job_openings.id', '=', 'carousel.job_opening_id')
            ->select('carousel.*', 'job_openings.job_title')
            ->get();
    }
}
