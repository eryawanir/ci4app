dijalanin nya pake local host biasa, maksudnya simpen di htdocs, pake xampp, terus buka di localhost/ci4app

STUDI KASUS
1.	Halaman Pendaftaran 
Fungsi : Menginput data pasien ke tabel pasien
	Mengedit data pasien
	Mencari data pasien
	Membuat rekam medis baru
	 
	
a.	Form Pasien/Penanggung jawab:
Berisi kolom input untuk data pasien, kolom search, tombol reset 

-	Jika pasien sudah pernah mendaftar maka tidak perlu mengisi form data pasien dan data penanggung jawab, 
melainkan dengan cara mencari data pasien dengan kata kunci nama pasien pada kolom cari pasien. 
Sehinga form data pasien akan terisi otomatis. 
Bila data pada form tersebut diubah artinya data pasien ter-update (berubah) ketika diklik tombol daftar pada form rekam medis.

-	Jika belum pernah mendaftar maka langsung mengisi form data pasien tanpa perlu mencari terlebih dahulu. 
Data tersebut akan tersimpan ketika diklik tombol daftar pada form rekam medis.

-	Jika data pasien tidak diketahui  secara lengkap maka pendaftaran tetap dapat dilakukan, dan pasien dianggap sebagai pasien yang belum pernah mendaftar.

-	Ada tombol reset untuk mengatur ulang  Form Pasien/Penanggung jawab menjadi kosong.

b.	 Form Rekam Medis
Berisi kolom input diagnosa, bed, triase, tombol daftar dan tampilan no rekam medis

-	Semua kolom wajib diisi jika mau mendaftar
-	Ketika di klik daftar, akan membuat rekam medis baru dengan mengisi foreign key id pasien pada record data rekam medis dan menjadikan status pasien menjadi aktif.

2.	Halaman Pasien Aktif
Fungsi : Menampilkan tabel data pasien aktif
	Melihat detail pasien
	Mengedit data pasien aktif
	Mencari pasien

Pasien aktif artinya pasien yang telah memiliki rekam medis baru (sedang dalam masa perawatan)

a.	Tabel Pasien aktif
Nama pasien, bed, diagnosa, triase,  dokter, tombol detail, pencarian

b.	Tombol detail
Ketika di klik akan menampilkan data pasien beserta rekam medis
Bisa menambah tindakan
Bisa mengedit data


3.	Halaman Rekam medis
Menampilakan seluruh rekam medis yang sedang dalam masa perawatan dan telah selesai masa perawatan
a.	Tabel rekam medis 
Nama pasien,diagnosa, rekam medis,  dokter, status,  tombol detail, pencarian
b.	Tombol detail
Ketika di klik akan menampilkan data pasien beserta rekam medis
Bisa menambah tindakan
Bisa mengedit data

4.	Pembayaran
Fungsi : Mencari transaksi berdasarkan nama pasien
	Untuk melihat atau mencetak biaya
	Untuk transaksi lunas/tertunggak

a.	Tabel Pasien
b.	Cetak Pembayaran
c.	Tombol Status Pelunasan
