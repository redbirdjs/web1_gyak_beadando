-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.infinityfree.com
-- Generation Time: Apr 22, 2026 at 04:54 AM
-- Server version: 11.4.10-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_41439074_web1_beadando`
--

-- --------------------------------------------------------

--
-- Table structure for table `szoftver`
--

CREATE TABLE `szoftver` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) DEFAULT NULL,
  `kategoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;

--
-- Dumping data for table `szoftver`
--

INSERT INTO `szoftver` (`id`, `nev`, `kategoria`) VALUES
(1, 'ccc', 'plug-in'),
(2, 'FastStone Image Viewer', 'képkezelés'),
(5, 'InfraRecorder', 'DVD-írás'),
(7, 'PDF Split And Merge Basic', 'pdf-manipulálás'),
(9, 'CCleaner', 'gépkarbantartás'),
(11, 'Tracker', 'fizika oktatás'),
(12, 'Acrobat Reader', 'pdf-olvasás'),
(13, 'Multivox 4 Magyar szövegfelolvasó', 'szövegfelolvasó'),
(14, 'WinMerge', 'fájlösszehasonlítás'),
(15, 'Free Pascal', 'fejlesztő környezet'),
(17, 'Geany', 'editor'),
(18, 'Euler3D', 'matematika oktatás'),
(19, 'IrfanView', 'képkezelés'),
(20, 'Blender', 'modellezés'),
(21, 'Flash Player ActiveX', 'plug-in'),
(22, 'CDBurnerXP', 'DVD-írás'),
(23, 'Java SE Development Kit', 'fejlesztő környezet'),
(24, 'Flash Player PPAPI', 'plug-in'),
(25, 'SharePoint Designer 2007', 'webszerkesztés'),
(27, 'K-Lite Mega Codec Pack', 'médialejátszás'),
(28, 'Notepad++', 'editor'),
(29, 'PatchCleaner', 'gépkarbantartás'),
(30, 'Audacity', 'hangszerkesztés'),
(34, 'Java', 'plug-in'),
(35, 'Visual Studio 2013', 'fejlesztő környezet'),
(36, 'Greenshot', 'képernyőkép-készítés'),
(38, 'Lynx 4', 'interaktív tábla'),
(39, 'PuTTY', 'távoli terminál'),
(40, 'Google Föld', 'virtuális földgömb'),
(42, 'PDFCreator', 'pdf-generálás'),
(44, 'MuseScore', 'kottaírás'),
(45, 'Disk Drill', 'adathelyreállítás'),
(46, 'Flash Player NPAPI', 'plug-in'),
(48, 'Google Drive', 'online fájltárolás'),
(49, 'Google Earth', 'virtuális földgömb'),
(50, 'Filzip', 'tömörítés'),
(51, 'FreeCommander XE', 'fájlkezelés'),
(53, 'Reader', 'pdf-olvasás'),
(54, 'Wings 3D', 'modellezés'),
(55, 'Windows Live Essentials', 'alkalmazás gyűjtemény'),
(56, 'Imagine', 'fejlesztő környezet'),
(57, 'LibreOffice', 'irodai programcsomag'),
(58, 'Windows Live Messenger', 'azonnali üzenetküldés'),
(59, 'Scratch 2 Offline Editor', 'fejlesztő környezet'),
(60, 'Inkscape', 'vektorgarfikus szerkesztés'),
(61, 'Adafor', 'adminisztráció'),
(62, 'Skype', 'azonnali üzenetküldés'),
(63, 'Mozilla Firefox', 'böngészés'),
(64, 'Opera', 'böngészés'),
(65, 'Dev-C++', 'fejlesztő környezet'),
(66, 'NetBeans IDE', 'fejlesztő környezet'),
(67, 'Shockwave Player', 'plug-in'),
(68, 'Foxit Reader', 'pdf-olvasás'),
(69, 'Movie Maker', 'videószerkesztés'),
(70, 'Silverlight', 'plug-in'),
(71, 'KompoZer', 'webszerkesztés'),
(72, 'SMART Notebook Interactive Viewer', 'interaktív tábla'),
(73, 'Euklides', 'matematika oktatás'),
(74, 'paint.net', 'képszerkesztés'),
(75, 'WinSCP', 'távoli fájlhozzáférés'),
(76, 'SVG Viewer', 'plug-in'),
(78, 'VUE', 'gondolattérkép készítés'),
(79, 'mimio Studio', 'interaktív tábla'),
(80, 'Real Alternative', 'médialejátszás'),
(81, 'XnView', 'képkezelés'),
(82, 'Windows Live Movie Maker', 'videószerkesztés'),
(83, 'Picasa', 'képszerkesztés'),
(84, 'SMART Notebook', 'interaktív tábla'),
(85, 'Double Commander', 'fájlkezelés'),
(86, 'ImgBurn', 'DVD-írás'),
(87, 'Google Chrome', 'böngészés'),
(88, 'VLC media player', 'médialejátszás'),
(89, 'FileZilla Client', 'távoli fájlhozzáférés'),
(90, 'GeoGebra', 'matematika oktatás'),
(91, 'FFmpeg for Audacity', 'hangszerkesztés'),
(92, 'BS.Player FREE', 'médialejátszás'),
(94, 'Dia', 'diagramkészítés'),
(95, 'Visual Studio 2015', 'fejlesztő környezet'),
(96, 'Open-Sankoré', 'interaktív tábla'),
(97, 'GIMP', 'képszerkesztés'),
(99, 'Freeplane', 'gondolattérkép készítés'),
(101, 'Dropbox', 'online fájltárolás'),
(102, '7-Zip', 'tömörítés'),
(103, 'K-Lite Codec Pack', 'médialejátszás'),
(104, 'EclipseCrossword', 'keresztrejtvény készítés'),
(105, 'FreeMind', 'gondolattérkép készítés');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `szoftver`
--
ALTER TABLE `szoftver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `szoftver`
--
ALTER TABLE `szoftver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
