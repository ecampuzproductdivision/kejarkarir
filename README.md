# Kejar Karir

Aplikasi manajemen akses berbasis **Laravel 12**, **Vite**, dan **Tailwind CSS v4** — dilengkapi dengan sistem autentikasi, manajemen Role, Permission, Menu, dan User.

---

## 📋 Persyaratan Sistem (Prerequisites)

Sebelum memulai instalasi, pastikan sistem Anda telah terpasang software berikut:

*   **PHP** `>= 8.2`
*   **Composer** (Manajer dependensi PHP)
*   **Node.js** (Rekomendasi versi LTS terbaru) & **NPM**
*   **MySQL** `>= 5.7` atau **MariaDB** (database default yang digunakan)

---

## ⚡ Cara Instalasi Cepat (Automated Setup)

Proyek ini dilengkapi dengan skrip setup otomatis yang didefinisikan dalam `composer.json`.

**1. Clone repository:**
```bash
git clone <url-repository>
cd <nama-folder>
```

**2. Salin dan sesuaikan file environment:**
```bash
cp .env.example .env
```
Buka `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kejarkarir
DB_USERNAME=root
DB_PASSWORD=
```

**3. Instal dependensi Composer, lalu jalankan setup otomatis:**
```bash
composer install
composer run setup
```
*Skrip `composer run setup` secara otomatis akan:*
* Menghasilkan Application Key (`php artisan key:generate`).
* Menjalankan migrasi database (`php artisan migrate --force`).
* Menginstal dependensi Node.js (`npm install`).
* Membangun aset frontend (`npm run build`).

---

## 🛠️ Cara Instalasi Manual (Step by Step)

Jika Anda ingin melakukan instalasi langkah demi langkah secara manual:

### 1. Clone Repository
```bash
git clone <url-repository>
cd <nama-folder>
```

### 2. Duplikasi File Environment
```bash
# Linux / macOS / Git Bash:
cp .env.example .env

# Windows PowerShell:
Copy-Item .env.example .env
```

### 3. Instal Dependensi Backend
```bash
composer install
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Konfigurasi Database

Buka file `.env` dan sesuaikan dengan konfigurasi MySQL Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kejarkarir
DB_USERNAME=root
DB_PASSWORD=
```
> Pastikan database `kejarkarir` sudah dibuat di MySQL sebelum menjalankan migrasi.

### 6. Jalankan Migrasi & Seeder
```bash
php artisan migrate --seed
```

### 7. Instal Dependensi Frontend & Compile Aset
```bash
npm install
npm run build
```

---

## 🚀 Menjalankan Aplikasi

Aplikasi ini menggunakan `npx concurrently` untuk menjalankan server backend PHP, queue worker, Laravel Pail (logs), dan Vite dev server secara bersamaan dengan satu perintah mudah:

```bash
composer run dev
```

Atau, jika Anda ingin menjalankannya secara manual di terminal terpisah:

*   **Menjalankan Server Backend PHP:**
    ```bash
    php artisan serve
    ```
*   **Menjalankan Vite Asset Compiler (Hot Reload):**
    ```bash
    npm run dev
    ```

Aplikasi default dapat diakses melalui browser pada alamat: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 🔑 Kredensial Akun Bawaan (Default Credentials)

Setelah `php artisan migrate --seed` berhasil dijalankan:

### 👤 Super Admin
*   **Email:** `test@example.com`
*   **Password:** `password`
*   **Role:** `SUPER_ADMIN` — akses penuh ke seluruh fitur

### 🏢 Company Partner (Akun Dummy)
*   Terdapat **3 akun dummy** yang dibuat secara acak oleh factory.
*   **Role:** `COMPANY_PARTNER`
*   **Password:** `password`

---

## 📂 Fitur Aplikasi

| Fitur | URL |
|---|---|
| Dashboard | `/dashboard` |
| Manajemen Role | `/roles` |
| Manajemen User | `/users` |
| Manajemen Menu | `/menus` |
| Manajemen Permission | `/permissions` |

---

## 🗂️ Struktur Direktori Utama

```
├── app/
│   ├── Http/Controllers/   # AuthController, MenuController, PermissionController, RoleController, UserController
│   └── Models/             # User, Role, Permission, Menu
├── database/
│   ├── migrations/         # Skema tabel database
│   └── seeders/            # DatabaseSeeder, MenuSeeder, PermissionSeeder
├── resources/
│   ├── css/app.css         # Entry point Tailwind CSS v4
│   ├── js/app.js           # Entry point JavaScript
│   └── views/              # Blade templates
├── routes/web.php          # Definisi route aplikasi
└── vite.config.js          # Konfigurasi Vite + Tailwind CSS v4
```

---

## 🔒 Catatan Keamanan

*   File `.env` **tidak boleh** di-commit ke Git. Selalu gunakan `.env.example` sebagai template.
*   Ganti semua kredensial default sebelum deploy ke production.
*   Set `APP_ENV=production` dan `APP_DEBUG=false` di environment production.

---

## 📦 Perintah Berguna

```bash
# Jalankan unit test
composer run test

# Clear semua cache
php artisan optimize:clear

# Cache konfigurasi (untuk production)
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
