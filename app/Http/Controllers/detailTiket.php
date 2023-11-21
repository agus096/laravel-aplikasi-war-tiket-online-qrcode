<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class detailTiket extends Controller
{
    public function detail($trx) {

         $detail = Pembeli::where('trx', $trx)->first();

         // Data yang akan diubah menjadi QR code
         $trx = $detail->trx;

         // Membuat QR code
         $qrCode = QrCode::generate($trx);

         return view('detail', compact(['detail','qrCode']));

    }
}
