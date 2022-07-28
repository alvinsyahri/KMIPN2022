<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::latest()->paginate(6)->withQueryString(),
            'kategoris' => Kategori::all()
        ]);
    }

    public function show(Berita $berita)
    {
        return view('single_berita', [
            "title" => "Single Berita",
            "beritas" => $berita
        ]);
    }
}
