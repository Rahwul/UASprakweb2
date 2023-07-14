-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2023 pada 16.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'Baju'),
(2, 'Celana'),
(3, 'Jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan_audit`
--

CREATE TABLE `pelanggan_audit` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `nama_pemesan` varchar(45) DEFAULT NULL,
  `alamat_pemesan` varchar(45) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `jumlah_pesanan` int(11) DEFAULT 0,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(3, '2023-05-15', 'dfgkhskjghsklghlkh', 'dvgsdgbsrhbdbd', '346463653653', 'adfafadfvsdvsdv@gmail.conm', 80000, 'wgwrhehrtjhrjnrjf', 1),
(4, '2023-05-15', 'sdvdvdsv', 'sfasfdsfsdgsdgsgsgsg', '346463653653', 'samamirul@gmail.com', 80000, 'wgwrhehrtjhrjnrjf', 9),
(5, '2023-07-13', 'Alfan', 'gg boan', '089607499492', 'alfanridho507@gmail.com', 1, 'kirim yang bagus', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga_jual` double DEFAULT 0,
  `harga_beli` double DEFAULT 0,
  `stok` int(11) DEFAULT 0,
  `min_stok` int(11) DEFAULT 0,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `gambar`, `kategori_produk_id`) VALUES
(1, 'BJ01', 'Kaos Puma Hitam', 90000, 55000, 90, 1, 'Bahan cvc bandung build up tanpa jahitan samping', '1689339491_BJ01.jpg', 1),
(2, 'BJ02', 'Kaos Polo Puma Biru', 80000, 55000, 90, 1, '100% cotton ring spun preshrunk jersey knit 180g/m2', '1689339568_BJ02.jpg', 1),
(3, 'CL01', 'Kaos Art Hitam', 90000, 55000, 100, 1, 'Bahan 2% Polyster / 8% elastane|2 saku samping| Pinggang Karet', '1689339762_BJ03.jpg', 1),
(4, 'BJ03', 'Kaos Puma Hitam', 80000, 55000, 100, 1, 'Bahan Cotton Combed 20s Jahitan samping', '1689339818_BJ03.jpg', 1),
(5, 'JM01', 'Jam Analog Fossil Hitam', 700000, 600000, 80, 1, 'Diameter 4,2Cm|Tali Kulit|Free Battery', '1689339844_JM01.jpg', 3),
(6, 'JM02', 'Jam Cartier Roadster', 700000, 550000, 60, 1, 'Hitam|Diameter 4,2Cm|Water Resistant 100|Tali Kulit|Free Battery', '1689339871_JM02.jpg', 3),
(7, 'JM03', 'Oppo Band 2021 SmartWatch', 359000, 300000, 80, 1, 'Layar AMOLED 1,1 Inch|Water Resistant 50m|12 Training Modes', '1689339892_JM03.png', 3),
(8, 'LS01', 'Celana Joger Benetion Abu', 150000, 135000, 100, 1, 'Bahan 2% Polyster / 8% elastane|2 saku samping| Pinggang Karet', '1689339913_LS01.jpg', 2),
(9, 'LS02', 'Celana Joger NIKE Hitam', 195000, 175000, 100, 1, 'Bahan 2% Polyster / 8% elastane|2 saku samping| Pinggang Karet', '1689339932_LS02.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin','manager') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Aziz', 'Abdul291@gmail.com', NULL, '$2y$10$EMxh1BZoeOzqoiqb0g9oeO.KPlg4VTxRBnw6xwuFSLNuc3hKq640C', 'user', NULL, '2023-07-12 23:38:07', '2023-07-12 23:38:07'),
(2, 'Soultan Amirul Mukminin', 'soultanamirulmukminin@gmail.com', NULL, '$2y$10$8kCw.LSq2i/r54u.cOhhyuq3SVhGpWJI79uA38ZxQXZMA/1zwk8tq', 'admin', NULL, '2023-07-12 23:38:09', '2023-07-12 23:38:09'),
(3, 'Rojul', 'Rojulman@gmail.com', NULL, '$2y$10$egr9SvhePPXKNTXJIq26e.ZFmKC2Z1d3aiynBICvNjaHlI6arGFwW', 'manager', NULL, '2023-07-12 23:38:09', '2023-07-12 23:38:09'),
(4, 'alfan', 'alfanridho@gmaiil.com', NULL, '$2y$10$m2S0wJjZg/j1U0fHwYQZV.ze4VPrZGFV/ThaaNfQSUuZJE2NuPdsy', 'admin', NULL, '2023-07-14 04:32:04', '2023-07-14 04:32:04'),
(5, 'alfan', 'alfanridho507@gmail.com', NULL, '$2y$10$rIK3ykDSvX5Q8UnIDS.Sp.Tvo7t/Hg.sLTiKJoT1RT6onZ1ykqRTi', 'user', NULL, '2023-07-14 04:54:25', '2023-07-14 04:54:25'),
(6, 'alfanaa', 'aaaaaa@gmail.com', NULL, '$2y$10$f31XHen6CK60yWibBlsSK.Xl/CkoEZ3m1MqsY.e28iywB.ou7W8e6', 'admin', NULL, '2023-07-14 04:58:21', '2023-07-14 04:58:21'),
(7, 'alfan', 'alfanridho517@gmail.com', NULL, '$2y$10$lddr3BWLVael2PXxdaQT8.Vn1mFXszV9i1MPyOZNOkSuTiWy/e9EW', 'manager', NULL, '2023-07-14 06:21:22', '2023-07-14 06:21:22'),
(8, 'alfan', 'baru5308@gmail.com', NULL, '$2y$10$yYSQJKGsmXFk64khCCP0XeQr0.tmB0PCD/R3KgKlWdu4i9iRWscZq', 'user', NULL, '2023-07-14 06:57:10', '2023-07-14 06:57:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

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
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelanggan_audit`
--
ALTER TABLE `pelanggan_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `kategori_produk_id` (`kategori_produk_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggan_audit`
--
ALTER TABLE `pelanggan_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
