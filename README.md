# SI Akademik - Praktikum Minggu 3

Project ini sudah dilengkapi:
- Authentication sederhana (admin / 12345)
- Session login
- Logout
- AuthMiddleware
- Dashboard
- Fitur Mahasiswa
- Fitur Dosen dengan Model Dosen
- Routing di routes/web.php
- URL rewriting dengan public/.htaccess
- URL bersih: /login, /dashboard, /mahasiswa, /dosen, /logout

## Menjalankan dengan Laragon
1. Letakkan folder `si-akademik2` di `C:/laragon/www/`.
2. Jalankan Apache di Laragon.
3. Buka:
   http://localhost/si-akademik2/public/login
4. Login dengan:
   Username: admin
   Password: 12345

Catatan: Jika nama folder project diganti (misalnya `si-akademik3`), ubah semua `/si-akademik2/public/` pada file controller/view menjadi nama folder baru.
