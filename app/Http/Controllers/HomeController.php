<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function page(Request $request){
        return view('pages.home');
    }

    function heroData(Request $request){
       return DB::table('heroproperties')->first();
    }
    function aboutData(Request $request){
        return DB::table('abouts')->first();
    }
    function socialData(Request $request){
        return DB::table('socials')->first();
    }
}
