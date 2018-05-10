# Assessment test

Penulis : Anom Bhayu Maharsi (anombhayu.maharsi@gmail.com)

# No. 1
  ```
  Disebutkan seorang client membutuhkan layanan aplikasi antar makanan. Dan Anda diminta untuk membuat desain sistem dengan kriteria pelanggan hanya dilayani dengan mobile apps.
  - Desainlah stack backend dan micro service layanan tersebut beserta tools dan alasan mengapa memilih design dan tools tersebut.
  ```
  
  Jawab :
  
  ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/diagram.jpg)
  - Menggunakan lebih dari 1 database, guna memberi kemampuan untuk backup data ketika terjadi masalah pada database utama
  - Menggunakan *load balancer* guna mengatur traffic yang terjadi terhadap setiap *webservice* atau API pada sistem
  
# No. 2
  ```
  Bagaimana menangani keamanan dalam pengiriman data (backend dan mobile apps) pada sistem diatas.
  - Jelaskan solusi tersebut beserta alasannya.
  ```
  
  Jawab :
  
  - Melakukan enkripsi terhadap data-data sensitif kita mengirim data dari backend maupun frontend
  - Mengaktifkan fitur https / ssl saat melakukan komunikasi antar platform guna menjaga *privacy, integrity,* dan *identification* pada sebuah komunikasi

# No. 3
  ```
  Buatlah sebuah service RESTFul API berdasarkan dokumentasi apiary berikut https://testbinar.docs.apiary.io/. Boleh menggunakan bahasa apapun.
  a. Sertakan panduan cara instalasi tools, pengaturan database, penggunaan kode dan cara ujicoba kode dalam file Readme.md
  b. Sertakan tangkapan layar proses ujicoba API menggunakan postman.
  c. Kode yang baik adalah kode yang bisa dibaca dan dipakai oleh orang lain.
  ```
## testbinar
  Testbinar, adalah sebuah aplikasi *RESTFul API* penerapan dari https://testbinar.docs.apiary.io/ 
  <br>Aplikasi ini dibangun menggunakan bahasa pemrograman PHP menggunakan framework [Laravel 5.4](https://laravel.com/docs/5.4) 

## Instalasi Program

#### Kebutuhan sistem
  - PHP >= 5.6.4
  - [Composer](https://getcomposer.org/)
  - MySQL

#### Instalasi database
  - Buatlah sebuah MySQL database dengan nama `binar` 
  
#### Perintah instalasi
  1. ```> git clone https://github.com/anombhayu/testbinar.git```
  2. ```> cd testbinar```
  3. ```> composer install```
  4. ```> cp .env.example .env```
  5. Konfigurasi database pada file `.env`
     ```
     DB_CONNECTION=mysql
     DB_HOST={{ your_host }}
     DB_PORT={{ your_port }}
     DB_DATABASE=binar
     DB_USERNAME={{ your_db_username }}
     DB_PASSWORD={{ your_db_password }}
     ```
  6. ```> php artisan key:generate```
  7. ```> php artisan jwt:secret```
  8. ```> php artisan migrate```
  9. ```> php artisan db:seed```
  
## Menjalankan Aplikasi
  - ```> php artisan serve```

## Tangkapan layar Postman
  
  #### Authentication
  1. Login
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/login.png)
  2. Sign up
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/signup.png)
  
  #### CRUD v1
  3. Show data
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/showdata.png)
  4. Show data by ID
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/showdatabyid.png)
  5. Create data
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/createdata.png)
  6. Update data
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/updatedata.png)
  7. Delete data by ID
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/deletedatabyid.png)
  
  #### Testing API v2
  8. Show data
     ![alt text](https://raw.githubusercontent.com/anombhayu/testbinar/master/docs/v2.png)

# No. 4
  ```
  Dari dokumen https://testbinar.docs.apiary.io/, menurut anda, apakah ada desian API yang kurang maupun keliru? Jika ada, tuliskan kekurangan-kekurangan desain tersebut dan bagaimana seharusnya dokumentasi itu ditulis.
  ```
  
  Jawab :
  
  - Ketentuan status parameter API kurang dijelaskan, seperti tipe data dan keharusan sebuah parameter untuk membentuk sebuah request 
