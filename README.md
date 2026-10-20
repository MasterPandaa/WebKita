# WebKita — Biota Laut Interaktif & Edukasi Visual

Aplikasi web interaktif bertema biota dan ekosistem laut yang dikembangkan sebagai proyek tugas perkuliahan pemrograman web.

WebKita menghadirkan simulasi akuarium interaktif berbasis web dengan animasi biota laut, kontrol visual interaktif menggunakan jQuery, serta sistem registrasi dan pendataan pengguna menggunakan PHP dan MySQL.

---

## Fitur Utama

- **Animasi & Interaksi Biota Laut**: Animasi pergerakan ikan dan elemen bawah laut responsif (*goldenfish*, *redfish*, ombak, dan terumbu karang).
- **Interaksi Antarmuka Pengguna**: Manipulasi elemen antarmuka dinamis dan kontrol event menggunakan jQuery.
- **Formulir Pendaftaran & Validasi**: Sistem input dan validasi data profil pengguna berbasis PHP.
- **Penyimpanan Database Terstruktur**: Integrasi penyimpanan data pengguna ke database relasional MySQL.

---

## Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript, jQuery 3.7.1
- **Backend**: PHP
- **Database**: MySQL (`databasepfs`)

---

## Menjalankan Proyek Secara Lokal

### Prasyarat

- Web Server lokal (Apache & MySQL via XAMPP / Laragon)
- Web Browser modern

### Langkah Instalasi

1. **Clone repositori**:
   ```bash
   git clone https://github.com/MasterPandaa/WebKita.git
   ```
   Simpan di direktori root server web Anda (contoh: `htdocs/WebKita` atau `laragon/www/WebKita`).

2. **Setup Database**:
   - Buka **phpMyAdmin** atau CLI MySQL.
   - Buat database baru bernama `databasepfs`.
   - Import file skrip skema database:
     ```sql
     source databasesql.sql;
     ```

3. **Buka Aplikasi**:
   - Jalankan modul Apache dan MySQL.
   - Buka browser dan akses: `http://localhost/WebKita/index.html` atau `http://localhost/WebKita/home.html`.

---

## Tim Pengembang (Kelompok 6)

Proyek ini dikembangkan oleh Kelompok 6:
- **M. Luthfi Abdillah** (2211501044)
- **M. Ilham Wahyudi** (2211501049)
- **Virgiawan Aqil Ridwan** (2211501018)
- **Zefilla Ardya Salsabila** (2211501027)
- **Susi Fanlay** (2211501024)
- **M. Aziz Alfajri** (2211501041)

---

## Lisensi

Proyek ini dibuat untuk keperluan akademik dan pembelajaran pemrograman web.
