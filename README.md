# B University Website

Website Universitas B University adalah proyek praktikum mata kuliah **Rekayasa Perangkat Lunak**. Aplikasi ini dibangun menggunakan **Laravel 13**, **Filament 5**, **Tailwind CSS v4**, dan **MySQL**.

Aplikasi terdiri dari dua bagian utama:

1. **Admin Panel / CMS** — digunakan admin untuk mengelola data website.
2. **Frontend Website Publik** — digunakan pengunjung untuk melihat informasi kampus.

---

## Informasi Proyek

| Keterangan | Detail |
|---|---|
| Nama Proyek | B University Website |
| Mata Kuliah | Praktikum Rekayasa Perangkat Lunak |
| Program Studi | D3 Teknik Komputer |
| Dosen Pengampu | Juni Ismail, S.Kom., M.Kom. |
| Framework Backend | Laravel 13 |
| Admin Panel | Filament 5 |
| Frontend | Blade Template + Tailwind CSS v4 |
| Database | MySQL |
| Local Environment | Laravel Herd |
| Version Control | Git + GitHub |
| Dokumentasi | Notion |

---

## Fitur Utama

### Admin Panel / CMS

- Login admin menggunakan Filament Authentication
- Dashboard admin
- Manajemen kerja sama
- Manajemen sambutan pimpinan
- Manajemen fasilitas kampus
- Manajemen dosen
- Manajemen admin/staf
- Manajemen pimpinan/rektor
- Manajemen mahasiswa
- Manajemen profil universitas
- Manajemen sejarah
- Manajemen visi dan misi
- Manajemen pengumuman
- Manajemen berita
- Manajemen footer website
- Upload gambar ke storage public
- Multiple image upload untuk profil dan visi misi
- Slug otomatis untuk pengumuman dan berita
- Relasi user pembuat pengumuman/berita

### Frontend Website Publik

- Landing page
- Halaman profil universitas
- Halaman daftar dosen
- Halaman data mahasiswa
- Halaman pengumuman
- Halaman berita
- Footer dinamis dari CMS
- Tampilan responsive dengan Tailwind CSS

---

## Struktur Database Utama

| No | Tabel | Fungsi |
|---|---|---|
| 1 | users | Akun login admin |
| 2 | cooperations | Data kerja sama |
| 3 | greetings | Sambutan pimpinan |
| 4 | facilities | Fasilitas kampus |
| 5 | lectures | Data dosen |
| 6 | admins | Data admin/staf |
| 7 | rektors | Data pimpinan |
| 8 | students | Data mahasiswa |
| 9 | announcements | Pengumuman |
| 10 | news | Berita |
| 11 | aboutmes | Profil universitas |
| 12 | histories | Sejarah universitas |
| 13 | visimisis | Visi dan misi |
| 14 | footers | Pengaturan footer |

---

## Persyaratan Sistem

Pastikan komputer sudah memiliki:

- PHP 8.3 atau lebih baru
- Composer 2.x
- MySQL 8.0
- Node.js 18 atau lebih baru
- npm
- Git
- Laravel Herd
- Browser modern: Chrome, Edge, atau Firefox

---

## Cara Instalasi Lokal

### 1. Clone Repository

```bash
git clone https://github.com/ariwibowodoloksaribu-cloud/nommensen.git
cd db_nommensen