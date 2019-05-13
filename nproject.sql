-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2019 at 06:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_user`
--

CREATE TABLE `advanced_user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `contact_number` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(512) NOT NULL,
  `access_level` varchar(16) NOT NULL,
  `access_code` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='admin and customer users';

--
-- Dumping data for table `advanced_user`
--

INSERT INTO `advanced_user` (`id`, `username`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `password`, `access_level`, `access_code`, `status`, `created`, `modified`) VALUES
(1, '', 'Mike', 'Dalisay', 'mike@example.com', '0999999999', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', 'Admin', '', 1, '0000-00-00 00:00:00', '2016-06-13 15:17:47'),
(2, '', 'Lauro', 'Abogne', 'lauro@eacomm.com', '08888888', 'Pasig City', '$2y$10$it4i11kRKrB19FfpPRWsRO5qtgrgajL7NnxOq180MsIhCKhAmSdDa', 'Customer', '', 1, '0000-00-00 00:00:00', '2015-03-24 04:00:21'),
(4, '', 'Darwin', 'Dalisay', 'darwin@example.com', '9331868359', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Customer', 'ILXFBdMAbHVrJswNDnm231cziO8FZomn', 1, '2014-10-29 17:31:09', '2016-06-13 15:18:25'),
(7, '', 'Marisol Jane', 'Dalisay', 'mariz@gmail.com', '09998765432', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', 'mariz', 'Customer', '', 1, '2015-02-25 09:35:52', '2015-03-24 04:00:21'),
(9, '', 'Marykris', 'De Leon', 'marykrisdarell.deleon@gmail.com', '09194444444', 'Project 4, QC', '$2y$10$uUy7D5qmvaRYttLCx9wnU.WOD3/8URgOX7OBXHPpWyTDjU4ZteSEm', 'Customer', '', 1, '2015-02-27 14:28:46', '2015-03-24 03:51:03'),
(10, '', 'Merlin', 'Duckerberg', 'merlin@gmail.com', '09991112333', 'Project 2, Quezon City', '$2y$10$VHY58eALB1QyYsP71RHD1ewmVxZZp.wLuhejyQrufvdy041arx1Kq', 'Admin', '', 1, '2015-03-18 06:45:28', '2015-03-24 04:00:21'),
(14, '', 'Charlon', 'Ignacio', 'charlon@gmail.com', '09876543345', 'Tandang Sora, QC', '$2y$10$Fj6O1tPYI6UZRzJ9BNfFJuhURN9DnK5fQGHEsfol5LXRu.tCYYggu', 'Customer', '', 1, '2015-03-24 08:06:57', '2015-03-24 04:48:00'),
(15, '', 'Kobe Bro', 'Bryant', 'kobe@gmail.com', '09898787674', 'Los Angeles, California', '$2y$10$fmanyjJxNfJ8O3p9jjUixu6EOHkGZrThtcd..TeNz2g.XZyCIuVpm', 'Customer', '', 1, '2015-03-26 11:28:01', '2015-03-26 00:39:52'),
(20, '', 'Tim', 'Duncan', 'tim@example.com', '9999999', 'San Antonio, Texas, USA', '$2y$10$9OSKHLhiDdBkJTmd3VLnQeNPCtyH1IvZmcHrz4khBMHdxc8PLX5G6', 'Customer', '0X4JwsRmdif8UyyIHSOUjhZz9tva3Czj', 1, '2016-05-26 01:25:59', '2016-05-25 14:25:59'),
(21, '', 'Tony', 'Parker', 'tony@example.com', '8888888', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$lBJfvLyl/X5PieaztTYADOxOQeZJCqETayF.O9ld17z3hcKSJwZae', 'Customer', 'THM3xkZzXeza5ISoTyPKl6oLpVa88tYl', 1, '2016-05-26 01:29:01', '2016-06-13 14:46:33'),
(22, 'jose', '', '', '', '', '', '$2y$10$WtF5aKob3n4QuCsE1IXNwONB1PcmnFP4P/pcNtk91hnFXUKBH1Qie', '', '', 0, '0000-00-00 00:00:00', '2019-02-28 12:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `all_orders`
--

CREATE TABLE `all_orders` (
  `id` int(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `order_code` varchar(50) NOT NULL,
  `payment` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_orders`
--

INSERT INTO `all_orders` (`id`, `user_id`, `order_code`, `payment`, `address`, `city`, `country`, `total`) VALUES
(1, '2', 'QW123', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '8000'),
(2, '4', 'QW123', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '800'),
(3, '4', 'order5ca8e701b8e6e', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '8800'),
(4, '4', 'order5ca8e7724e1cb', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '38800'),
(5, '4', 'order5ca8ec16a2ec5', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '38800'),
(6, '4', 'order5ca8ec4a3660f', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '38800'),
(7, '3', 'order5ca8ed9274e09', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '8000'),
(8, '3', 'order5ca8eda045179', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '8000'),
(9, '3', 'order5ca8edd40513c', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '8000'),
(10, '2', 'order5caa2670c33d1', 'on', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Kenya', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mantra` text NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `mantra`, `images`) VALUES
(1, 'Laptops', 'Fast,efficent and best price guranteed', 'laptop.png'),
(2, 'Cameras', 'Best Snapshot on each capture', 'camera.png'),
(3, 'Desktops', 'Outstanding performance.', 'desktop.png'),
(4, 'Smart phones', 'High performance.Your dream phone.', 'smartphone.png'),
(5, 'Watches', 'Elegance on your hand', 'watch.png'),
(6, 'Accessories', 'Everthin to make your take life smooth', 'accesory.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `quantity`, `name`) VALUES
(1, 'QW123', '10', 'Luxury Ultra thin Wrist Watch'),
(2, 'QW123', '40', 'XP 1155 Intel Core Laptop'),
(3, 'QW123', '2', 'FinePix Pro2 3D Camera'),
(4, 'QW123', '10', 'Luxury Ultra thin Wrist Watch'),
(5, 'QW123', '40', 'XP 1155 Intel Core Laptop'),
(6, 'QW123', '2', 'FinePix Pro2 3D Camera'),
(7, 'QW123', '10', 'XP 1155 Intel Core Laptop'),
(8, 'QW123', '1', 'EXP Portable Hard Drive'),
(9, 'order5ca8e46a208be', '1', 'EXP Portable Hard Drive'),
(10, 'order5ca8e5f392901', '1', 'EXP Portable Hard Drive'),
(11, 'order5ca8e5f392901', '1', 'XP 1155 Intel Core Laptop'),
(12, 'order5ca8e674b1bb9', '1', 'EXP Portable Hard Drive'),
(13, 'order5ca8e674b1bb9', '1', 'XP 1155 Intel Core Laptop'),
(14, 'order5ca8e701b8e6e', '1', 'EXP Portable Hard Drive'),
(15, 'order5ca8e701b8e6e', '1', 'XP 1155 Intel Core Laptop'),
(16, 'order5ca8e744ee364', '1', 'EXP Portable Hard Drive'),
(17, 'order5ca8e744ee364', '1', 'XP 1155 Intel Core Laptop'),
(18, 'order5ca8e744ee364', '20', 'FinePix Pro2 3D Camera'),
(19, 'order5ca8e7724e1cb', '1', 'EXP Portable Hard Drive'),
(20, 'order5ca8e7724e1cb', '1', 'XP 1155 Intel Core Laptop'),
(21, 'order5ca8e7724e1cb', '20', 'FinePix Pro2 3D Camera'),
(22, 'order5ca8ec09b1d5d', '1', 'EXP Portable Hard Drive'),
(23, 'order5ca8ec09b1d5d', '1', 'XP 1155 Intel Core Laptop'),
(24, 'order5ca8ec09b1d5d', '20', 'FinePix Pro2 3D Camera'),
(25, 'order5ca8ec16a2ec5', '1', 'EXP Portable Hard Drive'),
(26, 'order5ca8ec16a2ec5', '1', 'XP 1155 Intel Core Laptop'),
(27, 'order5ca8ec16a2ec5', '20', 'FinePix Pro2 3D Camera'),
(28, 'order5ca8ec4a3660f', '1', 'EXP Portable Hard Drive'),
(29, 'order5ca8ec4a3660f', '1', 'XP 1155 Intel Core Laptop'),
(30, 'order5ca8ec4a3660f', '20', 'FinePix Pro2 3D Camera'),
(31, 'order5ca8ed9274e09', '1', 'XP 1155 Intel Core Laptop'),
(32, 'order5ca8eda045179', '1', 'XP 1155 Intel Core Laptop'),
(33, 'order5ca8edd40513c', '1', 'XP 1155 Intel Core Laptop'),
(34, 'order5caa2670c33d1', '1', 'XP 1155 Intel Core Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company` text NOT NULL,
  `details` text NOT NULL,
  `description` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `category`, `quantity`, `company`, `details`, `description`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00, 2, 299, 'Canon', '', '', '', '', '', ''),
(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00, 6, 4500, 'Toshiba', '', '', '', '', '', ''),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00, 5, 90, 'Rolex', '', '', '', '', '', ''),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 8000.00, 1, 200, 'HP', '									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n		\r\n		\r\n		', '									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n		\r\n		\r\n		', 'image1.png', 'image1.png', 'image1.png', 'image1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `county` text NOT NULL,
  `country` text NOT NULL,
  `telephone` text NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `first_name`, `last_name`, `email`, `address`, `city`, `county`, `country`, `telephone`, `type`) VALUES
(1, 'jose', '$2y$10$0y8MoNfANVP3ObzSxrG1i.7zyE9l9kPwM38aCp8V1w60vRsXZLfqq', '2019-02-24 17:35:58', '', '', '', '', '', '', '', '', 'admin'),
(2, 'will', '$2y$10$8RxJMSVEJRdUtEWcKBkXXu0wLHJlwFR88pBHTEnnmIo8.L7JIDUKa', '2019-02-27 14:08:36', 'Joseph', 'Kariuki', 'josephkariukin4@gmail.com', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Select', 'Kenya', '+254718071716', ''),
(3, 'jose1234', '$2y$10$Nm8faSLmNtaoOWgHEIXSDu9eC6r2JFffX/9DfxyPfLdiTFPi/g1e2', '2019-03-16 11:19:30', 'Joseph', 'Kariuki', 'josephkariukin4@gmail.com', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Select', 'Kenya', '+254718071716', ''),
(4, 'Josephngure', '$2y$10$kek7P6f.LZXtkMgoS/94tOSn/eiXLQj0I88GXkmQT0vUE4PpVMxtu', '2019-03-16 11:25:49', 'Joseph', 'Kariuki', 'josephkariukin4@gmail.com', 'Meru - Nairobi Hwy/B6, Embu', 'Embu', 'Select', 'Kenya', '+254718071716', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanced_user`
--
ALTER TABLE `advanced_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_orders`
--
ALTER TABLE `all_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advanced_user`
--
ALTER TABLE `advanced_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `all_orders`
--
ALTER TABLE `all_orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
