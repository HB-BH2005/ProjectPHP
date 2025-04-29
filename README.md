
# 🌍 ProjectPHP — Learning Platform for Kids

**ProjectPHP** is a Laravel-based educational platform designed to help children learn English through a fun and structured experience. Content is organized into **Levels**, **Subjects**, and **Lessons**, with admin tools for easy content management.

---

## 🎯 Purpose

A user-friendly learning environment where children can explore  lessons tailored to their level. Administrators can manage content flexibly — like a mini WordPress for education.

---

## 🔑 Core Features

### 👦 User Panel(user or guest is the same as it is for children)
- Child-friendly interface
- Browse lessons by Levels → Subjects → Lessons
- View multimedia-rich lesson content
- Static pages: **About** and **Contact**:
- **About Page**: Describes the platform’s mission
- **Contact Page**: Lets users reach out to the team

### 🛠️ Admin Panel
- **Admins**: Create, update, delete admin users
- **Levels**: Manage learning levels (e.g. Beginner, Intermediate)
- **Subjects**: Organized under each level
- **Lessons**: Grouped by subject
- **Lesson Contents**:
  - Add/edit rich content (text, videos, quizzes)
  - Use WYSIWYG editor (like WordPress)

---

## 🧭 Content Structure

```
Level: Level 1
│
└── Subject: English
    ├── Lesson: Alphabetics
    │   └── Content: Text ...
    └── ...
```

---

## ⚙️ Tech Stack

- **Framework**: Laravel (PHP 8+)
- **Frontend**: Blade + Vite
- **Database**: MySQL
- **Auth**: Laravel Breeze or Jetstream
- **Testing**: PHPUnit

---

## 💡 WordPress-Inspired Content Editing

Admins can add lesson content using a dynamic editor:
- Text, titles, and formatting
- Embedded media (images, text, etc.)
- Custom HTML blocks

---

## 🚀 Installation Guide

```bash
# Clone the project
git clone <your-git-url>
cd ProjectPHP

# Install backend dependencies
composer install

# Set up environment
cp .env.example .env
php artisan key:generate

# Migrate and seed the database
php artisan migrate --seed

# Run the server
php artisan serve
```


> Designed with children in mind — fun, educational, and fully customizable.

