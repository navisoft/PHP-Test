-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2016 at 01:20 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `remember_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `active_token` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `birthday`, `remember_token`, `active_token`, `created_at`, `updated_at`) VALUES
(1, 'sonle', '$2y$10$Wby4fs5Znm3H9IUGHsgMS.H6kpCzxUN5VfVCTTcUqWYGyaFhvRuSS', 'sonle.itsme@gmail.com', 'Le', 'Son', '2009-03-28 00:00:00', 'zwW00kwK5Er2L8GAsUC15o5S33F9PWJxGe5IWim23sCTKlP3qmQ9LCNntN5L', '', '2016-04-02 10:00:04', '2016-04-02 11:16:54'),
(2, 'sonle2', '$2y$10$IzV5EnJQBTy4e.l8At484eWVzRSBHUTcLMwGanDBpxEjiMHb4/YSq', 'tinhphong007@gmail.com', 'Le', 'Son', '2016-03-28 00:00:00', '', '', '2016-04-02 10:19:11', '2016-04-02 10:19:11'),
(3, 'sonle23', '$2y$10$R0W.yGTcS.9jmBpwHxrdNeFC./pmZJJvOceNM7dDn2Wnw4j9Glfa6', 'sonle.itsme2@gmail.com', 'Le2', 'Son2', '2004-04-02 00:00:00', '', '', '2016-04-02 11:10:23', '2016-04-02 11:10:23'),
(4, 'sonle123', '$2y$10$MJwzxV7eOmHwhfGoMkK0Ye5nuie2XYB37osg95Rr80bv9QxZ1fs4O', 'sonle.itsme123@gmail.com', 'Le123', 'Son123', '2003-04-02 00:00:00', 'ng3arXliDIaWwU3Sjz2zNstN5GWIxIW6RQXZkj6FGUvwPIAXMhMe4Gc3j8V2', '', '2016-04-02 11:17:31', '2016-04-02 11:19:01'),
(5, 'sonle1234', '$2y$10$wyvg7.uMcPbGIn3CGJXjv.7IFeKGFfpnvfkT6DjsRzKJ9y2IEKCGy', 'sonle.itsme1234@gmail.com', 'Le1234', 'Son1234', '2000-04-02 00:00:00', '', '', '2016-04-02 11:19:38', '2016-04-02 11:19:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
