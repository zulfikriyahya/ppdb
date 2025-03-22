# PPDB MTs Negeri 1 Pandeglang

Sebuah aplikasi berbasis web untuk proses penerimaan siswa baru di MTs Negeri 1 Pandeglang, dibangun menggunakan framework Laravel 12 (FilamentPHP).

## Fitur

- Pendaftaran online untuk calon siswa
- Validasi data pendaftaran
- Pengelolaan data pendaftaran oleh admin
- Pengiriman notifikasi email
- Laporan dan statistik pendaftaran

## Persyaratan

- PHP >= 8.2
- Composer
- Nodejs
- MySQL/SQLite
- Web server (Apache, Nginx, dll.)

## Instalasi

1. Clone repositori ini:
    ```bash
    git clone https://github.com/zulfikriyahya/ppdb.git
    ```

2. Masuk ke direktori proyek:
    ```bash
    cd ppdb
    ```

3. Install dependencies menggunakan Composer:
    ```bash
    composer install
    ```

4. Install node_modules dependencies:
    ```bash
    npm install && npm run build
    ```

5. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```

6. Generate application key:
    ```bash
    php artisan key:generate
    ```

7. Migrasi dan seeder database:
    ```bash
    php artisan migrate --seed
    ```

8. Jalankan tautan penyimpanan asset:
    ```bash
    php artisan storage:link
    ```

9. Jalankan shield super admin:
    ```bash
    php artisan shield:super-admin
    ```

10. Jalankan aplikasi:
    ```bash
    php artisan serve
    ```

11. Jalankan service:
    ```bash
    php artisan queue:work --daemon
    ```

Akses aplikasi melalui [http://localhost:8000](http://localhost:8000).

## Kontribusi

Silakan baca panduan kontribusi kami [CONTRIBUTING.md](CONTRIBUTING.md) untuk informasi lebih lanjut tentang cara berkontribusi ke proyek ini.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Silakan lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.
