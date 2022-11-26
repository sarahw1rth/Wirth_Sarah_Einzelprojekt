-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Erstellungszeit: 26. Nov 2022 um 17:30
-- Server-Version: 8.0.31
-- PHP-Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `rezeptedatenbank_php`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `s_rezept`
--

CREATE TABLE `s_rezept` (
  `id` int NOT NULL,
  `rezept` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zutaten` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `s_rezept`
--

INSERT INTO `s_rezept` (`id`, `rezept`, `zutaten`, `kategorie`) VALUES
(1, 'Schokokuchen', '220g weiche Butter, 160g Zucker, 1 Pck. Vanillinzucker, 1 Prise Salz, 5 Eier (Gr. M), 170g Mehl (Type 405), 2 EL Kakaopulver, 3TL Backpulver, 50ml Milch, 100g geraspelte Zartbitterschokolade', 'Dessert'),
(2, 'Gemüsesuppe', '1kg Karotten, 1kg Kartoffeln, 1 Kohlrabi, 2 Stangen Lauch, 1/4 Knollensellerie, 1 Bund Petersilie', 'Vorspeise'),
(29, 'Spaghetti Carbonara', '250g Spaghetti, 150g Speck,2 Eier, 200ml Sahne, 80g Parmesan gerieben, Salz, Pfeffer, Muskatnuss', 'Hauptspeise'),
(32, 'Blätterteigschnecken Elsässer Art', '300g Frischkäse, 250g Speck gewürfelt, 1 Bund	Frühlingszwiebel(n), 1 Zwiebel, 2 Pck. Blätterteig, Salz und Pfeffer', 'Snack'),
(34, 'Frikadellen', '1 Brötchen, 500g Hackfleisch, 2 Eier, Petersilie, 2 Zwiebeln, Salz und Pfeffer, Muskatnuss, Butter', 'Snack'),
(39, 'Glühwein', 'Glühweingewürz, Nelken, Zimt, Traubensaft rot und weiß, brauner Zucker, Zitrone', 'Snack');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `s_rezept`
--
ALTER TABLE `s_rezept`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `s_rezept`
--
ALTER TABLE `s_rezept`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
