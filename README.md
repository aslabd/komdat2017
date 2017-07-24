# COUCH CMS

## Sekilas Tentang CouchCMS

CouchCMS adalah sebuah Content Management System (CMS) yang membantu web designer dalam mendesain, membuat, mengisi, dan mengubah konten pada web.

## Requirement

- PHP 5.0.0 keatas
- MySQL 4.1.2 keatas
- Apache
```
sudo apt install apache2
sudo apt install mysql-server
sudo apt install php
sudo apt install libapache2-mod-php
sudo apt install php-mysql
sudo apt install php-gd php-mcrypt php-mbstring php-xml php-ssh2
sudo service apache2 restart
```

## Instalasi

- Clone repositori Couch CMS dari github ke folder yang berisi file web Anda (semua file dalam ekstensi .php).

```
git clone https://github.com/CouchCMS/CouchCMS.git
```

- Ubah nama file config.example.php menjadi config.php.
- Ubah konfigurasi dengan mengubah nama basis data, nama user, password, dan host pada file config.php.

<br><img src="http://docs.couchcms.com/assets/img/contents/portfolio-site-3.png" alt="komdat1" border="0"><br>

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

<br><img src="https://preview.ibb.co/bwOgBF/komdat1.jpg" alt="komdat1" border="0"><br>
<br><img src="https://image.ibb.co/c533Qa/komdat2.jpg" alt="komdat2" border="0"><br>
pada bagian bawah file.
- Reload seluruh halaman yang telah diedit untuk mengaktifkannya.
- Pada dashboard akan tampil seperti ini. Masih belum terdapat konten yang dapat diedit.
<br><img src="https://image.ibb.co/gaweyv/komdat3.jpg" alt="komdat3" border="0"><br>
- Kasus: ingin membuat konten di halaman about.php dapat diedit di dashboard CouchCMS
    1. Bukalah file about.php menggunakan editor.
    2. Apitlah kode html yang ingin bisa diedit dengan kode berikut:
    ```
    <cms:editable name='main_content' type='richtext'> original content </cms:editable>
    ```
    3. Reload halaman about.php melalui browser.
    Contoh: 
    Saya ingin kolom sebelah kiri dan kanan di halaman berikut yang dapat diedit.
    <br><img src="https://preview.ibb.co/gsuA5a/komdat4.jpg" alt="komdat4" border="0"><br>
    Maka, saya akan buka file about.php, mencari baris yang bersangkutan.
    <br><img src="https://preview.ibb.co/ie9MBF/komdat5.jpg" alt="komdat5" border="0"><br>
    Lalu saya akan menambahkan kode pada poin nomor 2 seperti dibawah.
    <br><img src="https://preview.ibb.co/iaM7ka/komdat6.jpg" alt="komdat6" border="0"><br>
    Saya reload halaman about.php di browser, lalu kemudian pergi ke dashboard. Disana akan muncul dua editor.Selesai.
    <br><img src="https://image.ibb.co/mJMjWF/komdat7.jpg" alt="komdat7" border="0"><br>

## Pembahasan

CouchCMS sangat mudah digunakan untuk membuat web. Hanya perlu meng-include file couch/cms.php, Anda dapat mengedit kontennya melalui dashboard CouchCMS.
Dalam membuat web yang menggunakan CouchCMS diperlukan pengetahuan mengenai XML, karena CouchCMS memiliki tag-tag sendiri. Hampir tidak perlu pengetahuan mengenai PHP.



## Referensi

1. Dokumentasi Couch CMS (http://docs.couchcms.com)
2. Pengalaman
