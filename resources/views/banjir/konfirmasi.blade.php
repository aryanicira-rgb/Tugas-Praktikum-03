@extends('layouts.app')

@section('title', 'Konfirmasi Laporan Banjir')

@section('content')
    <div style="
        background-color: white;
        border: 2px solid #d90429;
        border-radius: 10px;
        padding: 30px;
        width: 400px;
    ">
        <x-alert>
            Laporan berhasil dikirim!
        </x-alert>

        <h2 style="color:#d90429; text-align:center;">Detail Laporan</h2>
        <p><strong>Nama Pelapor:</strong> {{ $nama }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $lokasi }}</p>
        <p><strong>Tinggi Genangan Air:</strong> {{ $tinggi_air }} cm</p>

        <a href="{{ route('banjir.form') }}" style="
            display:inline-block;
            margin-top:20px;
            color:white;
            background-color:#d90429;
            padding:10px 15px;
            border-radius:5px;
            text-decoration:none;
            text-align:center;
            width:100%;
            box-sizing:border-box;
        ">Buat Laporan Baru</a>
    </div>
@endsection