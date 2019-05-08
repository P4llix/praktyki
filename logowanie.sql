-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Maj 2019, 16:39
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
  `imie` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nazwisko` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Zrzut danych tabeli `logowanie`
--

INSERT INTO `logowanie` (`ID`, `Login`, `Haslo`, `Mail`, `dataLogSU`, `dataLogDe`, `imie`, `nazwisko`, `status`) VALUES
(1, 'admin', 'YWRtaW4=', 'admin@o2.pl', '2019-05-08 15:24:19', '2019-05-07 16:36:33', 'Adam', 'Kowalski', 'Odblokowany'),
(2, 'administrator', '', 'administracja@wp.pl', '', '', 'Krzysztof', 'zxc', 'Odblokowany'),
(3, 'user1', 'dXNlcjE=', 'user1.user1@o2.pl', '2019-05-08 14:26:47', '2019-05-08 14:26:39', 'Adrian', 'Polak', 'Odblokowany'),
(4, 'user2', '', 'user2.user2@wp.pl', '2019-05-08 15:24:07', '2019-05-08 12:44:09', 'PaweÅ‚', 'Donald', 'Zablokowany'),
(5, 'user3', '', 'user3.user3@onet.pl', '', '', 'mikoÅ‚aj', 'qwerty', 'Zablokowany'),
(6, 'user4', '', 'user4.user4@onet.pl', '', '', 'Albert', 'asdfg', 'Odblokowany'),
(7, 'user3', '', 'user3.user3@onet.pl', '', '', 'mikoÅ‚aj', 'qwerty', 'Zablokowany');

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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
