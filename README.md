# Dokumentasi Proyek: WEBSITE SEKOLAH

## Pendahuluan

Proyek "WEBSITE SEKOLAH" ini adalah aplikasi web berbasis Laravel yang dirancang untuk kebutuhan sekolah. Aplikasi ini menyediakan platform lengkap untuk menampilkan informasi publik sekolah, seperti berita/artikel, galeri foto, daftar prestasi siswa, dan struktur organisasi. Selain itu, terdapat dashboard admin yang memungkinkan pengelolaan konten-konten tersebut secara dinamis.

Proyek ini dibangun menggunakan:

-   **Framework:** Laravel
-   **Bahasa Pemrograman:** PHP
-   **Database:** MySQL (umumnya digunakan dengan Laravel)
-   **Frontend:** Blade Templating, Bootstrap 5, JavaScript (Axios, Summernote, AOS)
-   **Build Tool Frontend:** Vite

## Fitur Utama

### Tampilan Publik

-   **Halaman Beranda:** Menampilkan ringkasan informasi sekolah, berita terbaru, galeri, dan ajakan bergabung.
-   **Profil Sekolah:** Memuat sejarah, visi, misi, dan struktur organisasi sekolah.
-   **Berita/Blog:** Daftar artikel berita dengan detail lengkap.
-   **Prestasi:** Menampilkan daftar prestasi siswa/tim yang dapat difilter berdasarkan kategori.
-   **Galeri:** Kumpulan foto kegiatan dan fasilitas sekolah.

### Dashboard Admin

-   **Manajemen Berita/Blog:** CRUD (Create, Read, Update, Delete) artikel berita dengan dukungan gambar dan editor teks kaya (Summernote).
-   **Manajemen Prestasi:** CRUD data prestasi, termasuk nama prestasi, nama siswa/tim, tingkatan, tahun, kategori, dan deskripsi.
-   **Manajemen Galeri:** CRUD gambar galeri dengan judul dan deskripsi opsional.
-   **Manajemen Struktur Organisasi:** CRUD data anggota staf/guru yang membentuk struktur organisasi sekolah.
-   **Autentikasi:** Sistem login untuk akses ke dashboard admin.

## Instalasi

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

### 1\. Persyaratan Sistem

Pastikan Anda telah menginstal perangkat lunak berikut:

-   **PHP:** Versi 8.1 atau lebih tinggi (Direkomendasikan PHP 8.2+ untuk Laravel 10)
-   **Composer:** Manajer dependensi PHP
-   **Node.js & npm:** Untuk mengelola dependensi frontend dan kompilasi aset
-   **Database:** Server database seperti MySQL atau MariaDB.

### 2\. Kloning Repositori

```bash
git clone [URL_REPOSITORI_ANDA]
cd laravel-sekolah # Masuk ke direktori proyek
```

### 3\. Instal Dependensi

Instal dependensi PHP menggunakan Composer:

```bash
composer install
```

Instal dependensi JavaScript menggunakan npm:

```bash
npm install
```

### 4\. Konfigurasi Lingkungan

1.  **Buat file `.env`**: Salin file `.env.example` dan ubah namanya menjadi `.env`.
    ```bash
    cp .env.example .env
    ```
2.  **Hasilkan Kunci Aplikasi**: Laravel membutuhkan kunci aplikasi yang unik.
    ```bash
    php artisan key:generate
    ```
3.  **Konfigurasi Database**: Buka file `.env` dan atur detail koneksi database Anda:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda # Ganti dengan nama database yang Anda buat
    DB_USERNAME=username_database_anda # Ganti dengan username database Anda
    DB_PASSWORD=password_database_anda # Ganti dengan password database Anda
    ```
    Pastikan Anda telah membuat database kosong dengan nama yang sesuai di server database Anda.

### 5\. Migrasi & Seeding Database

Jalankan migrasi database untuk membuat tabel yang diperlukan:

```bash
php artisan migrate
```

Untuk mengisi database dengan data awal (termasuk akun admin default), jalankan seeder:

```bash
php artisan db:seed
```

### 6\. Tautan Penyimpanan (Storage Link)

Buat symbolic link agar file-file yang diunggah (gambar, dll.) dapat diakses dari web publik:

```bash
php artisan storage:link
```

### 7\. Kompilasi Aset Frontend

Kompilasi file CSS dan JavaScript Anda:

```bash
npm run dev
# Atau untuk produksi:
# npm run build
```

### 8\. Jalankan Aplikasi

Mulai server pengembangan Laravel:

```bash
php artisan serve
```

Aplikasi Anda sekarang akan dapat diakses di `http://127.0.0.1:8000` (atau port lain yang ditunjukkan di terminal).

### Kredensial Login Admin

Jika Anda menjalankan `php artisan db:seed`, Anda dapat masuk ke dashboard admin (`http://127.0.0.1:8000/login`) dengan kredensial berikut:

-   **Email:** `irdan@gmail.com`
-   **Password:** `12345678`

---
