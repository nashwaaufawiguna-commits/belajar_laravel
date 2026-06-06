@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <h1 class="display-6 fw-bold">Tentang Modul Ini</h1>
            <hr>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-8">
            <h3>Apa Itu Modul Ini?</h3>
            <p class="lead">
                Modul Praktikum Laravel adalah panduan lengkap untuk mempelajari pengembangan web menggunakan framework Laravel 13.
            </p>
            <p>
                Modul ini dirancang untuk mahasiswa semester awal yang baru mulai belajar pemrograman web. Setiap bab disusun secara sistematis dengan penjelasan yang mudah dipahami dan contoh kode yang dapat langsung dipraktikkan.
            </p>

            <h4 class="mt-4">Tim Pengajar</h4>
            <div class="row g-3">
                @foreach ($tim as $anggota)
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="bg-secondary rounded-circled-inline-flex
                                     align-items-center justify-content-center mb-3"
                                    style="width: 80px; height: 80px;font-size: 2rem;">
                                    👤
                                </div>
                                <h6 class="card-title fw-bold">{{ $anggota['nama'] }}</h6>
                                <p class="card-text text-muted small">{{ $anggota['peran'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <div class="card-header fw-bold">
                    📊 Info Modul</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white d-flex justify-content-between">
                        <span>Versi Laravel</span> <strong>11.x</strong>
                    </li>
                    <li class="list-group-item bg-dark text-white d-flex justify-content-between">
                        <span>Total Bab</span> <strong>9 Bab</strong>
                    </li>
                    <li class="list-group-item bg-dark text-white d-flex justify-content-between">
                        <span>Bahasa</span> <strong>Indonesia</strong>
                    </li>
                    <li class="list-group-item bg-dark text-white d-flex justify-content-between">
                        <span>Level</span> <strong>Pemula</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
