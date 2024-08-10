<?php

namespace App\Http\Controllers;


use App\Models\Porto;
use Illuminate\Http\Request;



class PortoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Porto::all();
        return view('dataporto', compact('data'));
    }
    public function tambahporto()
    {
       
        return view('tambahporto');
    }
    public function insertporto(Request $request)
    {

       
        $data = Porto::create($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('gambarporto/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('porto')->with('success', 'Data Berhasil diTambahkan');
    }
    public function tampilkanporto($id)
    {

        $data = Porto::find($id);
        return view('tampilkanporto', compact('data'));
    }
    public function updateporto(Request $request, $id)
    {


        $data = Porto::find($id);
      
        $data->update($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('gambarporto/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('porto')->with('success', 'Data Berhasil diUpdate');
    }
    public function deleteporto($id)
    {
        $data = Porto::find($id);
        $data->delete();
        return redirect('porto')->with('success', 'Data Berhasil diHapus');
    }


 


  



 
   


}
