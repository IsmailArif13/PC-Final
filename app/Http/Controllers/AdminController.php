<?php

namespace App\Http\Controllers;

use App\Mail\SendCertifMail;
use App\Models\Artikel;
use App\Models\Order;
use App\Models\OrderProduk;
use App\Models\ProdukJasa;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use PDF;

class AdminController extends Controller
{
    function index() {
        $artikel = Artikel::all()->count();
        $order = Order::all()->count();
        $produk = ProdukJasa::all()->count();
        $user = User::all()->count();
        $orders = Order::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.index', compact('artikel', 'order', 'orders', 'produk', 'user'));
    }

    public function sertifikat() {
        return view('admin.kirim_sertifikat');
    }

    public function kirim_sertifikat(Request $request) {
        if ($file = $request->file('file')) {
            $destinationPath = 'sertifikat/';
            $filename = $file->getClientOriginalName() . "-" . date('His') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $path = $destinationPath . $filename;
        }

        Mail::to($request->email)->send(new SendCertifMail($path));

        session()->flash('success', 'Berhasil memgirim sertifikat.');

        return redirect()->route('sertifikat');
    }

    public function generateCertificate(Request $request, Order $order) {
        $files = [];

        foreach ($request->produk as $productId) {
            $produk = ProdukJasa::find($productId);
            $data = [
                'name' => $order->nama,
                'pelatihan' => $produk->name,
                'supervisor' => 'Ian Kurniawan',
                'manager' => 'Intan Triana'
            ];

            $pdf = PDF::loadView('admin.sertifikat', $data);
            $path = public_path('sertifikat');
            $fileName = '\sertifikat-'. $order->id . $productId .'.pdf';
            $pdf->save($path . $fileName);

            $files[] = $path . $fileName;
        }

        Mail::to($order->email)->send(new SendCertifMail($files));

        session()->flash('success', 'Berhasil memgirim sertifikat.');

        return redirect()->route('order.index');
    }

}
