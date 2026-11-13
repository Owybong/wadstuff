<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show(Mahasiswa $mahasiswa)
    {
    $this->authorize('view', $mahasiswa);
    return view('mahasiswa.show', compact('mahasiswa'));
    }
}
