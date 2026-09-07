# NOTARIS PROFILE — Fullstack Specification
## Vue 3 (Vite) + Laravel + MySQL

Dokumentasi ini menjadi panduan pengembangan website **Company Profile Notaris** dengan tampilan modern, profesional, premium, dan bernuansa **Dark + Gold** seperti referensi desain yang diberikan.

---

# 1. Project Overview

## 1.1 Nama Project
**Notaris Profile CMS**

## 1.2 Tujuan
Membangun website profil Notaris yang:
- Profesional dan terpercaya.
- Responsif di desktop, tablet, dan mobile.
- Memiliki landing page publik.
- Memiliki dashboard admin.
- Seluruh konten utama dapat dikelola dari admin.
- Menggunakan backend Laravel.
- Menggunakan frontend Vue 3 + Vite.
- Menggunakan database MySQL.
- Siap deploy pada VPS / Plesk.
- Tidak menggunakan Prisma.

## 1.3 Konsep Visual
Tema utama:
- Background: hitam / charcoal.
- Accent: gold.
- Text utama: putih / ivory.
- Border: gold tipis.
- Card: dark translucent.
- Hover: gold glow halus.
- Typography: elegan dan formal.

Rekomendasi warna:

```txt
Primary Gold       : #D6A63C
Secondary Gold     : #B8862F
Dark Background    : #0A0A0A
Card Background    : #111111
Soft Black         : #171717
Primary Text       : #F5F2EA
Secondary Text     : #B7B7B7
Border Gold        : rgba(214,166,60,0.30)
Danger             : #DC3545
Success            : #22C55E
```

---

# 2. Technology Stack

## Backend
- Laravel 12.x
- PHP 8.3+
- Laravel Sanctum
- Laravel Form Request
- Laravel API Resource
- Laravel Policies
- Service Layer
- Repository Pattern
- Observer
- Queue / Job
- Scheduler
- MySQL 8+
- Redis optional
- Intervention Image / Spatie Image
- Spatie Laravel Permission
- Spatie Activitylog

## Frontend
- Vue 3
- Vite
- TypeScript
- Vue Router
- Pinia
- Axios
- Tailwind CSS
- shadcn-vue / Headless UI
- Lucide Icons
- Swiper.js
- VueUse
- Chart.js / ApexCharts

## Deployment
- Nginx / Apache
- PHP-FPM
- Supervisor
- Cron
- Plesk compatible
- Let's Encrypt SSL

---

# 3. Project Architecture

```txt
notaris-profile/
├── backend/
│   ├── app/
│   │   ├── DTOs/
│   │   ├── Enums/
│   │   ├── Events/
│   │   ├── Exceptions/
│   │   ├── Http/
│   │   │   ├── Controllers/
│   │   │   │   ├── Api/
│   │   │   │   └── Admin/
│   │   │   ├── Middleware/
│   │   │   ├── Requests/
│   │   │   └── Resources/
│   │   ├── Jobs/
│   │   ├── Listeners/
│   │   ├── Models/
│   │   ├── Observers/
│   │   ├── Policies/
│   │   ├── Repositories/
│   │   │   ├── Contracts/
│   │   │   └── Eloquent/
│   │   ├── Services/
│   │   └── Support/
│   ├── database/
│   │   ├── factories/
│   │   ├── migrations/
│   │   └── seeders/
│   ├── routes/
│   │   ├── api.php
│   │   └── console.php
│   └── tests/
│
├── frontend/
│   ├── src/
│   │   ├── assets/
│   │   ├── components/
│   │   ├── composables/
│   │   ├── layouts/
│   │   ├── modules/
│   │   │   ├── public/
│   │   │   └── admin/
│   │   ├── router/
│   │   ├── services/
│   │   ├── stores/
│   │   ├── types/
│   │   ├── utils/
│   │   ├── views/
│   │   ├── App.vue
│   │   └── main.ts
│   ├── public/
│   ├── index.html
│   └── vite.config.ts
│
├── docs/
├── README.md
└── .gitignore
```

---

# 4. Landing Page Structure

