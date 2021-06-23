-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 apr 2021 om 19:40
-- Serverversie: 10.4.18-MariaDB
-- PHP-versie: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmfan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `acteur`
--

CREATE TABLE `acteur` (
  `id` int(4) NOT NULL,
  `vnaam` varchar(10) NOT NULL,
  `anaam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `acteur`
--

INSERT INTO `acteur` (`id`, `vnaam`, `anaam`) VALUES
(1, 'Carolien', 'Spoor'),
(2, 'Holly Mae', 'Brood'),
(3, 'Jord', 'Knotter'),
(4, 'Ferry ', 'Doedens'),
(5, 'Serge ', 'Prins'),
(6, 'Lisa ', 'Smit'),
(7, 'Angela', 'Schrijf'),
(8, 'Paul', 'Van Loon'),
(9, 'Victor', 'Lowe'),
(10, 'Sophie', 'Van Winden'),
(11, 'Julian ', 'Loman'),
(12, 'Mark', 'Frost');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `film`
--

CREATE TABLE `film` (
  `id` int(4) NOT NULL,
  `titel` varchar(10) NOT NULL,
  `idr` int(4) NOT NULL,
  `jaar` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `film`
--

INSERT INTO `film` (`id`, `titel`, `idr`, `jaar`) VALUES
(1, 'Sneekweek', 1, 2016),
(2, 'Griezelbus', 2, 2005),
(3, 'Prooi', 3, 2016);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `regisseur`
--

CREATE TABLE `regisseur` (
  `id` int(4) NOT NULL,
  `vnaam` varchar(10) NOT NULL,
  `anaam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `regisseur`
--

INSERT INTO `regisseur` (`id`, `vnaam`, `anaam`) VALUES
(1, 'Martijn', 'Heijne'),
(2, 'Pieter', 'Kuijpers'),
(3, 'Dick ', 'Maas');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
