-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Aug 2021 um 11:16
-- Server-Version: 10.4.16-MariaDB
-- PHP-Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `f1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `f1_driver_wm_standings`
--

CREATE TABLE `f1_driver_wm_standings` (
  `ID` int(11) NOT NULL,
  `Saison` varchar(255) NOT NULL,
  `GPs` varchar(255) NOT NULL,
  `Champion` varchar(255) NOT NULL,
  `Car` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Points` varchar(255) NOT NULL,
  `Wins` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `f1_driver_wm_standings`
--

INSERT INTO `f1_driver_wm_standings` (`ID`, `Saison`, `GPs`, `Champion`, `Car`, `Nationality`, `Age`, `Points`, `Wins`) VALUES
(1, '1950', '7', 'Giuseppe Farina', 'Alfa Romeo', 'Italy', '44', '30', '3'),
(2, '1951', '8', 'Juan Manuel Fangio', 'Alfa Romeo', 'Argentina', '40', '31', '3'),
(3, '1952', '8', 'Alberto Ascari', 'Ferrari', 'Italy', '34', '36', '6'),
(4, '1953', '9', 'Alberto Ascari', 'Ferrari', 'Italy', '35', '34.5', '5'),
(5, '1954', '9', 'Juan Manuel Fangio', 'Maserati/Mercedes', 'Argentina', '43', '42', '6'),
(6, '1955', '7', 'Juan Manuel Fangio', 'Mercedes', 'Argentina', '44', '40', '4'),
(7, '1956', '8', 'Juan Manuel Fangio', 'Ferrari', 'Argentina', '45', '30', '3'),
(8, '1957', '8', 'Juan Manuel Fangio', 'Maserati', 'Argentina', '46', '40', '4'),
(9, '1958', '11', 'Mike Hawthorn', 'Ferrari', 'Great Britain', '29', '42', '1'),
(10, '1959', '9', 'Jack Brabham', 'Cooper-Climax', 'Australia', '33', '31', '2'),
(11, '1960', '10', 'Jack Brabham', 'Cooper-Climax', 'Australia', '34', '43', '5'),
(12, '1961', '8', 'Phil Hill', 'Ferrari', 'USA', '34', '34', '2'),
(13, '1962', '9', 'Graham Hill', 'B.R.M.', 'Great Britain', '33', '42', '4'),
(14, '1963', '10', 'Jim Clark', 'Lotus-Climax', 'Great Britain', '27', '54', '7'),
(15, '1964', '10', 'John Surtees', 'Ferrari', 'Great Britain', '30', '40', '2'),
(16, '1965', '10', 'Jim Clark', 'Lotus-Climax', 'Great-Britain', '29', '54', '6'),
(17, '1966', '9', 'Jack Brabham', 'Brabham-Repco', 'Australia', '40', '42', '4'),
(18, '1967', '11', 'Denis Hulme', 'Brabham-Repco', 'Australia', '31', '51', '2'),
(19, '1968', '12', 'Graham Hill', 'Lotus-Ford', 'Great Britain', '39', '48', '3'),
(20, '1969', '11', 'Jackie Stewart', 'Matra-Ford', 'Great-Britain', '30', '63', '6'),
(21, '1970', '13', 'Jochen Rindt', 'Lotus-Ford', 'Austria', '28', '45', '5'),
(22, '1971', '11', 'Jackie Stewart', 'Tyrrell-Ford', 'Great-Britain', '32', '62', '6'),
(23, '1972', '12', 'Emerson Fittipaldi', 'Lotus-Ford', 'Brazil', '25', '61', '5'),
(24, '1973', '15', 'Jackie Stewart', 'Tyrrell-Ford', 'Great-Britain', '34', '71', '5'),
(25, '1974', '15', 'Emerson Fittipaldi', 'McLaren-Ford', 'Brazil', '27', '55', '3'),
(26, '1975', '14', 'Niki Lauda', 'Ferrari', 'Austria', '26', '64.5', '5'),
(27, '1976', '16', 'James Hunt', 'McLaren-Ford', 'Great-Britain', '29', '69', '6'),
(28, '1977', '17', 'Niki Lauda', 'Ferrari', 'Austria', '28', '72', '3'),
(29, '1978', '16', 'Mario  Andretti', 'Lotus-Ford', 'USA', '38', '64', '6'),
(30, '1979', '15', 'Jody Scheckter', 'Ferrari', 'South Africa', '29', '51', '3'),
(31, '1980', '14', 'Alan Jones', 'Williams-Ford', 'Australia', '34', '67', '5'),
(32, '1981', '15', 'Nelson Piquet', 'Brabham-Ford', 'Brazil', '29', '50', '3'),
(33, '1982', '16', 'Keke Rosberg', 'Williams-Ford', 'Finland', '34', '44', '1'),
(34, '1983', '15', 'Nelson Piquet', 'Brabham-BMW', 'Brazil', '31', '59', '3'),
(35, '1984', '16', 'Niki Lauda', 'McLaren-TAG-Porsche', 'Austria', '35', '72', '5'),
(36, '1985', '16', 'Alain Prost', 'McLaren-TAG-Porsche', 'France', '30', '73', '5'),
(37, '1986', '16', 'Alain Prost', 'McLaren-TAG-Porsche', 'France', '31', '72', '4'),
(38, '1987', '16', 'Nelson Piquet', 'Williams-Honda', 'Brazil', '35', '73', '3'),
(39, '1988', '16', 'Ayrton Senna', 'McLaren-Honda', 'Brazil', '28', '90', '8'),
(40, '1989', '16', 'Alain Prost', 'McLaren-Honda', 'France', '34', '76', '3'),
(41, '1990', '16', 'Ayrton Senna', 'McLaren-Honda', 'Brazil', '30', '78', '6'),
(42, '1991', '16', 'Ayrton Senna', 'McLaren-Honda', 'Brazil', '31', '96', '7'),
(43, '1992', '16', 'Nigel Mansell', 'Williams-Renault', 'Great-Britain', '39', '108', '9'),
(44, '1993', '16', 'Alain Prost', 'Williams-Renault', 'France', '38', '99', '7'),
(45, '1994', '16', 'Michael Schumacher', 'Benetton-Ford', 'Germany', '25', '92', '8'),
(46, '1995', '17', 'Michael Schumacher', 'Benetton-Renault', 'Germany', '26', '102', '9'),
(47, '1996', '16', 'Damon Hill', 'Williams-Renault', 'Great-Britain', '36', '97', '8'),
(48, '1997', '17', 'Jacques Villeneuve', 'Williams-Renault', 'Canada', '26', '81', '7'),
(49, '1998', '16', 'Mika Häkkinen', 'McLaren-Mercedes', 'Finland', '30', '100', '8'),
(50, '1999', '16', 'Mika Häkkinen', 'McLaren-Mercedes', 'Finland', '31', '76', '5'),
(51, '2000', '17', 'Michael Schumacher', 'Ferrari', 'Germany', '31', '108', '9'),
(52, '2001', '17', 'Michael Schumacher', 'Ferrari', 'Germany', '32', '123', '9'),
(53, '2002', '17', 'Michael Schumacher', 'Ferrari', 'Germany', '33', '144', '11'),
(54, '2003', '16', 'Michael Schumacher', 'Ferrari', 'Germany', '34', '93', '6'),
(55, '2004', '18', 'Michael Schumacher', 'Ferrari', 'Germany', '35', '148', '13'),
(56, '2005', '19', 'Fernando Alonso', 'Renault', 'Spain', '24', '133', '7'),
(57, '2006', '18', 'Fernando Alonso', 'Renault', 'Spain', '25', '134', '7'),
(58, '2007', '17', 'Kimi Raikkönen', 'Ferrari', 'Finland', '28', '110', '6'),
(59, '2008', '18', 'Lewis Hamilton', 'McLaren-Mercedes', 'Great-Britain', '23', '98', '5'),
(60, '2009', '17', 'Jenson Button', 'Brawn-Mercedes', 'Great-Britain', '29', '95', '6'),
(61, '2010', '19', 'Sebastian Vettel', 'Red Bull-Renault', 'Germany', '23', '256', '5'),
(62, '2011', '19', 'Sebastian Vettel', 'Red Bull-Renault', 'Germany', '24', '392', '11'),
(63, '2012', '20', 'Sebastian Vettel', 'Red Bull-Renault', 'Germany', '25', '281', '5'),
(64, '2013', '19', 'Sebastian Vettel', 'Red Bull-Renault', 'Germany', '26', '397', '13'),
(65, '2014', '19', 'Lewis Hamilton', 'Mercedes', 'Great-Britain', '29', '384', '11'),
(66, '2015', '19', 'Lewis Hamilton', 'Mercedes', 'Great-Britain', '30', '381', '10'),
(67, '2016', '21', 'Nico Rosberg', 'Mercedes', 'Germany', '31', '385', '9'),
(68, '2017', '20', 'Lewis Hamilton', 'Mercedes', 'Great-Britain', '32', '363', '9'),
(69, '2018', '21', 'Lewis Hamilton', 'Mercedes', 'Great-Britain', '33', '408', '11'),
(70, '2019', '21', 'Lewis Hamilton', 'Mercedes', 'Great-Britain', '34', '413', '11'),
(71, '2020', '17', 'Lewis Hamilton', 'Mercedes', 'Great-Britain', '35', '347', '11');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `f1_team_wm_standings`
--

