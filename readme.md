# testbinar

Penulis : Anom Bhayu Maharsi (anombhayu.maharsi@gmail.com)

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
  
#### Menjalankan Aplikasi
  - ```> php artisan serve```

#### Tangkapan layar Postman
  
  ##### Authentication
  1. Login
  2. Sign up
  
  ##### CRUD v1
  3. Show data
  4. Show data by ID
  5. Create data
  6. Update data
  7. Delete data by ID
  
  ##### Testing API v2
  8. Show data



