# ThreadForge API

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="350" alt="Laravel Logo">
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-12-red" alt="Laravel">
    <img src="https://img.shields.io/badge/PHP-8.2-blue" alt="PHP">
    <img src="https://img.shields.io/badge/MySQL-Database-orange" alt="MySQL">
    <img src="https://img.shields.io/badge/API-REST-success" alt="REST API">
    <img src="https://img.shields.io/badge/Auth-Sanctum-green" alt="Sanctum">
</p>

---

# About the Project

**ThreadForge API** is a RESTful API built with **Laravel 12** that allows authenticated users to manage their own **Blueprints**.

Each blueprint contains customizable parameters used to generate social media content.

---

# Features

* User Registration
* User Login & Logout
* Laravel Sanctum Authentication
* CRUD Operations for Blueprints
* API Resources
* Form Request Validation
* Protected Routes

---

# Tech Stack

* Laravel 12
* PHP 8.2
* MySQL
* Laravel Sanctum
* Postman

---

# Installation

Clone the repository

```bash
git clone https://github.com/your-username/threadforge-api.git
```

Install dependencies

```bash
composer install
```

Copy environment file

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure your database inside `.env`

Run migrations

```bash
php artisan migrate
```

Start the server

```bash
php artisan serve
```

---

# Authentication

The API uses **Laravel Sanctum**.

After login, copy the generated token and use it in Postman.

Authorization

```
Bearer YOUR_TOKEN
```

---

# API Endpoints

## Authentication

| Method | Endpoint      | Description         |
| ------ | ------------- | ------------------- |
| POST   | /api/register | Register a new user |
| POST   | /api/login    | Login               |
| POST   | /api/logout   | Logout              |

---

## Blueprints

| Method | Endpoint             |
| ------ | -------------------- |
| GET    | /api/blueprints      |
| GET    | /api/blueprints/{id} |
| POST   | /api/blueprints      |
| PUT    | /api/blueprints/{id} |
| DELETE | /api/blueprints/{id} |

---

# Database

## Users

* id
* name
* email
* password

## Blueprints

* id
* name
* tone
* max_hachtags
* max_caracteres
* user_id

---

# Project Structure

```
app/
 ├── Http/
 │     ├── Controllers/
 │     │      ├── AuthController.php
 │     │      └── BlueprintController.php
 │     ├── Requests/
 │     │      ├── LoginRequest.php
 │     │      └── RegisterRequest.php
 │     └── Resources/
 │            ├── UserResource.php
 │            └── BlueprintResource.php
 ├── Models/
 │      ├── User.php
 │      └── Bleuprint.php
```

---

# Postman Tests

## Register

Ajoute une capture d'écran ici :

```md
![Register](images/register.png)
```

---

## Login

Ajoute une capture d'écran ici :

```md
c:\Users\ridak\OneDrive\Images\Captures d’écran\Capture d'écran 2026-06-29 151016.png
```

---

## Get All Blueprints

Ajoute une capture d'écran ici :

```md
![alt text](image-3.png)```

---

## Show Blueprint

Ajoute une capture d'écran ici :

```md
![Show Blueprint](images/show-blueprint.png)
```

---

## Create Blueprint

Ajoute une capture d'écran ici :

```md
![Create Blueprint](images/create-blueprint.png)
```

---

## Update Blueprint

Ajoute une capture d'écran ici :

```md
![Update Blueprint](images/update-blueprint.png)
```

---

## Delete Blueprint

Ajoute une capture d'écran ici :

```md
![alt text](image-2.png)```

---

# Validation

Validation is handled using Laravel Form Requests.

* RegisterRequest
* LoginRequest

---

# Authentication Flow

```
Register
     │
     ▼
Login
     │
     ▼
Generate Sanctum Token
     │
     ▼
Bearer Token
     │
     ▼
Access Protected Endpoints
```

---

