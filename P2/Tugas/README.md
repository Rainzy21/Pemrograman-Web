# Instagram Profile Clone

Sebuah clone halaman profil Instagram yang dibuat menggunakan HTML, CSS, dan framework Tailwind CSS serta Bootstrap. Proyek ini meniru tampilan dan nuansa halaman profil Instagram dengan desain yang responsif dan modern.

## Preview

Proyek ini menampilkan halaman profil Instagram dengan:
- Foto profil bulat
- Informasi pengguna (nama, bio, statistik)
- Tombol edit profil dan follow
- Sorotan
- Grid foto 12 disusun per 3 baris
- Navigasi tab (Grid, Bookmark, Users)

## Apa saja yang saya pakai

- **HTML5**: Struktur dasar halaman
- **Tailwind CSS**: Framework utility-first untuk styling
- **Bootstrap 5.3.8**: Komponen UI dan grid system
- **Lucide Icons**: Icon set untuk elemen UI

## 📁 Struktur Proyek
```
P2 Tugas/
│
├── assets/         #assets berisi images dan css global
│   ├── images/
│   │   ├── 1.jpeg
│   │   ├── 2.jpeg
│   │   ├── 3.jpeg
│   │   ├── 4.jpeg
│   │   ├── 5.jpeg
│   │   ├── 6.jpeg
│   │   ├── 7.jpeg
│   │   ├── 8.jpeg
│   │   ├── 9.jpeg
│   │   ├── 10.jpeg
│   │   ├── 11.jpeg
│   │   ├── 12.jpeg
│   │   └── pic.jpeg
│   │
│   └── style.css
│
├── BootStrap/      #File HTML untuk bootsrap versi cdn
│   └── index.html
│
├── Tailwind/       #File HTML untuk tailwind versi cdn
│   └── grid.html
│
└── README.md       #Dokumentasi/laporan proyek
```

## 📱 Fitur Responsif

Proyek ini dioptimalkan untuk berbagai ukuran layar:

- **Desktop**: Layout horizontal dengan foto profil besar
- **Tablet**: Layout yang disesuaikan dengan elemen yang tetap proporsional  
- **Mobile**: Layout vertikal dengan elemen yang terpusat

### Breakpoints yang Digunakan:
 ### Taiwind
- `sm`: 640px ke atas
- `md`: 768px ke atas  

 ### Bootstrap
- `sm`: 576px
- `md`: 768px
- `lg`: 992px

## 🎨 Komponen Utama

### 1. Header Profile
- **Foto Profil**: Gambar bulat responsif
- **Info Pengguna**: Nama, tombol aksi, dan statistik
- **Tombol**: Edit Profile, Lihat Arsip, dan Settings
- **Statistik**: Statistik berisi follow, post, dan followers

### 2. Bio Section
- Nama pengguna
- Deskripsi singkat

### 3. Sorotan Section
- Sorotan

### 4. Navigation Tabs
- Tab Grid (Grid icon)
- Tab Bookmark (Bookmark icon)  
- Tab Users (Person icon)

### 5. Posts Grid
- Grid 3 kolom untuk menampilkan foto
- Gambar yang responsive dan cover penuh
- Gap yang konsisten antar gambar

## 🎯 Kustomisasi

### Mengubah Profil
Untuk mengubah informasi profil, edit bagian berikut di `index.html`:

```html
<!-- Foto Profil -->
<img src="GANTI_URL_FOTO_ANDA" alt="My Profile Picture" />

<!-- Nama Pengguna -->
<h2 class="text-lg md:text-xl font-semibold">hrvnfsha</h2>

<!-- Bio -->
<p>Nothing<br><span class="text-gray-400">Sang Naga</span></p>
```

### Mengubah Postingan
Untuk mengganti gambar postingan, ubah URL pada bagian grid:

```html
<img src="URL_GAMBAR_BARU" alt="Deskripsi Gambar" />
```

### Mengubah Warna Tema
Tema gelap dapat dimodifikasi di bagian CSS:

## 📦 Dependencies (CDN)

Proyek ini menggunakan CDN untuk semua dependencies:

- **Tailwind CSS**: `@tailwindcss/browser@4`
- **Bootstrap**: `5.3.8`
- **Lucide Icons**: `v0.544.0`

## 🌟 Keunggulan

- ✅ **Fully Responsive** - Bekerja di semua device
- ✅ **Modern Design** - Mengikuti design system Instagram
- ✅ **Dark Theme** - Tema gelap yang nyaman di mata
- ✅ **Fast Loading** - Menggunakan CDN untuk performa optimal
- ✅ **Cross Browser** - Compatible dengan browser modern
- ✅ **Clean Code** - HTML yang terstruktur dan mudah dipahami

## 🔧 Pengembangan Lebih Lanjut

Untuk pengembangan selanjutnya, Anda dapat menambahkan:

- **JavaScript Interactivity**: Modal untuk gambar, like button, comments
- **Backend Integration**: Koneksi dengan database untuk data dinamis
- **Authentication**: Sistem login/register
- **Real Posts**: Upload dan manajemen postingan
- **Stories Feature**: Implementasi Instagram Stories
- **Following System**: Sistem follow/unfollow