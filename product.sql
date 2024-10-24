-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 22, 2024 at 06:09 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `session`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `image`) VALUES
(1, 'tank top', '11', 'tshirt', 'a.jpg'),
(2, 'crop top', '11', 'tshirt', 'b.jpg'),
(4, 'full sleeves', '13', 'tshirt', 'c.jpg'),
(6, 'oversized', '10', 'tshirt', 'd.jpg'),
(7, 'floral', '15', 'dress', 'e.jpg'),
(8, 'short', '18', 'dress', 'f.jpg'),
(9, 'bodycon', '25', 'dress', 'g.jpg'),
(10, 'mini', '19', 'dress', 'h.jpg'),
(11, 'box pant', '15', 'pant', 'i.jpg'),
(12, 'straight pant', '17', 'pant', 'j.jpg'),
(13, 'baggy pant', '19', 'pant', 'k.jpg'),
(14, 'flair pant', '20', 'pant', 'l.jpg'),
(15, 'mini skirt', '17', 'skirt', 'm.jpg'),
(16, 'floral skirt', '15', 'skirt', 'n.jpg'),
(17, 'mermaid skirt', '17', 'skirt', 'o.jpg'),
(18, 'slit skirt', '21', 'Dress', 'p.jpg'),
(21, 'printed crop tshirt', '10', 'Tshirt', 'abc.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
