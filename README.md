# Flow aplikasi
1. user membeli tiket di website (untuk bagian payment di script ini tidak ada dianggap sudah bayar silahkan sesuaikan dengan payment gateway pilihan anda)
2. setelah checkout selesai system akan mengirim data via email dengan cronjob & silhakan ubah code dengan konsep looping
   <code>(url cronjob: website.com/sendemail)</code>
3. didalam email user menerima link untuk melihat barcode
4. scan barcode tersebut ketika akan masuk ke acara event
5. sesudah di scan status barcode akan menjadi "terpakai" barcode tidak bisa lagi digunakan. pada bagian cek barcode juga tersedia logika ketika barcode tidak ada alias barcode palsu sistem akan menampikan respon bahwa tiket dengan data tersebut tidak ada.
6. user/pengunjung event berhasil masuk ke acara.

# Melakukan order
<img src="https://i.ibb.co/GQcp8Y3/order.gif">
ini bukan full aplikasi hanya core / inti dari sebuah web tiket online anda bisa kembangkan lagi seAdvance mungkin.

# Menerima email & melihat QRcode
<img src="https://i.postimg.cc/vTtFkCnw/email-cek-QR.gif">

# Scan barcode

<img src="https://i.ibb.co/pwyymC3/Scan-Barcode-1.gif">


# konfigurasi
pada script/aplikasi ini hanya ada 1 konfigurasi yaitu konfigurasi email untuk mengirim barcode,
<img src="https://i.ibb.co/jkXX7F9/set.png">

