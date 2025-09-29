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
1. Tabel Arsip Surat<br>
![Arsip](public\images\foto_Arsip.png)<br>
2. Upload Arsip Surat<br>
![Mengupload Arsip](public\images\foto_Upload_Arsip.png)<br>
3. Warning Hapus Arsip Surat<br>
![Warning Menghapus Arsip](public\images\foto_Warning_Hapus.png)<br>
4. Menampilkan Arsip Surat<br>
![Show Arsip](public\images\foto_Show_Arsip.png)<br>
5. Tabel Kategori<br>
![Kategori](public\images\foto_Kategori.png)<br>
6. Menambahkan Kategori dan Mengedit Kategori<br>
![Tambah Kategori](public\images\foto_Tambah_Kategori.png)<br>
![Edit Kategori](public\images\foto_Edit_Kategori.png)<br>
7. About<br>
![About](public\images\foto_About.png)