## 4.1 Header / Navbar

Desktop:
- Logo Notaris.
- Beranda.
- Tentang.
- Layanan.
- Tim.
- Artikel.
- Galeri.
- Kontak.
- Button `Hubungi Kami`.

Mobile:
- Logo.
- Hamburger menu.
- Slide-over menu.
- Sticky header.

Admin dapat mengatur:
- Logo.
- Menu visibility.
- CTA text.
- CTA URL.
- Nomor WhatsApp.

---

# 5. Hero Slider

Hero menjadi bagian paling dominan.

## Konten
- Background image.
- Eyebrow optional.
- Judul besar.
- Highlight text berwarna gold.
- Subtitle.
- Tombol CTA.
- Slide navigation.
- Arrow previous / next.

Contoh:

```txt
Kepastian Hukum,
Kepercayaan Anda,
Komitmen Kami.
```

CTA:
`Konsultasi Sekarang`

## Admin
CRUD slider:
- Judul.
- Highlight text.
- Deskripsi.
- Gambar.
- CTA text.
- CTA URL.
- Urutan.
- Status aktif.
- Open new tab.
- Jadwal publish.

---

# 6. Trust / Value Proposition

Empat keunggulan utama:

1. Profesional
2. Terpercaya
3. Cepat & Akurat
4. Berpengalaman

Field:
- Icon.
- Judul.
- Deskripsi.
- Urutan.
- Status.

Tampilan:
- Inline 4 kolom desktop.
- 2 kolom tablet.
- 1 kolom mobile.

---

# 7. Layanan Kami

Card service layout.

Contoh layanan:
- Pembuatan Akta.
- Pengesahan Dokumen.
- Perjanjian & Kontrak.
- Wasiat & Hibah.
- Pendirian PT.
- Perubahan PT.
- Legalitas Perusahaan.
- Waarmerking.
- Legalisasi.
- Perjanjian Perkawinan.
- Akta Waris.
- Konsultasi Hukum.

## Field
- Icon.
- Nama layanan.
- Slug.
- Deskripsi singkat.
- Deskripsi lengkap.
- Image optional.
- Featured.
- Urutan.
- Status.

## Detail
Route:

```txt
/layanan/{slug}
```

---

# 8. Tentang Notaris

Section:
- Foto notaris / kantor.
- Heading.
- Deskripsi.
- Quote.
- Nomor izin.
- Tahun pengalaman.
- Statistik.

Contoh statistik:
- 15+ Tahun Pengalaman.
- 2.500+ Klien.
- 3.000+ Akta.
- 98% Kepuasan.

Admin dapat mengubah seluruh konten.

---

# 9. Tim Notaris

Tampilan slider / carousel.

Card:
- Foto profesional.
- Nama.
- Gelar.
- Jabatan.
- Deskripsi.
- Social media optional.
- Detail profile.

Contoh:

```txt
Dr. Andika Pratama, S.H., M.Kn.
Notaris & PPAT
```

Route:

```txt
/tim/{slug}
```

---

# 10. Mengapa Memilih Kami

Checklist keunggulan:
- Berpengalaman & profesional.
- Menjaga kerahasiaan.
- Pelayanan cepat & tepat.
- Biaya transparan.
- Lokasi strategis.
- Konsultasi mudah.
- Proses terdokumentasi.

Admin CRUD.

---

# 11. Artikel / Berita

Section:
- Latest article grid.
- 3 atau 4 artikel.
- Category.
- Tanggal.
- Thumbnail.
- Judul.
- Excerpt.
- Read more.

Route:

```txt
/artikel
/artikel/{slug}
```

Admin:
- CRUD artikel.
- Category.
- Tag.
- Thumbnail.
- Rich text.
- SEO.
- Draft / Published.
- Scheduled publish.

---

# 12. Galeri Foto

Masonry / grid.

Fitur:
- Album.
- Lightbox.
- Lazy load.
- Caption.

Admin:
- CRUD album.
- Upload multiple photos.
- Reorder image.
- WebP auto conversion.

---

