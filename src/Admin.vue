<script setup lang="ts">
import { computed, onMounted, ref } from 'vue'
import { LayoutDashboard, PanelTop, Info, BriefcaseBusiness, Newspaper, Phone, ImageUp, LogOut, ExternalLink, Save, CheckCircle2 } from 'lucide-vue-next'

type Content = Record<string, any>
const content = ref<Content>({})
const active = ref('Ringkasan')
const saving = ref(false)
const message = ref('')
const uploadUrl = ref('')
const nav = [
  ['Ringkasan', LayoutDashboard, null], ['Identitas', Info, 'brand'], ['Slider Hero', PanelTop, 'slides'],
  ['Tentang', Info, 'about'], ['Layanan', BriefcaseBusiness, 'services'], ['Tim', Info, 'team'], ['Artikel', Newspaper, 'articles'], ['Testimoni', Info, 'testimonials'], ['Kontak', Phone, 'contact'], ['Footer', Info, 'footer'],
]
const currentKey = computed(() => nav.find(item => item[0] === active.value)?.[2] as string | null)
const jsonValue = computed({ get: () => currentKey.value ? JSON.stringify(content.value[currentKey.value], null, 2) : '', set: (value) => { if (!currentKey.value) return; try { content.value[currentKey.value] = JSON.parse(value); message.value = '' } catch { message.value = 'Format belum valid — periksa tanda petik dan koma.' } } })
const csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
const headers = { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrf, Accept: 'application/json' }
async function load() { const response = await fetch('/admin/content', { headers: { Accept: 'application/json' } }); content.value = await response.json() }
async function save() { saving.value = true; message.value = ''; try { const response = await fetch('/admin/content', { method: 'PUT', headers, body: JSON.stringify({ content: content.value }) }); const data = await response.json(); if (!response.ok) throw new Error(data.message || 'Tidak dapat menyimpan perubahan.'); content.value = data.content; message.value = 'Perubahan sudah dipublikasikan ke halaman depan.' } catch (error: any) { message.value = error.message || 'Terjadi kesalahan.' } finally { saving.value = false } }
async function upload(event: Event) { const file = (event.target as HTMLInputElement).files?.[0]; if (!file) return; const data = new FormData(); data.append('file', file); message.value = 'Mengunggah gambar…'; const response = await fetch('/admin/upload', { method: 'POST', headers: { 'X-CSRF-TOKEN': csrf, Accept: 'application/json' }, body: data }); const result = await response.json(); if (!response.ok) { message.value = result.message || 'Gagal mengunggah gambar.'; return } uploadUrl.value = result.url; message.value = 'Gambar siap. Salin URL ini ke properti foto di editor bila diperlukan.' }
function logout() { (document.getElementById('logout-form') as HTMLFormElement | null)?.submit() }
onMounted(load)
</script>

<template>
  <div class="admin-app">
    <aside class="sidebar"><a class="admin-brand" href="/admin">⚖ <span>CMS<br><b>NOTARIS</b></span></a><nav><button v-for="item in nav" :key="String(item[0])" :class="{active: active === item[0]}" @click="active = item[0] as string"><component :is="item[1]" :size="18"/>{{ item[0] }}</button></nav><div class="side-bottom"><a href="/" target="_blank"><ExternalLink :size="16"/> Lihat website</a><button @click="logout"><LogOut :size="16"/> Keluar</button></div></aside>
    <main class="admin-main"><header><div><p>RUANG KERJA</p><h1>{{ active }}</h1></div><button class="save" :disabled="saving" @click="save"><Save :size="17"/>{{ saving ? 'Menyimpan…' : 'Simpan & publikasikan' }}</button></header>
      <p v-if="message" class="notice"><CheckCircle2 :size="16"/>{{ message }}</p>
      <section v-if="active === 'Ringkasan'" class="overview"><div class="welcome"><span>⚖</span><div><p class="gold">DASHBOARD KONTEN</p><h2>Selamat datang di pusat kontrol website.</h2><p>Setiap perubahan yang disimpan akan langsung dipakai oleh halaman depan.</p></div></div><div class="metrics"><article><b>{{ content.slides?.length || 0 }}</b><span>Slide hero</span></article><article><b>{{ content.services?.length || 0 }}</b><span>Layanan</span></article><article><b>{{ content.articles?.length || 0 }}</b><span>Artikel</span></article><article><b>Live</b><span>Status website</span></article></div><div class="guide"><h3>Cara mengelola konten</h3><ol><li>Pilih bagian website dari navigasi di kiri.</li><li>Ubah teks atau data dalam editor.</li><li>Tekan “Simpan & publikasikan”.</li></ol></div></section>
      <section v-else class="editor"><div class="editor-head"><div><h2>{{ active }}</h2><p>Editor menggunakan format JSON agar seluruh teks dan susunan konten dapat diubah tanpa menyentuh kode.</p></div><label class="upload"><ImageUp :size="17"/> Unggah gambar<input type="file" accept="image/*" @change="upload"></label></div><div v-if="uploadUrl" class="uploaded"><span>URL gambar:</span><code>{{ uploadUrl }}</code></div><textarea v-model="jsonValue" spellcheck="false" aria-label="Editor konten JSON"></textarea><p class="hint">Tip: ubah nilai di dalam tanda petik. Untuk daftar seperti layanan atau slide, setiap objek mewakili satu kartu/slide.</p></section>
    </main>
    <form id="logout-form" method="POST" action="/admin/logout"> <input type="hidden" name="_token" :value="csrf"> </form>
  </div>
</template>
