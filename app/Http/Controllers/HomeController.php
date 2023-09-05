<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ProdukJasa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produk = ProdukJasa::all();
        $artikel = Artikel::orderBy('id', 'desc')->take(3)->get();
        return view('frontend.index', compact('artikel', 'produk'));
    }

    public function artikel()
    {
        $recent = Artikel::orderBy('id', 'desc')->take(5)->get();
        $artikel = Artikel::orderBy('id', 'desc')->paginate(5);
        return view('frontend.artikel', compact('artikel', 'recent'));
    }

    public function bacaArtikel($slug) {
        $recent = Artikel::orderBy('id', 'desc')->take(5)->get();
        $artikel = Artikel::where('slug', $slug)->first();

        return view('frontend.baca_artikel', compact('artikel', 'recent'));
    }

    public function order() {
        $produk = ProdukJasa::all();
        return view('frontend.order', compact('produk'));
    }
}
