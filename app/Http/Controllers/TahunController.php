<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tahun_model;

class TahunController extends Controller
{
    public function index(){
        $mytahun = new Tahun_model();
        $tahun = $mytahun->tampil_tahun();
        
        $data = array('tahun' => $tahun);
        return view('tahun/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('tahun/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tahun')
         ->insert([
             'nama_tahun'  =>  $request->nama_tahun,
             'keterangan'  =>  $request->keterangan,
             
         ]);
         return redirect('tahun');
     }
 
     public function edit($id){
         // return ('Testing');
         $tahun = \DB::table('tahun')->where('id', $id)->first();
         //dd($akun);
         $data = array('tahun' => $tahun);
         return view('tahun/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tahun')->where('id',$request->id)
         ->update([
            'nama_tahun'  =>  $request->nama_tahun,
            'keterangan'  =>  $request->keterangan,
            
         ]);
         return redirect('tahun');
     }
 
     public function delete ($id){
         $query = \DB::table('tahun')->where('id',$id)->delete();
         return redirect('tahun');
     }
}