# 13. Galeri Video

Sumber:
- YouTube.
- Vimeo.
- Embedded URL.

Field:
- Judul.
- Thumbnail.
- Video URL.
- Deskripsi.
- Urutan.
- Status.

---

# 14. Testimoni

Card slider.

Field:
- Nama.
- Jabatan / company.
- Foto.
- Rating.
- Testimoni.
- Status.
- Urutan.

---

# 15. CTA Konsultasi

Section sebelum footer.

Contoh:

```txt
Butuh Konsultasi Notaris?
Hubungi kami untuk mendapatkan informasi dan konsultasi awal.
```

Button:
- WhatsApp.
- Telepon.
- Form konsultasi.

---

# 16. Contact

Informasi:
- Alamat.
- Telepon.
- WhatsApp.
- Email.
- Jam operasional.
- Google Maps iframe.
- Social media.

Contact form:
- Nama.
- Email.
- Nomor WhatsApp.
- Subject.
- Pesan.
- Captcha.

---

# 17. Footer

Isi:
- Logo.
- Deskripsi.
- Navigasi.
- Layanan utama.
- Kontak.
- Social media.
- Copyright.
- Privacy Policy.
- Terms & Conditions.

---

# 18. Admin Dashboard

Route:

```txt
/admin
```

Login:

```txt
/admin/login
```

Authentication:
- Username.
- Password.
- Remember me.
- Optional 2FA.

Jangan menggunakan email sebagai login utama.

---

# 19. Admin Sidebar

Menu:

```txt
Dashboard
Slider
Tentang
Layanan
Tim
Artikel
Kategori Artikel
Galeri Foto
Galeri Video
Testimoni
Pesan Masuk
Kontak
SEO
Pengaturan
User
Activity Log
Logout
```

---

# 20. Dashboard Statistics

Cards:
- Total Slider.
- Total Layanan.
- Total Tim.
- Total Artikel.
- Pesan belum dibaca.
- Total galeri.
- Total user admin.

Chart:
- Visitor 7 hari.
- Visitor 30 hari.
- Popular page.

Activity:
- Slider diupdate.
- Artikel dibuat.
- Team ditambah.
- Setting diubah.

---

# 21. User & Role Management

Role:
- Super Admin.
- Admin.
- Editor.

Permission contoh:

```txt
dashboard.view
slider.view
slider.create
slider.update
slider.delete

services.view
services.create
services.update
services.delete

articles.view
articles.create
articles.update
articles.delete
articles.publish

gallery.manage
team.manage
settings.manage
users.manage
```

Gunakan:
`spatie/laravel-permission`

---

# 22. Database Design

## users

```txt
id
name
username
email
password
is_active
last_login_at
created_at
updated_at
```

## sliders

```txt
id
title
highlight_text
subtitle
image
cta_text
cta_url
sort_order
is_active
published_at
created_at
updated_at
```

## abouts

```txt
id
title
subtitle
description
image
quote
experience_year
license_number
created_at
updated_at
```

## services

```txt
id
title
slug
icon
short_description
description
image
is_featured
sort_order
is_active
meta_title
meta_description
created_at
updated_at
```

## teams

```txt
id
name
slug
degree
position
photo
bio
email
phone
instagram
linkedin
sort_order
is_active
created_at
updated_at
```

## article_categories

```txt
id
name
slug
created_at
updated_at
```

## articles

```txt
id
category_id
author_id
title
slug
excerpt
content
thumbnail
status
published_at
meta_title
meta_description
created_at
updated_at
```

## galleries

```txt
id
title
slug
description
cover_image
is_active
created_at
updated_at
```

## gallery_images

```txt
id
gallery_id
image
caption
sort_order
created_at
updated_at
```

## videos

```txt
id
title
video_url
thumbnail
description
sort_order
is_active
created_at
updated_at
```

## testimonials

```txt
id
name
position
company
photo
rating
content
sort_order
is_active
created_at
updated_at
```

## advantages

```txt
id
title
icon
description
sort_order
is_active
created_at
updated_at
```

## contacts

