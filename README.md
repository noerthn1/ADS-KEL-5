# HaloKlinik

- Proyek Akhir Mata Kuliah **Analisis Desain Sistem**
- Kelompok 6

## Asisten Praktikum
- Fitria Nuryantika
- Muhammad Ikhsan Ananda

## Team
<table>
  <thead>
      <th>No.</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Role</th>
  </thead>
  
  <tbody>
    <tr>
      <td>1.</td>
      <td>Nadiah Sahidah Ulya</td>
      <td>G6401201005</td>
      <td>Project Manager</td>
     </tr> 
    <tr>
      <td>2.</td>
      <td>Nur Sulthan Almuntaha</td>
      <td>G6401201009</td>
      <td>Back End Developer</td>
    </tr> 
    <tr>
      <td>3.</td>
      <td>Afiqah Nur Amalia</td>
      <td>G6401201021</td>
      <td>Front End Developer</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Safira Aninda Hasanah</td>
      <td>G6401201044</td>
      <td>UI/ UX Designer</td>
    </tr>
    </tbody>
</table> 

# HaloKlinik

## Problem Description

Pasien yang datang untuk berobat di poliklinik IPB seringkali mengalami antrian yang panjang dan memakan waktu yang cukup lama. Pasien juga harus mencari informasi sendiri atau datang langsung untuk memastikan apakah poliklinik sedang beroperasi atau tidak. Konten di sosial media akun poliklinik kurang informasi jadwal operasi dan kebanyakan hanya berisi konten. Selain itu, terdapat juga kasus ketika pasien tidak mendapatkan nomor antrian meski sudah menunggu dengan waktu yang lama di poliklinik. 

Oleh karena itu, sistem management poliklinik yang terintegrasi secara online diperlukan untuk memberikan kemudahan kepada pasien dalam reservasi nomor antrian secara online dan efisien. Hal ini akan membantu pasien dalam mengestimasi waktu keberangkatan ke poliklinik sesuai jadwal untuk berobat dan menghindari waktu tunggu yang lama di poliklinik.

## Kapabilitas Sistem

- Menampilkan jadwal pelayanan poliklinik
- Mendaftarkan pasien secara online untuk mendapatkan nomor antrian sesuai dengan sesi yang diinginkan
- Menampilkan nomor antrian yang sedang ditangani oleh dokter sehingga pasien dapat mengestimasi waktu keberangkatan sesuai dengan nomor antrian yang didapat
- Memperbarui nomor antrian yang sudah selesai diperiksa (status antrian) oleh admin

## Manfaat Sistem

- Memudahkan pasien yang ingin berobat untuk melihat jadwal pelayanan poliklinik
- Mendaftarkan diri untuk pemeriksaan secara online dan langsung mendapat nomor antrian
- Memantau nomor antrian sehingga pasien tersebut dapat mengestimasikan waktu keberangkatannya sehingga tidak perlu menunggu lama di poliklinik

## Actor
<table>
  <thead>
    <tr>
      <th>Pasien</th>
      <th>Admin</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Seorang pasien yang sedang sakit ingin mendaftarkan diri untuk berobat di poliklinik</td>
      <td>Seorang admin yang ingin menambahkan daftar antrian pasien dan monitor nomor antrian</td>
     </tr>   
    </tbody>
</table> 

## User Stories
<table>
  <thead>
      <th>No.</th>
      <th>Actor</th>
      <th>User Stories</th>
      <th>Acceptance Criteria</th>
  </thead>
   <tbody>
    <tr>
      <td>1.</td>
      <td>Pasien</td>
      <td>Sebagai seorang pasien, Nuri ingin melihat jadwal buka (operasional) poliklinik IPB sebelum datang ke poliklinik</td>
      <td> <ul> <li> Pasien berada di halaman jadwal pelayanan poliklinik pada website </li>
                <li> Ketika pasien memilih tanggal yang diinginkan terlihat jumlah kuota pasien pada sesi yang dipilih </li>
                <li> Pasien berhaasil mengetahui jadwal operasional poliklinik tanpa harus datang ke lokasi </li>
           </ul>
      </td>
     </tr>
      <tr>
      <td>2.</td>
      <td>Pasien</td>
      <td>Sebagai seorang pasien, Nuri ingin mendaftarkan diri ke poliklinik tanpa mengantri terlalu lama, sehingga ia bisa mengestimasi waktu kedatangan ke poliklinik </td>
        <td> <ul> <li> Pasien berada di halaman reservasi jadwal </li>
                  <li> Pasien melengkapi formulir reservasi jadwal kunjungan </li>
                  <li> Pasien telah terdaftar dan mendapat nomor antrian </li>
             </ul>
      </td>
     </tr>
     <tr>
      <td>3.</td>
      <td>Admin</td>
      <td>Sebagai seorang admin, Petra ingin menambah daftar pasien yang akan diperiksa sehingga pasien bisa menambah daftar pasien yang akan diperiksa sehingga pasien mendapat nomor antrian terkini </td>
        <td> <ul> <li> Admin memperbarui kuota pasien </li>
                  <li> Pasien mendapat nomor antrian terbaru </li>
             </ul>
      </td>
     </tr>
     <tr>
      <td>4.</td>
      <td>Admin</td>
      <td>Sebagai seorang admin, Petra ingin memperbarui nomor antrian yang sedang diperiksa sehingga nomor antrian pasien berikutnya dapat mempersiapkan diri </td>
        <td> <ul> <li> Admin memperbarui nomor antrian pasien yang sedang diperiksa </li>
                  <li> Pasien berada di halaman nomor antrian bisa melihat nomor antrian yang sedang diperiksa </li>      
             </ul>
      </td>
     </tr>
   </tbody>
</table>

## Use Case Diagram
![Use Case Diagram - Haloklinik](https://github.com/noerthn1/ADS-KEL-5/blob/main/system%20analyst/Use%20Case%20-%20Haloklinik.png)

## Activity Diagram

## Sequence Diagram
### Melihat Jadwal Pelayanan
![Sequence Diagram - Haloklinik (jadwal)](https://github.com/noerthn1/ADS-KEL-5/blob/main/system%20analyst/Sequence%20Diagram%20-%20Haloklinik%20(jadwal).png)

## Class Diagram
![Class Diagram - Haloklinik](https://github.com/noerthn1/ADS-KEL-5/blob/main/system%20analyst/Class%20Diagram%20-%20Haloklinik.jpg)



