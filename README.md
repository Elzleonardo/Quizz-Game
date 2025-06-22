# 🧠 Quiz Game Matematika
**Quiz Game Matematika** adalah game edukatif berbasis web untuk melatih kemampuan berhitung pengguna (penjumlahan, pengurangan, perkalian, pembagian). Aplikasi ini memiliki 20 level, masing-masing terdiri dari 10 soal yang ditampilkan secara satu per satu. Cocok untuk latihan siswa dan pengujian kemampuan logika dasar.

---

## 📌 Fitur Utama

- ✅ **Login & Register** (dengan validasi username dan password)
- 📊 **Dashboard pengguna**
- 🎮 **Level dari 1–20**, dengan tingkat kesulitan meningkat
- 🔢 **Soal matematika acak**: tambah, kurang, kali, bagi
- 🔔 **Notifikasi**:
  - Benar: lanjut ke soal berikutnya
  - Salah: tidak bisa lanjut sebelum benar
- 👤 **Halaman Profil**
---

## ⚙️ Teknologi yang Digunakan

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL (phpMyAdmin)
- **Desain UI**: CSS manual, layout responsif di tengah

---

## 🗂️ Struktur Direktori

```
quiz-game/
├── assets/
│   ├── css/
│   └── js/
├── db/
│   └── database.sql
├── includes/
│   └── koneksi.php
├── login.php
├── register.php
├── dashboard.php
├── quiz.php
├── profile.php
├── logout.php
├── README.md
```

---

## 🛠️ Cara Menjalankan Aplikasi di Localhost

### 1. Persiapan
- Instal **XAMPP** atau **Laragon**
- Jalankan **Apache** dan **MySQL**

### 2. Import Database
- Buka **phpMyAdmin**
- Buat database dengan nama: `quiz_game`
- Import file `database.sql` yang ada di folder `db/`

### 3. Letakkan Proyek
- Ekstrak isi `quiz-game2.zip` ke dalam folder:
  - `htdocs/` (untuk XAMPP)
  - atau `www/` (untuk Laragon)

### 4. Jalankan dari Browser
Buka URL:
```
http://localhost/quiz-game2/login.php
```

### 5. Akun Default
```
Username: elza23
Password: kadal2323
```

---

## 🧪 Pengujian

### ✅ White Box Testing
- Cek struktur kode PHP & JavaScript
- Validasi input dan alur logika

### ✅ Black Box Testing
- Uji UI/UX tanpa melihat kode
- Uji tampilan soal dan respon sistem

### ✅ Gray Box Testing
- Coba manipulasi session & URL
- Uji langsung lewat form dan struktur request

---

## 📈 Rencana Pengembangan

- ⏱️ Timer untuk tiap soal
- 🧾 Pembahasan setiap soal
- 🧑‍🤝‍🧑 Mode multiplayer dan leaderboard

---

## 🧑‍💻 Kontributor

- **Programer:** Elsa Nur Aripin
- **Tester:** M.suara
