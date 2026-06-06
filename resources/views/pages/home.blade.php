{{-- @extends menunjukkan layout mana yang digunakan --}}
@extends('layouts.app')

{{-- @section mengisi slot @yield('title') di layout --}}
@section('title', 'Beranda')

{{-- @section('content') mengisi slot @yield('content') di layout --}}
@section('content')
<x-alert type="success" message="Selamat datang di Laravel 13!" />
<x-alert type="warning" message="Ini adalah latihan Blade Component." />
<x-alert type="danger" message="Contoh alert error Bootstrap." />

    {{-- Jumbotron / Hero Section --}}
    <div class="p-5 mb-4 bg-dark text-white rounded-3">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold text-danger">🎓Belajar Laravel 13</h1>
            <p class="col-md-8 fs-4">
                Selamat datang di modul praktikum Laravel. Mari belajar membangun aplikasi web modern bersama!
            </p>
            <a class="btn btn-danger btn-lg" href="/mulai" role="button">
                Mulai Belajar →
            </a>
        </div>
    </div>

    {{-- Fitur Cards --}}
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🚀 MVC Architecture</h5>
                    <p class="card-text">
                         Pelajari konsep Model-View-Controller yang terstruktur dan modular untuk pengembangan aplikasi yang scalable.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🗄 Eloquent ORM</h5>
                    <p class="card-text">
                        Berinteraksi dengan database menggunakan Eloquent ORM yang intuitif dan powerful tanpa menulis SQL manual.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🎨 Blade Template</h5>
                    <p class="card-text">
                        Gunakan Blade Template Engine untuk membuat tampilan web yang dinamis dan reusable dengan sintaks yang bersih.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Menambahkan CSS tambahan khusus untuk halaman ini --}}
@push('styles')
    <style>
        .card:hover { transform: translateY(-5px); transition: transform 0.3s
ease; }
    </style>
@endpush
