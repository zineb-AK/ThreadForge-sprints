```md
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ThreadForge API

## About

ThreadForge API is a RESTful API developed with **Laravel 12** and secured using **Laravel Sanctum**. It allows authenticated users to manage their own blueprints through CRUD operations.

## Technologies

- Laravel 12
- PHP 8.2
- MySQL
- Laravel Sanctum
- Postman

## API Endpoints

### Authentication

- POST `/api/register`
- POST `/api/login`
- POST `/api/logout`

### Blueprints

- GET `/api/blueprints`
- GET `/api/blueprints/{id}`
- POST `/api/blueprints`
- PUT `/api/blueprints/{id}`
- DELETE `/api/blueprints/{id}`

---

# Postman Tests

## Login

Successful authentication using Laravel Sanctum.

<img width="1125" height="835" alt="Capture d&#39;écran 2026-06-29 151016" src="https://github.com/user-attachments/assets/4142e73d-60d7-4535-9b07-7b9ed12f5167" />

---

## Get Blueprints

Retrieving all blueprints associated with the authenticated user.

<img width="1066" height="855" alt="Capture d&#39;écran 2026-06-29 151726" src="https://github.com/user-attachments/assets/70acbc76-8d3a-4f68-a74c-69b9a78e4dab" />
```
