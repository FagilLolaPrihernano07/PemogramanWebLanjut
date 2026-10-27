@extends('layouts.app')

@section('title', 'Halaman Surat Keluar')

@section('content')

    <h1>Halaman Surat Keluar</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($suratkeluar as $surat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- Ubah dari {'nomor surat'} menjadi nomor_surat --}}
                    <td>{{ $surat->nomor_surat }}</td> 
                    <td>{{ $surat->tanggal }}</td>
                    <td>{{ $surat->perihal }}</td>
                    <td>
                        <a href="{{ route('surat-keluar.show', $surat->id) }}">
                            Detail
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    {{-- Sesuaikan colspan dengan jumlah kolom th (ada 5 kolom) --}}
                    <td colspan="5">
                        Belum ada data surat keluar.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection