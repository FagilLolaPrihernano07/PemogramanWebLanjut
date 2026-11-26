@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')
    <div class="mb-6">
        <p class="text-sm text-slate-500">
            <a href="{{ route('dashboard') }}" class="hover:text-emerald-600">Dashboard</a> /
            <a href="{{ route('surat-keluar.index') }}" class="hover:text-emerald-600">Surat Keluar</a> / Detail
        </p>
        <h1 class="mt-1 text-2xl font-bold text-slate-900">Detail Surat Keluar</h1>
    </div>

    <div class="max-w-2xl rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8">
        <dl class="divide-y divide-slate-100">
            <div class="grid gap-1 py-3 sm:grid-cols-3">
                <dt class="text-sm font-medium text-slate-500">Nomor Surat</dt>
                <dd class="text-sm font-semibold text-slate-900 sm:col-span-2">{{ $surat->nomor_surat }}</dd>
            </div>
            <div class="grid gap-1 py-3 sm:grid-cols-3">
                <dt class="text-sm font-medium text-slate-500">Tanggal</dt>
                <dd class="text-sm text-slate-900 sm:col-span-2">{{ \Carbon\Carbon::parse($surat->tanggal)->format('d/m/Y') }}</dd>
            </div>
            <div class="grid gap-1 py-3 sm:grid-cols-3">
                <dt class="text-sm font-medium text-slate-500">Tujuan</dt>
                <dd class="text-sm text-slate-900 sm:col-span-2">{{ $surat->tujuan ?? '-' }}</dd>
            </div>
            <div class="grid gap-1 py-3 sm:grid-cols-3">
                <dt class="text-sm font-medium text-slate-500">Kategori</dt>
                <dd class="text-sm sm:col-span-2">
                    @if ($surat->category)
                        <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">{{ $surat->category->nama }}</span>
                    @else
                        <span class="text-slate-400">Tanpa kategori</span>
                    @endif
                </dd>
            </div>
            <div class="grid gap-1 py-3 sm:grid-cols-3">
                <dt class="text-sm font-medium text-slate-500">Perihal</dt>
                <dd class="text-sm text-slate-900 sm:col-span-2">{{ $surat->perihal }}</dd>
            </div>
            <div class="grid gap-1 py-3 sm:grid-cols-3">
                <dt class="text-sm font-medium text-slate-500">Keterangan</dt>
                <dd class="text-sm text-slate-900 sm:col-span-2">{{ $surat->keterangan ?? '-' }}</dd>
            </div>
            <div class="grid gap-1 py-3 sm:grid-cols-3">
                <dt class="text-sm font-medium text-slate-500">Lampiran</dt>
                <dd class="text-sm sm:col-span-2">
                    @if ($surat->lampiran)
                        <a href="{{ asset('storage/' . $surat->lampiran) }}" target="_blank" rel="noopener"
                           class="font-medium text-emerald-600 hover:underline">Lihat lampiran</a>
                    @else
                        <span class="text-slate-400">Tidak ada lampiran</span>
                    @endif
                </dd>
            </div>
        </dl>
    </div>

    <a href="{{ route('surat-keluar.index') }}"
       class="mt-6 inline-block text-sm font-medium text-emerald-600 hover:underline">
        &larr; Kembali ke Daftar Surat Keluar
    </a>
@endsection