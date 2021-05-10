-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2020, 18:01
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
  `idcity` int(11) NOT NULL,
  `idstate` int(11) NOT NULL,
  `postal_code` text NOT NULL,
  `idcountry` int(11) NOT NULL,
  `idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cartname` text NOT NULL,
  `idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cartproducts`
--

CREATE TABLE `cartproducts` (
  `id` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `cityname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `lname` text NOT NULL,
  `phone` bigint(9) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `countryname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `idorder` int(11) NOT NULL,
  `id_payment_method` int(11) NOT NULL,
  `idaddress` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_pick_up_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` date NOT NULL,
  `status` smallint(6) NOT NULL,
  `id_delivery_type` int(11) NOT NULL,
  `id_payment_method` smallint(6) NOT NULL,
  `idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(11) NOT NULL,
  `method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pickupaddress`
--

CREATE TABLE `pickupaddress` (
  `id` int(11) NOT NULL,
  `idaddress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plot`
--

CREATE TABLE `plot` (
  `id` int(11) NOT NULL,
  `idaddress` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `productname` text NOT NULL,
  `price` double NOT NULL,
  `harvestdate` date NOT NULL,
  `idplot` int(11) NOT NULL,
  `idtype` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `statename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `typename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcity` (`idcity`),
  ADD KEY `idclient` (`idclient`),
  ADD KEY `idcountry` (`idcountry`),
  ADD KEY `idstate` (`idstate`);

--
-- Indeksy dla tabeli `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idclient` (`idclient`);

--
-- Indeksy dla tabeli `cartproducts`
--
ALTER TABLE `cartproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcart` (`idcart`),
  ADD KEY `idproduct` (`idproduct`);

--
-- Indeksy dla tabeli `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idaddress` (`idaddress`),
  ADD KEY `idorder` (`idorder`),
  ADD KEY `id_payment_method` (`id_payment_method`),
  ADD KEY `id_pick_up_address` (`id_pick_up_address`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcart` (`idcart`),
  ADD KEY `idclient` (`idclient`);

--
-- Indeksy dla tabeli `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pickupaddress`
--
ALTER TABLE `pickupaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idaddress` (`idaddress`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idplot` (`idplot`),
  ADD KEY `idtype` (`idtype`);

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
-- AUTO_INCREMENT dla tabeli `cartproducts`
--
ALTER TABLE `cartproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pickupaddress`
--
ALTER TABLE `pickupaddress`
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
-- AUTO_INCREMENT dla tabeli `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`idcity`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`idclient`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `address_ibfk_3` FOREIGN KEY (`idcountry`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `address_ibfk_4` FOREIGN KEY (`idstate`) REFERENCES `state` (`id`);

--
-- Ograniczenia dla tabeli `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `client` (`id`);

--
-- Ograniczenia dla tabeli `cartproducts`
--
ALTER TABLE `cartproducts`
  ADD CONSTRAINT `cartproducts_ibfk_1` FOREIGN KEY (`idcart`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cartproducts_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `product` (`id`);

--
-- Ograniczenia dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`idaddress`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`idorder`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`id_payment_method`) REFERENCES `paymentmethod` (`id`),
  ADD CONSTRAINT `delivery_ibfk_4` FOREIGN KEY (`id_pick_up_address`) REFERENCES `pickupaddress` (`id`);

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`idcart`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`idclient`) REFERENCES `client` (`id`);

--
-- Ograniczenia dla tabeli `plot`
--
ALTER TABLE `plot`
  ADD CONSTRAINT `plot_ibfk_1` FOREIGN KEY (`idaddress`) REFERENCES `address` (`id`);

--
-- Ograniczenia dla tabeli `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idplot`) REFERENCES `plot` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`idtype`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;