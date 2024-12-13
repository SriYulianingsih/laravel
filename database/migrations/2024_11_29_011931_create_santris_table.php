<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrisTable extends Migration
{
    // Menjalankan migrasi untuk membuat tabel 'santris'
    public function up()
    {
        Schema::create('santris', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom ID (auto increment)
            $table->string('nama'); // Menambahkan kolom 'nama' untuk nama santri
            $table->integer('umur'); // Menambahkan kolom 'umur' untuk umur santri
            $table->string('status'); // Menambahkan kolom 'status' untuk status santri ('Aktif' atau 'Nonaktif')
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at'
        });
    }

    // Membatalkan migrasi dan menghapus tabel 'santris'
    public function down()
    {
        Schema::dropIfExists('santris');
    }
}
