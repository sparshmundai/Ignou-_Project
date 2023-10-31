-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 04:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; SET AUTOCOMMIT = 0; START TRANSACTION; SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electro_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--
CREATE TABLE `admin_login` (
 `id` INT(11) NOT NULL,
 `name` VARCHAR(60) NOT NULL,
 `username` VARCHAR(200) NOT NULL,
 `password` VARCHAR(200) NOT NULL,
 `type` VARCHAR(50) NOT NULL,
 `status` INT(11) NOT NULL,
 `last_update` DATETIME NOT NULL,
 `update_by` VARCHAR(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--
INSERT INTO `admin_login` (`id`, `name`, `username`, `password`, `type`, `status`, `last_update`, `update_by`) VALUES
(1, 'gaurav', 'gaurav@pcti.com', '1234567', 'Admin', 1, '2021-05-10 16:23:34', '1'),
(2, 'ashish', 'ashish@pcti.com', '12345', 'Admin', 1, '2021-03-21 15:54:45', '1'),
(3, 'yash', 'yash@pcti.com', '12345', 'Admin', 1, '2021-03-21 16:46:31', '2'),
(4, 'lakshay', 'lakshay@pcti', '123456', 'Admin', 1, '2021-03-22 11:26:07', '2'),
(5, 'bhanu', 'bhanu@pcti.com', '1235456', 'Admin', 1, '2021-03-22 12:00:05', '2'),
(6, 'aditya', 'aditya@pcti.com', '123456', 'Admin', 1, '2021-04-03 12:02:42', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--
CREATE TABLE `brand` (
 `id` INT(11) NOT NULL,
 `brand` VARCHAR(200) NOT NULL,
 `status` INT(11) NOT NULL,
 `last_update` DATETIME NOT NULL,
 `cate_id` INT(11) NOT NULL,
 `update_by` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--
INSERT INTO `brand` (`id`, `brand`, `status`, `last_update`, `cate_id`, `update_by`) VALUES
(1, 'samsung', 1, '2021-03-27 05:56:56', 1, 1),
(2, 'xiaomi', 1, '2021-03-23 14:42:00', 1, 1),
(3, 'one+', 1, '2021-03-23 14:43:00', 1, 1),
(4, 'vivo', 1, '2021-03-23 14:46:00', 1, 1),
(5, 'apple', 1, '2021-03-23 14:46:00', 1, 1),
(6, 'acer', 1, '2021-03-23 15:23:00', 2, 1),
(7, 'dell', 1, '2021-03-23 15:24:00', 2, 1),
(8, 'apple', 1, '2021-03-23 15:35:00', 2, 1),
(9, 'lenovo', 1, '2021-03-23 15:37:20', 2, 1),
(10, 'hp', 1, '2021-03-23 15:38:49', 2, 1),
(11, 'samsung', 1, '2021-03-23 15:38:59', 3, 1),
(12, 'bajaj', 1, '2021-03-23 15:41:35', 3, 1),
(13, 'ifb', 1, '2021-03-23 15:42:59', 3, 1),
(14, 'lg', 1, '2021-03-23 13:44:19', 3, 1),
(15, 'voltas', 1, '2021-03-21 16:13:03', 4, 1),
(16, 'blue_star', 1, '2021-03-23 16:12:59', 4, 1),
(17, 'hitachi', 1, '2021-03-23 16:15:13', 4, 1),
(18, 'o_general', 1, '2021-03-23 16:15:15', 4, 1),
(19, 'daikin', 1, '2021-03-23 16:17:18', 4, 1),
(20, 'samsung', 1, '2021-03-23 16:20:59', 5, 1),
(21, 'xiaomi', 1, '2021-03-23 16:20:48', 5, 1),
(22, 'lg', 1, '2021-03-23 16:22:26', 5, 1),
(23, 'haier', 1, '2021-03-23 16:22:37', 5, 1),
(24, 'samsung', 1, '2021-03-23 16:25:38', 6, 1),
(25, 'whirlpool', 1, '2021-03-23 16:25:48', 6, 1),
(26, 'lg', 1, '2021-03-23 16:26:13', 6, 1),
(27, 'godrej', 1, '2021-03-23 16:26:33', 6, 1),
(28, 'haier', 1, '2021-03-23 16:27:10', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--
CREATE TABLE `customer_reg` (
 `id` INT(11) NOT NULL,
 `status` INT(11) NOT NULL,
 `name` VARCHAR(200) NOT NULL,
 `username` VARCHAR(150) NOT NULL,
 `city` VARCHAR(150) NOT NULL,
 `mobile_no` VARCHAR(15) NOT NULL,
 `gender` VARCHAR(50) NOT NULL,
 `address` VARCHAR(200) NOT NULL,
 `password` VARCHAR(150) NOT NULL,
 `last_update` DATETIME NOT NULL,
 `update_by` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reg`
--
INSERT INTO `customer_reg` (`id`, `status`, `name`, `username`, `city`, `mobile_no`, `gender`, `address`, `password`, `last_update`, `update_by`) VALUES
(1, 1, 'lakshay', 'lakshay@pcti.com', 'delhi', '9956485262', 'male', '3241/10 shastri nagar', '5678', '2021-04-14 15:02:55', 1),
(2, 1, 'ashish', 'ashish@pcti.com', 'delhi', '9952687848', 'male', '159 sector-16 rohini ', '123456', '2021-04-14 15:02:16', 1),
(3, 1, 'guddu', 'guddu@pcti.com', 'delhi', '8375014469', 'female', 'rohini sector-15 ,456', '12345', '2021-04-14 17:40:58', 2),
(4, 1, 'pratibha goel', 'pratibhagoel@gmail.com', 'delhi', '9560284553', 'Female', '359 2nd floor BH block east', '123456', '2021-04-16 19:55:13', 1),
(5, 1, 'ram', 'ram@pcti.com', 'dlehi', '9560254232', 'Male', '359 2nd floor BH block east', '123456', '2021-04-16 19:56:06', 1),
(6, 1, 'shanti', 'shanti@pcti.com', 'delhi', '9556854232', 'Female', '165/10 shastri nagar', '123456', '2021-04-16 20:52:48', 1),
(7, 1, 'ekta', 'ekta1312@yahoo.com', 'up', '8367750105', 'Female', 'smaypur ,up 3/460 east', '12345', '2021-04-16 20:57:11', 1),
(13, 1, 'ashish', 'ashish@gmail.com', 'delhi', '8367750105', 'Male', 'rohini sector 2 delhi 110085', '123456789', '2021-04-17 13:22:25', 1),
(14, 1, 'yash chutiya', 'yash@something.com', 'New Delhi', '6565984994', 'Male', '359 2nd floor BH block east', '56789', '2021-05-10 14:31:59', 1),
(15, 1, 'reetika', 'reetika@gmail.com', 'delhi', '9654792963', 'Female', 'tere ghr k piche ', 'Password123', '2021-05-24 18:00:43', 1),
(16, 1, 'aarya', 'aarya@gmail.com', 'bihar', '9899656632', 'Female', 'karuna vihar ,bihar', '123456', '2021-05-28 16:13:33', 1),
(17, 1, 'gaurav', 'gaurav@cftedu.in', 'Anand Parbat', '9560284552', 'Male', '2/24 Karol bagh', '123456', '2021-12-28 15:48:53', 1),
(18, 1, 'Gaurav', 'gaurav@cftedu.in', 'North West Delhi', '09560284553', 'Male', '359 2nd floor BH block east, near raghunath mandir Shalimar Bagh', '1234', '2022-06-18 14:40:16', 1),
(19, 1, 'Ashish', 'ashish@pctiltd.com', 'Delhi', '9560284993', 'Male', 'shalimarbagh', '1234', '2022-11-12 11:53:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--
CREATE TABLE `feedback` (
 `id` INT(11) NOT NULL,
 `status` INT(11) NOT NULL,
 `last_update` DATETIME NOT NULL,
 `update_by` INT(11) NOT NULL,
 `name` VARCHAR(100) NOT NULL,
 `email` VARCHAR(100) NOT NULL,
 `subject` VARCHAR(200) NOT NULL,
 `feedback` VARCHAR(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--
INSERT INTO `feedback` (`id`, `status`, `last_update`, `update_by`, `name`, `email`, `subject`, `feedback`) VALUES
(1, 1, '2021-04-18 14:30:29', 1, 'Gaurav udasi', 'gaurav@pcti.com', 'product delivery ', 'jhbhjdhcbdyhvbh');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--
CREATE TABLE `payment` (
 `id` INT(11) NOT NULL,
 `status` INT(11) NOT NULL,
 `last_update` DATETIME NOT NULL,
 `update_by` INT(11) NOT NULL,
 `card_number` INT(16) NOT NULL,
 `expiration_date` INT(4) NOT NULL,
 `cvv` INT(3) NOT NULL,
 `coupon_code` VARCHAR(150) NOT NULL,
 `cust_name` INT(11) NOT NULL,
 `payment_mode` VARCHAR(200) NOT NULL,
 `product_name` INT(11) NOT NULL,
 `cust_address` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--
INSERT INTO `payment` (`id`, `status`, `last_update`, `update_by`, `card_number`, `expiration_date`, `cvv`, `coupon_code`, `cust_name`, `payment_mode`, `product_name`, `cust_address`) VALUES
(1, 1, '2021-04-16 12:35:54', 1, 123, 123, 123, '123', 1, '', 1, 3),
(2, 1, '2021-04-16 23:14:29', 1, 1235456, 1125, 456, 'budbgu15', 1, '', 142, 3),
(3, 1, '2021-04-16 23:13:42', 1, 2147483647, 1225, 654, 'sdfsfs', 1, '', 134, 3),
(4, 1, '2021-04-17 09:57:18', 1, 458796458, 225, 564, 'xgfuhb', 1, '', 12, 3),
(5, 1, '2021-05-09 16:13:56', 0, 2147483647, 1226, 563, 'dfdvgbv', 1, '', 14, 3),
(6, 1, '2021-05-09 16:14:56', 0, 2147483647, 1226, 563, 'dfdvgbv', 1, '', 20, 3),
(7, 1, '2021-05-09 16:15:55', 0, 955649654, 528, 562, 'dvfsv', 1, '', 52, 3),
(8, 1, '2021-05-09 16:18:33', 0, 655989454, 923, 564, 'dihfdn10', 1, '', 111, 3),
(9, 1, '2021-05-16 14:33:57', 0, 2147483647, 625, 235, 'kxdcnjn', 1, '', 130, 3),
(10, 1, '2021-05-18 16:45:06', 0, 4654564, 625, 598, 'jcjvndjvn', 1, '', 15, 3),
(11, 1, '2021-05-20 13:16:33', 0, 626463613, 2530, 289, 'bjnc', 1, '', 3, 3),
(12, 1, '2021-05-20 13:29:27', 0, 2147483647, 1226, 689, ',mcjkm', 1, '', 5, 3),
(13, 1, '2021-05-20 13:40:38', 0, 2147483647, 2330, 156, 'mkcx', 1, '', 17, 3),
(14, 1, '2021-05-20 14:24:45', 1, 515641311, 1309, 654, 'mjnjb10', 1, '', 25, 3),
(15, 1, '2021-05-20 14:44:28', 0, 2147483647, 2030, 231, '30hdfcdeb', 3, '', 28, 3),
(16, 1, '2021-05-23 13:15:33', 0, 2147483647, 223, 565, 'cmvkxmbm', 5, 'card', 77, 3),
(17, 1, '2021-05-23 13:23:30', 0, 2147483647, 726, 659, 'hgjbjb10', 5, 'card', 60, 3),
(18, 1, '2021-05-23 15:02:29', 0, 0, 0, 0, '', 5, 'cash', 136, 3),
(19, 1, '2021-05-23 15:04:29', 0, 0, 0, 0, '', 6, 'cash', 157, 3),
(20, 1, '2021-05-23 15:12:01', 0, 0, 0, 0, '', 6, 'cash', 125, 3),
(21, 1, '2021-05-24 08:39:39', 0, 0, 0, 0, '', 5, 'cash', 169, 3),
(22, 1, '2021-05-24 18:04:21', 0, 2147483647, 2122, 123, 'lredgjdfhgjhf', 15, 'card', 159, 3),
(23, 1, '2021-05-24 18:12:23', 0, 2147483647, 1530, 126, 'nbhbj', 15, 'card', 168, 3),
(24, 1, '2021-05-24 18:49:22', 0, 2147483647, 322, 997, 'nckmxNkm5', 1, 'card', 100, 0),
(25, 1, '2021-05-24 18:53:54', 0, 65461654, 233, 356, ',mkln546', 5, 'card', 3, 0),
(26, 1, '2021-05-24 18:58:20', 0, 0, 0, 0, '', 5, 'cash', 64, 0),
(27, 1, '2021-05-24 18:58:57', 0, 0, 0, 0, '', 5, 'cash', 64, 0),
(28, 1, '2021-05-24 19:09:05', 0, 0, 0, 0, '', 5, 'cash', 124, 0),
(31, 1, '2021-05-24 19:23:08', 0, 2147483647, 222, 515, 'djnjdbhb', 5, 'card', 156, 0),
(32, 1, '2021-05-24 19:29:59', 0, 0, 0, 0, '', 5, 'cash', 138, 0),
(33, 1, '2021-05-24 19:32:25', 0, 0, 0, 0, '', 5, 'cash', 145, 5),
(34, 1, '2021-07-24 06:04:13', 0, 2147483647, 525, 123, '', 1, 'card', 67, 1),
(35, 1, '2021-07-24 06:16:28', 0, 0, 0, 0, '', 1, 'cash', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--
CREATE TABLE `product` (
 `id` INT(11) NOT NULL,
 `name` VARCHAR(200) NOT NULL,
 `status` INT(11) NOT NULL,
 `last_update` DATETIME NOT NULL,
 `update_by` INT(60) NOT NULL,
 `img_url` VARCHAR(200) NOT NULL,
 `category` VARCHAR(200) NOT NULL,
 `price` INT(11) NOT NULL,
 `description` VARCHAR(250) NOT NULL,
 `brand` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--
INSERT INTO `product` (`id`, `name`, `status`, `last_update`, `update_by`, `img_url`, `category`, `price`, `description`, `brand`) VALUES
(1, 'Samsung Galaxy M11', 1, '2021-05-18 16:55:19', 1, 'assets\\images\\m1.jpg', '1', 16499, 'Ocean Blue, 6GB RAM, 128GB Storage.', 1),
(2, 'Galaxy M01 Core', 1, '2021-03-23 16:31:17', 1, 'assets\\images\\m2.jpg', '1', 6199, ' Black, 2GB RAM, 32GB Storage', 1),
(3, 'Galaxy Note10 Lite ', 1, '2021-03-23 16:35:20', 1, 'assets\\images\\m3.jpg', '1', 29999, 'Aura Black, 6GB RAM, 128GB Storage', 1),
(4, 'Samsung Galaxy M11  ', 1, '2021-03-23 16:39:46', 1, 'assets\\images\\m4.jpg', '1', 10999, ' Black, 4GB RAM, 64GB Storage', 1),
(5, 'Samsung Galaxy A21s ', 1, '2021-03-23 16:44:20', 1, 'assets\\images\\m5.jpg', '1', 13999, ' Blue, 4GB RAM, 64GB Storage', 1),
(6, 'Samsung GalaxyZ Fold2 ', 1, '2021-03-23 16:44:49', 1, 'assets\\images\\m6.jpg', '1', 149999, ' 5G Mystic Bronze, 12GB RAM, 256GB Storage', 1),
(7, 'Mi Note 6 Pro ', 1, '2021-04-01 13:21:58', 1, 'assets\\images\\m7.jpg', '1', 13960, ' Redmi Red, 6GB RAM, 64GB Storage', 2),
(8, ' Redmi 9', 1, '2021-03-23 17:03:44', 1, 'assets\\images\\m8.jpg', '1', 9999, ' Red, 6GB RAM, 64GB Storage', 2),
(9, 'Redmi 9 Power ', 1, '2021-03-23 17:03:52', 1, 'assets\\images\\m9.jpg', '1', 11999, '4GB+128GB, Blazing Blue', 2),
(10, 'Redmi Note 10 Pro ', 1, '2021-03-23 17:09:22', 1, 'assets\\images\\m10.jpg', '1', 16999, '6GB+128GB, Vintage Bronze', 2),
(11, 'Mi 10i ', 1, '2021-03-23 17:09:48', 1, 'assets\\images\\m11.jpg', '1', 21999, ' 6GB+128GB, Pacific Sunrise', 2),
(12, 'Mi 10 ', 1, '2021-03-23 17:15:13', 1, 'assets\\images\\m12.jpg', '1', 49999, ' 8GB+128GB, Coral Green', 2),
(13, 'OnePlus 6T ', 1, '2021-03-23 17:25:04', 1, 'assets\\images\\m13.jpg', '1', 49999, 'McLaren Limited Edition Speed Orange 10GB RAM256GB Storage', 3),
(14, 'OnePlus 8T ', 1, '2021-03-23 17:27:14', 1, 'assets\\images\\m14.jpg', '1', 42999, '5G  Warp Charge 65 120 Hz Fluid Display Qualcomm Snapdragon 865 and 48 MP Quad Camera', 3),
(15, 'OnePlus Nord  ', 1, '2021-03-23 17:32:36', 1, 'assets\\images\\m15.jpg', '1', 29999, 'Quad camera OIS 48 MP Sony IMX586 32 MP & ultra wide selfie cameras 90 Hz Fluid AMOLED display Snapdragon 765G 5G & up to 12 GB RAM', 3),
(16, 'OnePlus 8 Pro  ', 1, '2021-03-23 17:37:57', 1, 'assets\\images\\m16.jpg', '1', 54999, '20 Hz Fluid Display Qualcomm Snapdragon 865 and 5G Warp Charge 30 Wireless 48 MP Quad Camera', 3),
(17, 'OnePlus 8 ', 1, '2021-03-23 17:49:20', 1, 'assets\\images\\m17.jpg', '1', 41999, '90 Hz Fluid Display Qualcomm Snapdragon 865 with 5G Slim and Sleek Curved Design 48 MP Triple Camera', 3),
(18, 'OnePlus 7T Pro  ', 1, '2021-03-23 17:55:59', 1, 'assets\\images\\m18.jpg', '1', 43999, '90 Hz Fluid Display Triple Cameras Snapdragon 855 Plus ', 3),
(19, 'Y12s ', 1, '2021-03-23 18:04:13', 1, 'assets\\images\\m19.jpg', '1', 9990, '3 gb ram and 32 gb internal storage Side Fingerprint 5000mAh Battery AI Dual Camera 12nm AI Octa Core Processor', 4),
(20, 'S1Pro   ', 1, '2021-03-23 18:09:44', 1, 'assets\\images\\m20.jpg', '1', 20990, '8GB RAM 128GB ROM 48MP AI Quad Rear Camera 32MP AI Selfie Camera  4500mAh Battery 18W Dual Engine Fast Charge Flash In Display Fingerprint', 4),
(21, 'Y20A   ', 1, '2021-03-23 18:15:28', 1, 'assets\\images\\m21.jpg', '1', 11490, '64 gb RAM 3 gb ROM 5000mAh Battery Qualcomm Snapdragon Processor Side Fingerprint Sensor AI Triple Macro Camera', 4),
(22, 'V20 Pro', 1, '2021-03-23 18:17:43', 1, 'assets\\images\\m22.jpg', '1', 29990, '8 gb RAM 128 gb ROM 44MP Eye Autofocus Dual Selfie 64MP Night Camera 4K Selfie Video 60 fps Qualcomm Snapdragon 765G 5G Mobile Platform', 4),
(23, 'X50 Pro', 1, '2021-03-23 18:31:12', 1, 'assets\\images\\m23.jpg', '1', 49990, '8 gb ROM 256 gb RAM Gimbal Stabilization Extreme Night Vision 60X Hyper Zoom Astro Mode', 4),
(24, 'V15 Pro ', 1, '2021-03-23 18:35:32', 1, 'assets\\images\\m24.jpg', '1', 32990, '6 gb ROM 128 gb RAM Ultra FullView Display 32MP Pop-up Selfie Camera Triple Rear Camera 48 Million Quad Pixel Sensor Dual Engine Fast Charging', 4),
(25, 'iPhone 12 Pro Max', 1, '2021-03-23 18:47:25', 1, 'assets\\images\\m25.jpg', '1', 129900, '128GB Super Retina XDR display 6.7inch diagonal all-screen OLED display1 Pro 12MP camera system', 5),
(26, 'iPhone 12 Mini ', 1, '2021-03-23 18:50:36', 1, 'assets\\images\\m26.jpg', '1', 69900, '128GB Super Retina XDR display 5.4-inch diagonal all screen OLED display Dual 12MP camera system', 5),
(27, 'iPhone 11 Pro Max ', 1, '2021-03-23 19:12:56', 1, 'assets\\images\\m27.jpg', '1', 95900, '64GB Super Retina XDR display 6.5 inch diagonal all-screen OLED display Triple 12MP Ultra Wide Wide and Telephoto cameras', 5),
(28, 'iPhone XS Max ', 1, '2021-03-23 19:12:29', 1, 'assets\\images\\m28.jpg', '1', 79900, 'Super Retina HD display 6.5-inch diagonal all screen OLED display Dual 12MP Wide and Telephoto cameras', 5),
(29, 'iPhone SE ', 1, '2021-03-23 19:16:56', 1, 'assets\\images\\m29.jpg', '1', 39900, '2nd generation Retina HD display 4.7 inch diagonal widescreen LCD display with IPS technology Single 12MP Wide camera', 5),
(30, 'iPhone XR ', 1, '2021-04-01 12:26:24', 1, 'assets\\images\\m30.jpg', '1', 47900, 'Liquid Retina HD display 6.1 inch diagonal all-screen LCD display with IPS technology Single 12MP Wide camera', 5),
(31, 'Acer Aspire 3 laptop', 1, '2021-04-19 20:22:16', 1, 'assets\\images\\l1.jpg', '2', 30945, 'intel core i3 10th Gen ( 4GB/1 TB HDD/Windows 10 home) A315-56-323J with 39.6cm (15.6', 6),
(32, 'Acer Nitro 5', 1, '2021-04-19 00:00:00', 1, 'assets\\images\\l2.jpg', '2', 69650, 'Gaming Laptop Intel Core I5 10th Gen - (8 GB/1 TB HDD/ 256 GB SSD/ Nvidia GTX 1650 Ti/ Windows 10 Home/60hz) AN515-55 With 39.6 Cm (15.6 Inches) FHD Display / 2.3 Kgs.', 6),
(34, 'Acer Predator Helios300', 1, '2021-04-20 00:00:00', 1, 'assets\\images\\l3.jpg', '2', 109990, 'Gaming Laptop Intel Core I7 10th Gen - (16 GB/1TB HDD+256 GB SSD/ Nvidia RTX 2060/Windows 10 Home/144hz) PH315-53 With 39.6 Cm (15.6 Inches) FHD IPS Display/ 2.3 Kgs', 6),
(35, 'Acer Aspire 7', 1, '2021-04-20 00:00:00', 1, 'assets\\images\\l4.jpg', '2', 58990, 'Gaming Laptop Intel Core I5 9th Gen - (16 GB/512 GB SSD/Nvidia GTX 1650Ti/ Windows 10 Home/60hz) A715-75G With 39.6 Cm (15.6 Inches) FHD Display / 2.15 Kgs', 6),
(36, 'Acer Aspire 3', 1, '2021-04-20 00:00:00', 1, 'assets\\images\\l5.jpg', '2', 29990, 'AMD Ryzen 3/ 8GB/ 1TB HDD/ Windows 10 Home A315-42 With 39.6 Cm (15.6 Inch) HD Display', 6),
(37, 'Acer Aspire 5', 1, '2021-04-20 00:00:00', 1, 'assets\\images\\l6.jpg', '2', 56990, 'Thin And Light Laptop Intel Core I5 11th Gen ( 8GB/ 1 TB HDD/ 256 GB SSD/ Windows 10 Home/MS Office H&S 2019) A514-54 With 35.5 Cm (14 Inch) With FHD Display / 1.45 Kgs.', 6),
(38, 'Inspiron 14', 1, '2021-04-20 00:22:22', 1, 'assets\\images\\l7.jpg', '2', 59990, '5406 2-in-1 Laptop 11th Generation Intel Core i3-1115G4 Processor (6MB Cache, up to 4.1 GHz) laptop Windows 10 Home Single Language, English videocard Intel UHD Graphics with shared graphics ,memory 8GB, 1x8GB, DDR4, 3200MHz harddrive 512GB M.2 PC', 7),
(39, 'Dell G5 15', 1, '2021-04-20 00:22:22', 1, 'assets\\images\\l8.jpg', '2', 86489, 'Gaming Laptop 10th Generation Intel Core i5-10300H (8MB Cache, up to 4.5 GHz, 4 cores)laptop Windows 10 Home Single Language, English videocard NVIDIA GeForce GTX 1650 Ti 4GB GDDR6 memory 8GB DDR4-2933MHz, 2x4G', 7),
(40, 'New Inspiron 15', 1, '2021-04-20 00:22:22', 1, 'assets\\images\\l9.jpg', '2', 46989, '5509 Laptop 11th Generation Intel Core i3-1115G4 Processor (6MB Cache, up to 4.1 GHz) laptop Windows 10 Home Single Language, English videocard Intel UHD Graphics with shared graphics ,memory 8GB, 1x8GB, DDR4, 3200MHz', 7),
(41, 'Inspiron 14', 1, '2021-04-20 00:22:22', 1, 'assets\\images\\l10.jpg', '2', 112990, '7400 Laptop 11th Generation Intel Core i7-1165G7 Processor (12MB Cache, up to 4.7 GHz) laptop Windows 10 Home Single Language, English videocard NVIDIA GeForce MX350 with 2GB GDDR5 graphics ,memory 16GB, onboard, LPDDR4x, 4267MHz harddrive 512GB ', 7),
(42, 'New Inspiron 15', 1, '2021-04-20 00:22:22', 1, 'assets\\images\\l11.jpg', '2', 60989, '5509 Laptop 11th Generation Intel  Core i5-1135G7 Processor (8MB Cache, up to 4.2 GHz)laptop Windows 10 Home Single Language, English videocard Intel Iris Xe Graphics with shared graphics ,memory 8GB, 1x8GB, DDR4, 3200MHz harddrive 512GB M.2 PCI', 7),
(43, 'New Vostro 15', 1, '2021-04-20 00:22:22', 1, 'assets\\images\\l12.jpg', '2', 49990, '3500 Laptop 11th Generation Intel Core i5-1135G7 Processor (8MB Cache, up to 4.2 GHz) laptop Windows 10 Home Single Language, English videocard Intel Iris Xe Graphics with shared graphics ,memory 8GB, 8Gx1, DDR4, 2666MHz harddrive 1TB 5400 rpm 2.', 7),
(44, 'MacBook Air (2017)', 1, '2021-04-22 15:25:42', 1, 'assetsimagesl13.jpg', '2', 67990, '1.8GHz dual-core Intel Core i5 2.2GHz dual-core Intel Core i7 Turbo Boost up to 3.2GHz 8GB 128GB SSD 13.3-inch (diagonal) LED-backlit display 0.3 1.7 cm (0.11 0.68 inches) 720p FaceTime HD camera Thunderbolt 2 port', 8),
(45, '>MacBook Pro 13', 1, '2021-04-20 01:23:36', 1, 'assets\\images\\l14.jpg', '2', 122990, '13-in(M1, 2020) System on Chip (SoC) Apple M1 chip 8-core CPU with 4 performance cores and 4 efficiency cores 8-core GPU 16-core Neural Engine 16GB 256GB SSD 13.3-inch (diagonal) LED-backlit display with IPS technology 1.56 cm (0.61 inches)  720p Fac', 8),
(46, 'MacBook Pro 16-in', 1, '2021-04-20 01:23:36', 1, 'assets\\images\\l15.jpg', '2', 199900, 'Processor 2.6GHz 6-core Intel Core i7 2.3GHz 8-core Intel Core i9 2.4GHz 8-core Intel Core i9 Turbo Boost up to 5.0GHz 16GB 512GB SSD 16-inch (diagonal) LED-backlit display with IPS technology 1.62 cm (0.64 inches) 720p FaceTime HD camera', 8),
(47, 'Mac mini (M1, 2020)', 1, '2021-04-20 01:23:36', 1, 'assets\\images\\l16.jpg', '2', 64990, 'System on Chip (SoC) Apple M1 chip 8-core CPU with 4 performance cores and 4 efficiency cores 8-core GPU 16-core Neural Engine 8GB 256GB SSD Support for one display up to 6K and one display up to 4K (sold separately) 3.6 cm (1.4 inches)', 8),
(48, 'Mac mini (2018)', 1, '2021-04-20 01:23:36', 1, 'assets\\images\\l17.jpg', '2', 104900, 'Processor 3.6GHz quad-core Intel Core i3, 3.0GHz 6-core Intel Core i5, 3.2GHz 6-core Intel Core i7, Turbo Boost up to 4.6GHz 16GB 512GB SSD Support for up to three 4K displays or one 5K display and one 4K display (sold separately) 3.6 cm (1.4 inches)', 8),
(49, 'iMac 27-in(Retina 5K)', 1, '2021-04-20 01:23:36', 1, 'assets\\images\\l18.jpg', '2', 169900, 'Processor 3.1GHz 6-core Intel Core i5 ,3.3GHz 6-core Intel Core i5 ,3.8GHz 8-core Intel Core i7 ,3.6GHz 10-core Intel Core i9 ,Turbo Boost up to 5.0GHz 27-inch (diagonal) LED-backlit display Configurable with nano-texture glass 1TB SSD 16GB 51.6 cm (', 8),
(50, 'ThinkPad X390', 1, '2021-04-20 01:55:27', 1, 'assets\\images\\l19.jpg', '2', 113490, 'Perfect Travel Laptop A 33.78cms (13.3) business laptop with a 30.48cms (12) footprint More than 17.6 hours of battery life Enhanced security measures like PrivacyGuard with PrivacyAlert and ThinkShutter Global LTE capability', 9),
(51, 'IdeaPad S540(15, Intel)', 1, '2021-04-20 01:55:27', 1, 'assets\\images\\l20.jpg', '2', 62499, 'Style and ability in one Offering up to the latest 10th Gen Intel Core processors Long battery life, up to 12 hours and fast charging, FHD display with 72 percent NTSC color, dual-action fans and cooling design with 1 Year Premium Care and 1 Year Acc', 9),
(52, 'Ideacentre A340(24)', 1, '2021-04-20 01:55:27', 1, 'assets\\images\\l21.jpg', '2', 60990, 'Stylish design, modern stand, and thin bezel display, the IdeaCentre all-in-one A340 is designed to catch the eye. Even with the space-saving design. All in all, this 60.45cms (23.8). Product with 3 Years default onsite warranty Mouse & Keyboard Incl', 9),
(53, 'IdeaPad Slim 3i', 1, '2021-04-20 01:55:27', 1, 'assets\\images\\l22.jpg', '2', 37490, '(15, Intel)this is 39.62cms (15.6) IdeaPad 3.Cutting-edge 10th Gen Intel Core processors and discrete graphics options fuel speedy performance .The physical webcam security shutter complete the picture', 9),
(54, 'IdeaPad D330', 1, '2021-04-22 15:26:17', 1, 'assetsimagesl23.jpg', '2', 21999, 'Laptop meets tablet the rest is your story .The IdeaPad D330 combines laptop performance with tablet freedom, perfectly. Feature-rich yet small in size and seamless processing on the go. Packed with ports, it has two cameras and an all-day battery', 9),
(55, 'Legion Y7000 SE', 1, '2021-04-22 15:24:48', 1, 'assetsimagesl24.jpg', '2', 78990, 'Laptop gaming, This 15.6-inch laptop gives you a gaming experience that pushes performance and portability even further. Its 9th Generation Intel Core processors. Latest-generation graphics, memory, and storage guarantee by crimson red Y lighting a', 9),
(56, '240G7 Notebook PC', 1, '2021-04-20 02:41:16', 1, 'assets\\images\\l25.jpg', '2', 31186, 'HP 10th Generation Intel Core i3 processor FreeDOS 35.56cm diagonal, HD (1366 x 768), anti-glare, 220 nits, 45% NTSC Intel UHD Graphics 4 GB DDR4-2666 SDRAM (1 x 4 GB) Starting at 1.52 kg', 10),
(57, 'HP ProBook430 G8PC', 1, '2021-04-20 02:41:16', 1, 'assets\\images\\l26.jpg', '2', 86572, 'G8 Notebook PC 11th Generation Intel Core i5 processor Windows 10 Pro 64 13.3\" diagonal, HD (1366 x 768), narrow bezel, anti-glare, 250 nits, 45% NTSC Intel Iris X Graphics 8 GB DDR4-3200 SDRAM (1 x 8 GB) STARTING AT 1.28 kg', 10),
(58, 'HP ENVY x360 Laptop', 1, '2021-04-20 02:41:16', 1, 'assets\\images\\l27.jpg', '2', 74999, '13-ay0045au AMD Ryzen 5 processor Windows 10 Home Single LANGUAGE 64 Plus 512 GB PCIe NVMe M.2 SSD 8 GB DDR4-3200 SDRAM (onboard) AMD Radeon Graphics', 10),
(59, 'HP ENVY Laptop', 1, '2021-04-20 02:41:16', 1, 'assets\\images\\l28.jpg', '2', 72999, '13-ba0003tu 10th Generation Intel Core i5 processor Windows 10 Home 64 33.78cm (13.3\") diagonal, FHD (1920 x 1080), multitouch-enabled, IPS, edge-to-edge glass, micro-edge, BrightView, 400 nits, 100% sRGB Intel UHD Graphics', 10),
(60, 'HP Laptop 15s', 1, '2021-04-20 02:41:16', 1, 'assets\\images\\l29.jpg', '2', 65999, 'du3047TX 11th Generation Intel Core i5 processor .Windows 10 Home 64 39.62 cm (15.6\") diagonal, FHD (1920 x 1080), IPS, micro-edge, anti-glare, 250 nits, 45% NTSC Intel Iris X Graphics 8 GB DDR4-2666 SDRAM (2 BY 4 GB)', 10),
(61, 'HP x360 Convertible', 1, '2021-04-20 02:41:16', 1, 'assets\\images\\l30.jpg', '2', 129999, '13-aw2002TU 11th Generation Intel Core i7 processor .Windows 10 Home 64,33.78 cm (13.3\") diagonal, FHD (1920 by 1080), multitouch-enabled, IPS, edge-to-edge glass, micro-edge, BrightView, Corning Gorilla Glass NBT, 400 nits, 100% sRGB Intel Iris X G', 10),
(62, 'MG23T5012CK', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro1.jpg', '3', 11490, '23L Grill MWO with Grill Fry EMI starts from ? 540.87/ month. Grill Fry Home Dessert Glass Touch and Simple UX Crusty Plate', 11),
(63, 'MC28M6036CC', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro2.jpg', '3', 18500, 'Convection MWO with Masala and Sun Dry, 28LNo Cost EMI starts from 1541.38/ month. Standard EMI starts from 870.85/ month. Fruit Dry Masala, Tadka and Sun Dry HotBlast Ceramic Enamel Cavity with 10 year Warranty SlimFry', 11),
(64, 'MS23F300EEK', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro3.jpg', '3', 25500, 'Microwaves are useful for heating food in microwave ovens Quick and intuitive easy control triple Distribution System', 11),
(65, 'CE73JD-B', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro4.jpg', '3', 9790, 'Convection MWO with Ceramic Enamel Cavity 21L EMI starts from ? 460.84/ month', 11),
(66, 'MG23K3515AK', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro5.jpg', '3', 7500, 'Grill MWO with Quick Defrost, 23L ,Browning Plus Quick Defrost Keep Warm Ceramic Enamel Cavity with 10 Year Warranty', 11),
(67, 'MC28H5013AK', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro6.jpg', '3', 11190, 'Convection MWO with Curd Any Time 28L Dough Proof / Yogurt Deodorisation Ceramic Inside', 11),
(68, 'Bajaj MTBX 2016', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro7.jpg', '3', 5995, 'Black 20L Grill Microwave Oven 30 minutes cooking alarm, Capacity - 20L .It comes with an attached grill rack', 12),
(69, 'Bajaj 1701 MT', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro8.jpg', '3', 4880, '17 Litre Microwave Oven Solo model ,5 power level, 17 Litre capacity', 12),
(70, 'Bajaj 1701 MT', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro9.jpg', '3', 5720, 'DLX Microwave Oven 17Ltr, Solo, Manual, Black Time Defrost COOKING COMPLETE ALARM TIMER/CLOCK', 12),
(71, 'Bajaj 2005 ETB', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro10.jpg', '3', 8140, '20 Litre Microwave Oven  Grill model, Digital timer ,20 Litre capacity ,Easy jog dial for settings adjustment', 12),
(72, 'Bajaj 2310 ETC', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro11.jpg', '3', 11655, '23 Litre Microwave Oven Grill Convection model Digital timer ,With 46 Indian auto cook menus ,23 Litre capacity Mirror glass door ,With keep warm function', 12),
(73, 'Bajaj 2504 ETC', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro12.jpg', '3', 13022, '25 Litre Microwave Oven Grill Convection model ,Digital timer ,25 Litre capacity ,Easy jog dial for settings adjustment', 12),
(74, '20BC4 20L', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro19.jpg', '3', 11691, 'Convection .The 20BC4 is with 10 temperature options, Available in black, this microwave makes a stylish statement. No Cost EMI available', 13),
(75, '20SC2 20L', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro20.jpg', '3', 11601, 'Convection One of our most popular models, the 20SC2 comes in a silver finish .With 10 temperature options', 13),
(76, '20BC5 20L', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro21.jpg', '3', 12591, 'Convection the 20BC5 offers a range of features packed in a compact package with a sleek black design. Features include 2 Combi Tech, 4 Combi Tech and 10 Temperature Levels', 13),
(77, '23BC4 23L', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro22.jpg', '3', 13491, 'Convection the 23BC4 microwave oven with its innovative feature lets you make curd and bread. and the so othing floral design only adds to its appeal', 13),
(78, '25BC4 25L', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro23.jpg', '3', 14841, 'Convection put on your chef hat and explore the 25BC4. It keeps your food warm for all. This microwave practically cleans itself', 13),
(79, '30SC4 30L', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro24.jpg', '3', 15201, 'Convection cooking 101 with the 30SC4 with 101 standard menus and the multi stage cooking features, cooking has never been easier', 13),
(80, 'MJEN286UH', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro13.jpg', '3', 19990, 'LG All In One Microwave Oven ,Charcoal Lighting Heater ,30 Healthy Heart Auto Cook Menu/30 ,Ghee in 12 minutes ,Diet Fry ,Indian Roti Basket ,360 degree Motorised Rotisserie', 14),
(81, 'MJEN326PK', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro14.jpg', '3', 25990, 'LG All In One Microwave Oven Write a review Healthy Heart Auto Cook , Heart Friendly Recipes ,Charcoal Lighting Heater ,Ghee in 12 minutes ,Diet Fry ,360 degree Motorised ,Rotisserie Pasteurize Milk', 14),
(82, 'MJ2886BFUM', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro15.jpg', '3', 18890, 'LG All In One Microwave Oven ,Charcoal Lighting HeaterTM ,Ghee in 12 minutes ,Diet FryTM ,Indian Roti Basket ,360 degree Motorised Rotisserie ,Pasteurize Milk', 14),
(83, 'MJ2886BWUM', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro16.jpg', '3', 18990, 'LG All In One Microwave Oven ,Charcoal Lighting HeaterTM ,Ghee in 12 minutes ,Diet FryTM ,Indian Roti Basket ,360 degree Motorised Rotisserie ,Pasteurize Milk', 14),
(84, 'MS4295DIS', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro17.jpg', '3', 13790, '42L NeoChef Microwave with Smart Inverter ,Smart Inverter ,Sleek and Practical Design ,Easy CleanTM Stable Turntable Ring Compact Size ,Bigger Capacity ,Smart Diagnosis', 14),
(85, 'MJEN326TL', 1, '2021-04-20 14:47:55', 1, 'assets\\images\\micro18.jpg', '3', 22890, 'LG All In One Microwave Oven ,Healthy Heart Auto Cook ,Heart Friendly Recipes ,Charcoal Lighting Heater ,Ghee in 12 minutes ,Diet Fry ,Indian Roti Basket', 14),
(86, '4502993-123 CZP', 1, '2021-04-20 15:47:55', 1, 'assets\\images\\ac1.jpg', '4', 45590, '1 Ton 3 Star Split Air Conditioner with high ambient cooling', 15),
(87, '4502780-123 DZX', 1, '2021-04-20 15:47:55', 1, 'assets\\images\\ac2.jpg', '4', 43790, '1 Ton 3 Star Split Air Conditioner with high ambient cooling', 15),
(88, '4502785-183 IZI3', 1, '2021-04-20 15:47:55', 1, 'assets\\images\\ac3.jpg', '4', 51990, '1.5 Ton 3 Star Split Air Conditioner with high ambient cooling', 15),
(89, '4502879-243 CZZ', 1, '2021-04-20 15:47:55', 1, 'assets\\images\\ac4.jpg', '4', 68999, '2 Ton 3 Star Split Air Conditioner with high ambient cooling', 15),
(90, '4502877-123 ZZY-IMR', 1, '2021-04-20 15:47:55', 1, 'assets\\images\\ac5.jpg', '4', 43990, '1 Ton 3 Star Split Air Conditioner with high ambient cooling', 15),
(91, '4502953-24H SZS', 1, '2021-04-20 15:47:55', 1, 'assets\\images\\ac6.jpg', '4', 68560, '2 Ton Hot and Cold Split Air Conditioner', 15),
(92, 'SAFU 4 STAR 1 TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac7.jpg', '4', 36690, 'SAFU INVERTER AC', 16),
(93, 'DATULV 5 STAR 1 TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac8.jpg', '4', 38980, 'DATULV INVERTER SPLIT AC', 16),
(94, 'DLTU  3 STAR 1 TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac9.jpg', '4', 28990, 'DLTU FIXED SPEED AC', 16),
(95, 'PC12DB 1 TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac10.jpg', '4', 26990, 'PC12DB PORTABLE AC', 16),
(96, 'GBTLV 3 STAR 1.5 TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac11.jpg', '4', 25990, 'GBTLV WINDOW AC', 16),
(97, 'VLTULV 3 STAR 1.5 TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac12.jpg', '4', 38890, 'VLTULV INVERTER AC', 16),
(98, 'RAT518HUD', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac13.jpg', '4', 38790, 'Hitachi Summer TM 1.5 TR', 17),
(99, 'RAW218KYH', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac14.jpg', '4', 32890, 'Hitachi Kaze Reidan 1.5 TR', 17),
(100, 'RSM318HDDO', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac15.jpg', '4', 46690, 'Hitachi Zunoh 3100F 1.5 TR', 17),
(101, 'RMOG322HEDO', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac16.jpg', '4', 51199, 'Hitachi Zunoh 3100F 1.8 TR', 17),
(102, 'RMOG524HCEA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac17.jpg', '4', 66690, 'Hitachi Kashikoi 5100X 2.0 TR', 17),
(103, 'RMQG322HEEA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac18.jpg', '4', 56780, 'Hitachi Shizen 3100S 2.0 TR', 17),
(104, 'AKGB09FAWA 0.75 Ton', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac19.jpg', '4', 25990, 'O Gnenral window ac Fresh Air Intake', 18),
(105, 'AXGT18FHTC 1.5 Ton', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac20.jpg', '4', 41560, 'Cooling operation is secured up to 55 degrees Celsius', 18),
(106, 'ASGA18FTTC 1.5 Ton', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac21.jpg', '4', 56490, 'Precision wind direction control is possible with 3 dimensional air flow technology. Our air flow control makes your environment more comfortable', 18),
(107, 'ASGA36FUTC 3.0 Ton', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac22.jpg', '4', 116990, 'A refrigerator is one of our most valuable household appliances. It keeps food and drinks cool', 18),
(108, 'TAUG36FUAS 3.0 Ton', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac23.jpg', '4', 215000, 'Hyper Tropical Cassette Air Conditioners', 18),
(109, 'ARG60AA 2.0 Ton', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac24.jpg', '4', 285980, 'AOG60AP Cooling Capacity 17.6 An air conditioner is also said to be HVAC that stands for heating, ventilation and air conditioning appliance', 18),
(110, 'DTKL  inverter 1.5TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac25.jpg', '4', 29999, 'It is a time to embrance next-gen air conditioning experience with daikins DTKL series', 19),
(111, 'ATKL Inverter 2.0TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac26.jpg', '4', 32690, 'Available in thr capacityy of 3.5,2.0 Ton in white color', 19),
(112, 'CTKL Inverter 3.0TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac27.jpg', '4', 107690, 'Designed to redefine air conditioning in Daikin CTKL series', 19),
(113, 'DTL Non Inverter 2.0TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac28.jpg', '4', 65990, 'This product will give healthy air conditioning ends in white color', 19),
(114, 'ATL Non Inverter 1.5TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac29.jpg', '4', 35590, 'Experience fresh breeze in your home with Daikins in white color', 19),
(115, 'CTL Non Inverter 2.5TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ac30.jpg', '4', 85990, 'Enjoy good nights sleep with Daikins CTL series of air conditioners thet operate extremely in white color', 19),
(116, 'TV 32T4340', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv1.jpg', '5', 16990, '80cm (32\") T4340 Smart HD TV', 20),
(117, '43T5500', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv2.jpg', '5', 37590, '1m 08cm (43\") T5500 Smart FHD TV', 20),
(118, '82Q800TAK', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv3.jpg', '5', 99990, '8K Smart QLED TV 2m07cm(82\") Q800T', 20),
(119, 'DTL Non Inverter 2.0TON', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv4.jpg', '5', 57990, '1m 89cm (75\") Q95T 4K Smart QLED TV', 20),
(120, '50TU7200', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv5.jpg', '5', 54990, '1m 25cm (50\") TU7200 4K Smart Crystal UHD TV', 20),
(121, '75TU8000', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv6.jpg', '5', 204990, '1m 89cm (75\") TU8000 4K Smart Crystal UHD TV', 20),
(122, 'Mi TV4APRO 108cm(43)', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv7.jpg', '5', 22999, 'Offers the complete cinematic experience at home. The featured Full HD LED display delivers on clarity and color', 21),
(123, 'Mi TV 4X 138.8cm(55)', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv8.jpg', '5', 39999, 'This latest television from Xiaomi features a number of exciting upgrades like the 4K Ultra-HD display', 21),
(124, 'Mi TV 4A 100cm(40)', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv9.jpg', '5', 19990, 'Elevate your living room entertainment with the Mi TV 4A 40 the Full-HD display of the Mi TV 4A 40 comes with dazzling color quality and crisp detail to make each visual truly stand out', 21),
(125, 'QLED TV4K 138.8cm(55)', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv10.jpg', '5', 54999, 'Quantum Leaps Ahead with Mi QLED TV 4K The latest offering from Xiaomi comes with a slew of genuinely enticing features', 21),
(126, 'SmartTVX 125.7cm(50)', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv11.jpg', '5', 31999, 'The XL Experience with Redmi Smart TV X Series The first Redmi Smart TV is built on our Redmi philosophy', 21),
(127, 'MiTV4X 125.7cm(50)', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv12.jpg', '5', 34990, 'The Mi TV 4X 50 has a 4K HDR 10-bit display that ensures a truly entertaining viewing experience with the natural colors', 21),
(128, '32LK558BPTF', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv13.jpg', '5', 26339, 'Designed and Made In India Offers the complete cinematic experience at home. The featured Full HD LED display delivers on clarity and color', 22),
(129, 'h432LM563BPTC', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv14.jpg', '5', 20999, 'This latest television from lg features a number of exciting upgrades like the Smarter Simpler Faster', 22),
(130, 'OLED65E9PTA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv15.jpg', '5', 26990, 'LG E9 65 (165.1cm) 4K Smart OLED TV', 22),
(131, '70UN7300PTC', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv16.jpg', '5', 134990, 'LG UN73 70 (177.8cm) 4K Smart UHD TV', 22),
(132, '75NANO99TNA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv17.jpg', '5', 109990, 'LG Nano99 75 (190.5cm) 8K NanoCell TV', 22),
(133, 'OLED77GXPTA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv18.jpg', '5', 147490, 'LG GX 77 (195.58CM) 4K Smart OLED TV', 22),
(134, 'LE43A6500GA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv19.jpg', '5', 40339, 'Google Android TV - Smart AI Plus', 23),
(135, 'LE58K6600HQGA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv20.jpg', '5', 85999, '4K Bezel Less Google Android TV - Smart AI Plus', 23),
(136, 'LE65S8000EGA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv21.jpg', '5', 145990, '4K Bezel Less Google Android TV - Smart AI Plus', 23),
(137, 'LE65U6900HQGA', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv22.jpg', '5', 95560, '4K Google Android TV - Smart AI Plus', 23),
(138, 'LE55B9500U', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv23.jpg', '5', 57890, '4K UHD LED TV', 23),
(139, 'LE55B9700UG', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\tv24.jpg', '5', 50999, '4K UHD LED TV', 23),
(140, 'Samsung 198 L5', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref1.jpg', '6', 17590, 'Star Inverter Direct Cool Single Door Refrigerator RR21T2H2WCU/HL, Camellia Blue, Base Stand with Drawer', 24),
(141, 'Samsung 668 litres', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref2.jpg', '6', 98990, 'Side-by-Side Refrigerator, Real Stainless RS74R5101SL', 24),
(142, 'Samsung 415L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref3.jpg', '6', 43990, '43 Star Inverter Frost Free Double Door Refrigerator RT42M553ES8/TL, Elegant Inox, Convertible', 24),
(143, 'Samsung 253L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref4.jpg', '6', 23490, '3 Star Inverter Frost Free Double Door Refrigerator RT28T3483S8/HL, Elegant Inox', 24),
(144, 'Samsung 253Ltr', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref5.jpg', '6', 24290, 'RT28T31429U Double Door Refrigerator', 24),
(145, 'Samsung 810L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref6.jpg', '6', 314449, 'Frost Free Side-by-Side Refrigerator RF28N9780SG/TL, Black, Inverter Compressor', 24),
(146, 'IntelliFresh 500 L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref7.jpg', '6', 56999, 'Frost Free Double Door Refrigerator 5 In 1 Convertible Freezer, Inverter Compressor, Platina Interiors, Steel Onyx, 3 Star, 10 Years Warranty', 25),
(147, 'Genius 190L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref8.jpg', '6', 12999, 'Single Door Refrigerator 9 Hours Of Cooling Retention During Power Cuts , 2 Star , Wine Adora , 10 Years Warranty', 25),
(148, 'IntelliFresh Pro 325L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref9.jpg', '6', 36590, 'Bottom Mount Frost Free Refrigerator Advanced AI Technology, Steel Onyx, 3S, 10 Years Warranty', 25),
(149, 'Protton 260L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref10.jpg', '6', 25490, 'Frost Free Triple Door Refrigerator 6th Sense ActiveFresh Technology, Crimson Steel, 10 Years Warranty', 25),
(150, 'Mini Refrigerator 93L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref11.jpg', '6', 9999, 'With Vegetable Crisper', 25),
(151, 'W Series 677L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref12.jpg', '6', 99999, 'Four Door Frost Free Refrigerator Convertible Freezer, Crystal Mocha, 10 Years Warranty', 25),
(152, 'GL-B191KPGB 188L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref13.jpg', '6', 12690, 'Fastest In Ice Making, Toughened Glass Shelves', 26),
(153, 'GL-N292BPGY 260L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref14.jpg', '6', 23999, 'Frost Free Refrigerator With Smart Inverter Compressor, Multi Air Flow, LED Lighting, MOIST - N FRESH', 26),
(154, 'GL-T302SBCY 284L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref15.jpg', '6', 38499, 'Convertible Fridge with Smart Inverter Compressor, Door Cooling, Smart Diagnosis, Auto Smart Connect', 26),
(155, 'GL-T502XPZ3 471L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref16.jpg', '6', 60999, 'Convertible Fridge with Inverter Linear Compressor, Water Dispenser, Door Cooling, LG ThinQ, Hygiene Fresh, Auto Smart Connect', 26),
(156, 'GC-M22FAGPL 594L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref17.jpg', '6', 134999, 'French Door, Inverter Linear Compressor, DoorCooling, Multi Air Flow, LG ThinQ, Smart Diagnosis, MOIST - N FRESH, Side by Side Refrigerator', 26),
(157, 'GL-D201ABGZ 190L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref18.jpg', '6', 65999, 'COMBO Smart Inverter Compressor', 26),
(158, 'RD1905PTI53 190L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref19.jpg', '6', 15790, 'Godrej Single Door Refrigerator', 27),
(159, 'RFEON328B25HCIT 328L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref20.jpg', '6', 25999, 'Godrej Double Door Refrigerator', 27),
(160, 'GF2362PTH 263L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref21.jpg', '6', 14990, 'Godrej Double Door Refrigerator', 27),
(161, '225C33TAF 210L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref22.jpg', '6', 13550, 'RD EDGE PRO Godrej Single Door Refrigerator', 27),
(162, '261C35RCI 261L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref23.jpg', '6', 21290, 'RFEONVALOR Godrej Ltr Double Door Refrigerator', 27),
(163, 'RO205TAF3.2 190L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref24.jpg', '6', 14449, 'RDEDGEP Godrej Single Door Refrigerator', 27),
(164, 'HRB-758SIKGU1 890L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref25.jpg', '6', 374999, 'Smart Refrigerator Twin Inverter Technology', 28),
(165, 'HRF-622CG 668L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref26.jpg', '6', 125990, 'Side-by-Side Refrigerator', 28),
(166, 'HRF-2984PSG-E 415L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref27.jpg', '6', 38999, 'Top Mount Refrigerator', 28),
(167, 'HR-62VS 90L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref28.jpg', '6', 11500, 'Minibar', 28),
(168, 'HRB-3964PRG-E 180L', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref29.jpg', '6', 65100, 'BOTTOM MOUNTED REFRIGERATOR', 28),
(169, 'HRB-3964BGT-E', 1, '2021-04-20 16:47:55', 1, 'assets\\images\\ref30.jpg', '6', 60449, 'BOTTOM MOUNTED REFRIGERATOR 460L', 28);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--
CREATE TABLE `product_category` (
 `id` INT(11) NOT NULL,
 `status` INT(11) NOT NULL,
 `last_update` DATETIME NOT NULL,
 `name` VARCHAR(200) NOT NULL,
 `description` VARCHAR(500) NOT NULL,
 `image_url` VARCHAR(200) NOT NULL,
 `type` VARCHAR(60) NOT NULL,
 `update_by` INT(11) NOT NULL,
 `link_url` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--
INSERT INTO `product_category` (`id`, `status`, `last_update`, `name`, `description`, `image_url`, `type`, `update_by`, `link_url`) VALUES
(1, 1, '2021-03-26 05:47:57', 'Mobile Phone', 'Mobile phones are comfortable way of communication over a long distance. Life becomes so easy and fast by holding the mobile phones. ', 'assets\\images\\product_01.jpg', 'Admin', 1, 'mobile.php'),
(2, 1, '2021-03-23 13:08:00', 'Laptop', 'Laptops are easy to carry anywhere hence they are easy to use as compared to dekstops. Now a days it will help students also during Covid 19 period.  ', 'assets\\images\\product_02.jpg', 'admin', 1, 'laptop.php'),
(3, 1, '2021-03-23 13:11:00', 'Microwaves', 'Microwaves are used to heat food. It has higher frequency which help to produce heat due to which food gets easily hotter when we need to eat.  ', 'assets\\images\\product_03.jpg', 'admin', 1, 'microwave.php'),
(4, 1, '2021-03-23 13:12:00', 'Refrigerator', 'A refrigerator is one of our most valuable household appliances. It keeps food and drinks cool. It is very useful during summers.   ', 'assets\\images\\product_04.jpg', 'admin', 1, 'refrigerator.php'),
(5, 1, '2021-03-23 13:14:00', 'Television', 'Television is an inescapable part of modern culture. We depend on TV for entertainment, news, education, culture, weather, sports.', 'assets\\images\\product_05.jpg', 'admin', 1, 'tv.php'),
(6, 1, '2021-03-23 13:14:00', 'Air Conditioner', 'An air conditioner is also said to be HVAC that stands for heating, ventilation and air conditioning appliance.', 'assets\\images\\product_06.jpg', 'admin', 1, 'ac.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7; COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
