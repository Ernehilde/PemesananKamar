<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation
Untuk Menjalankan Laravel diperlukan program-program berikut :
- Composser
- Node.js
- NPM
- Mysql/Xampp
- PHP

1. Clone repo
```bash
git clone https://github.com/Ernehilde/PemesananKamar
```
2. Masuk ke Folder
```bash
cd PemesananKamar
```
3. Install Paket Composser
```bash
composer install
```
4. Install Paket NPM
```bash
npm install
```
5. buat file .env
```bash
copy .env.example .env
```
6. Generate Key aplikasi 
```bash
php artisan key:generate
```
7. migrate Database
```bash
php artisan migrate
```
8. Jalankan Program (Buka 2 Terminal)
Jalankan run dev untuk menjalankan css tailwind
```bash
npm run dev
```
dan di Terminal yang 1 lagi jalankan artisan serve untuk menajalankan file laravel
```bash
php artisan serve
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
