<script setup lang="ts">
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { Menu, X, Scale, ShieldCheck, Clock3, Award, FileText, Landmark, Handshake, ScrollText, ArrowRight, ChevronLeft, ChevronRight, LayoutDashboard, PanelTop, BriefcaseBusiness, Users, Newspaper, Settings, LogOut, Plus, Pencil, Trash2, Quote, Star, Sparkles, Phone, MapPin, MoveDown } from 'lucide-vue-next'
import heroDefault from './assets/hero-notary.png'
import heroNotaris from './assets/hero-team.jpg'
import heroSlideTwo from './assets/hero-slide-two.jpg'
import aboutTeam from './assets/about-team.jpg'
import teamRina from './assets/team-rina.webp'
import teamDewi from './assets/team-dewi.webp'
import teamHijab from './assets/team-hijab.webp'
import teamWoman from './assets/team-woman.webp'
import teamBudi from './assets/team-budi.webp'
import teamAndika from './assets/team-andika.webp'
import teamSalfa from './assets/team-salfa.jpg'
import logoOza from './assets/logo-oza.webp'

type Service = { title: string; description: string; icon: typeof FileText }
const mobileOpen = ref(false), admin = ref(false), adminMenu = ref('Dashboard'), activeSlide = ref(0), scrollY = ref(0)
const hero = computed(() => activeSlide.value === 2 ? heroNotaris : activeSlide.value === 1 ? heroSlideTwo : heroDefault)
const slides = [
  { eyebrow: 'LEGALITAS TERJAGA', title: 'Setiap dokumen,', middle: 'setiap keputusan,', accent: 'ditangani dengan pasti.', copy: 'Pendampingan legal yang transparan untuk pribadi, keluarga, dan bisnis Anda.' },
  { eyebrow: 'MITRA STRATEGIS ANDA', title: 'Dari konsultasi', middle: 'hingga akta', accent: 'selesai dengan tenang.', copy: 'Proses yang jelas, komunikasi yang nyaman, dan pelayanan yang tepat waktu.' },
  { eyebrow: 'KANTOR NOTARIS & PPAT', title: 'Kepastian Hukum,', middle: 'Kepercayaan Anda,', accent: 'Komitmen Kami.', copy: 'Kami memberikan layanan notaris yang profesional, akurat, dan terpercaya untuk setiap kebutuhan hukum Anda.' }
]
const testimonials = [
  { quote: 'Proses pengurusan akta sangat jelas dan cepat. Timnya memberi penjelasan yang membuat kami merasa tenang.', name: 'Ferry Gunawan', role: 'Direktur Utama, Prima Karya' },
  { quote: 'Sangat profesional sejak konsultasi pertama. Semua dokumen usaha kami ditangani dengan rapi dan tepat waktu.', name: 'Nadia Putri', role: 'Founder, Atelier Nusa' },
  { quote: 'Komunikatif, teliti, dan transparan. Kami mendapatkan solusi yang paling sesuai untuk kebutuhan keluarga.', name: 'Hendra Wijaya', role: 'Klien Pribadi' }
]
const activeTestimonial = ref(0)
const teamMembers = [
  { name: 'Salfa Novia Roza, S.H., M.Kn.', role: 'Notaris & PPAT', photo: teamSalfa },
  { name: 'Fairy lorenza', role: 'Legal Associate', photo: teamHijab },
  { name: 'Lolonta Gabriella Exaudita Ujung, S.H., M.Kn', role: 'Notaris & PPAT', photo: teamDewi },
  { name: 'Nauval Musthofa, S.H', role: 'Notaris & PPAT', photo: teamAndika },
  { name: 'Gabriellia Tefany', role: 'Notaris & PPAT', photo: teamRina },
  { name: 'Hidayatul Mithri Zura S.H., M.Kn.', role: 'Legal Associate', photo: teamWoman },
  { name: 'Muhammad Khadafy', role: 'Notaris & PPAT', photo: teamBudi }
]
const services = ref<Service[]>([
  { title: 'Pembuatan Akta', description: 'Pembuatan akta autentik sesuai peraturan yang berlaku.', icon: FileText },
  { title: 'Pengesahan Dokumen', description: 'Legalisasi dokumen untuk keperluan pribadi maupun perusahaan.', icon: ShieldCheck },
  { title: 'Perjanjian & Kontrak', description: 'Pembuatan perjanjian yang mengikat dan melindungi kepentingan Anda.', icon: Handshake },
  { title: 'Wasiat & Hibah', description: 'Pembuatan surat wasiat, hibah, dan dokumen waris lainnya.', icon: ScrollText },
  { title: 'Pendirian PT', description: 'Pendampingan lengkap sejak akta hingga legalitas usaha.', icon: Landmark },
  { title: 'Konsultasi Hukum', description: 'Diskusi awal yang jelas untuk kebutuhan legal Anda.', icon: Scale }
])
const stats = computed(() => [{label:'Slider',value:5},{label:'Layanan',value:services.value.length},{label:'Tim',value:4},{label:'Artikel',value:12}])
const nav = ['Beranda','Tentang','Layanan','Tim','Artikel','Galeri','Kontak']
function go(id:string){ document.getElementById(id.toLowerCase())?.scrollIntoView({behavior:'smooth'}); mobileOpen.value=false }
function addService(){ services.value.push({title:'Layanan Baru',description:'Deskripsi layanan dapat dikelola dari dashboard.',icon:Scale}) }
function removeService(i:number){ services.value.splice(i,1) }
function nextSlide(direction = 1){ activeSlide.value = (activeSlide.value + direction + slides.length) % slides.length }
let slider: number | undefined
onMounted(() => { slider = window.setInterval(() => nextSlide(), 10000); window.addEventListener('scroll', () => scrollY.value = window.scrollY, {passive:true}) })
onUnmounted(() => { if (slider) window.clearInterval(slider) })
</script>

