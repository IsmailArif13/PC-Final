<?php

namespace App\Http\Controllers;

use App\Models\ProdukJasa;
use Illuminate\Http\Request;

class ProdukJasaController extends Controller
{
    public function index()
    {
        $produk = ProdukJasa::all();
        return view('admin.produk', compact('produk'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        ProdukJasa::create([
            'name' => $request->name
        ]);
        return redirect()->route('produk.index');
    }

    public function show(ProdukJasa $produkJasa)
    {
        //
    }

    public function edit(ProdukJasa $produkJasa)
    {
        //
    }

    public function update(Request $request, ProdukJasa $produk)
    {
        $produk->update(['name' => $request->name]);
        return redirect()->route('produk.index');
    }

    public function destroy(ProdukJasa $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
