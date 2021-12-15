<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel_items;
use App\Models\Service;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carouselContent= Carousel_items::orderBy('created_at','asc')->get();
        $serviceContent=  Service::orderBy('created_at','asc')->get();
        $contactContent= Contact::orderBy('created_at','asc')->get();
        return view('welcome',[
            'items' => $carouselContent,
            'services' => $serviceContent,
            'contacts' => $contactContent
        ]);
    }
    public function service()
    {
        
        $serviceContent=  Service::orderBy('created_at','asc')->get();
        return view('pages.service-page',[
          'services' => $serviceContent
        ]);
    }
    public function about()
    {
        return view('pages.about-page');
    }
    public function contact()
    {
        $contactContent= Contact::orderBy('created_at','asc')->get();
        return view('pages.contact-page',[
            'contacts' => $contactContent

        ]);
    }
}
