<?php

namespace App\Http\Controllers\Internal;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\JobOpening;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CarouselController extends Controller {

    public function edit(Carousel $carousel, jobOpening $jobOpenings){   
        $jobOpenings=JobOpening::all();
        return view('internal.carousel.edit', compact('carousel','jobOpenings'));
    }

    static public function getAllCarousels(){
        $data = Carousel::select('carousel.*', 'job_openings.job_title')
                    ->with('updatedBy')
                    ->with('jobOpening')
                    ->join('job_openings', 'carousel.job_opening_id', '=', 'job_openings.id')
                    ->where('job_status','Publicada')
                    ->get();
        return $data;
    }

    public function update(Request $request, Carousel $carousel){
        $rules = ['description1' => 'required|max:249'];
        $customMessages = [
            'required' => 'La descripción de la búsqueda es requerida.',
            'max' =>'La descripción de la búsqueda es de máximo 249 caracteres'
        ];
        $this->validate($request, $rules, $customMessages);
        $url='img/imagen-scrum.png';
        if($request->file('file')){
            $url= 'storage/'.Storage::put('images', $request->file('file'));
        }
        $carousel->image_url=$url;
        $carousel->job_opening_id=$request->job_opening_id;
        $carousel->description1=$request->description1;
        $carousel->updated_by=auth()->user()->id;
        $carousel->save();
        return redirect('/internal/job-openings');
    }

    public function cancel(Carousel $carousel){
        $this->load->helper('url');
        return redirect('/internal/job-openings');
    }

    public function findJob($id){
        return $id;
    }
}