```txt
id
name
email
phone
subject
message
is_read
created_at
updated_at
```

## settings

```txt
id
group
key
value
type
created_at
updated_at
```

## seo_meta

```txt
id
page
meta_title
meta_description
meta_keywords
og_title
og_description
og_image
canonical_url
created_at
updated_at
```

## activity_log
Gunakan tabel dari Spatie Activitylog.

---

# 23. API Structure

Base URL:

```txt
/api/v1
```

Public API:

```txt
GET /api/v1/home
GET /api/v1/sliders
GET /api/v1/about
GET /api/v1/services
GET /api/v1/services/{slug}
GET /api/v1/teams
GET /api/v1/teams/{slug}
GET /api/v1/articles
GET /api/v1/articles/{slug}
GET /api/v1/galleries
GET /api/v1/videos
GET /api/v1/testimonials
GET /api/v1/settings/public
POST /api/v1/contact
```

Admin API:

```txt
POST /api/v1/admin/login
POST /api/v1/admin/logout
GET  /api/v1/admin/profile

GET    /api/v1/admin/sliders
POST   /api/v1/admin/sliders
PUT    /api/v1/admin/sliders/{id}
DELETE /api/v1/admin/sliders/{id}

GET    /api/v1/admin/services
POST   /api/v1/admin/services
PUT    /api/v1/admin/services/{id}
DELETE /api/v1/admin/services/{id}

GET    /api/v1/admin/teams
POST   /api/v1/admin/teams
PUT    /api/v1/admin/teams/{id}
DELETE /api/v1/admin/teams/{id}

GET    /api/v1/admin/articles
POST   /api/v1/admin/articles
PUT    /api/v1/admin/articles/{id}
DELETE /api/v1/admin/articles/{id}

GET    /api/v1/admin/galleries
POST   /api/v1/admin/galleries
PUT    /api/v1/admin/galleries/{id}
DELETE /api/v1/admin/galleries/{id}

GET    /api/v1/admin/testimonials
POST   /api/v1/admin/testimonials
PUT    /api/v1/admin/testimonials/{id}
DELETE /api/v1/admin/testimonials/{id}

GET /api/v1/admin/settings
PUT /api/v1/admin/settings

GET /api/v1/admin/users
POST /api/v1/admin/users
PUT /api/v1/admin/users/{id}
DELETE /api/v1/admin/users/{id}
```

Semua endpoint harus menggunakan:
- Request validation.
- API Resource.
- Consistent response.
- Permission check.

---

# 24. API Response Standard

Success:

```json
{
  "success": true,
  "message": "Data berhasil diambil",
  "data": {}
}
```

Validation error:

```json
{
  "success": false,
  "message": "Validasi gagal",
  "errors": {}
}
```

---

# 25. Repository Pattern

Contract:

```php
interface ServiceRepositoryInterface
{
    public function paginate(int $perPage = 10);
    public function find(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id): bool;
}
```

Implementasi:

```txt
Repositories/
├── Contracts/
│   └── ServiceRepositoryInterface.php
└── Eloquent/
    └── ServiceRepository.php
```

---

# 26. Service Layer

Controller tidak boleh berisi business logic kompleks.

Contoh:

```txt
ServiceController
    ↓
ServiceService
    ↓
ServiceRepository
    ↓
Service Model
```

Service menangani:
- Upload.
- Transaction.
- Slug.
- Publish.
- Cache.
- Business logic.

---

# 27. DTO

Gunakan DTO untuk transfer data.

Contoh:

```php
final class ServiceData
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly bool $isActive,
    ) {}
}
```

---

# 28. Observer

Observer digunakan untuk:
- Auto slug.
- Hapus file lama ketika update/delete.
- Activity log.
- Clear cache.

Contoh:

```txt
SliderObserver
ServiceObserver
TeamObserver
ArticleObserver
GalleryObserver
```

---

# 29. Queue & Job

Gunakan Queue untuk:
- Convert image ke WebP.
- Resize image.
- Generate thumbnail.
- Email contact notification.
- Cleanup temporary upload.

