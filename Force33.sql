-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Ago 29, 2022 alle 15:13
-- Versione del server: 5.7.34
-- Versione PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Force33`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Partenaires`
--

CREATE TABLE `Partenaires` (
  `id_partenaires` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `Partenaires`
--

INSERT INTO `Partenaires` (`id_partenaires`, `email`, `password`, `active`) VALUES
(1, 'force33marseille_234@gmail.com', '123', 1),
(2, 'lulu', 'lulu', 1),
(3, 'coco@coco.fr', 'coco', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `Structure`
--

CREATE TABLE `Structure` (
  `id_structure` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_partenaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `Structure`
--

INSERT INTO `Structure` (`id_structure`, `email`, `password`, `adress`, `active`, `id_partenaires`) VALUES
(1, 'jean@jean.fr', 'jean', '300 chemin de jean', 1, 1),
(2, 'cocochanel@lflf', 'coco.coco', 'rue de la gare 24', 1, 3);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Partenaires`
--
ALTER TABLE `Partenaires`
  ADD PRIMARY KEY (`id_partenaires`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indici per le tabelle `Structure`
--
ALTER TABLE `Structure`
  ADD PRIMARY KEY (`id_structure`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_partenaires` (`id_partenaires`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Partenaires`
--
ALTER TABLE `Partenaires`
  MODIFY `id_partenaires` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `Structure`
--
ALTER TABLE `Structure`
  MODIFY `id_structure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Structure`
--
ALTER TABLE `Structure`
  ADD CONSTRAINT `structure_ibfk_1` FOREIGN KEY (`id_partenaires`) REFERENCES `Partenaires` (`id_partenaires`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
