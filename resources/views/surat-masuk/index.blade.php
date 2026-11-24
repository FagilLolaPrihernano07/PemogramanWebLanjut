@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')
    {{-- Judul halaman --}}
    <div class="mb-6 flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="text-sm text-slate-500">
                <a href="{{ route('dashboard') }}" class="hover:text-indigo-600">Dashboard</a> / Surat Masuk
            </p>
            <h1 class="mt-1 text-2xl font-bold text-slate-900">Surat Masuk</h1>
        </div>

        @can('manage-letters')
            <a href="{{ route('surat-masuk.create') }}"
               class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Tambah Surat
            </a>
        @endcan
    </div>

    @if (session('success'))
        <div class="mb-6 flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
            <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
        <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
            <h2 class="font-semibold text-slate-900">Daftar Surat</h2>
            <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700">
                {{ $suratMasuk->count() }} surat
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Nomor Surat</th>
                        <th class="px-6 py-3">Tanggal</th>
                        <th class="px-6 py-3">Pengirim</th>
                        <th class="px-6 py-3">Perihal</th>
                        <th class="px-6 py-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($suratMasuk as $surat)
                        <tr class="transition hover:bg-slate-50">
                            <td class="px-6 py-4 text-slate-400">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">
                                <span class="rounded-md bg-slate-100 px-2 py-1 font-mono text-xs font-medium text-slate-700">{{ $surat->nomor_surat }}</span>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-slate-600">{{ \Carbon\Carbon::parse($surat->tanggal)->format('d/m/Y') }}</td>
                            <td class="px-6 py-4 font-medium text-slate-900">{{ $surat->pengirim }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $surat->perihal }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('surat-masuk.show', $surat->id) }}"
                                       class="rounded-md border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:bg-slate-50">
                                        Detail
                                    </a>

                                    @can('manage-letters')
                                        <a href="{{ route('surat-masuk.edit', $surat->id) }}"
                                           class="rounded-md border border-amber-200 bg-amber-50 px-3 py-1.5 text-xs font-semibold text-amber-700 hover:bg-amber-100">
                                            Edit
                                        </a>
                                        <form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Hapus surat ini?')"
                                                class="rounded-md border border-red-200 bg-red-50 px-3 py-1.5 text-xs font-semibold text-red-700 hover:bg-red-100">
                                                Hapus
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-16 text-center">
                                <p class="font-medium text-slate-900">Belum ada surat masuk</p>
                                <p class="mt-1 text-sm text-slate-500">Data surat akan tampil di sini.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection