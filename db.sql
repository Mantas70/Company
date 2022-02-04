-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Feb 01, 2022 at 10:32 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `code` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pvm_code` varchar(14) DEFAULT NULL,
  `address` text,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `activity` text,
  `manager` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`code`, `title`, `pvm_code`, `address`, `phone`, `email`, `activity`, `manager`) VALUES
(1251612, 'Apmokestinimas', '156549', 'Jaunimo gatve', '861282047', 'Juozas.Juozaitis@gmail.com', 'sasfaasdsfasf', 'Sportininkas'),
(5215465, 'Vairuotoju agentura', '211254', 'Keitimo gatve', '860258698', 'Antanas.Antanaitis@gmail.com', 'sasfasdasfasf', 'Vairuotojas'),
(6523132, 'Snekejimo agentura', '545121', 'Ratu gatve', '866987453', 'Rokas.Rokaitis@gmail.com', 'sassasdfasf', 'Statybininkas'),
(5121255, 'Anoniminis pastas', '231515', 'Keleivio gatve', '860204581', 'Lukas.Lukaitis@gmail.com', 'sasasdsfasf', 'Rasytojas'),
(3215652, 'Senejimo namai', '126846', 'Siuntimo gatve', '861234582', 'Tomas.Tomaitis@gmail.com', 'saasadsfasf', 'Begikas'),
(5151654, 'Baldu rinka', '216846', 'Vasario gatve', '860268489', 'Vytas.Vytaitis@gmail.com', 'sasfasfasf', 'Vadybininkas'),
(6845425, 'Laimejimo agentura', '313215', 'Kovo gatve', '860204515', 'Simas.Simaitis@gmail.com', 'sasfsasdfasf', 'Elektrikas'),
(4564525, 'SWED Bankas', '588945', 'Vakaro gatve', '860205627', 'Matas.Mataitis@gmail.com', 'sasfasadasfasf', 'Kepejas'),
(2515648, 'Autoriu agentura', '321564', 'Ryto gatve', '860204562', 'Linas.Linaitis@gmail.com', 'sasfasdasdasfasf', 'Sargybinis'),
(6448854, 'Keliavimo agentura', '512156', 'Kalvino gatve', '860204354', 'Rima.Rimaite@gmail.com', 'sasfaasdsfasf', 'Poetas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
