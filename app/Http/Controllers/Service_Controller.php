<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class Service_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $Service= Service::orderBy('created_at','desc')->get();
        return view('admin.Services.manageService',[
            'services' => $Service

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
            "Icon"=>'required|mimes:png|max:2048',
            "Name"=>"required",
            "Intro"=>"required",
            "Body"=>"required"
        ]);

        //Image storage logical
        $file=$request->file("Icon");
        $filename = $file->getClientOriginalName();

        //storing the file on the serer
        $file->storeAs('public/Service_icons',time(). $filename);

        //database instances only
        $newService= new Service;
        $newService->Name=$request->Name;
        $newService->Intro=$request->Intro;
        $newService->Body=$request->Body;
        $newService->Icon=time(). $filename;
        $newService->save();
        return redirect('service_items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleService=Service::find($id);
        if($singleService){
            return view('admin.Services.show',[
                'single'=>$singleService
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
        $request->validate([
            "Icon"=>'required|mimes:png|max:2048',
            "Name"=>"required",
            "Intro"=>"required",
            "Body"=>"required"
        ]);

         //Image storage logical
         $file=$request->file("Icon");
         $filename = $file->getClientOriginalName();

           //storing the file on the serer
        $file->storeAs('public/slider_images',time(). $filename);
        
        $existingService=Service::find($id);
        if ($existingService){
            $existingService->Name=$request->Name;
            $existingService->Intro=$request->Intro;
            $existingService->Body=$request->Body;
            $existingService->Icon=time(). $filename;
            $existingService->save();
              
        return redirect('service_items');

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
        $existingService=Service::find($id);
        if ($existingService){
            $existingService->delete();
            return redirect('service_items');
        }
    }
}
