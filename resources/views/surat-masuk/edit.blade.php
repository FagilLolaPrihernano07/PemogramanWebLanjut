@extends('layouts.app')

@section('title', 'Edit Surat Masuk')

@section('content')
    <h1 class="mb-6 text-2xl font-bold">Edit Surat Masuk</h1>

    <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST"
          class="max-w-xl space-y-4 rounded-lg bg-white p-6 shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="mb-1 block text-sm font-medium">Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('nomor_surat') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-1 block text-sm font-medium">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal) }}"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('tanggal') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-1 block text-sm font-medium">Pengirim</label>
            <input name="pengirim" value="{{ old('pengirim', $surat->pengirim) }}"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('pengirim') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-1 block text-sm font-medium">Perihal</label>
            <input name="perihal" value="{{ old('perihal', $surat->perihal) }}"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('perihal') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-1 block text-sm font-medium">Keterangan</label>
            <textarea name="keterangan" rows="3"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">{{ old('keterangan', $surat->keterangan) }}</textarea>
            @error('keterangan') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Simpan Perubahan</button>
            <a href="{{ route('surat-masuk.index') }}" class="text-sm text-slate-600 hover:underline">Batal</a>
        </div>
    </form>
@endsection