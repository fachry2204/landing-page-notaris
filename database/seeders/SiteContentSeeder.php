<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@salfanoviaroza.com')],
            ['name' => env('ADMIN_NAME', 'Administrator'), 'password' => Hash::make(env('ADMIN_PASSWORD', 'GantiSekarang!2026'))]
        );

        SiteContent::firstOrCreate(['key' => 'homepage'], ['value' => [
            'brand' => 'Notaris, PPAT, NPAK, & Notaris Pasar Modal Jakarta Selatan',
            'footer' => '© 2026 Salfa Novia Roza, S.H., M.Kn. Seluruh hak dilindungi.',
            'googleReviews' => ['rating' => '4,9', 'count' => 37, 'url' => 'https://www.google.com/search?q=salfanoviaroza+notaris'],
            'slides' => [
                ['eyebrow' => 'LEGALITAS TERJAGA', 'title' => 'Setiap dokumen,', 'middle' => 'setiap keputusan,', 'accent' => 'ditangani dengan pasti.', 'copy' => 'Pendampingan legal yang transparan untuk pribadi, keluarga, dan bisnis Anda.'],
                ['eyebrow' => 'MITRA STRATEGIS ANDA', 'title' => 'Dari konsultasi', 'middle' => 'hingga akta', 'accent' => 'selesai dengan tenang.', 'copy' => 'Proses yang jelas, komunikasi yang nyaman, dan pelayanan yang tepat waktu.'],
                ['eyebrow' => 'KANTOR NOTARIS & PPAT', 'title' => 'Kepastian Hukum,', 'middle' => 'Kepercayaan Anda,', 'accent' => 'Komitmen Kami.', 'copy' => 'Kami memberikan layanan notaris yang profesional, akurat, dan terpercaya untuk setiap kebutuhan hukum Anda.'],
            ],
            'about' => ['title' => 'Lebih dari Sekadar Akta.\nKami Hadir untuk Memberikan Kepastian.', 'paragraphs' => ['Berawal dari Belitung Timur pada tahun 2020, kami terus berkembang dan sejak tahun 2025 hadir di Jakarta Selatan untuk memberikan pelayanan hukum yang profesional dan terpercaya.', 'Kami menyediakan layanan Notaris, PPAT, NPAK, dan Notaris Pasar Modal, dengan cakupan kebutuhan hukum bagi perorangan, keluarga, badan usaha, koperasi, transaksi pertanahan, hingga kebutuhan korporasi dan pasar modal.', 'Dalam setiap pekerjaan, kami mengutamakan integritas, ketelitian, profesionalisme, dan kerahasiaan. Setiap akta dan dokumen kami proses dengan cermat untuk memberikan kepastian hukum dan perlindungan bagi para pihak.', 'Karena bagi kami, sebuah akta bukan hanya tentang dokumen; melainkan tentang kepercayaan yang dipercayakan kepada kami.'], 'stats' => [['value' => '6+', 'label' => 'Tahun pengalaman'], ['value' => '2.500+', 'label' => 'Klien ditangani'], ['value' => '3.000+', 'label' => 'Akta diselesaikan']]],
            'services' => [
                ['title' => 'Pembuatan Akta', 'description' => 'Pembuatan akta autentik sesuai peraturan yang berlaku.'], ['title' => 'Pengesahan Dokumen', 'description' => 'Legalisasi dokumen untuk keperluan pribadi maupun perusahaan.'], ['title' => 'Perjanjian & Kontrak', 'description' => 'Pembuatan perjanjian yang mengikat dan melindungi kepentingan Anda.'], ['title' => 'Wasiat & Hibah', 'description' => 'Pembuatan surat wasiat, hibah, dan dokumen waris lainnya.'], ['title' => 'Pendirian PT', 'description' => 'Pendampingan lengkap sejak akta hingga legalitas usaha.'], ['title' => 'Konsultasi Hukum', 'description' => 'Diskusi awal yang jelas untuk kebutuhan legal Anda.'],
            ],
            'articles' => [
                ['title' => 'Pentingnya Akta Autentik untuk Perjanjian', 'tag' => 'EDUKASI HUKUM', 'copy' => 'Informasi ringkas untuk membantu Anda membuat keputusan yang tepat.'], ['title' => 'Langkah Awal Mendirikan Perseroan Terbatas', 'tag' => 'EDUKASI HUKUM', 'copy' => 'Informasi ringkas untuk membantu Anda membuat keputusan yang tepat.'], ['title' => 'Memahami Legalitas dalam Transaksi Properti', 'tag' => 'EDUKASI HUKUM', 'copy' => 'Informasi ringkas untuk membantu Anda membuat keputusan yang tepat.'],
            ],
            'team' => [
                ['name' => 'Salfa Novia Roza, S.H., M.Kn.', 'role' => 'Notaris & PPAT\nNPAK · Notaris Pasar Modal Terdaftar OJK'], ['name' => 'Fairy lorenza', 'role' => 'Notarial & PPAT Associate'], ['name' => 'Lolonta Gabriella Exaudita Ujung, S.H., M.Kn', 'role' => 'Notarial Associate'], ['name' => 'Nauval Musthofa, S.H', 'role' => 'Notarial & Field Operations'], ['name' => 'Gabriellia Tefany', 'role' => 'Notarial & PPAT Associate'], ['name' => 'Hidayatul Mithri Zura S.H., M.Kn.', 'role' => 'Notarial Intern'], ['name' => 'Muhammad Khadafy', 'role' => 'Office Support'],
            ],
            'testimonials' => [
                ['quote' => 'Proses pengurusan akta sangat jelas dan cepat. Timnya memberi penjelasan yang membuat kami merasa tenang.', 'name' => 'Ferry Gunawan', 'role' => 'Direktur Utama, Prima Karya'], ['quote' => 'Sangat profesional sejak konsultasi pertama. Semua dokumen usaha kami ditangani dengan rapi dan tepat waktu.', 'name' => 'Nadia Putri', 'role' => 'Founder, Atelier Nusa'], ['quote' => 'Komunikatif, teliti, dan transparan. Kami mendapatkan solusi yang paling sesuai untuk kebutuhan keluarga.', 'name' => 'Hendra Wijaya', 'role' => 'Klien Pribadi'],
            ],
            'contact' => ['heading' => 'Butuh Konsultasi Notaris/PPAT?', 'office' => 'Alamat Kantor Notaris, PPAT, NPAK, & Notaris Pasar Modal Jakarta Selatan', 'name' => 'Salfa Novia Roza, S.H., M.Kn.', 'address' => 'Jl. KH. Ahmad Dahlan Kby. No.10 D, RT.1/RW.1, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130', 'maps' => 'https://maps.app.goo.gl/VD6PphJXQaMMVmD1A?g_st=iw', 'whatsapp' => '6282241145758', 'message' => 'Halo Saya dari website https://salfanoviaroza.com/ ingin konsultasi.'],
        ]]);
    }
}
