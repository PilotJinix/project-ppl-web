-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2020 pada 04.51
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'agungsantoso557@gmail.com', '12345678', '2020-12-19 19:35:26', '2020-12-19 19:35:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ajuan_produk_mitra`
--

CREATE TABLE `ajuan_produk_mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ajuan_user`
--

CREATE TABLE `ajuan_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomer_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', '1608430842_apel.jpg', '<p>Ini Apel</p>', '2020-12-20 02:20:42', '2020-12-20 02:20:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_checkout`
--

CREATE TABLE `detail_checkout` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `struk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label_alamat_penerima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum',
  `status_checkout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Pembayaran',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_checkout`
--

INSERT INTO `detail_checkout` (`id`, `jumlah`, `metode_pembayaran`, `batas_pembayaran`, `biaya_pengiriman`, `diskon`, `total_harga`, `nama_penerima`, `email_penerima`, `no_hp_penerima`, `alamat_penerima`, `struk`, `label_alamat_penerima`, `kode_pos_penerima`, `kurir`, `resi`, `review`, `status_checkout`, `user_id`, `produk_id`, `created_at`, `updated_at`, `time`) VALUES
(2, '12', 'Bank Mandiri', '20 December 2020 11:37', '0', '12', '264000', 'Muhammad Agung santoso', 'agungsantoso557@gmail.com', '82298252552', 'jlkksksksksksk, Arjasa, Jember, Jawa Timur', '1608435477_timun.png', NULL, '7071', 'TIKI-REGULER SERVICE', '12345678910', 'belum', 'Proses Pengiriman', 1, 3, '2020-12-20 03:37:39', '2020-12-20 03:37:39', '1608439055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_14_045116_create_table_ajuan_user', 1),
(4, '2020_11_14_064848_create_product_table', 1),
(5, '2020_11_15_131057_create_detail_checkout_table', 1),
(6, '2020_11_16_151334_create_review_product_table', 1),
(7, '2020_11_24_174509_create_patokan_harga_table', 1),
(8, '2020_11_26_063307_create_ajuan_produk_mitra_table', 1),
(9, '2020_12_04_213650_create_blog_table', 1),
(10, '2020_12_07_191046_create_admin_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patokan_harga`
--

CREATE TABLE `patokan_harga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1 kg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `patokan_harga`
--

INSERT INTO `patokan_harga` (`id`, `nama_barang`, `jenis`, `harga`, `berat`, `created_at`, `updated_at`) VALUES
(1, 'Apel', 'Buah', '15000', '1 kg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gambar`, `berat`, `kategori`, `diskon`, `kondisi`, `stok`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apel', '20000', '1608115096_1607836170_apel.jpg', '1', 'buah', '12', 'baru', '15', 'Ini Apel', '', '2020-12-20 02:29:02', '2020-12-20 02:29:02'),
(3, 'Timun', '25000', '1608435270_timun.png', '1', 'sayuran', '12', 'Baru', '0', '<p>Ini Timun</p>', NULL, '2020-12-20 03:34:30', '2020-12-20 03:34:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review_product`
--

CREATE TABLE `review_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank-profile.webp',
  `nomer_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `email`, `email_verified_at`, `foto`, `nomer_hp`, `alamat`, `status`, `password`, `foto_ktp`, `nik`, `no_rekening`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Agung santoso', 'PilotJinix', 'agungsantoso557@gmail.com', NULL, 'blank-profile.webp', '82298252552', 'Jl kaliurang perum green garden regency blok c 1 no 27', 'user', '$2y$10$Yo.E5Ea139UNOV6gYGkDmuZEYJY16reESZX0B0lAfVivgl3afypwm', NULL, NULL, NULL, NULL, '2020-12-19 19:34:25', '2020-12-19 19:34:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ajuan_produk_mitra`
--
ALTER TABLE `ajuan_produk_mitra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ajuan_produk_mitra_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `ajuan_user`
--
ALTER TABLE `ajuan_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ajuan_user_email_unique` (`email`),
  ADD KEY `ajuan_user_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_checkout`
--
ALTER TABLE `detail_checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_checkout_user_id_foreign` (`user_id`),
  ADD KEY `detail_checkout_produk_id_foreign` (`produk_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `patokan_harga`
--
ALTER TABLE `patokan_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review_product`
--
ALTER TABLE `review_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_product_user_id_foreign` (`user_id`),
  ADD KEY `review_product_produk_id_foreign` (`produk_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ajuan_produk_mitra`
--
ALTER TABLE `ajuan_produk_mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ajuan_user`
--
ALTER TABLE `ajuan_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_checkout`
--
ALTER TABLE `detail_checkout`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `patokan_harga`
--
ALTER TABLE `patokan_harga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `review_product`
--
ALTER TABLE `review_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ajuan_produk_mitra`
--
ALTER TABLE `ajuan_produk_mitra`
  ADD CONSTRAINT `ajuan_produk_mitra_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ajuan_user`
--
ALTER TABLE `ajuan_user`
  ADD CONSTRAINT `ajuan_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_checkout`
--
ALTER TABLE `detail_checkout`
  ADD CONSTRAINT `detail_checkout_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_checkout_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `review_product`
--
ALTER TABLE `review_product`
  ADD CONSTRAINT `review_product_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_product_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
