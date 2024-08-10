<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Brand;
use App\Models\Porto;
use Illuminate\Http\Request;

use App\Models\User;


class DashboardController extends Controller
{
    public function index(){
       
        $data=Brand::all();
        $porto=Porto::all();
        $bidang=Bidang::all();
        return view('frontend.index', compact('data','porto','bidang'));
    }

 
    
}