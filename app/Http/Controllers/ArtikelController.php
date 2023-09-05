<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel', compact('artikel'));
    }

    public function create()
    {
        return view('admin.create_artikel');
    }

    public function store(Request $request)
    {
        Artikel::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'text' => $request->text
        ]);

        return redirect()->route('artikel.index');
    }

    public function show(Artikel $artikel)
    {
        //
    }

    public function edit(Artikel $artikel)
    {
        return view('admin.edit_artikel', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $artikel->update([
            'title' => $request->title,
            'text' => $request->text
        ]);
        return redirect()->route('artikel.index');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
