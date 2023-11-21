<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use App\Models\ListModel;

class PembeliController extends Controller
{
    public function checkout(Request $request) {

        //inisialisasi kode_event
        $kode_event = $request->input('kode_event');

        // Fetch data event
        $cek_max = ListModel::where('kode_event', $kode_event)->first();
      
       // Cek apakah masih ada slot, jika ada lakukan query
        $jml_row = Pembeli::where('kode_event', $kode_event)->count();


      //jika jumlah row lebih banyak (pendaftar lebih banyak) dari pada max (jumlah pembeli yang di tentukan)
      if($jml_row >= $cek_max->max) {
         return redirect('/')->with('gagal', 'Tiket sudah soldout');
      } else {
         //masukan data ke tabel
         Pembeli::create($request->all());
         //kembalikan ke halaman utama
         return redirect('/')->with('sukses', 'Tiket berhasil di beli. kami akan kirim email sesaat lagi..');
      }

      
    }
}
