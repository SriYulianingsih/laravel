@extends('layouts.app')

@section('title', 'Daftar Santri')

@section('content')

<!-- Menampilkan notifikasi sukses jika ada -->
@if (session('success'))
    <div id="success-notification" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>

    <script>
        // Menambahkan delay 5 detik untuk menghilangkan notifikasi
        setTimeout(function() {
            var notification = document.getElementById('success-notification');
            if (notification) {
                notification.style.display = 'none';  // Menghilangkan notifikasi setelah 5 detik
            }
        }, 5000); // 5000 ms = 5 detik
    </script>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Daftar Santri</h1>
    <a href="{{ route('santri.create') }}" class="btn btn-primary">Tambah Santri</a>
</div>

<table class="table table-striped table-bordered">
    <thead class="text-center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if ($santris->count() > 0)
            @foreach ($santris as $key => $santri)
                <tr>
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td>{{ $santri->nama }}</td>
                    <td class="text-center">{{ $santri->umur }}</td>
                    <td class="text-center">
                        <span class="badge bg-{{ $santri->status == 'aktif' ? 'success' : 'secondary' }}">
                            {{ ucfirst($santri->status) }}
                        </span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <!-- Tombol Edit -->
                            <a href="{{ route('santri.edit', $santri->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fa fa-edit"></i>
                            </a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('santri.destroy', $santri->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                    <i class="fa fa-trash-alt"></i> 
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">Tidak ada data santri.</td>
            </tr>
        @endif
    </tbody>
</table>

@endsection
