<?php

namespace App\Http\Controllers;

use App\Models\Tp;
use Illuminate\Http\Request;

class TpController extends Controller {
    public function index() {
        $teori_pendahuluans = Tp::all();
        return view('tp.index', compact('teori_pendahuluans'));
    }

    public function create() {
        return view('tp.create');
    }

    public function store(Request $request) {
        Tp::create($request->all());

        return redirect()->route('tp.index');
    }
}
