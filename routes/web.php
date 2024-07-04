<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;

// Route untuk menampilkan halaman pendaftaran toko
Route::get('/', [StoreController::class, 'create'])->name('isi.daftar');

// Route untuk menyimpan data toko ke database
Route::post('/daftar', [StoreController::class, 'store'])->name('simpan.daftar');
Route::get('/login', [StoreController::class, 'login'])->name('isi.login');
Route::post('/loginpost', [StoreController::class, 'loginPost'])->name('masuk');
Route::post('/logout', [StoreController::class, 'logout'])->name('logout');

// Route::post('/dashboard', [StoreController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('isi.dashboard');
    })->name('dashboard');
});

Route::get('/dashboard', [OrderController::class, 'dashboard'])->name('dashboard');
Route::get('/filter-by-status/{status}', [OrderController::class, 'filterByStatus'])->name('orders.filter.by-status');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [StoreController::class, 'showProfileForm'])->name('profile');
    Route::post('/profile', [StoreController::class, 'updateProfile'])->name('profile.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/toko', [StoreController::class, 'showStoreSettingsForm'])->name('store.settings');
    Route::post('/toko', [StoreController::class, 'updateStoreSettings'])->name('store.update');
});


Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
// Route::post('/produk/delete', [ProdukController::class, 'index'])->name('produk.index');
// Route::get('/home', function () {
//     return view('utama.index');
// });

// Route::get('/dashboard', function () {
//     return view('isi.dashboard');
// });

// Route::get('/order', [OrderController::class, 'index']);
Route::get('/order', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{status}', [OrderController::class, 'filterByStatus'])->name('orders.filter');
// Route::get('/pesanan-baru', [OrderController::class, 'filterPesananBaru'])->name('orders.filter.pesanan-baru');
// Route::get('/siap-diambil', [OrderController::class, 'filterSiapDiambil'])->name('orders.filter.siap-diambil');
// Route::get('/ulasan-baru', [OrderController::class, 'filterUlasanBaru'])->name('orders.filter.ulasan-baru');




// Route::get('/order', function () {
//     return view('isi.order');
// });

// Route::Resource('order', OrderController::class);


// Route::get('/review', function () {
//     return view('isi.review');
// });

Route::get('/review', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/review/waiting-for-reply', [ReviewController::class, 'waitingForReply'])->name('reviews.waiting-for-reply');

Route::get('/komen', function () {
    return view('isi.komen');
});

Route::get('/notif', function () {
    return view('isi.notifikasi');
});

// Route::get('/profile', function () {
//     return view('isi.profil');
// });

// Route::get('/toko', function () {
//     return view('isi.toko');
// });

Route::get('/tambah', function () {
    return view('isi.tambah');
});

Route::get('/edit', function () {
    return view('isi.edit');
});
