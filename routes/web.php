<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\LaporanController;

// Route::get('/', function () {
//     return view('welcome');
// })
Route::get('/', [LaporanController::class, 'index'])->name('laporans.index');
Route::get('/laporans/pdf', [LaporanController::class, 'exportPdf'])->name('laporans.pdf');
Route::get('/laporans/excel', [LaporanController::class, 'exportExcel'])->name('laporans.excel');
// Route::get('/laporans/excel', function () {
//     return Excel::download(new UsersExport, 'users.xlsx');
// });
// Task Routes
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Rute untuk halaman utama santri (menampilkan daftar santri)
Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');

// Rute untuk halaman pembuatan santri baru
Route::get('/santri/create', [SantriController::class, 'create'])->name('santri.create');

// Rute untuk menyimpan santri baru ke database
Route::post('/santri', [SantriController::class, 'store'])->name('santri.store');

// Rute untuk halaman edit data santri
Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('santri.edit');

// Rute untuk update data santri
Route::put('/santri/{id}', [SantriController::class, 'update'])->name('santri.update');

// Rute untuk menghapus data santri
Route::delete('/santri/{id}', [SantriController::class, 'destroy'])->name('santri.destroy');
