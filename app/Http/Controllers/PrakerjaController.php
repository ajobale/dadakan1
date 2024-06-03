<?php

namespace App\Http\Controllers;

use App\Models\Prakerja;
use Illuminate\Http\Request;
use App\Http\Requests\PrakerjaRequest;


class PrakerjaController extends Controller
{
    public function index() {
        $data['prakerja'] = Prakerja::get();
        return view('prakerja/prakerja', $data);

            
    }

    public function tambah(){
        return view('prakerja/tambah');
    }

    public function save(PrakerjaRequest $r){

        if($r->validated()) {
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/', $foto);

            Prakerja::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'telpon' => $r->telpon,
                'alamat' => $r->alamat,
                'pendidikan_terakhir' => $r->pendidikan_terakhir,
                'foto_user' => $foto,

            ]);

            return redirect('home')->with('pesan', 'input data berhasil');
        }
    }
}
