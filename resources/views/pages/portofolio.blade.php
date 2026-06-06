@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
    {{-- Breadcrumb --}}
    @php
        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Portofolio'],
        ];
    @endphp
    <x-breadcrumb :items="$breadcrumbs" />

    <div class="mb-5 mt-4">
        <h1 class="mb-2">🎨 Portofolio Proyek</h1>
        <p class="lead text-muted">Kumpulan proyek-proyek pembelajaran yang telah dikerjakan</p>
    </div>

    {{-- Alert Info Component --}}
    <x-alert type="info" message="Semua proyek di bawah adalah hasil pembelajaran Laravel 13. Klik tombol 'Lihat Detail' untuk melihat lebih lanjut." />

    @php
        $projects = [
            [
                'id' => 1,
                'title' => 'Concert Ticket Booking System',
                'description' => 'Sistem pemesanan tiket konser berbagai genre dengan payment gateway dan QR code validation',
                'image' => '🎫',
                'tech' => ['Laravel', 'Stripe API', 'QR Code'],
                'date' => 'November 2025'
            ],
            [
                'id' => 2,
                'title' => 'Sistem Manajemen Todo',
                'description' => 'Aplikasi todo list dengan fitur CRUD lengkap, menggunakan Laravel dan MySQL',
                'image' => '📝',
                'tech' => ['Laravel', 'MySQL', 'Blade'],
                'date' => 'Desember 2025'
            ],
            [
                'id' => 3,
                'title' => 'E-Learning Platform',
                'description' => 'Platform pembelajaran online dengan fitur upload course, video, dan quiz interaktif',
                'image' => '🎓',
                'tech' => ['Laravel', 'Vue.js', 'PostgreSQL'],
                'date' => 'Januari 2026'
            ],
        ];
    @endphp

    <div class="row g-4">
        @foreach($projects as $project)
            {{-- Card Component dengan Slot --}}
            <div class="col-md-6 col-lg-4">
                <x-card class="h-100 project-card" title="{{ $project['image'] }} {{ $project['title'] }}">
                    <p class="text-muted mb-3">{{ $project['description'] }}</p>

                    <div class="mb-3">
                        <small class="text-secondary d-block mb-2">
                            📅 {{ $project['date'] }}
                        </small>
                    </div>

                    {{-- Badge Component untuk Teknologi --}}
                    <div class="mb-3">
                        @foreach($project['tech'] as $tech)
                            <x-badge color="danger" class="me-1">{{ $tech }}</x-badge>
                        @endforeach
                    </div>

                    {{-- Button Component --}}
                    <x-slot name="footer">
                        <x-button variant="outline-danger" href="#" class="w-100">
                            Lihat Detail →
                        </x-button>
                    </x-slot>
                </x-card>
            </div>
        @endforeach
    </div>

    {{-- Alert Success Component --}}
    <x-alert type="success" class="mt-5" message="💡 Tips: Klik tombol 'Lihat Detail' untuk melihat penjelasan lebih lanjut tentang setiap proyek, source code, dan hasil deployment." dismissible="false" />
@endsection

@push('styles')
    <style>
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.15) !important;
        }
    </style>
@endpush
