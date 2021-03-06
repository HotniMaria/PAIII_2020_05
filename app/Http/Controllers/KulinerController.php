<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuliner;
use App\Kabupaten;
use RealRashid\SweetAlert\Facades\Alert;

class KulinerController extends Controller
{
    public function index(){
    	$kabupaten_id = session('kabupaten_id');
    	$kabupatens = Kabupaten::findOrFail($kabupaten_id);
    	$kuliners = Kuliner::where('kabupaten_id', $kabupaten_id)->get();

    	return view('CBT.Kuliner.index',compact('kabupatens','kuliners'));
    }

    public function store(Request $request){
    	$kuliner = new Kuliner;
    	$kuliner->nama_kuliner = $request->nama_kuliner;
    	$kuliner->jenis_kuliner = $request->jenis_kuliner;
    	$kuliner->longitude = $request->longitude;
    	$kuliner->latitude = $request->latitude;
    	$kuliner->lokasi = $request->lokasi;
    	$kuliner->deskripsi = $request->deskripsi;
    	$kuliner->cbt_id = session('cbt_id');
    	$kuliner->kabupaten_id = $request->kabupaten_id;

    	//foto
        $file = $request->file('foto');
        $gambar = $file->getClientOriginalName();
        $kuliner->foto = $gambar;
    	if($kuliner->save()){
            
            $file->move(\base_path() ."/public/images/information/Kuliner", $gambar);
    		Alert::success('Success', $request->nama_kuliner. ' berhasil ditambahkan');
    		return redirect()->back();
    	}
    }
}
