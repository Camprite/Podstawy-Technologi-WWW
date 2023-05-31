-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 31, 2023 at 10:34 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dzbanyv2db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzbany`
--

CREATE TABLE `dzbany` (
  `id` int(10) UNSIGNED NOT NULL,
  `idKategorii` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `obrazek` varchar(50) NOT NULL,
  `opis` text NOT NULL,
  `pojemność` int(11) NOT NULL,
  `wysokość` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `dzbany`
--

INSERT INTO `dzbany` (`id`, `idKategorii`, `nazwa`, `obrazek`, `opis`, `pojemność`, `wysokość`) VALUES
(1, 5, 'Jerzy', 'src/coffee-beans-3242673_1280.jpg', 'Dzban metalowy Jerzy, bardzo dobry.', 21, 37),
(5, 3, 'Janusz', 'src/lemons-6101066_1280.jpg', 'Posiada niewidzialną rączkę wolnego rynku', 5, 189),
(6, 2, 'Szafranowczsqlup', 'src/jug-1677576_1280.jpg', 'Do niczego się niesqlup nadaje.', 222, 3333),
(15, 4, 'ASD', 'src/milk-2474993_1280.jpg', '2', 2, 2),
(30, 1, '1', 'src/blueberries-864628_1280.jpg', '22', 22, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`, `opis`) VALUES
(1, 'Ceramiczny', 'Dzban ceramiczny'),
(2, 'Szklany', 'Dzban szklany'),
(3, 'Drewaniany', 'Dzban drewniany'),
(4, 'Gliniany', 'Dzban gliniany'),
(5, 'Metalowy', 'Dzban metalowy'),
(6, 'Bambusowy', 'Dzban bambusowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recenzje`
--

CREATE TABLE `recenzje` (
  `id` int(10) UNSIGNED NOT NULL,
  `idDzbana` int(10) UNSIGNED NOT NULL,
  `ocena` int(11) NOT NULL,
  `tresc` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nick` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `recenzje`
--

INSERT INTO `recenzje` (`id`, `idDzbana`, `ocena`, `tresc`, `data`, `nick`) VALUES
(1, 6, 4, 'TEST\r\n', '2023-05-27 17:18:25', 'test'),
(2, 6, 4, 'TEST\r\n', '2023-05-27 17:19:42', 'test'),
(3, 6, 4, 'TEST\r\n', '2023-05-27 17:19:44', 'test'),
(4, 6, 5, 'WYSLIj', '2023-05-27 17:19:57', 'Dawid'),
(5, 6, 3, 'SADy', '2023-05-27 17:20:50', 'Judasz'),
(6, 6, 1, 'cd\r\n', '2023-05-27 17:21:04', 'Ab'),
(7, 5, 3, 'asd', '2023-05-28 09:27:16', ''),
(8, 5, 3, 'asd', '2023-05-28 09:27:20', ''),
(9, 1, 1, 'ads', '2023-05-28 09:29:25', 'daw'),
(10, 1, 1, 'asdasd', '2023-05-28 09:29:28', 'daw'),
(11, 30, 1, '', '2023-05-28 13:41:35', 'daw'),
(12, 30, 1, 'XDXD\r\n', '2023-05-28 13:41:46', 'daw'),
(13, 6, 5, 'Azbest\r\n', '2023-05-28 15:12:02', 'daw'),
(14, 5, 1, 'adsasd', '2023-05-28 17:29:55', 'daw');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ulubione`
--

CREATE TABLE `ulubione` (
  `id` int(10) UNSIGNED NOT NULL,
  `idDzbana` int(10) UNSIGNED NOT NULL,
  `idUzytkownika` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulubione`
--

INSERT INTO `ulubione` (`id`, `idDzbana`, `idUzytkownika`) VALUES
(84, 5, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rola` varchar(50) NOT NULL DEFAULT 'user',
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`, `rola`, `data`) VALUES
(1, 'daw', 'dfbf6f079b428caa9410f95b2ef79bdd', 'daw', 'user', '2023-05-28 09:14:16');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzbany`
--
ALTER TABLE `dzbany`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKategorii` (`idKategorii`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDzbana` (`idDzbana`);

--
-- Indeksy dla tabeli `ulubione`
--
ALTER TABLE `ulubione`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDzbana` (`idDzbana`),
  ADD KEY `idUzytkownika` (`idUzytkownika`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dzbany`
--
ALTER TABLE `dzbany`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recenzje`
--
ALTER TABLE `recenzje`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ulubione`
--
ALTER TABLE `ulubione`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dzbany`
--
ALTER TABLE `dzbany`
  ADD CONSTRAINT `dzbany_ibfk_1` FOREIGN KEY (`idKategorii`) REFERENCES `kategorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recenzje`
--
ALTER TABLE `recenzje`
  ADD CONSTRAINT `recenzje_ibfk_1` FOREIGN KEY (`idDzbana`) REFERENCES `dzbany` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulubione`
--
ALTER TABLE `ulubione`
  ADD CONSTRAINT `ulubione_ibfk_1` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulubione_ibfk_2` FOREIGN KEY (`idDzbana`) REFERENCES `dzbany` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
