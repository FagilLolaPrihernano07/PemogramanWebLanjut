@extends('layouts.app')

@section('title', 'Detail Surat Masuk')

@section('content')
    <h1 class="mb-6 text-2xl font-bold">Detail Surat Masuk</h1>

    @if ($surat)
        <dl class="max-w-xl space-y-3 rounded-lg bg-white p-6 shadow">
            <div><dt class="text-sm font-semibold text-slate-500">Nomor Surat</dt><dd>{{ $surat->nomor_surat }}</dd></div>
            <div><dt class="text-sm font-semibold text-slate-500">Tanggal</dt><dd>{{ $surat->tanggal }}</dd></div>
            <div><dt class="text-sm font-semibold text-slate-500">Pengirim</dt><dd>{{ $surat->pengirim }}</dd></div>
            <div><dt class="text-sm font-semibold text-slate-500">Perihal</dt><dd>{{ $surat->perihal }}</dd></div>
            <div><dt class="text-sm font-semibold text-slate-500">Keterangan</dt><dd>{{ $surat->keterangan ?? '-' }}</dd></div>
        </dl>
    @else
        <p class="text-slate-500">Surat masuk tidak ditemukan.</p>
    @endif

    <a href="{{ route('surat-masuk.index') }}"
       class="mt-6 inline-block text-sm font-medium text-indigo-600 hover:underline">
        Kembali ke Daftar Surat Masuk
    </a>
@endsection