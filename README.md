# 📔 Dear Diary — Memory Journal App

A personal memory journal web application built using the **Laravel Framework** as a BSIT course project.

## 👥 Group Members
| Name | Role |
|------|------|
| Jonel Roy Talapiero | Lead Developer |
| Rodylen Sumagaysay | UI/UX Designer |
| Jared Entierro | Database Administrator |

## 📋 About the Project
Dear Diary is a full CRUD web application that allows users to capture and preserve their most precious memories with photos, descriptions, mood tags, and dates. It follows the **MVC (Model-View-Controller)** architecture pattern.

## ✨ Features
- 📸 Add memories with photo uploads
- 😊 Mood tracking (Happy, Sad, Excited, Grateful, Nostalgic)
- ⭐ Mark memories as favorites
- 📖 View all memories in a polaroid-style layout
- ✏️ Edit and update memories
- 🗑️ Delete memories
- 👥 About Us page with group members

## 🛠️ Tech Stack
- **Framework:** Laravel 12
- **Language:** PHP 8.2
- **Database:** MySQL
- **Frontend:** Bootstrap 5, Blade Templates
- **Architecture:** MVC

## 🚀 How to Run the Project Locally

### Requirements
- PHP 8.2 or higher
- Composer
- MySQL (via XAMPP)
- Git

### Steps

**1. Clone the repository**
```bash
git clone https://github.com/YOUR_USERNAME/dear-diary.git
cd dear-diary
```

**2. Install dependencies**
```bash
composer install
```

**3. Set up environment file**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Configure your database**

Open `.env` and update:DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dear_diary_db
DB_USERNAME=root
DB_PASSWORD=

**5. Create the database**

Open phpMyAdmin at http://localhost/phpmyadmin and create a database called `dear_diary_db`

**6. Run migrations**
```bash
php artisan migrate
```

**7. Create photos folder**
```bash
mkdir public/photos
```

**8. Start the server**
```bash
php artisan serve
```

**9. Open in browser**

Go to 👉 http://localhost:8000

## 📸 Screenshots
- Home Page
- Memories Page
- Add Memory Form
- View Memory
- About Us Page