@extends('layouts.app')

@section('title', 'Tambah Santri')

@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h3 class="card-title">Tambah Santri</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('santri.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama santri" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control" id="umur" placeholder="Masukkan umur santri" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
