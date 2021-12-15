<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel_items;

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
        return view('welcome',[
            'items' => $carouselContent

        ]);
    }
    public function service()
    {
        return view('pages.service-page');
    }
    public function about()
    {
        return view('pages.about-page');
    }
}
