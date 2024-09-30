<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('Wilujeng Sumping');
});

Route::get('/Arsenal', function () {
    echo"<h1> What do we think of tottenham?<h1>";
    echo"<h2> Shit!!!!!!!!!!!!!<h2>";
    echo"<h3> What do we think of Shit?<h3>";
    echo"<p> tottenham <p>";
    echo"<p> Thank You!!!<p>";
    echo"<p> that's awright we hate tottenham, we hate tottenham, we hate tottenham, we hate tottenham<p>";
});

Route::get('/mahasiswa/{nama}', function($nama) {
    return "Halo namaku adalah $nama";
});

Route::get('/hello', function () {
    return view('Wilujeng Sumping');
});


Route:prefix('/admin')->group (function (){
    Route::get('/hello', function () {
        return view('ini mahasiwa');
    });Route::get('/hello', function () {
        return view('ini staff');
    });Route::get('/hello', function () {
        return view('ini dosen');
    });
});

Route::get('/contoh_view', function () {
    return view('inicontohview');
});

Route::get('/dosen', function () {
    return view('binusian.mhs');
});

Route::get('/tanggal', function () {
    return view('tanggal');
});

Route::get('/mhs{nama_mhasiswa}', function ($nama_mahasiswa) {
    return view('binusian.mhs',["nama" => "$nama_mahasiswa"]);
});