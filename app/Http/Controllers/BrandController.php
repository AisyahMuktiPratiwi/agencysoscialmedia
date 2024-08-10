<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;



class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Brand::all();
        return view('databrand', compact('data'));
    }
    public function tambahbrand()
    {
       
        return view('tambahdata');
    }
    public function insertbrand(Request $request)
    {

       
        $data = Brand::create($request->all());
       
            $data->save();
        
        return redirect()->route('brand')->with('success', 'Data Berhasil diTambahkan');
    }
    public function tampilkanbrand($id)
    {

        $data = Brand::find($id);
        return view('tampilkanbrand', compact('data'));
    }
    public function updatebrand(Request $request, $id)
    {


        $data = Brand::find($id);
        $data->update($request->all());
      
            $data->save();
        
        return redirect('brand')->with('success', 'Data Berhasil diUpdate');
    }
    public function deletebrand($id)
    {
        $data = Brand::find($id);
        $data->delete();
        return redirect('brand')->with('success', 'Data Berhasil diHapus');
    }


 


  



 
   


}
