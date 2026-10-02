@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <div>
        <h2 style="color:#d90429; text-align:center;">Daftar Laporan Banjir</h2>

        @forelse ($laporan as $item)
            @include('partials.laporan-card', ['item' => $item])
        @empty
            <p>Belum ada laporan banjir yang masuk.</p>
        @endforelse
    </div>
@endsection