CREATE TABLE `f1_team_wm_standings` (
  `ID` int(11) NOT NULL,
  `Constructor` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Titles` varchar(255) NOT NULL,
  `Seasons` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `f1_team_wm_standings`
--

INSERT INTO `f1_team_wm_standings` (`ID`, `Constructor`, `Country`, `Titles`, `Seasons`) VALUES
(1, 'Ferrari', 'Italy', '16', '1961, 1964, 1975–1977, 1979, 1982, 1983, 1999–2004, 2007, 2008'),
(2, 'Williams', 'Great Britain', '9', '1980, 1981, 1986, 1987, 1992–1994, 1996, 1997'),
(3, 'McLaren', 'Great Britain', '8', '1974, 1984, 1985, 1988–1991, 1998 '),
(4, 'Lotus', 'Great Britain', '7', '1963, 1965, 1968, 1970, 1972, 1973, 1978'),
(5, 'Mercedes', 'Germany', '7', '2014 - 2020'),
(6, 'Red Bull', 'Austria/Great Britain', '4', '2010–2013'),
(7, 'Cooper', 'Great-Britain', '2', '1959, 1960'),
(8, 'Brabham', 'Great-Britain', '2', '1966, 1967'),
(9, 'Renault', 'France', '2', '2005, 2006'),
(10, 'Vanwall', 'Great-Britain', '1', '1958'),
(11, 'B.R.M', 'Great-Britain', '1', '1962'),
(12, 'Matra Sports', 'France', '1', '1969'),
(13, 'Tyrrell', 'Great-Britain', '1', '1971'),
(14, 'Benetton', 'Italy/Great-Britain', '1', '1995'),
(15, 'Brawn', 'Great-Britain', '1', '2009');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(1, 'manni@t-online.de', '$2y$10$OB3UNPieV3jKDEWhrsiBAeBKKzpCZJKvABZlTe.rDUFKQoEmQI.5S', 'Timo', 'Günther', '2021-08-10 13:36:50', '2021-08-10 13:36:50');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `f1_driver_wm_standings`
--
ALTER TABLE `f1_driver_wm_standings`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `f1_team_wm_standings`
--
ALTER TABLE `f1_team_wm_standings`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `f1_driver_wm_standings`
--
ALTER TABLE `f1_driver_wm_standings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
