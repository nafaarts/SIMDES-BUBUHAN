-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2022 pada 16.53
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdes_bubuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judulagenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalagenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agendas`
--

INSERT INTO `agendas` (`id`, `judulagenda`, `tanggalagenda`, `published_at`, `created_at`, `updated_at`) VALUES
(45, 'Turnamen 17 agustus dimana akan bertanding desa bubuhan melawan amarabu', '2022-09-30 00:00:00', NULL, '2022-09-01 16:38:22', '2022-09-01 16:38:22'),
(46, 'Lomba balap karung 17an di lapangan desa bubuhan', '2022-09-24 00:00:00', NULL, '2022-09-01 16:38:45', '2022-09-01 16:38:45'),
(47, 'Turnamen voli desa bubuhan akan bertanding melawan suak bulu', '2022-09-10 00:00:00', NULL, '2022-09-01 16:39:07', '2022-09-01 16:39:07'),
(48, 'Kegiatan menyambut bulan suci ramadhan', '2022-09-17 00:00:00', NULL, '2022-09-01 16:39:33', '2022-09-01 16:39:33'),
(52, 'Kedatangan Tamu Lawatan Dari Desa Amabaan', '2022-09-19 00:00:00', NULL, '2022-09-01 16:43:27', '2022-09-01 16:43:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `image`, `judul`, `excerpt`, `isi`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 'gambar-kegiatan/ovB8Xyl1GPvbX8qr1EH7U3wFUQiqeBumG01KflpL.jpg', 'Pembagian Sembako Kepada Masyarakat Kurang Mampu', '&nbsp;Ditengah pademi wabah Virus Corona (Covid-19), Koramil Rejoso membagikan sembako kepada warga masyarakat tidak mampu maupun dampak Covid-19. Turut serta Babinsa Koramil Rejoso Praka Sunardi&amp;...', '<div>&nbsp;Ditengah pademi wabah Virus Corona (Covid-19), Koramil Rejoso membagikan sembako kepada warga masyarakat tidak mampu maupun dampak Covid-19. Turut serta Babinsa Koramil Rejoso Praka Sunardi&amp;nbsp...\', Ditengah pademi wabah Virus Corona (Covid-19), Koramil Rejoso membagikan sembako kepada warga<br><br>&nbsp;masyarakat tidak mampu maupun dampak Covid-19. Turut serta Babinsa Koramil Rejoso Praka Sunardi&amp;nbsp; bersama Gugus Tugas Covid dan perangkat Desa Sidokare membagikan sembako kepada masyarakat tidak mampu maupun dampak Covid-19 langsung kesasaran di seputaran wilayah Desa Sidokare, Kecamatan Rejoso, Kabupaten Nganjuk. Jum\'at (11/12/2020).Babinsa selalu bersinergi dalam setiap kegiatan kewilayahan termasuk diantaranya kegiatan Bhakti sosial membagikan sembako kepada warga masyarakat tidak mampu maupun dampak Covid-19. Suatu kepedulian terhadap masyarakat dan lingkungan dalam mengatasi berbagai aspek kegiatan.&nbsp;</div>', NULL, '2022-08-30 06:39:11', '2022-08-30 06:39:11'),
(3, 'gambar-kegiatan/CrgNhESuUmhgFyZkdvlalVFbFcopUHu5xN152HlD.jpg', 'KEGIATAN KERJA BAKTI MEMBERSIHKAN LINGKUNGAN', 'Salah satu kebudayaan yang menjadi identitas masyarakat desa adalah kerja bakti. Kegiatan ini biasanya dilakukan masyarakat sekitar secara bersama-sama, dengan tujuan melakukan kegiatan Salah satu keb...', '<div>Salah satu kebudayaan yang menjadi identitas masyarakat desa adalah kerja bakti. Kegiatan ini biasanya dilakukan masyarakat sekitar secara bersama-sama, dengan tujuan melakukan kegiatan Salah satu kebudayaan yang menjadi identitas masyarakat desa adalah kerja bakti. Kegiatan ini biasanya dilakukan masyarakat sekitar secara bersama-sama, dengan tujuan melakukan kegiatan tertentu salah satunya adalah&amp;nbsp; kerja bakti bertujuan untuk membangun infrastruktur atau<br><br>&nbsp;membersihkan lingkungan sekitar yang dilaksanakan secara gotong royong.Di Desa Bubuhan kerja bakti masih sering dilaksanakan meskipun dalam pelaksanaanya belum rutin tiap minggu atau tiap bulan , seperti membangun rabat jalan, membersihkan jalan ataupun lingkungan sekitar, membersihkan saluran irigasi dan kegiatan kegiatan lainnya.Bertepatan hari Minggu kemarin tanggal 05 Juli 2022 perangkat desa Bubuhan, bersama dengan Kepala Desa dan juga warga lingkungan sekitar melakukan kegiatan kerja bakti membersihkan jalan poros desa.Kegiatan Membersihkan Jalan Desa<br><br>Kerja bakti membersihkan lingkungan dilakukan untuk menciptakan lingkungan yang sehat, bebas dari kotoran, sampah dan rumput, pohon yang sudah rimbun. Dengan lingkungan yang sehat, kita tidak akan mudah terserang berbagai penyakit. Kebersihan lingkungan juga sangat berpengaruh terhadap kenyamanan, keindahan dan keasrian lingkungan.Kepala Desa Nangkasawit, Heri Sucipto mengatakan “Tujuan dari diadakannya kegiatan bersih-bersih ini adalah membersihkan lingkungan Desa Nangkasawit agar selalu asri dan nyaman bagi kita semua. Karena di musim panca roba seperti ini banyak penyakit yang timbul, sehingga dengan mengadakan kegiatan seperti ini, sedikit tidaknya kita bersama-sama mengurangi sumber penyakit dari lingkungan yang kotor” “Selain untuk menjaga kebersihan, kegiatan ini juga bertujuan untuk membina hubungan sosial masyarakat khususnya di desa nangkasawit ini” jelasnya. Kegiatan dilaksanakan mulai pukul 07.00 WIB. Dengan penuh semangat warga Desa Nangkasawit membersihkan lingkungan di sepanjang jalan lingkungan Desa Nangkasawit&nbsp;</div>', NULL, '2022-08-30 06:52:24', '2022-08-30 06:52:24');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_26_080938_create_proyeks_table', 1),
(6, '2022_07_26_081104_create_kegiatans_table', 1),
(7, '2022_07_26_081123_create_perangkats_table', 1),
(8, '2022_08_05_134206_create_agendas_table', 1),
(9, '2022_08_05_134753_create_surats_table', 1);

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
-- Struktur dari tabel `perangkats`
--

CREATE TABLE `perangkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perangkats`
--

INSERT INTO `perangkats` (`id`, `image`, `nama`, `jabatan`, `notelpon`, `created_at`, `updated_at`) VALUES
(1, 'gambar-perangkat/Ymd73zEsQzUfysHga12Kw46BkN6v84TFFLZSI0aU.png', 'Sahrian', 'kepala desa', '082298002282288', '2022-08-30 06:48:50', '2022-08-30 06:48:50'),
(2, 'gambar-perangkat/jXAZaCVWLzCufX1v1xpcoRFK85URQk1kOINAnKOj.png', 'Khairawan', 'Skretaris Desa', '082298002282288', '2022-08-30 06:58:08', '2022-08-30 06:58:08'),
(3, 'gambar-perangkat/ZF489aCNq8IcKG7HKQAW6wcekj738S47XEPktXsH.png', 'Juni Sartika', 'Kasi Pemerintahan', '082298002282288', '2022-08-30 06:58:44', '2022-08-30 06:58:44'),
(4, 'gambar-perangkat/ATXOtydMro7xxKfhuFg4ZzVP4EJP2qZBqQVRepyp.png', 'Amril Danis', 'Kasi Kesejahtraan', '082298002282288', '2022-08-30 06:59:08', '2022-08-30 06:59:08'),
(5, 'gambar-perangkat/L0TIxk2LXPQmtnUArhTZfNuZUYz1r9RQt20PcXQ9.png', 'Arda Nius', 'Kasi Pelayanan', '082298002282288', '2022-08-30 06:59:24', '2022-08-30 06:59:24'),
(6, 'gambar-perangkat/sFyCXwr0pjRFv61gJi5W2B8ivF8s5NgStqPFBFUp.png', 'Muriadi Candra', 'Kaur Umum', '082298002282288', '2022-08-30 06:59:45', '2022-08-30 06:59:45'),
(7, 'gambar-perangkat/p3KTMlrN6nuUs4OdH70jlQnSYfd3nIYFP8zfL1Dt.png', 'Oktra Ozi Romansyah', 'Kaur Keuangan', '082298002282288', '2022-08-30 07:00:57', '2022-08-30 07:00:57'),
(8, 'gambar-perangkat/soTLMGh2dqiKqPO7FGiqSgFxkHdQVQvQZLm7zzuX.png', 'M.Roni Rizki', 'Kaur Perencanaan', '082298002282288', '2022-08-30 07:01:33', '2022-08-30 07:01:33'),
(9, 'gambar-perangkat/HLRd7pUaUQi3lowvieqqNEkyFK1qWn4HBcPDLcqI.png', 'Mustari', 'Kepala Dusun Suangking', '082298002282288', '2022-08-30 07:02:00', '2022-08-30 07:02:00'),
(10, 'gambar-perangkat/tXGUPvWPRaHpJLMUyQ4ipOBTr0ek815BW8p0rPux.png', 'M.Roni', 'Kepala Dusun Ikhlas', '082298002282288', '2022-08-30 07:02:24', '2022-08-30 07:02:24'),
(11, 'gambar-perangkat/T00G2Qq2AYJHoFKwq281751DUINkmlB4smuNYUaw.png', 'Rimon Sonata', 'Kepala Dusun Kinali', '082298002282288', '2022-08-30 07:02:50', '2022-08-30 07:02:50'),
(12, 'gambar-perangkat/4ekhP4c7PWRjRPr5c5qQ2bLWmV4jo7U5EZo2c5PJ.png', 'M.Alfateh', 'Kepala Dusun Tulus', '082298002282288', '2022-08-30 07:03:18', '2022-09-03 08:41:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyeks`
--

