@extends('layouts.app')

@section('title', 'Halaman Surat Masuk')

@section('content')
    <h1>Halaman Surat Masuk</h1>

    {{-- DIUBAH: link tambah hanya untuk yang lolos Gate manage-letters (petugas) --}}
    @can('manage-letters')
        <a href="{{ route('surat-masuk.create') }}">+ Tambah Surat</a>
    @endcan

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal Surat</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($suratMasuk as $surat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $surat->tanggal }}</td>
                    <td>{{ $surat->pengirim }}</td>
                    <td>{{ $surat->perihal }}</td>
                    <td>
                        {{-- Detail tetap tampil untuk semua pengguna yang login --}}
                        <a href="{{ route('surat-masuk.show', $surat->id) }}">Detail</a>

                        {{-- DIUBAH: Edit dan Hapus dibungkus @can --}}
                        @can('manage-letters')
                            <a href="{{ route('surat-masuk.edit', $surat->id) }}">Edit</a>
                            <form action="{{ route('surat-masuk.destroy', $surat->id) }}"
                                  method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Hapus surat ini?')">Hapus</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">Belum ada surat masuk.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection