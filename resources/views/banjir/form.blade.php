@extends('layouts.app')

@section('title', 'Form Lapor Banjir')

@section('content')
    <div style="
        background-color: white;
        border: 2px solid #d90429;
        border-radius: 10px;
        padding: 30px;
        width: 400px;
    ">
        <h2 style="color:#d90429; text-align:center;">Form Pelaporan Banjir</h2>

        <form action="{{ route('banjir.kirim') }}" method="post">
            @csrf
            <label style="display:block; margin-top:15px; font-weight:bold; color:#7a0019;">Nama Pelapor:</label>
            <input type="text" name="nama" required style="width:100%; padding:8px; margin-top:5px; border:1px solid #d90429; border-radius:5px; box-sizing:border-box;">

            <label style="display:block; margin-top:15px; font-weight:bold; color:#7a0019;">Lokasi Kejadian (Kecamatan/Desa):</label>
            <input type="text" name="lokasi" required style="width:100%; padding:8px; margin-top:5px; border:1px solid #d90429; border-radius:5px; box-sizing:border-box;">

            <label style="display:block; margin-top:15px; font-weight:bold; color:#7a0019;">Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi_air" required style="width:100%; padding:8px; margin-top:5px; border:1px solid #d90429; border-radius:5px; box-sizing:border-box;">

            <button type="submit" style="margin-top:20px; width:100%; padding:10px; background-color:#d90429; color:white; border:none; border-radius:5px; font-size:16px; cursor:pointer;">Kirim Laporan</button>
        </form>
    </div>
@endsection