<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomingLetter;

class SuratMasukController extends Controller
{

    public function index() {
        $suratMasuk=incomingletter::all();

        return view('surat-masuk.index', compact('suratMasuk'));
    }
    public function show($id)
    {
        $surat=incomingletter::FindOrFail($id);

        // Kirim data ke view show.blade.php
        return view('surat-masuk.show', compact('surat'));
    }

}