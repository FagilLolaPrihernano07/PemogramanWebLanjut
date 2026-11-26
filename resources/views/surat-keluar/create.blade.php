@extends('layouts.app')

@section('title', 'Tambah Surat Keluar')

@section('content')
    <div class="mb-6">
        <p class="text-sm text-slate-500">
            <a href="{{ route('dashboard') }}" class="hover:text-emerald-600">Dashboard</a> /
            <a href="{{ route('surat-keluar.index') }}" class="hover:text-emerald-600">Surat Keluar</a> / Tambah
        </p>
        <h1 class="mt-1 text-2xl font-bold text-slate-900">Tambah Surat Keluar</h1>
    </div>

    <form action="{{ route('surat-keluar.store') }}" method="POST" enctype="multipart/form-data"
          class="max-w-2xl space-y-5 rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8">
        @csrf

        <div class="grid gap-5 sm:grid-cols-2">
            <div>
                <label class="mb-1.5 block text-sm font-medium text-slate-700">Nomor Surat</label>
                <input name="nomor_surat" value="{{ old('nomor_surat') }}"
                    class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-4 focus:ring-emerald-500/15">
                @error('nomor_surat') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-1.5 block text-sm font-medium text-slate-700">Tanggal</label>
                <input type="date" name="tanggal" value="{{ old('tanggal') }}"
                    class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-4 focus:ring-emerald-500/15">
                @error('tanggal') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid gap-5 sm:grid-cols-2">
            <div>
                <label class="mb-1.5 block text-sm font-medium text-slate-700">Tujuan</label>
                <input name="tujuan" value="{{ old('tujuan') }}"
                    class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-4 focus:ring-emerald-500/15">
                @error('tujuan') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-1.5 block text-sm font-medium text-slate-700">Kategori</label>
                <select name="category_id"
                    class="w-full rounded-lg border border-slate-300 bg-white px-3.5 py-2.5 text-sm shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-4 focus:ring-emerald-500/15">
                    <option value="">-- Tanpa kategori --</option>
                    @foreach ($categories as $kategori)
                        <option value="{{ $kategori->id }}" @selected(old('category_id') == $kategori->id)>
                            {{ $kategori->nama }}
                        </option>
                    @endforeach
                </select>
                @error('category_id') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="mb-1.5 block text-sm font-medium text-slate-700">Perihal</label>
            <input name="perihal" value="{{ old('perihal') }}"
                class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-4 focus:ring-emerald-500/15">
            @error('perihal') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-1.5 block text-sm font-medium text-slate-700">Keterangan</label>
            <textarea name="keterangan" rows="3"
                class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-4 focus:ring-emerald-500/15">{{ old('keterangan') }}</textarea>
            @error('keterangan') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="mb-1.5 block text-sm font-medium text-slate-700">Lampiran</label>
            <input type="file" name="lampiran" accept=".pdf,.jpg,.jpeg,.png"
                class="block w-full cursor-pointer rounded-lg border border-slate-300 bg-white text-sm text-slate-600 file:mr-4 file:cursor-pointer file:border-0 file:bg-emerald-50 file:px-4 file:py-2.5 file:text-sm file:font-semibold file:text-emerald-700 hover:file:bg-emerald-100">
            <p class="mt-1.5 text-xs text-slate-500">PDF, JPG, atau PNG. Maksimal 2 MB.</p>
            @error('lampiran') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center gap-3 border-t border-slate-100 pt-5">
            <button type="submit"
                class="rounded-lg bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">
                Simpan
            </button>
            <a href="{{ route('surat-keluar.index') }}" class="text-sm font-medium text-slate-600 hover:underline">Batal</a>
        </div>
    </form>
@endsection