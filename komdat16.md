# COUCH CMS

## Sekilas Tentang CouchCMS

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
- Edit file seluruh file yang ingin dapat diedit menggunakan CouchCMS dengan menambahkan kode berikut:
```
<?php require_once( 'couch/cms.php' ); ?>
```
pada bagian atas file dan kode berikut:
```
<?php COUCH::invoke(); ?>
```
pada bagian bawah file.
- Reload seluruh halaman yang telah diedit untuk mengaktifkannya


## Pembahasan

CouchCMS sangat mudah digunakan untuk membuat web. Hanya perlu meng-include file couch/cms.php, Anda dapat mengedit kontennya melalui dashboard CouchCMS.
Dalam membuat web yang menggunakan CouchCMS diperlukan pengetahuan mengenai XML, karena CouchCMS memiliki tag-tag sendiri. Hampir tidak perlu pengetahuan mengenai PHP.

## Referensi

1. Dokumentasi Couch CMS (http://docs.couchcms.com)
2. Pengalaman