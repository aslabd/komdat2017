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

## Cara Pemakaian
- Edit file seluruh file yang ingin dapat diedit dengan menambahkan kode berikut:
```php
<?php require_once( 'couch/cms.php' ); ?>
```
pada bagian atas file dan kode berikut:
```php
<?php COUCH::invoke(); ?>
```
pada bagian bawah file about.php.
- Kasus: ingin membuat halaman about.php bisa diubah kontennya melalui CouchCMS
    1. Pada bagian konten yang ingin diedit, apit kode konten tersebut diantara ... dan ...
    2. Reload halaman about.php pada browser agar konfigurasi aktif.

## Pembahasan

CouchCMS sangat mudah digunakan untuk membuat web. Hanya perlu meng-include file couch/cms.php, anda dapat mengedit kontennya melalui dashboard CouchCMS.

## Referensi

1. Dokumentasi Couch CMS (http://docs.couchcms.com)
2. Pengalaman