Jobs:

```txt
ConvertImageToWebP
GenerateThumbnail
SendContactNotification
OptimizeUploadedImage
```

---

# 30. Image Handling

Aturan:
- Original image tetap dapat disimpan.
- WebP dibuat otomatis.
- Thumbnail dibuat otomatis.
- Validasi MIME.
- Maksimum upload configurable.
- Nama file UUID.

Folder:

```txt
storage/app/public/
├── sliders/
├── services/
├── teams/
├── articles/
├── galleries/
├── testimonials/
└── settings/
```

---

# 31. Frontend Vue Structure

```txt
src/
├── assets/
├── components/
│   ├── common/
│   ├── public/
│   └── admin/
├── layouts/
│   ├── PublicLayout.vue
│   └── AdminLayout.vue
├── modules/
│   ├── public/
│   └── admin/
├── router/
├── services/
│   ├── api.ts
│   ├── auth.service.ts
│   ├── article.service.ts
│   └── service.service.ts
├── stores/
├── types/
├── views/
│   ├── public/
│   └── admin/
├── App.vue
└── main.ts
```

---

# 32. Public Routes

```txt
/
/tentang
/layanan
/layanan/:slug
/tim
/tim/:slug
/artikel
/artikel/:slug
/galeri
/kontak
/privacy-policy
/terms
```

---

# 33. Admin Routes

```txt
/admin/login
/admin
/admin/sliders
/admin/about
/admin/services
/admin/teams
/admin/articles
/admin/categories
/admin/gallery
/admin/videos
/admin/testimonials
/admin/contact
/admin/seo
/admin/settings
/admin/users
/admin/activity-log
```

---

# 34. Responsive Requirement

Breakpoint:
- Mobile: `< 640px`
- Tablet: `640px – 1024px`
- Desktop: `> 1024px`

Hero:
- Desktop: large background image.
- Mobile: crop focal point.
- Text tetap terbaca.
- CTA tidak terpotong.

Navbar:
- Desktop horizontal.
- Mobile hamburger.

---

# 35. UI Component Design

## Button Primary

```txt
Background : Gold
Text       : Black
Border     : Gold
Hover      : Lighter Gold
Radius     : 6px
```

## Button Outline

```txt
Background : Transparent
Text       : Gold
Border     : 1px Gold
Hover      : Gold / Black
```

## Card

```txt
Background : #111111
Border     : 1px rgba(214,166,60,.25)
Radius     : 10px
Shadow     : subtle
```

---

# 36. Animation

Gunakan animasi ringan:
- Fade-in.
- Slide-up.
- Hero zoom.
- Card hover lift.
- Gold glow.
- Counter animation.
- Lazy image reveal.

Hindari animasi berlebihan.

---

# 37. SEO

Setiap page:
- Meta title.
- Meta description.
- OG title.
- OG description.
- OG image.
- Canonical.
- Robots.
- Sitemap XML.

Structured data:
- Organization.
- LocalBusiness.
- LegalService.
- Article.
- BreadcrumbList.

---

# 38. Security

Wajib:
- Laravel CSRF protection.
- Sanctum auth.
- Rate limiting.
- XSS sanitization.
- SQL injection protection via Eloquent/query binding.
- MIME validation.
- Max upload size.
- Password hashing.
- Session regeneration after login.
- Brute-force login throttling.
- Permission middleware.
- Secure cookie.
- HTTPS only production.
- CORS whitelist.
- Disable debug production.
- Prevent mass assignment.
- Strong admin password.

Optional:
- 2FA.
- IP whitelist superadmin.
- Google reCAPTCHA / Turnstile.

---

# 39. Performance

- Lazy load images.
- WebP.
- Vite code splitting.
- Cache public API.
- Query eager loading.
- DB index.
- Pagination.
- Minification.
- HTTP caching.
- Redis optional.
- CDN optional.

---

# 40. Database Index

Index minimal:

```txt
users.username
services.slug
services.is_active
teams.slug
articles.slug
articles.status
articles.published_at
article_categories.slug
galleries.slug
contacts.is_read
settings.key
```

