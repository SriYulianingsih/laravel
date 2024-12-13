@extends('layouts.app')

@section('title', 'Edit Santri')

@section('content')
    <h1>Edit Santri</h1>
    <form action="{{ route('santri.update', $santri->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $santri->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" id="umur" value="{{ $santri->umur }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="aktif" {{ $santri->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ $santri->status === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
