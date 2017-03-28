# COUCH CMS

## Sekilas Tentang CouchCMS

CouchCMS adalah sebuah Content Management System (CMS) yang membantu web designer dalam mengisi dan mengubah konten pada web.

## Requirement

- PHP 5.0.0 keatas
- MySQL 4.1.2 keatas
- Apache

## Instalasi

- Clone repositori Couch CMS dari github ke folder /var/www/html yang berisi file web Anda (semua file dalam ekstensi .php).
- Ubah nama file config.example.php menjadi config.php.
- Ubah konfigurasi dengan mengubah nama basis data, nama user, password, dan host pada file config.php.
- Buka link http://86.apps.cs.ipb.ac.id/couch.
- Sign up sebagai admin Couch CMS, lalu log in

## Cara Pemakaian
- Apabila masih memiliki halaman web berekstensi .html/.htm, ubahlah menjadi ekstensi.php (karena CouchCMS bekerja di PHP)
- Edit file seluruh file yang ingin dapat diedit menggunakan CouchCMS dengan menambahkan kode berikut:
```
<?php require_once( 'couch/cms.php' ); ?>
```
pada bagian atas file dan kode berikut:
```
<?php COUCH::invoke(); ?>
```
pada bagian bawah file.
- Reload seluruh halaman yang telah diedit untuk mengaktifkannya.
- Kasus: ingin membuat konten di halaman about.php dapat diedit di dashboard CouchCMS
    1. Bukalah file about.php menggunakan editor.
    2. Apitlah kode html yang ingin bisa diedit dengan kode berikut:
    ```
    <cms:editable name='main_content' type='richtext'> original content </cms:editable>
    ```
    3. Reload halaman about.php melalui browser.
    Contoh: 
    Saya ingin kolom sebelah kiri dan kanan di halaman berikut yang dapat diedit.
    Maka, saya akan buka file about.php, mencari baris yang bersangkutan.
    Lalu saya akan menambahkan kode pada poin nomor 2 seperti dibawah.
    Saya reload halaman about.php di browser, lalu kemudian pergi ke dashboard. Disana akan muncul dua editor.
    Selesai.

## Pembahasan

CouchCMS sangat mudah digunakan untuk membuat web. Hanya perlu meng-include file couch/cms.php, Anda dapat mengedit kontennya melalui dashboard CouchCMS.
Dalam membuat web yang menggunakan CouchCMS diperlukan pengetahuan mengenai XML, karena CouchCMS memiliki tag-tag sendiri. Hampir tidak perlu pengetahuan mengenai PHP.

## Referensi

1. Dokumentasi Couch CMS (http://docs.couchcms.com)
2. Pengalaman