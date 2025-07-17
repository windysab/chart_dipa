# Dashboard Perkara PA Amuntai - Documentation

## Overview
Dashboard ini telah diperbaiki dan ditingkatkan untuk memberikan visualisasi data perkara yang lebih elegan dan informatif. Dashboard menggunakan data dari `CCTVModel3` untuk menampilkan statistik perkara secara real-time.

## Fitur Utama

### 1. Statistik Tahunan
- **Total Perkara**: Jumlah seluruh perkara dalam tahun berjalan
- **Perkara e-Court**: Jumlah perkara yang diajukan melalui sistem e-Court
- **Persentase e-Court**: Presentase digitalisasi perkara
- **Perkara Non e-Court**: Jumlah perkara yang diajukan secara manual

### 2. Visualisasi Chart
- **Pie Chart e-Court vs Non e-Court**: Perbandingan visual antara perkara digital dan manual
- **Bar Chart Bulanan**: Statistik perkara bulanan (Diterima, Putus, Minutasi, Sisa)
- **Horizontal Bar Chart Jenis Perkara**: Analisis berdasarkan jenis perkara
- **Doughnut Chart Mediasi**: Statistik hasil mediasi

### 3. Statistik Bulanan Detail
- **Perkara Diterima**: Jumlah perkara yang diterima bulan ini
- **Perkara Putus**: Jumlah perkara yang telah diputus
- **Perkara Minutasi**: Jumlah perkara yang telah diminutasi
- **Sisa Perkara**: Jumlah perkara yang masih dalam proses

### 4. Analisis Jenis Perkara
Menampilkan distribusi perkara berdasarkan kategori:
- Cerai Gugat
- Cerai Talak
- Asal Usul Anak
- Istbat Nikah
- Dispensasi Nikah
- Ahli Waris
- Dan jenis lainnya

### 5. Statistik Mediasi
- **Mediasi Berhasil**: Perkara yang berhasil dimediasi
- **Mediasi Gagal**: Perkara yang gagal dimediasi
- **Mediasi Sebagian**: Perkara dengan mediasi sebagian berhasil
- **Mediasi Ditunda**: Perkara dengan mediasi yang ditunda
- **Mediasi Dicabut**: Perkara dengan mediasi yang dicabut

### 6. Indikator Kinerja
- **Clearance Rate**: Persentase perkara yang diselesaikan
- **Terdaftar vs Diputus**: Perbandingan perkara masuk dan keluar
- **Efektivitas Proses**: Analisis kinerja pengadilan

## Fitur Interaktif

### 1. Animasi dan Efek Visual
- Hover effects pada kartu statistik
- Counter animation untuk angka
- Loading animations
- Smooth transitions

### 2. Responsive Design
- Tampilan optimal di desktop, tablet, dan mobile
- Grid system yang fleksibel
- Typography yang responsif

### 3. Keyboard Shortcuts
- `Ctrl + P`: Print dashboard
- `Ctrl + R`: Refresh data

### 4. Floating Action Buttons
- **Print Button**: Untuk mencetak dashboard
- **Refresh Button**: Untuk memperbarui data

### 5. Export Features
- Export data ke berbagai format
- Print functionality
- Real-time data updates

## Teknologi yang Digunakan

### Frontend
- **HTML5**: Struktur semantik
- **CSS3**: Styling dengan gradients dan animations
- **JavaScript ES6**: Interaktivitas dan animasi
- **Bootstrap 4**: Responsive framework
- **AdminLTE 3**: Admin template
- **Chart.js**: Library untuk visualisasi data
- **Font Awesome**: Icon library

### Backend
- **PHP 7+**: Server-side programming
- **CodeIgniter 3**: PHP framework
- **MySQL**: Database management
- **MVC Architecture**: Clean code structure

### Styling Features
- **Gradient Backgrounds**: Modern visual appearance
- **Box Shadows**: Depth and dimension
- **Border Radius**: Rounded corners
- **Hover Effects**: Interactive feedback
- **Custom Animations**: Smooth transitions

## File Structure

```
dashboard/
├── controllers/
│   └── Dashboard.php (Controller utama)
├── models/
│   └── CCTVModel3.php (Model data)
├── views/
│   ├── dashboard.php (View utama)
│   └── template/
│       ├── new_header.php
│       └── new_footer.php
├── assets/
│   ├── css/
│   │   └── dashboard-custom.css (Styling kustom)
│   └── js/
│       └── dashboard-interactive.js (JavaScript kustom)
```

## Konfigurasi Data

Dashboard menggunakan method dari `CCTVModel3`:
- `getPerkaraData($year, $month)`: Data perkara berdasarkan jenis
- `getTotalPerkaraData($year, $month)`: Total statistik perkara
- `getMediasiData($year, $month)`: Data hasil mediasi
- `getJumlahPerkaraTerdaftar($year, $month)`: Jumlah perkara terdaftar
- `getJumlahPerkaraDiputus($year, $month)`: Jumlah perkara diputus
- `getSisaPerkara($year, $month)`: Sisa perkara
- `getEfilingData($year, $month)`: Data e-filing

## Customization

### Menambah Chart Baru
1. Tambahkan method di `CCTVModel3.php`
2. Panggil method di `Dashboard.php`
3. Buat element canvas di `dashboard.php`
4. Tambahkan JavaScript Chart.js

### Mengubah Warna Theme
1. Edit `dashboard-custom.css`
2. Ubah variabel gradient di bagian `.bg-gradient-*`
3. Sesuaikan warna hover effects

### Menambah Animasi
1. Edit `dashboard-interactive.js`
2. Tambahkan CSS animation di `dashboard-custom.css`
3. Panggil function di `initializeDashboard()`

## Performance Tips

1. **Lazy Loading**: Chart dimuat setelah DOM ready
2. **Caching**: Data di-cache untuk mengurangi query database
3. **Optimized Queries**: Query database dioptimalkan
4. **Responsive Images**: Menggunakan vector icons (Font Awesome)
5. **Minified Assets**: CSS dan JS dalam format minified

## Browser Compatibility

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+
- Internet Explorer 11+ (limited support)

## Troubleshooting

### Chart Tidak Muncul
1. Pastikan Chart.js ter-load dengan benar
2. Periksa data yang dikirim dari controller
3. Cek console browser untuk error JavaScript

### Style Tidak Terapply
1. Pastikan `dashboard-custom.css` ter-load
2. Clear browser cache
3. Periksa path file CSS

### Data Tidak Update
1. Periksa koneksi database
2. Cek method di `CCTVModel3.php`
3. Pastikan parameter tahun dan bulan benar

## Future Enhancements

1. **Real-time Updates**: WebSocket untuk update real-time
2. **Advanced Filters**: Filter berdasarkan periode, jenis perkara, dll
3. **Export to Excel**: Export data ke format Excel
4. **Dashboard Customization**: User dapat customize layout
5. **Notification System**: Notifikasi untuk data penting
6. **Mobile App**: Aplikasi mobile untuk monitoring

## Contact

Untuk pertanyaan atau bantuan, hubungi:
- **Developer**: Windy Sabtami, S.Kom
- **GitHub**: https://github.com/windysab
- **Year**: 2024
