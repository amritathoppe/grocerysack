-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 07:26 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectup`
--

-- --------------------------------------------------------

--
-- Table structure for table `catergory`
--

CREATE TABLE `catergory` (
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catergory`
--

INSERT INTO `catergory` (`name`) VALUES
('Dry fruits'),
('Fruits and vegetables'),
('Groceries and Staples'),
('Health drinks');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(225) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(225) NOT NULL,
  `product_details` varchar(500) NOT NULL,
  `product_store` varchar(100) NOT NULL,
  `product_cater` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_price`, `product_image`, `product_details`, `product_store`, `product_cater`, `product_id`) VALUES
('Almond', 650, 'images/almond.jpg', 'Blue Diamond Growers'' naturally nutritious Wasabi and Soy Sauce almonds are roasted and seasoned with spicy BOLD flavors.', 'kannan', 'dryfruits', 1),
('Cashewnut', 150, 'images/cashewnut.jpg', 'Superior Quality Fun Time Crunch.Fit 4 Active Lifestyle.', 'kannan', 'dryfruits', 2),
('dates', 150, 'images/dates1.jpg', 'We don''t use oil for its glossiness.', 'kannan', 'dryfruits', 3),
('Pistachios', 450, 'images/pista.jpg', 'Salted Pista is a drupe, containing an elongated seed, which is the cooked portion. ', 'kannan', 'dryfruits', 4),
('Raisins(100g)', 40, 'images/raisin.jpg', 'Raisins help to correct iron deficiency anemia and promote blood clotting during wound healing', 'vasantham', 'dryfruits', 5),
('Walnut', 296, 'images/walnut.jpg', 'Walnut Kernels are the rich in nutrition and add a palatable flavour to any dish. It has good quantity calories enclosed in hard brown colored shells; the kernels inside the shell are off white in color that is covered with a thin brown skin.', 'boomika', 'dryfruits', 6),
('banana yellow', 30, 'images/banana_yel.jpg', 'Much Bigger In Size Than The Regular Robusta Bananas, Flesh Is Firmer, Silkier And Sweeter', 'boomika', 'fruits', 7),
('banana green ', 15, 'images/banana_grn.jpg', 'This fruit has high nutritional and calorific value, containing large amounts of potassium, Vitamin C and beta-carotene.', 'boomika', 'fruits', 8);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(225) NOT NULL,
  `storepage` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `storepage`, `image`) VALUES
(1, 'Kannan Departmental Store', 'store3.php', 'images/img1.jpg'),
(3, 'Vasantham Super Market', 'store4.php', 'images/img2.jpg'),
(4, 'Boomika Supermarket', 'store2.php', 'images/img3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `address_1` varchar(225) NOT NULL,
  `address_2` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `address_1`, `address_2`, `city`, `state`, `pincode`, `contact`) VALUES
(9, 'amritha', '123am', 'amritha', 'tk', 'amrita@gmail.com', '2,manjankara st', 'south masi st', 'madurai', 'tamil nadu', 625001, 0),
(10, 'prakalpa', 'password', 'Prakalpa', 'RS', 'rsprakalpa@gmail.com', '13/1,Panthadi 6th street,', 'thavuttu sandhai', 'madurai', 'tamil nadu', 625001, 0),
(11, 'rishi', 'rishi', 'rishi', 'vandhan', 'rishi@gmail.com', '6a,manimegalai st', 'vilapuram ', 'madurai', 'tamil nadu', 625010, 9787285286);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catergory`
--
ALTER TABLE `catergory`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`),
  ADD UNIQUE KEY `store_name` (`store_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