---

# 41. Analytics

Dashboard analytics optional:
- Page view.
- Daily visitor.
- Referrer.
- Popular page.
- Device.
- Browser.

Bisa gunakan:
- Internal analytics.
- Google Analytics 4.
- Plausible.

---

# 42. Website Settings

Admin > Pengaturan:

## General
- Nama Notaris.
- Nama kantor.
- Logo.
- Favicon.
- Tagline.
- Copyright.

## Contact
- Email.
- Phone.
- WhatsApp.
- Address.
- Google Maps.

## Social
- Instagram.
- Facebook.
- YouTube.
- LinkedIn.

## SMTP
- Host.
- Port.
- Username.
- Password.
- Encryption.
- From address.
- From name.

## SEO
- Default title.
- Description.
- OG image.

---

# 43. WhatsApp Integration

CTA dapat mengarah ke:

```txt
https://wa.me/{phone}?text={message}
```

Message configurable dari admin.

Contoh:

```txt
Halo, saya ingin berkonsultasi mengenai layanan Notaris.
```

---

# 44. Admin Login

Input:
- Username.
- Password.
- Remember Me.

Seed development:

```txt
Username: admin
Password: CHANGE_ME_AFTER_INSTALL
```

PENTING:
Jangan hardcode password production.

Pada saat deployment:
- wajib mengganti password.
- wajib gunakan password panjang.
- admin seed hanya development.

---

# 45. Development Installation

## Backend

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
```

Set database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=notaris_profile
DB_USERNAME=root
DB_PASSWORD=
```

Run:

```bash
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

## Frontend

```bash
cd frontend
npm install
cp .env.example .env
npm run dev
```

Environment:

```env
VITE_API_URL=http://localhost:8000/api/v1
```

---

# 46. Production Build

Frontend:

```bash
npm ci
npm run build
```

Laravel:

```bash
composer install --no-dev --optimize-autoloader

php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

# 47. Plesk Deployment

Direktori contoh:

```txt
httpdocs/
├── frontend-dist/
└── backend/
```

Recommended:
- Document root frontend: `frontend/dist`
- API subdomain: `api.domain.com`
- Laravel document root: `backend/public`

Alternative:
- Frontend: `domain.com`
- Backend: `domain.com/api`

Pastikan:
- PHP 8.3.
- HTTPS aktif.
- Cron aktif.
- Queue Supervisor aktif.
- storage symlink aktif.

---

# 48. Queue

Environment:

```env
QUEUE_CONNECTION=database
```

Run:

```bash
php artisan queue:table
php artisan migrate
php artisan queue:work
```

Production gunakan Supervisor.

---

# 49. Scheduler

Cron:

```bash
* * * * * php /path/artisan schedule:run >> /dev/null 2>&1
```

Digunakan untuk:
- Cleanup temp upload.
- Scheduled article.
- Cache refresh.

---

# 50. Testing

Backend:
- PHPUnit / Pest.
- Feature test.
- API test.
- Auth test.
- Permission test.
- Upload validation.

Frontend:
- Vitest.
- Vue Test Utils.
- Playwright optional.

Minimum test:
- Login.
- Logout.
- CRUD slider.
- CRUD layanan.
- CRUD team.
- CRUD article.
- Permission.
- Contact form.
- Public API.

---

# 51. Seeder

Seeder:
- AdminUserSeeder.
- RolePermissionSeeder.
- ServiceSeeder.
- SettingSeeder.
- SliderSeeder.

---

# 52. Default Content

## Hero
```txt
Kepastian Hukum,
Kepercayaan Anda,
Komitmen Kami.
```

## Subtitle
```txt
Kami hadir memberikan layanan notaris profesional, akurat dan terpercaya untuk semua kebutuhan hukum Anda.
```

## CTA
```txt
Konsultasi Sekarang
```

---

# 53. Suggested Home Order

```txt
Header
Hero Slider
Trust Bar
Layanan Kami
Tentang Notaris
Tim Notaris
Mengapa Memilih Kami
Statistik
Artikel
Galeri
Testimoni
CTA
Kontak
Footer
```

