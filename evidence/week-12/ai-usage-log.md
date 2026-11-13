## Penggunaan AI – Test Cascade Course dan Test Cascade Participant

**Tujuan:** Membantu proses pengujian relasi dan fitur cascade delete pada sistem KursusKu Laravel.

**Bantuan AI yang digunakan:**
1. Memberikan panduan penggunaan Laravel Tinker untuk membuat data dummy Course, Participant, dan Enrollment.
2. Membantu menyusun perintah untuk menguji penghapusan Course dan memastikan Enrollment yang terhubung ikut terhapus.
3. Membantu menyusun perintah untuk menguji penghapusan Participant dan memastikan Enrollment yang terhubung ikut terhapus.
4. Membantu mengatasi kendala panjang karakter pada kolom `code` ketika membuat data Course dummy.
5. Memberikan panduan pemeriksaan hasil pengujian dan pengambilan screenshot bukti.

**Hasil penggunaan AI:**
- Test Cascade Course berhasil. Ketika Course dihapus, Enrollment terkait ikut terhapus, sedangkan Participant tetap tersimpan.
- Test Cascade Participant berhasil. Ketika Participant dihapus, Enrollment terkait ikut terhapus, sedangkan Course tetap tersimpan.

**Verifikasi:** Seluruh perintah dijalankan dan hasilnya diperiksa secara langsung melalui Laravel Tinker.

**Peran pengguna:** Menjalankan perintah, memeriksa hasil pengujian, dan mengambil screenshot dokumentasi.

**Peran AI:** Memberikan panduan langkah-langkah, contoh perintah, dan bantuan pemecahan masalah.