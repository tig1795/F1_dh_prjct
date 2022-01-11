-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Jan 2022 um 16:31
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
  `Season` varchar(255) NOT NULL,
  `GPs` varchar(255) NOT NULL,
  `Champion` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Points` varchar(255) NOT NULL,
  `Wins` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `f1_team_wm_standings`
--

INSERT INTO `f1_team_wm_standings` (`ID`, `Season`, `GPs`, `Champion`, `Nationality`, `Points`, `Wins`) VALUES
(1, '1958', '11', 'Vanwall', 'Great Britain', '48', '6'),
(2, '1959', '9', 'Cooper', 'Great Britain', '40', '5'),
(3, '1960', '10', 'Cooper', 'Great Britain', '48', '6'),
(4, '1961', '8', 'Scuderia Ferrari', 'Italy', '45', '5'),
(5, '1962', '9', 'B.R.M.', 'Great Britain', '42', '4'),
(6, '1963', '10', 'Lotus', 'Great Britain', '54', '7'),
(7, '1964', '10', 'Scuderia Ferrari', 'Italy', '45', '3'),
(8, '1965', '10', 'Lotus', 'Great Britain', '54', '6'),
(9, '1966', '9', 'Brabham', 'Great Britain', '42', '4'),
(10, '1967', '11', 'Brabham', 'Great Britain', '63', '4'),
(11, '1968', '12', 'Lotus', 'Great Britain', '62', '5'),
(12, '1969', '11', 'Matra', 'France', '66', '6'),
(13, '1970', '13', 'Lotus', 'Great Britain', '59', '6'),
(14, '1971', '11', 'Tyrell', 'Great Britain', '73', '7'),
(15, '1972', '12', 'Lotus', 'Great Britain', '61', '5'),
(16, '1973', '15', 'Lotus', 'Great Britain', '92', '7'),
(17, '1974', '15', 'McLaren', 'Great Britain', '73', '4'),
(18, '1975', '14', 'Scuderia Ferrari', 'Italy', '72,5', '6'),
(19, '1976', '16', 'Scuderia Ferrari', 'Italy', '83', '6'),
(20, '1977', '17', 'Scuderia Ferrari', 'Italy', '95', '4'),
(21, '1978', '16', 'Lotus', 'Great Britain', '86', '8'),
(22, '1979', '15', 'Scuderia Ferrari', 'Italy', '113', '6'),
(23, '1980', '14', 'Williams', 'Great Britain', '120', '6'),
(24, '1981', '15', 'Williams', 'Great Britain', '95', '4'),
(25, '1982', '16', 'Scuderia Ferrari', 'Italy', '74', '3'),
(26, '1983', '15', 'Scuderia Ferrari', 'Italy', '89', '4'),
(27, '1984', '16', 'McLaren', 'Great Britain', '143,5', '12'),
(28, '1985', '16', 'McLaren', 'Great Britain', '90', '6'),
(29, '1986', '16', 'Williams', 'Great Britain', '141', '9'),
(30, '1987', '16', 'Williams', 'Great Britain', '137', '9'),
(31, '1988', '16', 'McLaren', 'Great Britain', '199', '15'),
(32, '1989', '16', 'McLaren', 'Great Britain', '141', '10'),
(33, '1990', '16', 'McLaren', 'Great Britain', '121', '6'),
(34, '1991', '16', 'McLaren', 'Great Britain', '139', '8'),
(35, '1992', '16', 'Williams', 'Great Britain', '164', '10'),
(36, '1993', '16', 'Williams', 'Great Britain', '168', '10'),
(37, '1994', '16', 'Williams', 'Great Britain', '118', '7'),
(38, '1995', '17', 'Benetton', 'Great Britain', '137', '11'),
(39, '1996', '16', 'Williams', 'Great Britain', '175', '12'),
(40, '1997', '17', 'Williams', 'Great Britain', '123', '8'),
(41, '1998', '16', 'McLaren', 'Great Britain', '156', '9'),
(42, '1999', '16', 'Scuderia Ferrari', 'Italy', '128', '6'),
(43, '2000', '17', 'Scuderia Ferrari', 'Italy', '170', '10'),
(44, '2001', '17', 'Scuderia Ferrari', 'Italy', '179', '9'),
(45, '2002', '17', 'Scuderia Ferrari', 'Italy', '221', '15'),
(46, '2003', '16', 'Scuderia Ferrari', 'Italy', '158', '8'),
(47, '2004', '18', 'Scuderia Ferrari', 'Italy', '262', '15'),
(48, '2005', '19', 'Renault', 'France', '191', '8'),
(49, '2006', '18', 'Renault', 'France', '206', '8'),
(50, '2007', '17', 'Scuderia Ferrari', 'Italy', '204', '9'),
(51, '2008', '18', 'Scuderia Ferrari', 'Italy', '172', '8'),
(52, '2009', '17', 'Brawn', 'Great Britain', '172', '8'),
(53, '2010', '19', 'Red Bull', 'Austria', '498', '9'),
(54, '2011', '19', 'Red Bull', 'Austria', '650', '12'),
(55, '2012', '20', 'Red Bull', 'Austria', '460', '7'),
(56, '2013', '19', 'Red Bull', 'Austria', '596', '13'),
(57, '2014', '19', 'Mercedes', 'Germany', '701', '16'),
(58, '2015', '19', 'Mercedes', 'Germany', '703', '16'),
(59, '2016', '21', 'Mercedes', 'Germany', '765', '19'),
(60, '2017', '20', 'Mercedes', 'Germany', '668', '12'),
(61, '2018', '21', 'Mercedes', 'Germany', '655', '11'),
(62, '2019', '21', 'Mercedes', 'Germany', '739', '15'),
(63, '2020', '17', 'Mercedes', 'Germany', '547', '13'),
(64, '2021', '23', 'Red-Bull Racing', 'Netherlands', '500', '23');

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
(1, 'manni@t-online.de', '$2y$10$OB3UNPieV3jKDEWhrsiBAeBKKzpCZJKvABZlTe.rDUFKQoEmQI.5S', 'Timo', 'Günther', '2021-08-10 13:36:50', '2021-08-10 13:36:50'),
(2, 'schmitt@gmx.net', '$2y$10$gFjnc2pJbeiXfe3CYgTMyeECKKhN/1tOCQ1DgIJ3/ol9tr9DTbQNG', 'Harald', 'Schmitt', '2021-10-11 12:07:22', '2021-10-11 12:07:22'),
(3, 'bhein@gutelaune.de', '$2y$10$L1tqynMCTOK2zYIVm.NLlOw9d6MX7EG6bmpoFokpXWtKOW0CkxGk2', 'Becci', 'Hein', '2021-10-11 14:33:40', '2021-10-11 14:33:40'),
(4, 'mm@web.de', '$2y$10$UKGQY1UsG1PeliGzUKT0G..4G9eCEvjlvVPe0PzaRVNR98u3RFxQC', 'Max', 'Mustermann', '2021-10-15 09:21:56', '2021-10-15 09:21:56'),
(5, 'sly@web.de', '$2y$10$gvsAppmBlzoVwLxMBYTPrunACCT/GccGFdLHrerDMEmCr632L/CHW', 'Sylvester', 'Stallone', '2021-10-15 11:08:07', '2021-10-15 11:08:07'),
(6, 'jok@gmx.de', '$2y$10$pdMdfK7xGAmUhYLGsVDkXeEMRO3kHMXzm145rPhqC1klfL3hR8eo6', 'Jo', 'Kimmich', '2021-10-15 11:08:50', '2021-10-15 11:08:50'),
(7, 't.g@t-online.de', '$2y$10$0nkOJg6ZNmAQ.fzhCl51n.KWnEajzfi.sR7Y5cA.Q1sfBldIheUmK', 'dieter', 'halla', '2021-11-16 15:22:16', '2021-11-16 15:22:16');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT für Tabelle `f1_team_wm_standings`
--
ALTER TABLE `f1_team_wm_standings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
