### ⚫ Gray Box Testing

| No | Kasus Pengujian           | Akses Kode & UI                 | Skenario                                                                | Hasil yang Diharapkan                                        | Status |
|----|----------------------------|----------------------------------|------------------------------------------------------------------------|---------------------------------------------------------------|--------|
| 1  | Soal Tidak Muncul         | Cek SQL query dan tampilan      | Level tinggi (15 ke atas), soal tidak tampil                          | Ternyata `questions` tidak memiliki soal untuk level tersebut | ✅     |
| 2  | Reset Progres Level       | Hapus sesi dan login ulang      | Setelah login ulang, progres kuis masih ada karena tersimpan di DB     | Perlu fitur reset progres manual oleh user                    | ⚠️     |
| 3  | Uji Timeout Session       | Session dihapus saat user jawab | Hapus sesi lalu akses `/soal.php?level=1`                             | Redirect ke login halaman                                     | ✅     |
| 4  | Ganti Level Manual        | Akses URL `soal.php?level=99`   | Tidak ada soal di level tersebut, namun halaman tetap mencoba tampil   | Tampilkan pesan "Soal tidak tersedia"                         | ⚠️     |
| 5  | Masukkan SQL Injection    | Coba input `' OR 1=1 --`         | Input ke form login                                                    | Login gagal, artinya input tervalidasi                        | ✅     |
