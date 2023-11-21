<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function index() {
        return view('scan');
    }

    public function update(Request $request) {
        $result = $request->input('result');

        //cek trx yang sesuai untuk di olah
        $cek = Pembeli::where('trx', "$result")->first();

        //jika trx ada alias not empty & scan = belum
        if(!empty($cek) && $cek->scan == 'belum') {
            $cek->update(['scan' => 'terpakai']);
            return response()->json(['message' => 'TRX ada! & di update']);
        } 
        
        //jika trx ada alias not empty & scan = terpakai
        else if(!empty($cek) && $cek->scan == 'terpakai') {
            return response()->json(['message' => 'TRX sudah terpakai!']);
        }
        
          else {
            return response()->json(['message' => 'TRX tidak ada!']);
        }

    }
}
