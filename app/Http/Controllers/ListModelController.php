<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;

class ListModelController extends Controller
{
    public function index() {

        //ambil data dari model
        $data = ListModel::all();

        //kirim data ke view
        return view('index', compact('data'));
    }
}
