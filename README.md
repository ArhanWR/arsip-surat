# Arsip Surat

## 🎯 Tujuan
Aplikasi web untuk mengarsipkan surat agar mudah diatur, dicari, dan didokumentasikan.

## ✨ Fitur
- CRUD Arsip Surat (unggah PDF, edit, hapus, lihat, download)
- CRUD Kategori Surat
- Halaman About (menampilkan foto, nama, NIM, tanggal pembuatan)
- Penyimpanan file surat dalam folder storage
- Export/Download file surat dengan nama sesuai judul

## ⚙️ Cara Menjalankan
1. Clone repository:
   ```bash
   git clone https://github.com/username/arsip-surat.git
   cd arsip-surat

2. Install dependensi Laravel:
   composer install
   npm install 
   npm run dev

3. Buat file .env dan atur database:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=arsip_surat_db
   DB_USERNAME=root
   DB_PASSWORD=

4. Import database:
   - Buka phpMyAdmin
   - Buat database arsip_surat_db
   - Import file database yang berada pada folder project "database/arsip_surat.sql"

5. Jalankan server:
   php artisan serve (pastikan npm run dev juga berjalan)

## Screenshot Tampilan Aplikasi
1. Tabel Arsip Surat
![Arsip](images\foto_Arsip.png)
2. Upload Arsip Surat
![Mengupload Arsip](images\foto_Upload_Arsip.png)
3. Warning Hapus Arsip Surat
![Warning Menghapus Arsip](images\foto_Warning_Hapus.png)
4. Menampilkan Arsip Surat
![Show Arsip](images\foto_Show_Arsip.png)
5. Tabel Kategori
![Kategori](images\foto_Kategori.png)
6. Menambahkan Kategori dan Mengedit Kategori
![Tambah Kategori](images\foto_Tambah_Kategori.png)
![Edit Kategori](images\foto_Edit_Kategori.png)
7. About
![About](images\foto_About.png)