CREATE TABLE `proyeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proyeks`
--

INSERT INTO `proyeks` (`id`, `image`, `judul`, `excerpt`, `isi`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 'gambar-proyek/hVfAOZphfcvdgV99GbMhSlkxqLqJv40mrrjYxrhi.jpg', 'Menyelesaikan permasalahan air bersih di desa dengan memasang Pompa Air Tenaga Surya', '&nbsp;Dalam penggunaan anggaran dana desa, pemerintah juga dapat menyelesaikan permasalahan air bersih di desanya dengan memasang Pompa Air Tenaga Sur...', '<div>&nbsp;Dalam penggunaan anggaran dana desa, pemerintah juga dapat menyelesaikan permasalahan air bersih di desanya dengan memasang Pompa Air Tenaga Surya (PA.Dalam penggunaan anggaran dana desa, pemerintah juga dapat menyelesaikan permasalahan air bersih di desanya dengan memasang Pompa Air Tenaga Surya (PATS). Sistem PATS ini dinilai mampu menyelesaikan berbagai masalah yang berkaitan dengan air bersih, bahkan untuk daerah terpencil sekalipun yang belum dialiri jaringan listrik PLNTenaga penggerak yang memanfaatkan energi surya ini menjadikan PATS dapat dipasang di mana saja asal ada sinar matahari.<br><br>&nbsp;PATS dapat digunakan untuk mempercepat perwujudan desa layak air bersih dan sanitasi serta desa berenergi bersih dan terbarukan – Penggunaan Dana Desa Untuk Apa Saja PT. Java Surya Teknik (Sanspower) telah turut memperkenalkan dan mengembangkan teknologi panel surya khususnya untuk<br><br>&nbsp;membangun ratusan sistem Pompa Air Tenaga Surya (PATS) di seluruh wilayah Indonesia. Kami telah menjadi mitra terpercaya dengan terdaftar sebagai Approved Partner Distribution dari Lorentz Jerman.Percayakan kebutuhan panel surya anda kepada perusahaan yang memiliki reputasi dalam membangun dan merancang sistem tenaga surya di wilayah anda.&nbsp;</div>', NULL, '2022-08-30 06:45:36', '2022-08-30 06:45:36'),
(3, 'gambar-proyek/pknYvewUfua8ouJPiVkk8NvR8vfrKz4c7Ksdj3Yq.jpg', 'Program Infrastruktur Kerakyatan Kementerian PUPR Tingkatkan Konektivitas Antar Desa  Provinsi Aceh', '&nbsp;Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) turut mendukung pertumbuhan ekonomi perdesaan melalui penyediaan infrastruktur dasar deng...', '<div>&nbsp;Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) turut mendukung pertumbuhan ekonomi perdesaan melalui penyediaan infrastruktur dasar dengan Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) turut mendukung pertumbuhan ekonomi perdesaan melalui penyediaan infrastruktur dasar dengan skema Padat Karya Tunai. Sejumlah program infrastruktur kerakyatan dilaksanakan dengan skema Padat Karya Tunai melalui Direktorat Jenderal (Ditjen) Cipta Karya Kementerian PUPR yakni Program Kota Tanpa Kumuh (KOTAKU), Program Infrastruktur Sosial Ekonomi Wilayah (PISEW), Sanitasi Berbasis Masyarakat (SANIMAS), Penyediaan Air Minum dan Sanitasi Berbasis Masyarakat (PAMSIMAS) dan Program Tempat Pengolahan Sampah Reduce, Reuse dan Recycle (TPS-3R).Menteri PUPR Basuki Hadimuljono mengatakan pembangunan infrastruktur kerakyatan tetap menjadi program prioritas Kementerian PUPR pada tahun 2019. “Selain infrastruktur yang besar, Kementerian PUPR juga mendapat tugas untuk membangun infrastruktur kerakyatan . Pembangunan infrastruktur kerakyatan manfaatnya dirasakan<br><br>&nbsp;langsung oleh masyarakat seperti jembatan gantung, rumah subsidi, penanganan kawasan kumuh, air minum dan sanitasi,” kata Menteri Basuki beberapa waktu lalu.Salah satunya adalah PISEW yang dilakukan Kementerian PUPR melalui Ditjen Cipta Karya untuk mengurangi kesenjangan antar wilayah, pengentasan kemiskinan, memperbaiki tata kelola pemerintah daerah (kabupaten, kecamatan dan desa) serta memperkuat kelembagaan masyarakat di tingkat desa. Pada umumnya infrastruktur yang dibangun melalui dana PISEW adalah jalan produksi yang bertujuan memudahkan petani untuk mengangkut hasil pertanian, perkebunan dan perikanan. Pelaksanaan pembangunannya dikerjakan oleh masyarakat desa setempat tidak menggunakan kontraktor.&lt;br&gt;Secara nasional dalam kurun waktu 4 tahun (2015-2018), PISEW telah menyentuh 1.664 kecamatan dari total target 2015-2019 sebanyak 2.564 kecamatan. Program PISEW tahun 2018 dilaksanakan dengan anggaran sebesar Rp 540 miliar. Dari jumlah tersebut, mayoritas digunakan untuk pembangunan jalan sebesar 84,9% dari total anggaran atau Rp 447,69 miliar. Sedang sisanya, digunakan untuk pembangunan drainase, jembatan, air bersih, sanitasi, dan tambatan perahu.<br><br>Di Provinsi Bengkulu, pada tahun 2018 pelaksanaan PISEW tersebar di 15 Kecamatan pada 5 Kabupaten/Kota dengan anggaran sebesar Rp 7,8 miliar. Anggaran tersebut dipergunakan untuk pembangunan jalan produksi, salah satunya di Kecamatan Pinang Raya, Kabupaten Bengkulu Utara. Dengan terselenggaranya PISEW di Kecamatan tersebut, saat ini antara desa Bukit Harapan dan desa Sumber Mulya telah memiliki akses penghubung baik dalam mendistribusikan hasil perkebunan maupun dalam transportasi.Kepala Desa Bukit Harapan Heru Wahyono sangat mengapresiasi adanya pembangunan jembatan melalui program PISEW yang dilaksanakan pada tahun 2018 yang telah banyak memberi manfaat kepada warga kedua desa. “Jembatan yang dibangun ini merupakan satu-satunya akses penghubung antara Desa Bukit Harapan dan Desa Sumber Mulya. Sehingga warga dari Bukit Harapan tidak perlu lagi memutar jauh ke Kota Ketahun Untu menuju Desa Sumber Mulya yang secara administrasi sebenarnya bersebelahan, namun terpisahkan oleh Sungai Air Mupal Bawah,” terang Heru. Sementara, salah satu warga Desa Bukit Harapan, Maksum mengungkapkan bahwa dengan adanya jembatan sekarang warga dapat dengan mudah mendistribusikan hasil perkebunan. “Masya Allah, kami sangat senang dengan adanya jembatan ini karena akses ke Kota Ketahun yang merupakan tempat menjual hasil perkebunan sawit dan karet menjadi sangat dekat. Selain itu, pihak pabrik yang biasa membeli hasil kebun kami sekarang dapat masuk ke sini sehingga biaya pendistribusian hasil perkebunan menjadi berkurang dan alhamdulillah penghasilan kami jadi bertambah,” ungkap Maksum. Pengentasan Kekumuhan Selain PISEW, Kementerian PUPR di Provinsi Bengkulu juga melakukan penataan kawasan permukiman kumuh melalui program Neighborhood Upgrading and Shelter Project (NUSP)-Phase 2 yang dilaksanakan berbasis pemberdayaan masyarakat dan melibatkan peran aktif para pemangku kepentingan di daerah. Salah satunya di Kecamatan Ratu Agung, Kelurahan Sawah Lebar Kota Bengkulu, hasil penataan kawasan telah sangat membantu warga Sawah Lebar dalam menunjang aktivitas kehidupan sehari-hari. Dalam pelaksanaannya, program tersebut dilaksanakan oleh kelompok masyarakat yang tergabung dalam Badan Keswadayaan Masyarakat (BKM) Anggrek. Abdul Alim,<br><br>&nbsp;warga Sawah Lebar mengungkapkan bahwa sebelum adanya program tersebut, Kelurahan Sawah Lebar belum banyak memiliki jalan lingkungan sehingga warga terkadang harus memutar jauh untuk menuju ke tujuan yang secara jarak terletak sangat dekat. “Dengan adanya pembangunan jalan dan jembatan ini sangat memberikan kemudahan bagi warga dalam beraktivitas sehari-hari. Sebelumnya kami terpaksa memutar jauh untuk menuju Puskesmas dan tempat mengaji padahal jaraknya sebenarnya cukup dekat hanya saja tidak dapat dilalui karena belum adanya akses jalan dan jembatan penyeberangan untuk ke sana,” ujarnya.&nbsp; Salah satu pengelola BKM Anggrek, Irnawati sangat mengapresiasi pembangunan yang dilaksanakan Direktorat Jenderal Cipta Karya melalui program NUSP-2 tersebut dan berharap adanya keberlanjutan peningkatan pembangunan di Kelurahan Sawah Lebar. Pada tahun 2018 di Kelurahan Sawah Lebar, program NUSP-2 selain telah membangun jalan lingkungan (rabat) sepanjang 2 km yang menghubungkan 5 RT di kelurahan tersebut juga telah membangun drainase lingkungan dengan total sepanjang 3 km dan 8 plat decker yang dimanfaatkan dalam penanganan banjir di Kelurahan Sawah Lebar.&nbsp;</div>', NULL, '2022-08-30 06:55:40', '2022-08-30 06:55:40'),
(4, 'gambar-proyek/pcdAY8jiEaLe2uPrZAnZ8KYBLwGkbAskekDE2v5b.jpg', 'Pembangunan Infrastruktur Desa Rantauminyak Untuk Kemajuan Masyarakat', 'Pembangunan infrastruktur Desa Bubuhan, Kecamatan Simeulue Cut,&amp;nbsp; terus digenjot. Pembangunan infrastruktur yang menggunakan Dana Desa denga P...', '<div>Pembangunan infrastruktur Desa Bubuhan, Kecamatan Simeulue Cut,&amp;nbsp; terus digenjot. Pembangunan infrastruktur yang menggunakan Dana Desa denga Pembangunan infrastruktur Desa Bubuhan, Kecamatan Simeulue Cut terus digenjot. Pembangunan infrastruktur yang menggunakan Dana Desa dengan program padat karya tunai, untuk pemberdayaan masyarakat sekitar. Pada tahun 2018, pembangunan infrastruktur Desa Rantauminyak digunakan untuk jalan, balai desa, drainase dan gorong-gorong. Sedangkan pembangunan sumber daya manusia untuk pemberdayaan dan pembinaan masyarakat<br><br>&nbsp;meliputi kegiatan kepemudaan, keagamaan, pelatihan Linmas, TPK, LPM dan bidang launnya. Untuk mendukung jalan desa, kata dia, juga dilakukan pembangunan gorong-gorong dan saluran air. Sehingga jalan yang sudah dibangun menjadi tahan lama atau tidak cepat rusak. \"Secara geografis letak Desa Rantauminyak di wilayah perbukitan, jadi fungsi drainase dan gorong-gorong sangat penting selain menahan banjir dan longsor,\" kata dia Pembangunan infrastruktur selanjutnya rehab teras kantor desa setempat, karena merupakan pusat pelayanan dan aktivitas masyarakat. \"Kantor desa merupakan tempat pelayanan dan sering digunakan untuk aktivitas masyarat, sehingga di bangun untuk memberi kenyamanan,\" ujarnya.&amp;nbsp;&lt;br&gt;&lt;br&gt;&amp;nbsp;Sedangkan pembangunan dibidang SDM untuk pembinaan dan pemberdayaan masyarakat dilakukan pelatihan-pelatihan&nbsp;</div>', NULL, '2022-08-30 06:57:26', '2022-08-30 06:57:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalpermohonan` date DEFAULT NULL,
  `prihalpermohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuanpermohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemberibantuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsibaranghilang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalstatusjanda` date DEFAULT NULL,
  `namaayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nikayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nikibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempatlahirayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempatlahiribu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggallahirayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggallahiribu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agamaayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agamaibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaanayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaanibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraanayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraanibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepalakeluarga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamattujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahorangyangpindah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaorangyangmeninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatlahirorangyangmeninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggallahirorangyangmeninggal` date DEFAULT NULL,
  `kewarganegaraanorangyangmeninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatorangyangmeninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harimeninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalmeninggal` date DEFAULT NULL,
  `namayangberbeda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempatnamayangberbeda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalnamayangberbeda` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surats`
--

INSERT INTO `surats` (`id`, `user_id`, `no_surat`, `jenis_surat`, `status`, `surat_path`, `keperluan`, `jabatan`, `tanggalpermohonan`, `prihalpermohonan`, `tujuanpermohonan`, `pemberibantuan`, `deskripsibaranghilang`, `tanggalstatusjanda`, `namaayah`, `namaibu`, `nikayah`, `nikibu`, `tempatlahirayah`, `tempatlahiribu`, `tanggallahirayah`, `tanggallahiribu`, `agamaayah`, `agamaibu`, `pekerjaanayah`, `pekerjaanibu`, `kewarganegaraanayah`, `kewarganegaraanibu`, `alamatayah`, `alamatibu`, `kepalakeluarga`, `alamattujuan`, `jumlahorangyangpindah`, `namaorangyangmeninggal`, `alamatlahirorangyangmeninggal`, `tanggallahirorangyangmeninggal`, `kewarganegaraanorangyangmeninggal`, `alamatorangyangmeninggal`, `harimeninggal`, `tanggalmeninggal`, `namayangberbeda`, `tempatnamayangberbeda`, `tanggalnamayangberbeda`, `created_at`, `updated_at`) VALUES
(33, 20, '0', 'rps', 'selesai', 'pdf/surat/Z0XEzbBVC1ZyVUiC.pdf', NULL, 'kepala desa', '2022-09-07', 'buat dinding mesjid', 'dinas syariat islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-09 02:55:11', '2022-09-09 02:56:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dusun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelpon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','masyarakat') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `image`, `nik`, `nokk`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `dusun`, `status`, `pekerjaan`, `notelpon`, `alamat`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$dkCCG.NMY/NF2GefwxKI9uwyIrzUCei/9r8GP/AS0CeTqyd2J88Fe', 'admin', NULL, '2022-08-28 17:04:02', '2022-08-28 17:04:02'),
(19, NULL, '123', NULL, NULL, NULL, NULL, 'Pilih', 'Pilih', 'Pilih', 'Pilih', 'Pilih', NULL, NULL, NULL, NULL, '$2y$10$F/J8T5No/kVkUSY7BvuRUO/EYue42L0kaD/Euwht7JFiQYic4xTei', 'admin', NULL, '2022-09-09 02:50:00', '2022-09-09 02:50:00'),
(20, NULL, '12', '12', 'Novilia', 'Kabu Baru', '2001-07-13', 'perempuan', 'Islam', 'kinali', 'Belum Menikah', 'Pelajar', '082260153559', 'Kabu Baru Kec.Senagan Timur Kab.Nagan Raya', 'novilia.mbo@gmail.com', NULL, '$2y$10$1jQI8Jbi5B/VPVhay5Fvp.b8DXOZh4VxfROBQK.6Mto0JxihYS9ai', 'masyarakat', NULL, '2022-09-09 02:54:16', '2022-09-09 02:54:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `perangkats`
--
ALTER TABLE `perangkats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indeks untuk tabel `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indeks untuk tabel `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indeks untuk tabel `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indeks untuk tabel `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indeks untuk tabel `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indeks untuk tabel `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indeks untuk tabel `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indeks untuk tabel `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indeks untuk tabel `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indeks untuk tabel `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indeks untuk tabel `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indeks untuk tabel `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indeks untuk tabel `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indeks untuk tabel `proyeks`
--
ALTER TABLE `proyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surats_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_nokk_unique` (`nokk`),
  ADD UNIQUE KEY `users_notelpon_unique` (`notelpon`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `perangkats`
--
ALTER TABLE `perangkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `proyeks`
--
ALTER TABLE `proyeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD CONSTRAINT `surats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
