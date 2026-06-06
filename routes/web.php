<?php
// File: routes/web.php

use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::get('/', function () {
    $fitur = [
        ['icon' => '🚀', 'judul' => 'MVC Architecture', 'desc' => 'Struktur kode yang rapi dan terorganisir'],
        ['icon' => '🗄️', 'judul' => 'Eloquent ORM',     'desc' => 'Akses database dengan cara yang elegan'],
        ['icon' => '🎨', 'judul' => 'Blade Template',   'desc' => 'Template engine yang powerful dan fleksibel'],
        ['icon' => '🔐', 'judul' => 'Security',         'desc' => 'Fitur keamanan bawaan yang komprehensif'],
        ['icon' => '⚡', 'judul' => 'Artisan CLI',      'desc' => 'Command line tool untuk produktivitas'],
        ['icon' => '📦', 'judul' => 'Package Ecosystem', 'desc' => 'Ribuan paket siap pakai dari Composer'],
    ];
    return view('pages.home', compact('fitur'));
})->name('home');


// Halaman Tentang
Route::get('/tentang', function () {
    $tim = [
        ['nama' => 'Dina Budhi Utami, M.T.', 'peran' => 'Dosen Pengampu', 'foto' => null],
        ['nama' => 'Firayza',          'peran' => 'Asisten Lab',    'foto' => null],
        ['nama' => 'Fahmy',           'peran' => 'Asisten Lab',    'foto' => null],
    ];
    return view('pages.tentang', compact('tim'));
})->name('tentang');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

// Halaman Portofolio
Route::get('/portofolio', function () {
    return view('pages.portofolio');
})->name('portofolio');

// Halaman Blog
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

