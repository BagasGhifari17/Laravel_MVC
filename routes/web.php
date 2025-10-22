<?php 
use Illuminate\Support\Facades\Route; 
Route::get('/', function () { 
return "Hello World"; 
}); 
Route::get('/user', function () { 
return "Hello User"; 
}); 


Route::get('/form-produk', function () {
    return view('form-produk');
});

use Illuminate\Http\Request;
Route::post('/kirim-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    return "Produk <b>$nama</b> dengan harga Rp$harga berhasil dikirim!";
});

Route::put('/produk/update', function (Request $request) {
    // seharusnya update ke DB, disini simulasinya:
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    return "Data diperbarui: $nama - Rp$harga";
});

// view pakai @method('PATCH')
Route::patch('/produk/update-harga', function (Request $request) {
    $harga = $request->input('harga');
    return "Harga berhasil diubah jadi Rp$harga";
});
