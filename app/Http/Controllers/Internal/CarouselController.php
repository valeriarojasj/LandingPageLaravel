<?php

namespace App\Http\Controllers\Internal;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\JobOpening;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel, jobOpening $jobOpenings)
    {   
        $jobOpenings=JobOpening::all();
        return view('internal.carousel.edit', compact('carousel','jobOpenings'));
    }

    static public function getAllCarousels(){
        $data = Carousel::select('carousel.*', 'job_openings.job_title')
                ->join('job_openings', 'carousel.job_opening_id', '=', 'job_openings.id')
                ->get();

        return $data;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {

       $url='img/imagen-scrum.png';
        if($request->file('file')){
        $url= 'storage/'.Storage::put('images', $request->file('file'));
        }
     
        $carousel->image_url=$url;
        $carousel->job_opening_id=$request->job_opening_id;
        $carousel->description1=$request->description1;
        $carousel->save();
        return redirect('/internal/job-openings');
           
        
    }

    public function findJob($id){
        return $id;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
}
