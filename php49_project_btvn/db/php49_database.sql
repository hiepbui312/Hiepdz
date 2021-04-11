-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 03:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php49_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `displayhome` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `displayhome`) VALUES
(18, 'Hà Nội', 0),
(19, 'Hồ Chí Minh', 0),
(20, 'Đà Nẵng', 0),
(21, 'London', 0),
(22, 'Nha Trang', 0),
(23, 'Vũng Tàu', 0),
(24, 'Cà Mau', 0),
(25, 'Mù Căng Trải', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `password`) VALUES
(1, 'Nguyễn Văn A', 'nva@gmail.com', 'Hà Nội', '123456', '202cb962ac59075b964b07152d234b70'),
(2, 'test', 'test@gmail.com', 'Hà Nội', '123456', '202cb962ac59075b964b07152d234b70'),
(3, 'Nguyễn Văn E@', 'nve@gmail.com', 'Hà Nội', '123456', '202cb962ac59075b964b07152d234b70'),
(0, 'hiepdz', 'nvab@gmail.com', 'asd', '123', '202cb962ac59075b964b07152d234b70'),
(0, 'hiepdz', 'henbui3120001@gmail.com', 'asd', '123', '202cb962ac59075b964b07152d234b70'),
(0, 'hiepdz', 'nva1@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70'),
(0, 'hiepdz', 'nva123@gmail.com', 'asd', '123', '202cb962ac59075b964b07152d234b70'),
(0, 'hiepdz', 'nva1111@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70'),
(0, 'hiepdz', 'nva11111@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `name`, `photo`, `content`) VALUES
(1, 'Hire Cars', 'offers01.jpg', 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.'),
(2, 'Hire Flight', 'offers02.jpg', 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.'),
(3, 'Hire Flight', 'offers03.jpg', 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id123.'),
(4, 'Hire Flight1', 'offers04.jpg', '<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id1654.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(13, 4, 18, 5, 6000000),
(14, 4, 17, 6, 7000000),
(15, 5, 18, 1, 6000000),
(0, 0, 24, 1, 4100000),
(0, 0, 23, 4, 3100000),
(0, 0, 24, 1, 4100000),
(0, 0, 23, 1, 3100000),
(0, 0, 22, 2, 2100000),
(0, 0, 22, 1, 2100000),
(0, 0, 22, 1, 2100000),
(0, 14, 24, 1, 4100000),
(0, 15, 24, 1, 4100000),
(0, 16, 24, 1, 4100000),
(0, 17, 24, 1, 4100000),
(0, 18, 24, 3, 4100000),
(0, 19, 24, 2, 4100000),
(0, 20, 24, 2, 4100000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `price`, `status`) VALUES
(14, 1, '2020-09-19', 4100000, 0),
(15, 1, '2020-09-19', 4100000, 0),
(16, 1, '2020-09-19', 4100000, 0),
(17, 1, '2020-09-20', 4100000, 0),
(18, 1, '2020-09-21', 12300000, 0),
(19, 0, '2020-09-21', 8200000, 0),
(20, 0, '2020-09-21', 8200000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(1) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(500) NOT NULL,
  `photo1` varchar(500) NOT NULL,
  `photo2` varchar(500) NOT NULL,
  `photo3` varchar(500) NOT NULL,
  `photo4` varchar(500) NOT NULL,
  `photo5` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `max_people` int(11) NOT NULL,
  `check_out` date DEFAULT NULL,
  `room_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `hot`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `price`, `discount`, `category_id`, `star`, `address`, `max_people`, `check_out`, `room_available`) VALUES
(21, 'Aqua Palace ', '<p>kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 1, 'img1.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 100000, 0, 20, 3, 'Hà Nội', 10, '0000-00-00', 10),
(22, 'Foscari Palace', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 1, 'img2.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 2100000, 0, 19, 3, 'Paris', 10, NULL, 10),
(23, 'Hilton Hotel', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 1, 'img3.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 3100000, 0, 18, 3, 'London', 10, NULL, 10),
(24, 'Hotel Colombina', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 1, 'img4.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 4100000, 0, 22, 4, 'Ho Chi Minh', 10, NULL, 10),
(25, 'Hilton Molino Stucky', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 0, 'img2.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 5100000, 0, 25, 4, 'Da Nang', 10, NULL, 10),
(26, 'Hilton Molino Stucky2', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 0, 'img2.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 6100000, 0, 18, 5, 'Nha Trang', 10, NULL, 10),
(27, 'Hilton Molino Stucky3', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 0, 'img2.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 7100000, 0, 21, 1, 'Khanh Hoa', 10, NULL, 10),
(28, 'Hilton Molino Stucky4', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 0, 'img2.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 8100000, 0, 23, 2, 'Vinh Phuc', 10, NULL, 10),
(29, 'Hilton Molino Stucky5', '<p>Kh&aacute;ch sạn</p>\r\n', 'Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.', 0, '1599828361_photo-hotel4.jpg', 'photo-hotel1.jpg', 'photo-hotel2.jpg', 'photo-hotel3.jpg', 'photo-hotel4.jpg', 'photo-hotel5.jpg', 9100000, 0, 18, 3, 'Tay Nguyen', 10, NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_name` varchar(500) NOT NULL,
  `max_people` int(11) NOT NULL,
  `room_price` int(11) NOT NULL,
  `room_content` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `max_people`, `room_price`, `room_content`, `photo`, `product_id`) VALUES
(1, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 21),
(2, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 21),
(3, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 21),
(4, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 21),
(5, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 21),
(6, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 22),
(7, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 22),
(8, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 22),
(9, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 22),
(10, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 22),
(11, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 23),
(12, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 23),
(13, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 23),
(14, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 23),
(15, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 23),
(16, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 24),
(17, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 24),
(18, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 24),
(19, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 24),
(20, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 24),
(21, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 25),
(22, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 25),
(23, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 25),
(24, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 25),
(25, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 25),
(26, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 26),
(27, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 26),
(28, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 26),
(29, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 26),
(30, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 26),
(31, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 27),
(32, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 27),
(33, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 27),
(34, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 27),
(35, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 27),
(36, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 28),
(37, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 28),
(38, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 28),
(39, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 28),
(40, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 28),
(96, 'classic room 1', 10, 1100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel1.jpg', 29),
(97, 'classic room 2', 10, 2100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel2.jpg', 29),
(98, 'classic room 3', 10, 3100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel3.jpg', 29),
(99, 'classic room 4', 10, 4100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel4.jpg', 29),
(100, 'classic room 5', 10, 5100000, 'Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.', 'photo-hotel5.jpg', 29);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nguyen Van A', 'nva@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Nguyen Van C', 'nvc@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Nguyen Van D', 'nvd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Nguyen Van EE', 'nve@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'hiepdz', 'henbui312000@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, '3', '333@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, '3', '1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'hiepdz', '2@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'hiepdz', '3@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'hiepdz', '5@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'hiepdz', '1123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'hiepdz', 'hiepbui3120001@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'hiepdz', 'hiepbui31200011231@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'hiepdz', 'nva1@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
