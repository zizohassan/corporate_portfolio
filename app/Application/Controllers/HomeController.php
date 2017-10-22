<?php

namespace App\Application\Controllers;



use App\Application\Model\Categorie;
use App\Application\Model\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['getPageBySlug' , 'welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.home');
    }

    public function getPageBySlug($slug){
        $page = Page::where('slug' , $slug)->first();
        if($page){
            return view('website.page' , compact('page'));
        }
        return redirect('404');
    }

    public function welcome(){
        $Services = \App\Application\Model\Services::limit(8)->orderBy('id' , 'desc')->get();
        $partner = \App\Application\Model\Partner::orderBy('id' , 'desc')->get();
        $sliders = \App\Application\Model\Slider::get();
        $test = \App\Application\Model\Testimonial::limit(4)->orderBy('id' , 'desc')->get();
        $product = \App\Application\Model\Product::limit(8)->orderBy('id' , 'desc')->get();
        return view('website.welcome' , compact('Services' ,'partner' ,  'sliders', 'test' ,'product'));
    }
    public function services(){
        $Services = \App\Application\Model\Services::orderBy('id' , 'desc')->get();
        return view('website.services' , compact('Services'));
    }
    public function work(){
        $product = \App\Application\Model\Product::orderBy('id' , 'desc')->get();
        $cat = Categorie::get();
        return view('website.work' , compact('product' , 'cat'));
    }
}
