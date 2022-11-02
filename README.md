<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Job Board - assignment for Epicode
![Main Dashboard](https://i.imgur.com/OXomJH2.jpg)

Job Board to portal umożliwiający m.in przeszukiwanie oraz aplikowanie na oferty pracy. Funkcjonalność to auth, załączanie oraz resume w bazie danych, aplikowanie na oferty. Wprowadziłem walidację danych.
![Validation](https://i.imgur.com/EUv2Mb4.jpg)
![Validation](https://i.imgur.com/JSsdAu7.jpg)
### Requirements
Xampp (Apache, MySQL)
PHP 8
Node

### Installing
1. Create a new folder `jobboard` and place in `xampp/htdocs/`.
2. Download and unzip the file into `jobboard` dir.
3. Run
```bash 
npm install
npm run dev
php artisan migrate
php artisan db:seed
```
(Optional) 4. If you're on Windows add this to `httpd.vhosts.conf`
```
<VirtualHost job-board.com:80>
    DocumentRoot "C:/xampp/htdocs/job-board/public"
	DirectoryIndex index.php
    ServerName job-board.com
	<Directory  "C:/xampp/htdocs/job-board">
	Options All
	AllowOverride All
	Require all granted  
	</Directory>
</VirtualHost>
```
And below to `hosts`
```
127.0.0.1 job-board.com
```
5. Run `artisan serve` if skipped 4th step.
6. Edit `.env` file to configure with your database credentials.


## Spełnione requirements
Struktura, relacje oraz zbudowane modele odpowiadają tym w wytycznych.

"należy wziąć pod uwagę, że na jedną ofertę może aplikować wielu kandydatów, oraz
fakt, że jeden kandydat może aplikować na kilka ofert" - zastosowano odpowiednią relację

## Niespełnione requirements

Wyszukiwarka - doczytałem dopiero pod przy pisaniu README pod koniec :p


