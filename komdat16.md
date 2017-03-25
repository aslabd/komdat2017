# Aplikasi Web COUCH CMS

## Sekilas Tentang

CouchCMS adalah sebuah Content Management System (CMS) yang membantu web designer dalam mengisi dan mengubah konten pada web.

## Requirement

- PHP 5.0.0 keatas
- MySQL 4.1.2 keatas
- Apache

## Instalasi

- Clone repositori Couch CMS dari github ke folder /var/www/html yang berisi file web Anda (semua file dalam ekstensi .php)
- Ganti nama file config.example.php menjadi config.php
- Ubah konfigurasi dengan mengubah nama basis data, nama user, password, dan host pada file config.php
- Buka link http://172.18.88.86/couch
- Sign up sebagai admin Couch CMS, lalu log in

## Otomatisasi

Skrip shell untuk otomatisasi instalasi dan konfigurasi.

## Cara Pemakaian

- Buat web yang kita inginkan
- Kasus: ingin membuat halaman about.php bisa diubah kontennya melalui CouchCMS
    1. Edit file about.php dengan menambahkan .... pada bagian atas file dan .... pada bagian bawah file.
    2. Pada bagian konten yang ingin diedit, apit kode konten tersebut diantara ... dan ...
    3. Load halaman about.php pada browser
    4. Selesai

## Pembahasan

- Pendapat anda tentang aplikasi web ini
	- pros: 
	- cons: 
- Bandingkan dengan aplikasi web kelompok lain yang sejenis

## Referensi

1. Dokumentasi Couch CMS (http://docs.couchcms.com)
2. Pengalaman