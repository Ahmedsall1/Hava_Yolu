-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Eyl 2024, 14:44:11
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hava_yolu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Salih', 'Yolcu', 'userone@example.com', '2024-05-19 15:29:02', '$2y$12$WuLSE9phvk/57OBasi3T/Oitm/J5FjiZLAv4P5Abj/VNIK0wkgTH.', 'ODectwYQZh', '2024-05-19 15:29:02', '2024-05-19 15:29:02'),
(2, 'Ali Riza', 'Pilot', 'usertwo@example.com', '2024-05-19 15:29:02', '$2y$12$835ZKL7BVmh0c/8AXe9Fp.9Md1Hjx4LaFirl5yJFVlfIhYTK1l7P.', 'OsEu1WokkE1GCyOqe7hPbkDNoN7l5TUsyKlF2p2m3XnBXx8LDmineaRqEsnE', '2024-05-19 15:29:03', '2024-05-19 15:29:03'),
(3, 'Fatma Hamo', 'Hostese', 'userthree@example.com', '2024-05-19 15:29:03', '$2y$12$8Yphb2MFLX/s2W6vpr8NiuJPmuZUKXiaXAgznPey2fwwqVk7WQrzq', 'u5ab88sh15', '2024-05-19 15:29:03', '2024-05-19 15:29:03'),
(4, 'Fuad Nasir', 'Pilot', 'userfour@example.com', '2024-05-19 15:29:03', '$2y$12$DISUu2XnRG7NC/hVe4NFK.xwIVnW4PtDzmvaj9bjmMy/pLLITMdYS', 'Kjv0LQUfvq', '2024-05-19 15:29:03', '2024-05-19 15:29:03'),
(5, 'Muhammed Osman', 'Hostese', 'userfive@example.com', '2024-05-19 15:29:03', '$2y$12$/dlRHFTl5LwtJGB3NOX/puvpIZwviFi9I7hneEeeZYXI43Ypq.utW', 'G9vvvj2TRj', '2024-05-19 15:29:03', '2024-05-19 15:29:03'),
(6, 'admin', 'admin', 'admin@example.com', '2024-05-19 15:29:03', '$2y$12$/Od4yRhr96M314SjBoJTTO7qzWEnS4syJgHT6x/reeIYJV74N71ge', 'UYVUMk4r2B', '2024-05-19 15:29:03', '2024-05-19 15:29:03'),
(7, 'Hayan Taypa', 'Yolcu', 'userseven@example.com', '2024-05-19 15:29:03', '$2y$12$BBTytBly5Zf49Q2N7lj6ce5tNDrBCLdzDygRyITtYlIwR2qOq.ss6', '30KcDIEGZk', '2024-05-19 15:29:04', '2024-05-19 15:29:04'),
(8, 'Hasan Sahvan', 'Yolcu', 'usereight@example.com', '2024-05-19 15:29:04', '$2y$12$zy/FYvD2jMqEaUSVD3O10Ot9yx3W6ReAhDn5CED9BImLLcK2z.cea', 'oS98OA0kLO', '2024-05-19 15:29:04', '2024-05-19 15:29:04'),
(9, 'Huzayfa Elmuhamedd', 'Personel', 'usernine@example.com', '2024-05-19 15:29:04', '$2y$12$6s73RoRo8LIqXayL8MWoXuU0iME1IegK.gE1yXuAAfDpFfjsK2YXK', 'mPd7x2dtSj', '2024-05-19 15:29:04', '2024-05-22 09:23:11'),
(10, 'Ali Barhi', 'Yolcu', 'userten@example.com', '2024-05-19 15:29:04', '$2y$12$ch7i/scRhIsGrLZYD2Epu.fGLjkFbfp7PO3AnLC87RMh6wwVQ5zcu', 'jBWpm5i8bR', '2024-05-19 15:29:04', '2024-05-19 15:29:04'),
(11, 'aa', 'Yolcu', 'asdf@gmail.com', NULL, '$2y$12$k0GD6JhjrLJ8DGsl10Ps6Oo6J8fLqa4C9fI8tQVWzThIDPAeMcPpy', NULL, '2024-05-20 06:01:56', '2024-05-20 06:01:56'),
(12, 'aa', 'Yolcu', 'aa@gmail.com', NULL, '$2y$12$ut.ExowkYDGAZPvjXc5oDOn0RjfbTQ07GT24FDv3eg.w9nFXZQuUW', NULL, '2024-05-20 06:04:21', '2024-05-20 06:04:21'),
(13, 'Ahmedd', 'Yolcu', 'Sallih@gmail.com', NULL, '$2y$12$fw9qcaRDyD1vTb9x4E52MeKOfMm0uFlLLSedzsSaZwZBp2geu3s2q', NULL, '2024-05-20 10:36:45', '2024-05-20 10:36:45'),
(14, 'ahme', 'Yolcu', 'ahme@gmail.com', NULL, '$2y$12$29P.p2fEARA1G6.t4Cwv.ePCGnQeGDJ3mbM6GiHw.pAQla7bKsXGO', NULL, '2024-05-20 11:05:08', '2024-05-20 11:05:08'),
(15, 'aaa', 'Yolcu', 'aaa@gmail.com', NULL, '$2y$12$cQlGUSTLUX.wwS/DZNNwqeBSlVs5lwbtruLyb54nRZPenFsLoxK4K', NULL, '2024-05-20 11:13:47', '2024-05-20 11:13:47'),
(16, 'Ahmed Salihh', 'Yolcu', 'salihh@gmail.com', NULL, '$2y$12$7/M4DQg1F8aVUqlZscOfv.xeNWo8QHewsGOsOHvjv/FwsIQcHQ2V.', NULL, '2024-05-20 11:57:56', '2024-05-20 11:57:56'),
(17, 'AS', 'Yolcu', 'AS@gmail.com', NULL, '$2y$12$5SvH0uv0RyMWc7B3Bzg12.XmP9eAVYnPs9Tvg/KTg0WGBcLgf5r0i', 'S2FMBwNGYXvXb36Vteo6HUGnnF9tAmD57gBE4fpdRonNQxi20DvAga9eWTLI', '2024-05-21 04:46:56', '2024-05-21 04:46:56'),
(18, 'asas', 'Personel', 'asas@gmail.com', NULL, '$2y$12$9dC0iABX1EifnPadm0hYdu4fGV99amRi1We3fQNPzEJ40ismRyw8q', NULL, '2024-05-22 05:22:40', '2024-05-22 05:22:40'),
(19, 'Abdorahim', 'Pilot', 'abdo@gmail.com', NULL, '$2y$12$Iw4PUafZQnAWlhqxAqftruJfQtYDK70TUro1rSLQ.aXfkshx3P6vK', NULL, '2024-05-22 05:23:03', '2024-05-22 05:23:03'),
(20, 'Abboo', 'Yolcu', 'Aboo@gmail.com', NULL, '$2y$12$j.xHsJ7Ttgg0QUQ.SxOC/O5PtHwrJyv0yokMmIHdL/XASoGzqFWre', NULL, '2024-05-23 12:17:06', '2024-05-23 12:17:06'),
(21, 'Yolcu', 'Yolcu', 'yolcu@gmail.com', NULL, '$2y$12$200RDkOFLk0V8.da4NJh.OUUgXsfktyVS4V/ui14YPxm8vucnmADq', NULL, '2024-06-08 09:18:19', '2024-06-08 09:18:19'),
(22, 'ahmed s', 'admin', 'ahmed@gmail.com', NULL, '$2y$12$lb5SzP8V9.G/.fNjgn3KC.H.0FpIuIvU6A/liVBtOk3RxztJht8DK', NULL, '2024-06-08 09:58:57', '2024-06-08 09:58:57'),
(25, 'Pilot_1', 'Pilot', 'pilot@gmail.com', NULL, '$2y$12$O9lBs7h2YcgXXOYcDATGpOYyv4SJmDLRqyulKB8/7jTXXrocgVJmm', NULL, '2024-06-13 11:58:20', '2024-06-13 11:58:20'),
(26, 'Hayyan ABi', 'Yolcu', 'hayan@gmail.com', NULL, '$2y$12$S6nsrfc27Vx4YH5e5Cuhn.w2Yj3WMoAhfqOvcvoLPedLHFzC7INZa', NULL, '2024-06-13 14:46:23', '2024-06-13 14:46:23'),
(27, 'Abdolrahim Abi', 'Yolcu', 'abi@gmail.com', NULL, '$2y$12$mWvwPNEm2OO7fIE0268F5u4K0ox4eHhIgFUJ.EDBAlNfTynPyFhMu', NULL, '2024-06-13 17:02:50', '2024-06-13 17:02:50');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