<template>
  <div v-if="!admin" class="site-shell">
    <header class="nav"><button class="brand" @click="go('beranda')"><Scale :size="24"/><span class="brand-title">NOTARIS, PPAT, NPAK, & NOTARIS PASAR MODAL</span></button><nav><button v-for="n in nav" :key="n" @click="go(n)">{{ n }}</button><button class="button small" @click="go('kontak')">Hubungi Kami</button></nav><button class="menu" aria-label="Buka menu" @click="mobileOpen=true"><Menu/></button></header>
    <div v-if="mobileOpen" class="drawer"><button class="close" @click="mobileOpen=false"><X/></button><button v-for="n in nav" :key="n" @click="go(n)">{{n}}</button><button class="button" @click="go('kontak')">Hubungi Kami</button></div>
    <main>
      <section id="beranda" class="hero" :class="{ 'hero-portrait': activeSlide === 2, 'hero-slide-two': activeSlide === 1 }" :style="{ backgroundImage: activeSlide === 2 ? 'none' : `linear-gradient(90deg, rgba(7,7,7,.96) 0%, rgba(7,7,7,.79) 41%, rgba(7,7,7,.2) 100%), url(${hero})` }"><div class="hero-grain"></div><div v-if="activeSlide === 2" class="hero-portrait-panel"><img :src="hero" alt="Tim notaris"/><span>NOTARIS & PPAT</span></div><transition name="slide-copy" mode="out-in"><div :key="activeSlide" class="hero-copy"><img v-if="activeSlide === 0" class="hero-slide-logo" :src="logoOza" alt="Logo Salffa Novia Roza"/><p class="eyebrow"><Sparkles :size="13"/>{{ slides[activeSlide].eyebrow }}</p><h1>{{slides[activeSlide].title}}<br>{{slides[activeSlide].middle}}<br><em>{{slides[activeSlide].accent}}</em></h1><p class="lead">{{slides[activeSlide].copy}}</p><div class="hero-actions"><button class="button" @click="go('kontak')">Konsultasi Sekarang <ArrowRight :size="16"/></button><button class="play-button" @click="go('tentang')"><span>01</span> Kenali Kami</button></div></div></transition><div class="hero-arrows"><button aria-label="Slide sebelumnya" @click="nextSlide(-1)"><ChevronLeft/></button><button aria-label="Slide berikutnya" @click="nextSlide()"><ChevronRight/></button></div><div class="hero-status"><span v-for="(_, index) in slides" :key="index" :class="{selected:index===activeSlide}" @click="activeSlide=index"></span><small>0{{ activeSlide + 1 }} / 0{{ slides.length }}</small></div><button class="scroll-hint" @click="go('layanan')"><MoveDown :size="17"/> Jelajahi layanan</button></section>
      <section class="trust"><article><Award/><div><b>Profesional</b><span>Layanan notaris oleh pejabat berwenang</span></div></article><article><ShieldCheck/><div><b>Terpercaya</b><span>Menjaga kerahasiaan dokumen</span></div></article><article><Clock3/><div><b>Cepat & Akurat</b><span>Proses tepat waktu dan sesuai hukum</span></div></article><article><Scale/><div><b>Berpengalaman</b><span>Pendampingan hukum berkualitas</span></div></article></section>
      <section id="layanan" class="section"><p class="eyebrow">LAYANAN PROFESIONAL</p><h2>Layanan Kami</h2><p class="section-intro">Solusi hukum yang terukur untuk kebutuhan personal dan bisnis.</p><div class="grid services"><article v-for="service in services" :key="service.title" class="card"><component :is="service.icon" class="gold"/><h3>{{service.title}}</h3><p>{{service.description}}</p><a href="#kontak" @click.prevent="go('kontak')">Pelajari lebih lanjut <ArrowRight :size="15"/></a></article></div></section>
      <section id="tentang" class="section split"><div class="about-visual"><img class="about-team-image" :src="aboutTeam" alt="Tim kantor notaris"/><div class="floating-chip"><ShieldCheck :size="17"/><span><b>Terverifikasi</b>Standar layanan profesional</span></div></div><div><p class="eyebrow">TENTANG KAMI</p><h2>Legalitas yang dibangun atas ketelitian.</h2><p>Setiap dokumen kami tangani dengan tanggung jawab, kejelasan proses, dan komitmen pada perlindungan hak Anda.</p><div class="number-grid"><div><b>15+</b><span>Tahun pengalaman</span></div><div><b>2.500+</b><span>Klien ditangani</span></div><div><b>3.000+</b><span>Akta diselesaikan</span></div></div></div></section>
      <section id="tim" class="section"><div class="team-heading"><div><p class="eyebrow">ORANG DI BALIK KEPERCAYAAN</p><h2>Tim Notaris</h2></div></div><div class="grid team team-all"><article v-for="person in teamMembers" :key="person.photo" class="card person"><div class="portrait"><img :src="person.photo" :alt="person.name"/></div><h3>{{person.name}}</h3><p>{{person.role}}</p></article></div></section>
      <section id="artikel" class="section"><p class="eyebrow">WAWASAN HUKUM</p><h2>Artikel Terbaru</h2><div class="grid articles"><article v-for="article in ['Pentingnya Akta Autentik untuk Perjanjian','Langkah Awal Mendirikan Perseroan Terbatas','Memahami Legalitas dalam Transaksi Properti']" :key="article" class="card"><span class="tag">EDUKASI HUKUM</span><h3>{{article}}</h3><p>Informasi ringkas untuk membantu Anda membuat keputusan yang tepat.</p><a href="#kontak" @click.prevent="go('kontak')">Baca artikel <ArrowRight :size="15"/></a></article></div></section>
      <section class="testimonial-section"><div class="testimonial-orb"></div><p class="eyebrow">DIPERCAYA OLEH KLIEN</p><div class="testimonial-shell"><Quote class="quote-mark"/><transition name="fade" mode="out-in"><article :key="activeTestimonial" class="testimonial"><div class="stars"><Star v-for="n in 5" :key="n" :size="16" fill="currentColor"/></div><blockquote>“{{ testimonials[activeTestimonial].quote }}”</blockquote><div class="client"><div>{{testimonials[activeTestimonial].name[0]}}</div><span><b>{{testimonials[activeTestimonial].name}}</b>{{testimonials[activeTestimonial].role}}</span></div></article></transition><div class="testimonial-controls"><button v-for="(_, index) in testimonials" :key="index" :class="{selected:index===activeTestimonial}" @click="activeTestimonial=index">0{{ index + 1 }}</button></div></div></section>
      <section id="kontak" class="contact"><div><p class="eyebrow">KONSULTASI AWAL</p><h2>Butuh konsultasi notaris?</h2><p>Hubungi kami untuk mendapatkan informasi awal dan penjadwalan konsultasi.</p><div class="contact-meta"><span><Phone :size="14"/>+62 812 3456 7890</span><span><MapPin :size="14"/>Jakarta, Indonesia</span></div></div><div class="contact-actions"><a class="button" href="https://wa.me/6281234567890" target="_blank">WhatsApp Kami</a><button class="outline" @click="admin=true">Demo Admin</button></div></section>
    </main><footer><button class="brand"><Scale :size="22"/><span>NOTARIS</span></button><span>© 2026 Notaris Profile. Seluruh hak dilindungi.</span></footer>
  </div>
  <div v-else class="admin-shell"><aside><button class="brand" @click="admin=false"><Scale/><span>NOTARIS</span></button><button v-for="item in ['Dashboard','Slider','Tentang','Layanan','Tim','Artikel','Galeri','Pengaturan']" :key="item" :class="{active:adminMenu===item}" @click="adminMenu=item"><component :is="item==='Dashboard'?LayoutDashboard:item==='Slider'?PanelTop:item==='Layanan'?BriefcaseBusiness:item==='Tim'?Users:item==='Artikel'?Newspaper:Settings" :size="17"/>{{item}}</button><button class="logout" @click="admin=false"><LogOut :size="17"/>Keluar</button></aside><main class="dashboard"><header><div><p class="eyebrow">ADMINISTRASI</p><h2>{{adminMenu}}</h2></div><button class="button small" @click="addService"><Plus :size="16"/>Tambah Konten</button></header><div class="admin-stats"><article v-for="stat in stats" :key="stat.label"><span>{{stat.label}}</span><b>{{stat.value}}</b><i>Konten aktif</i></article></div><section class="admin-content"><div class="panel"><h3>{{adminMenu==='Layanan'?'Kelola Layanan':'Aktivitas Terbaru'}}</h3><template v-if="adminMenu==='Layanan'"><div v-for="(service,i) in services" :key="service.title+i" class="row"><component :is="service.icon" class="gold" :size="19"/><div><b>{{service.title}}</b><span>{{service.description}}</span></div><button aria-label="Edit"><Pencil :size="16"/></button><button aria-label="Hapus" class="danger" @click="removeService(i)"><Trash2 :size="16"/></button></div></template><template v-else><div v-for="text in ['Slider “Kepastian Hukum” diperbarui','Artikel baru siap diterbitkan','Pengaturan kontak diperbarui','Layanan Pembuatan Akta ditinjau']" :key="text" class="activity"><span></span><div><b>{{text}}</b><small>Hari ini, beberapa menit lalu</small></div></div></template></div><div class="panel chart"><h3>Statistik Pengunjung</h3><div class="bars"><i v-for="n in [25,48,35,60,46,78,89,65,95,80,100,92]" :key="n" :style="{height:n+'%'}"></i></div><p>Ringkasan kunjungan 30 hari terakhir.</p></div></section></main></div>
</template>
