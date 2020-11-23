-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Lis 2020, 21:35
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `brzoskwinie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `street` varchar(30) NOT NULL,
  `postal` varchar(7) NOT NULL,
  `country` varchar(20) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cartname` varchar(20) NOT NULL,
  `quantiti` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `cityname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `quantiti` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_paymethod` int(11) NOT NULL,
  `id_address` int(11) NOT NULL,
  `id_pickaddress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orde`
--

CREATE TABLE `orde` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` double NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `id_delivery` int(11) NOT NULL,
  `id_paymethod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `paymethod`
--

CREATE TABLE `paymethod` (
  `id` int(11) NOT NULL,
  `methodname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pickaddress`
--

CREATE TABLE `pickaddress` (
  `id` int(11) NOT NULL,
  `id_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plot`
--

CREATE TABLE `plot` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `id_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `harvestdate` date NOT NULL,
  `photo` varchar(30) NOT NULL,
  `id_plot` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `stallname` varchar(100) NOT NULL,
  `deliveryrange` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_address` int(11) NOT NULL,
  `id_plot` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `statename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `typename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `orde`
--
ALTER TABLE `orde`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `paymethod`
--
ALTER TABLE `paymethod`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pickaddress`
--
ALTER TABLE `pickaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `orde`
--
ALTER TABLE `orde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `paymethod`
--
ALTER TABLE `paymethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pickaddress`
--
ALTER TABLE `pickaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `plot`
--
ALTER TABLE `plot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
