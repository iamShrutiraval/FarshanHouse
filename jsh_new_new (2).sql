-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 02:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsh_new_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` enum('Enable','Disable') NOT NULL DEFAULT 'Enable',
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`, `status`, `profile_img`) VALUES
(1, 'Shruti', 'Raval', 'shrutiraval148@gmail.com', '$2y$10$c2VPUDt9ba0JVwd47ylEI./igQmOrdnI8Ed0/BP6.zWuio2XGQfYu', 'Enable', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_order`
--

CREATE TABLE `booking_order` (
  `booking_order_id` int(11) NOT NULL,
  `user_id_fk` int(11) NOT NULL DEFAULT 0,
  `address_id` int(11) NOT NULL DEFAULT 0,
  `order_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_status` enum('pending','approved','declined') NOT NULL DEFAULT 'pending',
  `order_status` enum('pending','completed','processing','return') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_order`
--

INSERT INTO `booking_order` (`booking_order_id`, `user_id_fk`, `address_id`, `order_amount`, `order_date`, `payment_status`, `order_status`) VALUES
(111, 30, 54, '120.00', '2023-03-25 11:02:54', 'pending', 'pending'),
(112, 30, 55, '1050.00', '2023-03-25 12:18:08', 'pending', 'pending'),
(114, 66, 57, '240.00', '2023-03-30 20:01:57', 'pending', 'pending'),
(115, 30, 58, '140.00', '2023-04-19 13:37:30', 'pending', 'pending'),
(116, 30, 59, '1170.00', '2023-04-20 14:24:57', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `book_order_item`
--

CREATE TABLE `book_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id_fk` int(11) NOT NULL DEFAULT 0,
  `product_id_fk` int(11) NOT NULL DEFAULT 0,
  `user_id_fk` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(5) NOT NULL,
  `user_id_fk` int(11) NOT NULL DEFAULT 0,
  `product_id_fk` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id_fk`, `product_id_fk`, `quantity`) VALUES
(41, 63, 67, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_status` enum('Enable','Disable') NOT NULL DEFAULT 'Enable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`, `category_status`) VALUES
(35, 'Khakhra', 'Different types of khakhra ', 'Enable'),
(36, 'Papad', 'Different types of papad ', 'Enable'),
(37, 'Chawana', 'Different types of Chawana', 'Enable'),
(38, 'Sweet Thooth', 'Different types of Sweeth Thooth', 'Enable'),
(39, 'Childrens Choice', 'soya stick,cheese ball,corn chips etc ', 'Enable'),
(40, 'Bhakhari', 'Different types Bhakhari', 'Enable'),
(41, 'Dal', 'Different types of Dal', 'Enable'),
(42, 'Gathiya', 'Different types of Gathiya ', 'Disable'),
(43, 'Puri', 'Different types of Puri', 'Enable'),
(45, 'Murmure', 'Different types of Murmure', 'Enable'),
(46, 'Para', 'Different types of Para', 'Disable'),
(47, 'Biscuit', 'Different types of Biscuit', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(3) NOT NULL,
  `c_id_fk` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `weight` int(4) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `product_statius` enum('yes','no') NOT NULL DEFAULT 'yes',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `c_id_fk`, `product_name`, `description`, `weight`, `price`, `product_statius`, `image`) VALUES
(38, 35, 'METHI KHAKHRA', 'Wheat flour,Iodised salt,Edible oil,Chilly powder,Methi patta (leaves),Other spices,etc', 500, '0.00', 'no', 'methikhakhra.jpg'),
(39, 35, ' DOSA KHAKHRA', 'Semolina,Gram flour,Butter,Edible oil,Salt,Permitted Flavour', 200, '155.00', 'no', 'dosakhakhra.jpg'),
(40, 35, 'MASALA KHAKHRA', 'Wheat flour,Rice Flour,Iodised salt,Edible oil,Turmeric powder,Chilly powder,etc', 500, '140.00', 'yes', 'masalakhakhra.jpg'),
(41, 35, 'CHEESE DOSA KHAKHRA', 'Semolina,Gram flour,Butter,Edible oil,Salt,Permitted Flavour.', 200, '155.00', 'yes', 'dosakhakhra.jpg'),
(42, 35, 'SADA KHAKHRA', ' Wheat flour,Rice Flour,Iodised salt,Edible oil,etc .', 500, '140.00', 'yes', 'methikhakhra.jpg'),
(43, 35, 'COW GHEE KHAKHRA', 'Wheat flour,Rice flour,Iodised salt,Edible oil,cow ghee,etc.', 500, '260.00', 'yes', 'Gheekhakhra.png'),
(44, 35, 'BUTTER DOSA KHAKHRA', 'Semolina,Gram flour,Butter,Edible oil,Salt,Permitted Flavour.', 200, '155.00', 'yes', 'dosakhakhra.jpg'),
(45, 35, 'PERI PERI KHAKHRA', ' Whole wheat flour,Edible oil,Spices,Onion,Garlic,Iodised salt,Sugar,Added flavour,etc.', 400, '175.00', 'yes', 'PeriPeri.jpg'),
(46, 35, 'PANIPURI KHAKHRA', 'Whole wheat flour,Edible oil,Spices,Iodised salt,Sugar,Added flavour,etc.', 400, '155.00', 'yes', 'PeriPeri.jpg'),
(47, 35, 'RAGI KHAKHRA', 'Whole Ragi (Nachni)flour,Whole Wheat flour,Sesame seeds,Edible oil,Iodised salt and spice.', 400, '155.00', 'yes', 'Ragikhakhra.jpg'),
(48, 36, 'GREEN CHILLY PAPAD', 'Urad flour,Edible oil,Iodised salt,Asafoetida,green chilly,Papad Khar.', 500, '130.00', 'yes', 'chilipapad.jpeg'),
(49, 36, 'JIRAMARI SINDHI PAPAD', 'urad flour,edible oil,Iodised salt,black papper,asafoetida,jeera,Papad khar etc.', 500, '140.00', 'yes', 'singlemari.jpeg'),
(50, 36, 'GREEN GARLIC PAPAD', 'Urad flour,Edible oil,Iodised salt,Asafoetida,green chilly,Garlic,Papad Khar.', 500, '130.00', 'yes', 'chilipapad.jpeg'),
(51, 36, 'SINGLE MARI PAPAD', 'Urad flour,Edible oil,Iodised salt,Asafoetida,Black papper,Papad Khar.', 500, '100.00', 'yes', 'singlemari.jpeg'),
(52, 36, 'KOTHMIR MARCHA PAPAD', 'Urad flour,Edible oil,Iodised salt,Coriander,green chilly,Asafoetida,Black papper,Papad Khar etc.', 500, '130.00', 'yes', 'chilipapad.jpeg'),
(53, 36, 'DOUBLE MARI PAPAD', 'Urad flour,Edible oil,Iodised salt,Asafoetida,Black papper,Papad Khar.', 500, '110.00', 'yes', 'doublemari.jpeg'),
(54, 36, 'RAJWADI PAPAD', 'Urad flour,Edible oil,Iodised salt,Carrom seeds,Asafoetida,cummin seeds,Papad Khar.', 500, '130.00', 'yes', 'singlemari.jpeg'),
(55, 36, 'MOONG PAPAD', 'Moong dal flour,Edible oil,Iodised salt,Carrom seeds,Asafoetida,cummin seeds,Papad Khar', 500, '170.00', 'yes', 'moong.png'),
(56, 37, 'SURTI CHAWANU', 'Gram flour ,edible oil , iodised salt ,rice flakes ,gram pulses ,sugar ,peanutes ,curry leaves,mix indian spices ,etc', 400, '120.00', 'yes', 'surtimedium.jpeg'),
(57, 37, 'TIKHU MIX CHAWANU', 'Gram flour ,edible oil , iodised salt ,rice flakes ,gram pulses ,sugar ,peanutes ,curry leaves,mix indian spices ,etc.', 400, '120.00', 'yes', 'tikhumix.jpeg'),
(58, 37, 'PANCHRATNA MIX', 'Gram flour,Edible oil,Iodised salt,Gram,Curry leaves,Masoor dal, peanuts,Mutter, mix indian spices.', 400, '120.00', 'yes', 'pancharatna.jpeg'),
(59, 37, 'MARWADI CHAWANU', 'Gram flour,Edible oil,Iodised salt,Gram,Curry leaves,Masoor dal, peanuts, mix indian spices.', 400, '120.00', 'yes', 'marvadi.jpeg'),
(60, 38, 'SUKHADI', 'Wheat flour,Jaggery,Pure Ghee,etc.', 250, '150.00', 'yes', 'sukhadi.jpeg'),
(61, 38, 'DRYFRUIT CHIKKI', 'Mix dryfruit,Jaggery,Sugar,etc', 250, '250.00', 'yes', 'dryfruitchikki.jpeg'),
(62, 38, 'SING CHIKKI', 'Peanuts,Jaggery,etc', 500, '150.00', 'yes', 'singchikki.jpeg'),
(63, 38, 'DATES BISCUITS', 'Date,Marie gold biscuits,decicated coconut,,etc', 350, '160.00', 'yes', 'datesbiscuit.jpeg'),
(64, 38, 'WHITE TILL CHIKKI', 'White sessame seeds,Jaggery,etc', 500, '160.00', 'yes', 'whitetillchikkhi.jpeg'),
(65, 38, 'MIX CHIKKI', 'Peanuts,Sessame seed,Jaggery,etc', 500, '150.00', 'yes', 'mixchikki.jpeg'),
(66, 38, 'BLACK TILL CHIKKI', 'Black sessame seed,Jaggery ,etc', 500, '125.00', 'yes', 'blacktillchikki.jpeg'),
(67, 39, 'CHEESE BALL', 'Corn flour,Rice flour,Cheese Flour ,Edible oil,Iodised salt,Spices', 80, '45.00', 'yes', 'cheeseball.jpg'),
(68, 39, 'SOYA STICK', 'Soya flour (defatted),Urad dal flour,Rice flour,Edible starch,Iodised salt,Condiments,Spices,Citric Acid ,Edible oil', 200, '45.00', 'yes', 'Soyastick.jpg'),
(69, 39, 'FRYUMS', ' Gram flour,Rice flour,Edible oil,Iodised salt,Corn flour,Spices,Added flacour,etc', 100, '40.00', 'yes', 'fryms.jpg'),
(70, 40, 'METHI BHAKHARI', 'Wheat flour,Fenugreek seed,Sesame seeds,Cumin seed,Turmeric,Hing,Chilli powder,Iodised salt,Edible oil', 200, '70.00', 'yes', 'Bhakhari.png'),
(71, 40, 'BAJRA LASAN METHI', 'Whole wheat flour,Bajra flour,Edible oil,Iodised salt,White sesame,Fenugreekleaves,Red chilly powder,Garlic,Garlic powder,Ginger,Ginger powder', 200, '70.00', 'yes', 'bajaralasan.png'),
(72, 40, 'MASALA BHAKHRI', ' Wheat flour,Fenugreek seed,Sesame seeds,Cumin seed,Turmeric,Hing,Chilli powder,Iodised salt,Edible oil', 200, '70.00', 'yes', 'bajaralasan.png'),
(73, 40, 'PIZZA BHAKHRI', ' Wheat flour,Iodised salt,Oregano,Chilly flakes,Ginger powder,Tometo powder,Basil,Black papper,Cumin seed,Cheese powder,Onion,Garlic,Pure ghee,etc', 200, '120.00', 'yes', 'bajaralasan.png'),
(74, 40, 'JEERA MARI BHAKHRI', 'Wheat flour,Sesame Seeds,Cumin seeds,Black papper,Hing,Iodised salt,Edible oil', 200, '70.00', 'yes', 'bajaralasan.png'),
(75, 40, 'METHIYA MASALA BHAKHRI', 'Wheat flour,Iodised salt,Achari masala,Pure ghee ,etc', 200, '95.00', 'yes', 'bajaralasan.png'),
(76, 40, 'GARLIC BHAKHRI', 'Wheat  flour,Garlic,Turmeric,Fenugreek seeds ', 200, '70.00', 'yes', 'bajaralasan.png'),
(77, 41, 'CHANA DAL MASALA', ' Gram dal,Edible oil, Iodised salt,Asafoetida,Ginger powder,coriender etc', 400, '110.00', 'yes', 'chanadal.png'),
(78, 41, 'CHANADAL FUDINA', 'Gram dal,Edible oil, Iodised salt,Asafoetida,Ginger powder,coriender,mint dry leaves, etc', 400, '110.00', 'yes', 'chanadalfudina.png'),
(79, 41, 'MOONG DAL SALTED', 'Mung dal ,Iodised salt,Edible oil ,etc', 400, '110.00', 'yes', 'moongdalsal.png'),
(80, 41, 'CHANA DAL ONION', 'Gram dal,Edible oil, Iodised salt,Asafoetida,Lemon powder,Green chilly powder,onion powder, etc', 400, '120.00', 'yes', 'chanadal.png'),
(81, 41, 'MOON DAAL FUDINA', 'Mung dal ,Iodised salt,Edible oil,mix indian spices,Dry mint leaves ,etc', 400, '110.00', 'yes', 'moongdalsal.png'),
(82, 43, 'FARSI PURI', 'Maida,black paper,cumin seeds and other indian spices, iodised salt ,edible oil', 400, '110.00', 'yes', 'farsiputi.png'),
(83, 43, 'PUNJABI PURI', 'Maida,edible oil,indian spices,black salt, iodised salt', 200, '55.00', 'yes', 'panjabipuri.png'),
(84, 43, 'WHEAT MASALA PURI', 'Wheat flour ,indian spices,ajwain,iodised salt,edible oil', 200, '60.00', 'yes', 'wheatmasal.png'),
(85, 43, 'WHEAT METHI PURI', ' wheat flour,indian spices,edible oil,iodised salt,kasuri methi', 400, '110.00', 'yes', 'wheatmethi.png'),
(86, 43, 'MULTIGRAIN PURI', 'Rice flour,wheat flour,Sunflower oil,Gram dal,Ground nuts,Green chillies,Ghee,Oats,Curry leaves, iodised salt', 200, '130.00', 'yes', 'wheatmethi.png'),
(87, 43, 'WHEAT KOTHMIR MARCHA PURI', 'wheat flour,indian spices,edible oil,iodised salt,kothmir,marcha', 200, '60.00', 'yes', 'wheatmethi.png'),
(88, 42, 'BHAVNAGRI GATHIYA', ' Besan,asafoetida,,iodised salt,edible oil,spices, etc', 200, '55.00', 'yes', 'bhavnagrighathiya.png'),
(89, 45, 'BOMBAY BHEL ', 'Gram flour,Edible oil,Iodised salt,Rice puff,Gram dal ,Asafoetida, corn flakes ,Spices etc.', 350, '100.00', 'yes', 'BOMBAYBHEL.PNG'),
(90, 45, 'JHALMUDI', 'Mamra,Gram Flour,Edible oil,Iodised saly,Ajwain,Gram dal,poha,Sugar,Asafoetida,Spices,Permmited flavours etc', 300, '70.00', 'yes', 'jalmudi.jpg'),
(91, 45, 'SP.BHEL MIX', 'Gram flour,Edible oil,Iodised salt,Rice puff,Asafoetida,Spices etc.', 400, '100.00', 'yes', 'sp.bhel.jpg'),
(92, 45, 'SEV MAMRA MIX', 'Gram flour,Edible oil,Iodised salt,Rice puff,Asafoetida,Spices etc.', 400, '100.00', 'yes', 'sevmamara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(7) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `terms_agree` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `mobile`, `email_id`, `password`, `profile_img`, `terms_agree`) VALUES
(30, 'Parthiv', 'Soni', '6353803310', 'parthiv@gmail.com', '$2y$10$4crCuod4bqxLdkXTHuJ4H.QunZnngw6MdAwpwI0.I5M7ozperMHee', ' ', 'yes'),
(58, 'Hit', 'Shah', '7405220799', 'shahhit06@gmail.com', '$2y$10$MAlCiineWr4PqzR.Wjtym.NCDc4MMrdEuY5a3LcpNfRb.hnKhwvSG', ' ', 'yes'),
(59, 'srusti', 'makwana', '9558963635', 'srusti@gmail.com', '$2y$10$BHeRQeLo/H3bkRVYcMnh3OXCE3xm0DpHWlzdtzsbJebd8iIRTLzi6', ' ', 'yes'),
(60, 'jeel', 'up', '6353667993', 'jeel@gmail.com', '$2y$10$g13RC4Qx/ZTzdpjjkZb.oejtdMYZy7HoaBX/NWBr/7yWFot.V7uTC', ' ', 'yes'),
(61, 'Aesha', 'Shah', '9824031477', 'aesah@gmail.com', '$2y$10$M6CjjciD5DfDYCvtkAQAMuBurE03dgPUL3/x7LP68MMluO8sMSFiC', ' ', 'yes'),
(63, 'Mann', 'Shah', '8989756565', 'mann@gmail.com', '$2y$10$xtU9ZymbBbF6LQ9ALm1Lt.sDLYjpXxZ03cycxStRaZpv7LXH5k3s.', ' ', 'yes'),
(66, 'Dhaval', 'Raval', '9712468356', 'dhaval02@gmail.com', '$2y$10$rs4i3iWXwhIUJu3J3ge/4.bF6kXDcGYiOobp1z/1LYpJDbD5jntxO', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `user_address_id` int(11) NOT NULL,
  `user_id_fk` int(11) NOT NULL DEFAULT 0,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `is_default` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`user_address_id`, `user_id_fk`, `address`, `city`, `pincode`, `is_default`) VALUES
(1, 30, 'Banglani pole,raipur', 'Ahmedabad', '380001', 'yes'),
(13, 58, 'Usmanpura', 'Ahmedabad', '380013', 'yes'),
(45, 30, 'ahmedabad', 'Ahmedabad', '380001', 'yes'),
(46, 30, 'ahmedabad', 'Ahmedabad', '380011', 'yes'),
(47, 30, 'ahmedabad', 'Ahmedabad', '380011', 'yes'),
(48, 30, 'ahm', 'Ahmedabad', '380001', 'yes'),
(49, 30, 'ahm', 'Ahmedabad', '380001', 'yes'),
(50, 30, 'ah', 'Ahmedabad', '380001', 'yes'),
(51, 30, 'raipur', 'Ahmedabad', '380061', 'yes'),
(52, 30, 'raipur', 'Ahmedabad', '380013', 'yes'),
(53, 63, 'Shahpur', 'Ahmedabad', '380061', 'yes'),
(54, 30, 'raipur', 'Ahmedabad', '380013', 'yes'),
(55, 30, 'raipur', 'Ahmedabad', '380061', 'yes'),
(56, 66, 'yth', 'Ahmedabad', '', 'yes'),
(57, 66, 'K-6, Dev Nandan App., NR Chanakyapuri over bridge, Ghatlodia', 'Ahmedabad', '380061', 'yes'),
(58, 30, 'abc', 'Ahmedabad', '380001', 'yes'),
(59, 30, 'raipur', 'Ahmedabad', '380061', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `user_feedback_id` int(11) NOT NULL,
  `user__id_fk` int(11) NOT NULL DEFAULT 0,
  `product_id_fk` int(11) NOT NULL DEFAULT 0,
  `comment` text NOT NULL,
  `feedback_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD PRIMARY KEY (`booking_order_id`),
  ADD KEY `user_id_fk` (`user_id_fk`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `book_order_item`
--
ALTER TABLE `book_order_item`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `product_id_fk` (`product_id_fk`),
  ADD KEY `user_id_fk` (`user_id_fk`),
  ADD KEY `book_order_item_ibfk_1` (`order_id_fk`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user__id_fk` (`user_id_fk`),
  ADD KEY `product_id_fk` (`product_id_fk`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id_fk` (`c_id_fk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`user_address_id`),
  ADD KEY `user_id_fk` (`user_id_fk`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`user_feedback_id`),
  ADD KEY `user__id_fk` (`user__id_fk`),
  ADD KEY `product_id_fk` (`product_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_order`
--
ALTER TABLE `booking_order`
  MODIFY `booking_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `book_order_item`
--
ALTER TABLE `book_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `user_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `user_feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_order_item`
--
ALTER TABLE `book_order_item`
  ADD CONSTRAINT `book_order_item_ibfk_1` FOREIGN KEY (`order_id_fk`) REFERENCES `booking_order` (`booking_order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_order_item_ibfk_2` FOREIGN KEY (`product_id_fk`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_order_item_ibfk_5` FOREIGN KEY (`user_id_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id_fk`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cat_id_fk` FOREIGN KEY (`c_id_fk`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD CONSTRAINT `user_feedback_ibfk_1` FOREIGN KEY (`user__id_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_feedback_ibfk_2` FOREIGN KEY (`product_id_fk`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
