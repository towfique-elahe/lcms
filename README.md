## 🧾 LCMS - Laravel Content Management System

-   **Project Name:** LCMS (Laravel Content Management System)
-   **Version:** 1.0.1
-   **Author:** Towfique Elahe
-   **Author Website:** [https://towfique-elahe.framer.website/](https://towfique-elahe.framer.website/)
-   **License:** MIT
-   **License URI:** [https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT)

---

## 📄 Description

**LCMS** is a custom-built SEO-focused content management system developed with Laravel 10. It allows administrators to manage blog posts, static pages, and services from a secure admin panel. Built for flexibility, speed, and search engine visibility.

---

## 🛠️ Features

-   🧠 Clean SEO metadata integration (title, meta description, canonical, keywords)
-   📝 Blog post and category management
-   📄 Static page management (About, Contact, Terms, etc.)
-   💼 Service listing support
-   🔐 Admin authentication with role-based access
-   📊 Responsive admin dashboard
-   🌐 Frontend routing with SEO-friendly URLs
-   📁 Modular blade templates (layout, header, footer, partials)
-   ⚙️ Laravel Breeze authentication (login/register/reset)
-   ❌ Custom 404 error page
-   🧪 Tinker-friendly for fast data management
-   💬 Blade components (optional future upgrade)

---

## 🚀 Installation Guide

```bash
git clone https://github.com/your-repo/lcms.git
cd lcms
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
```

---

## 🔑 Default Admin Access

Use **Laravel Tinker** to create your admin account:

```bash
php artisan tinker

App\Models\User::create([
    'name' => 'admin',
    'email' => 'admin@lcms.com',
    'password' => bcrypt('admin123'),
    'is_admin' => true,
]);
```

---

## 🔐 Admin Panel

-   Accessible via: `/admin`
-   Requires login with `is_admin = true`
-   Admin Features:

    -   Manage Pages
    -   Manage Blog Posts
    -   Manage Services

---

## 📁 Project Structure

```
resources/
├── views/
│   ├── frontend/
│   ├── admin/
│   └── layouts/
routes/
├── web.php
app/
├── Http/
│   ├── Controllers/
│   │   ├── FrontendController.php
│   │   └── Admin/
├── Models/
├── Middleware/
```

---

## ✅ Deployment Notes

-   Laravel 10.x
-   PHP 8.1+
-   MySQL / MariaDB
-   Node.js 18+ for Vite (JS build)
-   Set `APP_DEBUG=false` in production
-   Use `php artisan config:cache` after any env change

---

## 🧪 Version History

### v1.0.0

-   Initial public release
-   Fully working frontend and backend CMS
-   SEO metadata handling
-   Admin panel with CRUD for posts, pages, services

### v1.0.1

-   Added devDependencies tailwind and postcss
-   Added custom theme colors and fonts in tailwind config
-   Updated styles of every pages in fronend, admin portal, auth pages with tailwind + custom theme

---

## 📜 License

This project is licensed under the MIT License — see the [LICENSE](https://opensource.org/licenses/MIT) file for details.
