<?php

namespace App\Http\Controllers;

use App\Models\Bidang;

use Illuminate\Http\Request;



class BidangController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Bidang::all();
        return view('databidang', compact('data'));
    }
    public function tambahbidang()
    {
       
        return view('tambahbidang');
    }
    public function insertbidang(Request $request)
    {

       
        $data = Bidang::create($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('gambarbidang/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('bidang')->with('success', 'Data Berhasil diTambahkan');
    }
    public function tampilkanbidang($id)
    {

        $data = bidang::find($id);
        return view('tampilkanbidang', compact('data'));
    }
    public function updatebidang(Request $request, $id)
    {


        $data = bidang::find($id);
      
        $data->update($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('gambarbidang/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('bidang')->with('success', 'Data Berhasil diUpdate');
    }
    public function deletebidang($id)
    {
        $data = bidang::find($id);
        $data->delete();
        return redirect('bidang')->with('success', 'Data Berhasil diHapus');
    }


 


  



 
   


}
