@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @php
        $totalMasuk  = \App\Models\IncomingLetter::count();
        $totalKeluar = \App\Models\OutgoingLetter::count();
        $masukBaru   = \App\Models\IncomingLetter::latest()->take(5)->get();
        $keluarBaru  = \App\Models\OutgoingLetter::latest()->take(5)->get();
    @endphp

    {{-- Judul --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-900">Selamat datang, {{ auth()->user()->name }}</h1>
        <p class="mt-1 text-sm text-slate-500">
            @can('manage-letters')
                Anda dapat melihat sekaligus mengelola surat masuk dan surat keluar.
            @else
                Anda dapat melihat daftar dan detail surat. Pengelolaan surat hanya untuk petugas.
            @endcan
        </p>
    </div>

    {{-- Kartu statistik --}}
    <div class="grid gap-5 sm:grid-cols-3">
        <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
            <p class="text-sm font-medium text-slate-500">Total Surat Masuk</p>
            <p class="mt-2 text-3xl font-bold text-slate-900">{{ $totalMasuk }}</p>
            <div class="mt-4 h-1.5 rounded-full bg-indigo-100"><div class="h-1.5 w-2/3 rounded-full bg-indigo-500"></div></div>
        </div>

        <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
            <p class="text-sm font-medium text-slate-500">Total Surat Keluar</p>
            <p class="mt-2 text-3xl font-bold text-slate-900">{{ $totalKeluar }}</p>
            <div class="mt-4 h-1.5 rounded-full bg-emerald-100"><div class="h-1.5 w-2/3 rounded-full bg-emerald-500"></div></div>
        </div>

        <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
            <p class="text-sm font-medium text-slate-500">Hak Akses Anda</p>
            <p class="mt-2">
                <span class="inline-flex rounded-full px-3 py-1 text-sm font-semibold capitalize
                    {{ auth()->user()->role === 'petugas' ? 'bg-green-100 text-green-700' : 'bg-slate-100 text-slate-600' }}">
                    {{ auth()->user()->role }}
                </span>
            </p>
            <p class="mt-4 text-xs text-slate-500">
                @can('manage-letters') Boleh tambah, ubah, hapus @else Hanya boleh melihat @endcan
            </p>
        </div>
    </div>

    {{-- Daftar terbaru --}}
    <div class="mt-8 grid gap-6 lg:grid-cols-2">
        <div class="rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
                <h2 class="font-semibold text-slate-900">Surat Masuk Terbaru</h2>
                <a href="{{ route('surat-masuk.index') }}" class="text-sm font-medium text-indigo-600 hover:underline">Lihat semua</a>
            </div>
            <ul class="divide-y divide-slate-100">
                @forelse ($masukBaru as $s)
                    <li class="px-6 py-3.5">
                        <a href="{{ route('surat-masuk.show', $s->id) }}" class="block hover:text-indigo-600">
                            <p class="text-sm font-medium text-slate-900">{{ $s->perihal }}</p>
                            <p class="mt-0.5 text-xs text-slate-500">{{ $s->pengirim }} &middot; {{ $s->nomor_surat }}</p>
                        </a>
                    </li>
                @empty
                    <li class="px-6 py-8 text-center text-sm text-slate-500">Belum ada surat masuk.</li>
                @endforelse
            </ul>
        </div>

        <div class="rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
                <h2 class="font-semibold text-slate-900">Surat Keluar Terbaru</h2>
                <a href="{{ route('surat-keluar.index') }}" class="text-sm font-medium text-emerald-600 hover:underline">Lihat semua</a>
            </div>
            <ul class="divide-y divide-slate-100">
                @forelse ($keluarBaru as $s)
                    <li class="px-6 py-3.5">
                        <a href="{{ route('surat-keluar.show', $s->id) }}" class="block hover:text-emerald-600">
                            <p class="text-sm font-medium text-slate-900">{{ $s->perihal }}</p>
                            <p class="mt-0.5 text-xs text-slate-500">{{ $s->tujuan ?? '-' }} &middot; {{ $s->nomor_surat }}</p>
                        </a>
                    </li>
                @empty
                    <li class="px-6 py-8 text-center text-sm text-slate-500">Belum ada surat keluar.</li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection