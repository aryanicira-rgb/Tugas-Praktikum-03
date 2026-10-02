<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $alamat = $request->input('alamat');

        return view('hasil', compact('nama', 'umur', 'alamat'));
    }

    public function formBanjir()
    {
        return view('lapor_banjir');
    }

    public function kirimBanjir(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi_air = $request->input('tinggi_air');

        return view('konfirmasi_banjir', compact('nama', 'lokasi', 'tinggi_air'));
    }

    public function daftarBanjir()
    {
        $laporan = [
            ['nama' => 'Ira Aryani', 'lokasi' => 'Ciwastra', 'tinggi_air' => 25],
            ['nama' => 'Budi Santoso', 'lokasi' => 'Margahayu', 'tinggi_air' => 55],
            ['nama' => 'Siti Aminah', 'lokasi' => 'Baleendah', 'tinggi_air' => 85],
        ];

        return view('banjir.daftar', compact('laporan'));
    }

    public function formBanjirBlade()
    {
        return view('banjir.form');
    }

    public function kirimBanjirBlade(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi_air = $request->input('tinggi_air');

        return view('banjir.konfirmasi', compact('nama', 'lokasi', 'tinggi_air'));
    }
}