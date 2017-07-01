<?php

namespace App\Http\Controllers;
use App\ThietKeNoiThat;
use App\ThiCongNhaHang;
use App\Blog;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function IndexPage(){
        $DuAn = ThietKeNoiThat::get();
        return view('index')->with(['DuAn'=>$DuAn]);
    }

    public function BlogPage(){
        $Blog = Blog::get();
        return view('blog')->with(['Blog'=>$Blog]);   
    }   

    public function ContactPage(){
        return view('contact');
    }

    public function RestaurantPage(){
        $DuAn = ThiCongNhahang::get();
        return view('restaurant')->with(['DuAn'=>$DuAn]);
    }

    public function TKNTDetail($ID){
        $DuAn = ThietKeNoiThat::find($ID);
        return view('tknt-detail')->with(['DuAn'=>$DuAn]);
    }

    public function TCNHDetail($ID){
        $DuAn = ThiCongNhahang::find($ID);
        return view('tcnh-detail')->with(['DuAn'=>$DuAn]);
    }
}
