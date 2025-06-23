### ⚪ White Box Testing

| No | Nama Fungsi / File         | Alur yang Diuji                                                                 | Deskripsi Alur                                                                 | Status |
|----|----------------------------|----------------------------------------------------------------------------------|--------------------------------------------------------------------------------|--------|
| 1  | `login.php`                | Validasi autentikasi user                                                        | Mengecek username dan password pada tabel `users`                             | ✅     |
| 2  | `soal.php`                 | Pengambilan soal acak                                                            | Fungsi `ORDER BY RAND() LIMIT 10` pada query                                   | ✅     |
| 3  | `session` check            | Cek jika user belum login                                                        | `if (!isset($_SESSION['user_id'])) header('Location: index.php');`            | ✅     |
| 4  | `submit_jawaban.php`       | Logika pengecekan jawaban dan navigasi ke soal berikutnya atau ulang            | Mengecek apakah jawaban user == jawaban database, lalu menyimpan progres      | ✅     |
| 5  | `next_soal.php`            | Perpindahan antar soal                                                           | Cek indeks soal ke-n dan tampilkan soal selanjutnya jika benar                 | ✅     |
| 6  | `quiz_end.php`             | Proses akhir dari level kuis                                                     | Menyimpan hasil skor per level, redirect ke dashboard                          | ✅     |
| 7  | Validasi input             | Filter user input agar tidak menyebabkan SQL Injection                          | Penggunaan `prepare()` dan `execute()` untuk mencegah query langsung           | ✅     |
