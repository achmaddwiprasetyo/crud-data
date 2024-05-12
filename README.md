## Panduan Penggunaan

- Buat sebuah database di `phpmyadmin` dengan nama database `inventory`
- Tabel database berada di folde db
- Lakukan <b>Import</b> database dari folder `database` kedalam database yang dibuat pada phpmyadmin
- Sebuah file `koneksi.php` berada di folder system untuk mengatur koneksi ke database sebagai berikut :
  ```php
      <?php
      $conn = mysqli_connect($host, $username, $password, $database);
      ?>
  ```
  - hostnama deafult localhost
  - username biasanya root default
  - password jika ada kalo tidak di kosongkan saja
  - inventory nama database.
- Terakhir jalankan aplikasi di Localhost server anda.

### Menggunakan Template adminLTE
- Cek disini [adminLTE](https://github.com/ColorlibHQ/AdminLTE)
