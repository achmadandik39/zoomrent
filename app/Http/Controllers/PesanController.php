<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PesanController extends Controller {

        public function tambah(Request $request)
            {
               DB::table('pesan')->insert([
                    'email' => $request->email,
                    'nama' => $request->nama,
                    'instansi' => $request->instansi,
                    'telp' => $request->telp,
                    'alamat' => $request->alamat,
                    'tanggal' => $request->tanggal


                ]);dd($request->all());
            }

}