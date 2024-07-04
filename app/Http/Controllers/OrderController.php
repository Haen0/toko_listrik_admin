<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Mengambil semua data order dari database
        $orders = Order::all();

        // Mengirim data order ke view utama.index
        return view('isi.order', compact('orders'));
    }

    public function filterByStatus($status)
    {
        // Mengambil data order berdasarkan status
        $orders = Order::where('status', $status)->get();

        // Mengirim data order ke view utama.index
        return view('isi.order', compact('orders'));
    }
    
    public function dashboard()
{
    // Mengambil data jumlah pesanan berdasarkan status
    $jumlah_pesanan_baru = Order::where('status', 'pesanan baru')->count();
    $jumlah_siap_diambil = Order::where('status', 'siap diambil')->count();
    $jumlah_ulasan_baru = Order::where('status', 'ulasan baru')->count();

    // Mengambil data order dengan status tertentu untuk ditampilkan di dashboard
    $orders_pesanan_baru = Order::where('status', 'pesanan baru')->get();
    $orders_siap_diambil = Order::where('status', 'siap diambil')->get();
    $orders_ulasan_baru = Order::where('status', 'ulasan baru')->get();

    // Mengirim data ke view dashboard.blade.php di dalam folder utama
    return view('isi.dashboard', compact('jumlah_pesanan_baru', 'jumlah_siap_diambil', 'jumlah_ulasan_baru', 'orders_pesanan_baru', 'orders_siap_diambil', 'orders_ulasan_baru'));
}

}
