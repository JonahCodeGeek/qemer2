<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel_items;

class Carousel_item_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carouselContent= Carousel_items::orderBy('created_at','desc')->get();
        return view('admin.carousel.manageCarousel',[
            'items' => $carouselContent

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the request data
        $request->validate([
            "slide_image"=>'required|mimes:jpg,png,jpeg,svg,gif|max:2048',
            "Header"=>"required",
            "body"=>"required"
        ]);

        //Image storage logical
        $file=$request->file("slide_image");
        $filename = $file->getClientOriginalName();

        //storing the file on the serer
        $file->storeAs('public/slider_images',time(). $filename);

        //database instances only
        $new_Carousel= new Carousel_items;
      
        $new_Carousel->Header=$request->Header;
        $new_Carousel->body=$request->body;
        $new_Carousel->slide_image=time(). $filename;
        $new_Carousel->save();
        
        return redirect('carousel_items');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleSlider=Carousel_items::find($id);
        if($singleSlider){
            return view('admin.carousel.show',[
                'single'=>$singleSlider
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //Validate the request data
        $request->validate([
            "slide_image"=>'required|mimes:jpg,png,jpeg,svg,gif|max:2048',
            "Header"=>"required",
            "body"=>"required"
        ]);

         //Image storage logical
         $file=$request->file("slide_image");
         $filename = $file->getClientOriginalName();

           //storing the file on the serer
        $file->storeAs('public/slider_images',time(). $filename);
        
        $existingSlider=Carousel_items::find($id);
        if ($existingSlider){
            $existingSlider->Header=$request->Header;
            $existingSlider->body=$request->body;
            $existingSlider->slide_image=time(). $filename;
            $existingSlider->save();
              
        return redirect('carousel_items');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingSlider=Carousel_items::find($id);
        if ($existingSlider){
            $existingSlider->delete();
            return redirect('carousel_items');
        }
    }
}
