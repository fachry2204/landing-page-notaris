# Notaris Profile CMS

Implementasi awal UI untuk profil kantor notaris dengan Vue 3 + Vite + TypeScript. Tema mengikuti brief dark-gold dan menggunakan aset hero orisinal di `frontend/src/assets/hero-notary.png`.

## Menjalankan frontend

```powershell
cd frontend
npm install
npm run dev
```

Buka `http://127.0.0.1:5173`.

## Yang tersedia

- Landing page responsif: hero, trust bar, layanan, tentang, tim, keunggulan, artikel, dan CTA kontak.
- Navigasi mobile dengan drawer.
- Dashboard admin demo dengan statistik, aktivitas, daftar layanan, dan aksi tambah/hapus pada sesi browser.
- Build produksi Vite.

## Backend Laravel

Spesifikasi `notaris.md` juga membutuhkan Laravel, PHP 8.3+, Composer, dan MySQL. Runtime tersebut tidak tersedia pada mesin ini (`php`, `composer`, dan `mysql` tidak ditemukan), sehingga backend Laravel, migrasi, Sanctum, Spatie Permission, queue, dan API CRUD belum dapat di-bootstrap atau diuji di lingkungan saat ini. Setelah dependensi tersebut tersedia, backend dapat dibuat di folder `backend/` sesuai kontrak API pada `notaris.md`.
