@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    {{-- Breadcrumb Component --}}
    @php
        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Blog'],
        ];
    @endphp
    <x-breadcrumb :items="$breadcrumbs" />

    <div class="mb-5 mt-4">
        <h1 class="mb-2">📚 Blog & Artikel</h1>
        <p class="lead text-muted">Tips, trik, dan pembelajaran tentang Laravel dan web development</p>
    </div>

    {{-- Alert Warning Component --}}
    <x-alert type="warning" message="⚠️ Blog masih dalam pengembangan. Konten-konten baru akan ditambahkan secara berkala!" />

    @php
        $articles = [
            [
                'id' => 1,
                'title' => 'Memahami MVC Architecture dalam Laravel',
                'excerpt' => 'MVC (Model-View-Controller) adalah pattern fundamental dalam Laravel. Pelajari bagaimana ketiga komponen ini bekerja sama untuk membangun aplikasi yang scalable dan maintainable.',
                'author' => 'Hijri Thoriq',
                'date' => '4 Juni 2026',
                'category' => 'Tutorial',
                'image' => '🏗️',
                'read_time' => '8 min'
            ],
            [
                'id' => 2,
                'title' => 'Route, Controller, dan View - Perjalanan Request',
                'excerpt' => 'Ikuti perjalanan sebuah HTTP request dari browser hingga kembali sebagai response. Kami akan menelusuri bagaimana route, controller, dan view berinteraksi dalam Laravel.',
                'author' => 'Muhammad Hijri',
                'date' => '3 Juni 2026',
                'category' => 'Tutorial',
                'image' => '🛣️',
                'read_time' => '10 min'
            ],
            [
                'id' => 3,
                'title' => 'Database & Eloquent ORM Untuk Pemula',
                'excerpt' => 'Pelajari cara menggunakan Eloquent ORM di Laravel untuk berinteraksi dengan database. Dari CRUD operations hingga relationship yang kompleks, semuanya dijelaskan step-by-step.',
                'author' => 'Thoriq Ma\'ruf',
                'date' => '2 Juni 2026',
                'category' => 'Database',
                'image' => '💾',
                'read_time' => '12 min'
            ],
            [
                'id' => 4,
                'title' => 'Blade Templating Engine - Template Seperti Pro',
                'excerpt' => 'Blade adalah templating engine Laravel yang powerful. Discover fitur-fitur seperti @if, @foreach, component, dan slot untuk membuat view yang dinamis dan reusable.',
                'author' => 'Hijri Thoriq',
                'date' => '1 Juni 2026',
                'category' => 'Frontend',
                'image' => '🎨',
                'read_time' => '9 min'
            ],
            [
                'id' => 5,
                'title' => 'Authentication & Authorization dalam Laravel',
                'excerpt' => 'Implementasi sistem login dan permission yang aman. Pelajari middleware, authentication guards, dan authorization policies untuk melindungi aplikasi Anda.',
                'author' => 'Muhammad Hijri',
                'date' => '31 Mei 2026',
                'category' => 'Security',
                'image' => '🔐',
                'read_time' => '11 min'
            ],
            [
                'id' => 6,
                'title' => 'Validasi Form dan Error Handling',
                'excerpt' => 'Teknik validasi form yang robust dan error handling yang user-friendly. Gunakan Request validation dan custom messages untuk memberikan user experience terbaik.',
                'author' => 'Thoriq Ma\'ruf',
                'date' => '30 Mei 2026',
                'category' => 'Tutorial',
                'image' => '✅',
                'read_time' => '7 min'
            ],
        ];
    @endphp

    <div class="row">
        <div class="col-lg-8">
            @foreach($articles as $article)
                {{-- Card Component dengan Multiple Slot --}}
                <x-card class="mb-4 shadow-sm article-card">
                    <div class="row g-0">
                        <div class="col-md-3 bg-light d-flex align-items-center justify-content-center p-4">
                            <div style="font-size: 3rem;">{{ $article['image'] }}</div>
                        </div>
                        <div class="col-md-9">
                            <div class="p-3">
                                <div class="d-flex gap-2 mb-2">
                                    {{-- Badge Component untuk Kategori --}}
                                    <x-badge color="danger">{{ $article['category'] }}</x-badge>
                                    <span class="text-muted small">⏱️ {{ $article['read_time'] }}</span>
                                </div>

                                <h4 class="card-title">
                                    <a href="#" class="text-dark text-decoration-none">
                                        {{ $article['title'] }}
                                    </a>
                                </h4>

                                <p class="text-muted mb-3 small">
                                    {{ $article['excerpt'] }}
                                </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-secondary">
                                        ✍️ {{ $article['author'] }} • 📅 {{ $article['date'] }}
                                    </small>
                                    {{-- Button Component --}}
                                    <x-button variant="danger" size="sm" href="#">
                                        Baca Selengkapnya →
                                    </x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card>
            @endforeach
        </div>

        <div class="col-lg-4">
            {{-- Sidebar Category Card --}}
            <x-card title="🏷️ Kategori" class="shadow-sm mb-4">
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none">
                            Tutorial
                            <x-badge color="secondary" class="float-end">4</x-badge>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none">
                            Database
                            <x-badge color="secondary" class="float-end">1</x-badge>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none">
                            Frontend
                            <x-badge color="secondary" class="float-end">1</x-badge>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none">
                            Security
                            <x-badge color="secondary" class="float-end">1</x-badge>
                        </a>
                    </li>
                </ul>
            </x-card>

            {{-- Subscribe Card --}}
            <x-card title="📰 Subscribe" class="shadow-sm bg-light">
                <p class="text-muted small">Dapatkan artikel terbaru langsung ke email Anda</p>
                <form class="mb-0">
                    <input type="email" class="form-control mb-2" placeholder="Email Anda" required>
                    <x-button variant="danger" class="w-100" type="submit">
                        Subscribe
                    </x-button>
                </form>
            </x-card>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .article-card {
            transition: box-shadow 0.3s ease;
        }
        .article-card:hover {
            box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.2) !important;
        }
        .article-card .card-title a:hover {
            color: #dc3545 !important;
        }
    </style>
@endpush
