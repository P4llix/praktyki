-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Maj 2019, 16:39
-- Wersja serwera: 5.5.39
-- Wersja PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `login`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logowanie`
--

CREATE TABLE IF NOT EXISTS `logowanie` (
`ID` int(11) NOT NULL,
  `Login` text CHARACTER SET utf8 NOT NULL,
  `Haslo` text CHARACTER SET utf8 NOT NULL,
  `Mail` char(40) CHARACTER SET utf8 NOT NULL,
  `dataLogSU` text CHARACTER SET utf8 NOT NULL,
  `dataLogDe` text CHARACTER SET utf8 NOT NULL,
  `imie` char(30) CHARACTER SET utf8 NOT NULL,
  `nazwisko` char(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `logowanie`
--

INSERT INTO `logowanie` (`ID`, `Login`, `Haslo`, `Mail`, `dataLogSU`, `dataLogDe`, `imie`, `nazwisko`) VALUES
(1, 'admin', 'YWRtaW4=', 'admin.admin@gmail.com', '2019-05-07 16:38:08', '2019-05-07 16:36:33', 'Jan', 'Kowalski'),
(3, 'user1', 'dXNlcjE=', 'user1@o2.pl', '2019-05-07 16:29:37', '2019-05-07 16:28:07', 'Mateusz', 'Nowak');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `logowanie`
--
ALTER TABLE `logowanie`
 ADD PRIMARY KEY (`ID`), ADD KEY `Mail` (`Mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `logowanie`
--
ALTER TABLE `logowanie`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
