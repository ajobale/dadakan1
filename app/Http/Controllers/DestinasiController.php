<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
        public function index() {
        $data['prakerja'] = Destinasi::get();
        return view('destinasi/destinasi', $data);

  }
}
