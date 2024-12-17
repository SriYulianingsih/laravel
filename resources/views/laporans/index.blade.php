@extends('layouts.app')

@section('title', 'Laporan Santri')

@section('content')
<div class="container">
  <div class="row mb-3">
    <div class="col-md-12">
      <h1>Laporan Santri</h1>
      <div class="d-flex gap-2">
        <a href="{{ route('laporans.pdf') }}" class="btn btn-danger">Export ke PDF</a>
        <a href="{{ route('laporans.excel') }}" class="btn btn-success">Export ke Excel</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($santris as $santri)
          <tr>
            <th scope="row">{{ $santri->id }}</th>
            <td>{{ $santri->nama }}</td>
            <td>{{ $santri->umur }}</td>
            <td>{{ $santri->status }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection