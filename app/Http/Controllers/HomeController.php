<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Brand;

use App\Models\User;

use App\Models\Porto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jumlahbrand = Brand::count();
        $jumlahporto = Porto::count();
        $jumlahbidang= Bidang::count();
        return view('dashboardadmin', compact('jumlahbrand', 'jumlahporto', 'jumlahbidang'));
    }

 
}
