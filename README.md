# INTERFACE UNTUK PURCHASE ORDER DAN PURCHASE REQUISITION

Minimum System Requirement

-   PHP 8.2
-   Composer 2.x
-   Web Server (Apache, Nginx)
-   Local Web Server (XAMPP for Cross Platform / MAMP for Mac / LAMPP for Linux / Laragon for Windows)
-   Database (MySQL ≥ 5.7 / PostgreSQL ≥ 10 / SQLite ≥ 3.26)
-   Node.js dan NPM (optional)

Yang digunakan developer

-   PHP 8.3.2
-   Composer 2.9.2
-   Web Server (Nginx 1.27.2)
-   Local Web Server (MAMP)
-   Database (MySQL 5.2.1)
-   Node.js v22.16.0 dan npm 10.9.2

## CARA CLONING DARI GITHUB

1. Pastikan sudah install Git
2. Buka Github
3. Search Akun `M-Ainurridho`
4. Cari repository `po-dan-pr`
5. Pilih tombol CODE -> HTTPS -> Salin
6. Buka CLI (CMD, Terminal, Git Bash)
7. Pilih mau ditaruh dimana filenya, contoh dihalaman Desktop
8. Ketikan command `git clone https://github.com/M-Ainurridho/po-and-pr.git`

## UPDATE DATA REPO TERBARU TANPA CLONING ULANG

1. Pastikan sudah ada data repo `po-dan-pr`
2. Buka CLI dan ketikan command `git pull`
3. Update dependency nya lagi dengan ketik command `composer update`

## CARA INSTALL

1. Kalo sudah clone, silahkan masuk ke folder project dengan mengetikan command `cd nama_folder`
2. Ketik command `composer update` atau `composer install`
3. Ketik juga command `npm install` alias `npm i`
4. Copy file .env.example, ubah namanya jadi .env
5. Lalu hapus tanda `#` dan ubah pengaturan .env menjadi seperti dibawah:
    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1
    - DB_PORT=3306
    - DB_DATABASE=po_and_pr
    - DB_USERNAME=root
    - DB_PASSWORD=
6. Balik ke CLI di folder projectnya Lalu ketikan command `php artisan key:generate && php artisan config:clear`
7. Masuk ke phpmyadmin untuk membuat db baru dengan nama 'po_and_pr'
8. Kalo sudah buat db baru, buka lagi CLI di folder projectnya dan ketik `php artisan migrate`
9. Selesai, sekarang bisa di running aplikasinya

## CARA RUNNING APP

1. Buka CLI dan ketikan command `npm run dev` untuk menjalankan TailwindCSS
2. Buka CLI baru dan ketikan command `php artisan ser` untuk menjalankan App/Project
3. Aplikasi akan runnning di default localhost `127.0.0.1:8000`:
