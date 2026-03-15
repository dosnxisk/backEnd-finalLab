# IT15/L Final Project - Laravel Backend

This is the backend API for my final project in Integrative Programming (IT15/L). Built using Laravel 12 with MySQL database and Laravel Sanctum for authentication.

---

## Developer

- **Name:** Lhorie Narra
- **School:** University of Mindanao
- **Course:** BSIT 3rd Year
- **Subject:** IT15/L - Integrative Programming

---

## Technologies Used

- Laravel 12
- MySQL
- Laravel Sanctum
- PHP 8.2

---

## Features

- Token-based authentication using Laravel Sanctum
- RESTful API endpoints for dashboard data
- 500 student records seeded with Filipino demographic data
- 20 courses across 6 departments
- Academic calendar with 205 class days, holidays, and events

---

## Database Tables

| Table | Records | Description |
|---|---|---|
| users | 1 | Admin user account |
| students | 500 | Student demographic records |
| courses | 20 | Courses across 6 departments |
| school_days | 205 | Academic calendar Aug 2024 - May 2025 |

---

## Setup 

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

### Environment Variables

```
DB_DATABASE=it15_db
DB_USERNAME=root
DB_PASSWORD=
```

---

## API Endpoints

| Method | Endpoint | Auth | Description |
|---|---|---|---|
| POST | /api/login | No | Login and get token |
| POST | /api/logout | Yes | Logout current user |
| GET | /api/me | Yes | Get authenticated user |
| GET | /api/students | Yes | List all students |
| GET | /api/students/enrollment-trend | Yes | Monthly enrollment data |
| GET | /api/students/stats | Yes | Student statistics |
| GET | /api/courses | Yes | List all courses |
| GET | /api/courses/distribution | Yes | Students per course |
| GET | /api/dashboard/summary | Yes | Dashboard summary |
| GET | /api/dashboard/attendance | Yes | Attendance records |

---


