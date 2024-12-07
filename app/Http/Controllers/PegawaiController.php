<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller {
    public function index() {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create() {
        return view('pegawai.create');
    }

    public function store(Request $request) {
        Pegawai::create($request->all());

        return redirect()->route('pegawai.index');
    }
}
