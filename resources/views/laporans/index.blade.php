@extends('layouts.app')

@section('title', 'Laporan Santri')

@section('content')
    <h1>Laporan Santri</h1>
    <a href="{{ route('laporans.pdf') }}" class="btn btn-danger">Export ke PDF</a>
    <a href="{{ route('laporans.excel') }}" class="btn btn-success">Export ke Excel</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santris as $santri)
                <tr>
                    <td>{{ $santri->id }}</td>
                    <td>{{ $santri->nama }}</td>
                    <td>{{ $santri->umur }}</td>
                    <td>{{ $santri->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
