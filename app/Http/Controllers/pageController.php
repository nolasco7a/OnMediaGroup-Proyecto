<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App;
use App\ShowBusiness;
use App\Portafolio;



class pageController extends Controller
{
    
    public function showBusiness(){

        $showbusiness = App\ShowBusiness::all();

        return view('show_business',compact('showbusiness'));
    }
   
    public function portafolios(){

        $portafolios = App\Portafolio::all();

        return view('portafolio',compact('portafolios'));
    }
    
    
}
