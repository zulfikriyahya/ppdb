# Admisi MTs Negeri 1 Pandeglang

Sebuah aplikasi berbasis web untuk proses penerimaan siswa baru di MTs Negeri 1 Pandeglang, dibangun menggunakan framework Laravel 12.

## Fitur

- Pendaftaran online untuk calon siswa
- Validasi data pendaftaran
- Pengelolaan data pendaftaran oleh admin
- Pengiriman notifikasi email
- Laporan dan statistik pendaftaran

## Persyaratan

- PHP >= 8.3
- Composer
- MySQL
- Web server (Apache, Nginx, dll.)

## Instalasi

1. Clone repositori ini:
    ```bash
    git clone https://github.com/zulfikriyahya/admisi.git
    ```

2. Masuk ke direktori proyek:
    ```bash
    cd admisi
    ```

3. Install dependencies menggunakan Composer:
    ```bash
    composer install
    ```

4. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```

5. Generate application key:
    ```bash
    php artisan key:generate
    ```

6. Migrasi dan seeder database:
    ```bash
    php artisan migrate --seed
    ```

7. Jalankan aplikasi:
    ```bash
    php artisan serve
    ```

Akses aplikasi melalui [http://localhost:8000](http://localhost:8000).

## Kontribusi

Silakan baca panduan kontribusi kami [CONTRIBUTING.md](CONTRIBUTING.md) untuk informasi lebih lanjut tentang cara berkontribusi ke proyek ini.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Silakan lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.