---

# 54. Accessibility

- Alt text image.
- Keyboard navigation.
- Focus state.
- Contrast ratio.
- Semantic heading.
- ARIA label button.
- Form error jelas.
- Minimum touch target 44px.

---

# 55. Production Checklist

## Backend
- [ ] APP_ENV=production
- [ ] APP_DEBUG=false
- [ ] APP_URL benar
- [ ] HTTPS aktif
- [ ] DB backup aktif
- [ ] Queue running
- [ ] Scheduler running
- [ ] Storage link aktif
- [ ] Permission folder benar
- [ ] Laravel cache aktif

## Frontend
- [ ] npm run build sukses
- [ ] Tidak ada console error
- [ ] API URL production benar
- [ ] Mobile responsive
- [ ] Image optimized
- [ ] Lighthouse diuji

## Security
- [ ] Admin password diganti
- [ ] Login throttling aktif
- [ ] CORS dibatasi
- [ ] Upload validation aktif
- [ ] Rate limit contact aktif
- [ ] Captcha aktif
- [ ] Backup database aktif

---

# 56. Acceptance Criteria

Project dianggap selesai jika:

1. Landing page sesuai konsep dark-gold.
2. Desktop dan mobile responsif.
3. Semua section utama dapat diedit admin.
4. Login admin menggunakan username.
5. CRUD slider berjalan.
6. CRUD layanan berjalan.
7. CRUD team berjalan.
8. CRUD article berjalan.
9. CRUD gallery berjalan.
10. Testimoni dapat diedit.
11. Contact form masuk ke dashboard.
12. Role & permission berjalan.
13. Image otomatis dioptimasi.
14. Tidak ada error console.
15. Tidak ada error Laravel log saat flow normal.
16. Build production sukses.
17. Deploy Plesk dapat dilakukan.
18. SEO dasar aktif.
19. Website menggunakan HTTPS.
20. Tidak menggunakan Prisma.

---

# 57. Codex / AI Development Instruction

Gunakan spesifikasi ini sebagai sumber utama.

Instruksi:

```txt
Build a production-ready fullstack Notary Profile website.

Frontend:
- Vue 3
- Vite
- TypeScript
- Tailwind CSS
- Pinia
- Vue Router

Backend:
- Laravel
- MySQL
- Laravel Sanctum
- Repository Pattern
- Service Layer
- DTO
- API Resource
- Observer
- Queue / Jobs
- Spatie Permission

Do NOT use Prisma.

Design:
- Premium dark black background
- Gold accent
- Elegant legal/notary style
- Responsive desktop/mobile
- Similar composition to the provided visual reference,
  but implement original UI components.

Admin:
- Username/password login
- Full CMS
- Slider CRUD
- About CRUD
- Service CRUD
- Team CRUD
- Article CRUD
- Gallery CRUD
- Video CRUD
- Testimonial CRUD
- Contact inbox
- SEO settings
- Website settings
- User management
- Role permissions
- Activity logs

Development rules:
- Follow clean architecture.
- Controllers must remain thin.
- Validate all requests.
- Use Laravel API Resources.
- Use DB transactions for complex writes.
- Avoid N+1 queries.
- Add necessary database indexes.
- Add feature tests.
- Optimize images using queue jobs.
- Generate WebP.
- Secure file upload.
- Apply rate limit.
- Use secure production settings.

Before considering the project complete:
1. Run backend tests.
2. Run frontend tests.
3. Run production frontend build.
4. Check Laravel routes.
5. Run migrations from empty database.
6. Run seeders.
7. Check all admin CRUD.
8. Check mobile responsiveness.
9. Check browser console.
10. Fix all errors before final delivery.
```

---

# 58. Final Output

Target hasil akhir:

```txt
notaris-profile/
├── backend/
├── frontend/
├── docs/
├── README.md
├── .env.example
└── deployment/
```

Website harus siap digunakan sebagai website resmi kantor Notaris dan mudah dikembangkan lebih lanjut.
