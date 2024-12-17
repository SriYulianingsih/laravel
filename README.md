# Laravel Project Setup

## Prerequisites

Sebelum memulai, pastikan Anda telah menginstal:

- [PHP](https://www.php.net/downloads) (minimal versi 8.0, sesuai dengan kebutuhan proyek)
- [Composer](https://getcomposer.org/download/)
- [Git](https://git-scm.com/downloads)
- [Node.js](https://nodejs.org/) dan NPM (untuk asset management jika diperlukan)
- Database server (seperti MySQL atau PostgreSQL)
- [XAMPP](https://www.apachefriends.org/index.html) atau server lokal lain (opsional)

## Langkah-Langkah Instalasi

### 1. Clone Repository
Clone repository proyek ke komputer lokal Anda menggunakan perintah berikut:

```bash
git clone https://github.com/SriYulianingsih/laravel
```

### 2. Masuk ke Direktori Proyek
Pindah ke folder proyek yang baru saja di-clone:

```bash
cd <project-folder>
```

### 3. Install Dependensi PHP
Jalankan perintah berikut untuk menginstal semua dependensi Laravel yang didefinisikan di `composer.json`:

```bash
composer install
```

Jika Anda menggunakan XAMPP atau server lokal, pastikan ekstensi PHP seperti `ext-gd`, `ext-zip`, dan `ext-mbstring` sudah diaktifkan di file `php.ini`.

### 4. Salin File Konfigurasi .env
Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

### 5. Generate Application Key
Laravel memerlukan application key. Jalankan perintah berikut untuk menghasilkan key baru:

```bash
php artisan key:generate
```

### 6. Konfigurasi Database
Buka file `.env` di editor teks dan sesuaikan konfigurasi database sesuai lingkungan Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<database_name>
DB_USERNAME=<username>
DB_PASSWORD=<password>
```
Ganti `<database_name>`, `<username>`, dan `<password>` sesuai dengan pengaturan database lokal Anda.

### 7. Jalankan Migrasi Database
Jalankan perintah berikut untuk membuat tabel-tabel yang diperlukan di database:

```bash
php artisan migrate
```

Jika ada seeding data, jalankan juga:

```bash
php artisan db:seed
```

### 8. Install Dependensi Frontend (Opsional)
Jika proyek menggunakan frontend asset (CSS/JS), jalankan perintah berikut untuk menginstal dependensi:

```bash
npm install
```

Lalu, compile asset menggunakan:

```bash
npm run dev
```
Atau untuk production:

```bash
npm run build
```

### 9. Jalankan Server Laravel
Start server Laravel menggunakan perintah:

```bash
php artisan serve
```
Server akan berjalan pada `http://127.0.0.1:8000` secara default.

### 10. Akses Aplikasi
Buka browser dan akses aplikasi menggunakan URL berikut:

```
http://127.0.0.1:8000
```

---

## Troubleshooting

Jika Anda menghadapi masalah, pastikan:

1. Semua ekstensi PHP yang diperlukan diaktifkan.
2. Composer, NPM, dan PHP telah diinstal dengan benar.
3. Database terkonfigurasi dengan benar di file `.env`.
4. Jalankan `php artisan config:cache` jika perubahan pada file `.env` tidak diterapkan.

---

## License
Proyek ini menggunakan lisensi [MIT](LICENSE) (sesuaikan dengan lisensi proyek Anda).
