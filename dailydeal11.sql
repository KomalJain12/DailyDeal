-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2021 at 05:24 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dailydeal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `Title`, `Description`) VALUES
(1, 'We deal in best offer and best vouchers of the day..', 'We work with more than 1000 brands to make you choosy and make easy for you to shop with us by scrolling such large center of brands and collections.\nThe Deals, Offers, Vouchers, Coupon Codes, Discount, etc.. are created for the user to make them know about new company and make them shop throughtout the world.'),
(2, 'Deals that will make you satisfied...', '<p>Deals&nbsp;that will make you satisfied<br />\r\nWe&#39;ve 2 million users across the world and about 1 lakh vendors that have different products and vareity in them. We deal on the basis of daily offers and much more you can grab at a glance. Visiting once will make you so much happy and excited that you will come back again and again..</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobileno` double NOT NULL,
  `adpic` varchar(100) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`aid`, `aname`, `password`, `email`, `mobileno`, `adpic`) VALUES
(1, 'Satyam Singh', 'dailydeal', 'sattu1106@gmail.com', 9081881584, 'DSC09257 (3).JPG'),
(2, 'Komal Jain', 'komu123', 'jaink7676@gmail.com', 6353502268, '20210618_141922.jpg'),
(3, 'Priti Paunikar', 'priti123', 'pritipaunikar90@gmail.com', 9737931158, 'IMG_20210618_144250.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `currdate` date NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`cartid`),
  KEY `pid` (`pid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `uid`, `vid`, `currdate`, `qty`) VALUES
(2, 8, 3, 1, '2019-06-21', 1),
(3, 37, 3, 1, '2019-06-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_history`
--

CREATE TABLE IF NOT EXISTS `cart_history` (
  `cart_hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `cartid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `currdate` date NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`cart_hist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `cart_history`
--

INSERT INTO `cart_history` (`cart_hist_id`, `cartid`, `pid`, `uid`, `vid`, `currdate`, `qty`) VALUES
(1, 1, 2, 3, 1, '2016-06-21', 1),
(2, 2, 1, 3, 1, '2016-06-21', 1),
(3, 3, 2, 3, 1, '2016-06-21', 2),
(4, 1, 2, 3, 1, '2017-06-21', 2),
(5, 3, 1, 3, 1, '2017-06-21', 1),
(6, 4, 2, 3, 2, '2017-06-21', 2),
(7, 5, 1, 3, 1, '2017-06-21', 3),
(8, 6, 2, 3, 2, '2017-06-21', 1),
(9, 7, 1, 3, 1, '2017-06-21', 1),
(10, 8, 2, 3, 2, '2017-06-21', 3),
(11, 9, 1, 3, 1, '2017-06-21', 2),
(12, 10, 2, 3, 2, '2017-06-21', 2),
(13, 11, 2, 3, 2, '2017-06-21', 1),
(14, 12, 1, 3, 1, '2017-06-21', 2),
(15, 13, 1, 3, 1, '2017-06-21', 2),
(16, 14, 2, 3, 2, '2017-06-21', 1),
(17, 15, 2, 3, 2, '2017-06-21', 1),
(18, 16, 2, 3, 2, '2017-06-21', 1),
(19, 1, 36, 3, 1, '2019-06-21', 2),
(20, 2, 37, 3, 1, '2019-06-21', 2),
(21, 3, 29, 4, 2, '2019-06-21', 2),
(22, 4, 28, 4, 2, '2019-06-21', 2),
(23, 5, 34, 4, 1, '2019-06-21', 1),
(24, 6, 34, 3, 1, '2019-06-21', 1),
(25, 7, 36, 3, 1, '2019-06-21', 1),
(26, 8, 34, 3, 1, '2019-06-21', 2),
(27, 9, 29, 3, 2, '2019-06-21', 4),
(28, 10, 27, 3, 2, '2019-06-21', 1),
(29, 1, 36, 3, 1, '2019-06-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`cid`, `cname`, `image`) VALUES
(1, 'Footwear', 'footwear2.jfif'),
(2, 'Handicraft', 'handcraft.jpg'),
(3, 'Kitchen Products', 'kitchen.jpg'),
(4, 'Cloth Materials', 'cloth.jpg'),
(5, 'Personal Care', 'personal care.jpg'),
(6, 'Gadgets & Add-Ons', 'electronic-gadgets_800x.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `citytbl`
--

CREATE TABLE IF NOT EXISTS `citytbl` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `citytbl`
--

INSERT INTO `citytbl` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'Surat'),
(2, 1, 'Vadodara'),
(3, 1, 'Ahmedabad'),
(4, 1, 'Bharuch'),
(5, 1, 'Amreli'),
(6, 1, 'Anand'),
(7, 1, 'Banaskantha'),
(8, 1, 'Chhotaudepur'),
(9, 1, 'Dang'),
(10, 1, 'Tapi'),
(11, 2, 'Central Delhi'),
(12, 2, 'Shahdara'),
(13, 2, 'New Delhi'),
(14, 2, 'North Delhi'),
(15, 2, 'South Delhi'),
(16, 3, 'Ajmer'),
(17, 3, 'Barmer'),
(18, 3, 'Dholpur'),
(19, 3, 'Jalsor'),
(20, 3, 'Kota'),
(21, 4, 'Ahmednagar'),
(22, 4, 'Buldhana'),
(23, 4, 'Gondia'),
(24, 4, 'Kolhapur'),
(25, 4, 'Nashik'),
(26, 5, 'Agra'),
(27, 5, 'Baghpat'),
(28, 5, 'Fatehpur'),
(29, 5, 'Jalaun'),
(30, 5, 'Lakhnow'),
(31, 5, 'Mainpuri'),
(32, 5, 'Mathura'),
(33, 5, 'Raebareli'),
(34, 5, 'Shamli'),
(35, 5, 'Varansi');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'Manoj Singh', 'lilsattu1999@gmail.com', 'Hii I wanted to know about the process of becoming a vendor at your webiste\r\ncould you please reply me ?', 1),
(2, 'Priti Saxsena', 'pritipounikar90@gmail.com', 'Hii can i know how to check the deals of your website and how can I get better discount on products\r\n', 0),
(3, 'Komal Singh ', 'jaink7676@gmail.com', 'Hii I have applied as a vendor to youe website but have not received any mail yet please contact me as soon as you can', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`fid`, `question`, `answer`) VALUES
(1, 'How can I register myself as a Vendor ??', 'Click on the link given in the header menu written as "Become A Vendor". Register yourself as a vendor and sell your products.'),
(2, 'How do the deals wok on this website??', 'The deals are based on daily purpose and all deals are live till the day ends so one can purchase the products at awesome deals in one day limit only');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `comment`, `description`, `name`, `city`) VALUES
(1, 'I am So glad to Shop With You', 'I have ordered so many products and that too with very variety of deals and offers that to in afford', 'Anil Kumar Singh', 'Delhi'),
(2, 'It is Very Trustworthy to shop with you...', 'I have ordered so many products and that too with very variety of deals and offers that to in affordable price. Thank You!!!', 'Sunita Jha', 'Surat, Guj'),
(3, 'The deals are one on one', 'I am with this website since last six months and have ordered many items.', 'Sneha Mishra', 'Noida, Del');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `offer` float NOT NULL,
  `exdate` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`oid`, `pid`, `offer`, `exdate`, `time`) VALUES
(1, 2, 38, '2021-06-23', '22:46:00'),
(2, 28, 32, '2021-06-19', '20:27:00'),
(3, 17, 50, '2021-06-26', '21:28:00'),
(4, 10, 56, '2021-06-19', '21:29:00'),
(5, 8, 23, '2021-06-19', '21:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `pqty` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `dispatch_date` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `delivery_charge` int(11) DEFAULT NULL,
  `cancel_reason` int(11) DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `order_otp` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`),
  KEY `order_id` (`order_id`),
  KEY `pid` (`pid`),
  KEY `vid` (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `pid`, `vid`, `pqty`, `total_price`, `dispatch_date`, `status`, `delivery_charge`, `cancel_reason`, `delivery_date`, `order_otp`) VALUES
(1, 1, 36, 1, 2, 878, NULL, 0, NULL, NULL, NULL, NULL),
(2, 1, 37, 1, 2, 684, NULL, 5, NULL, NULL, NULL, NULL),
(3, 2, 29, 2, 2, 1976, NULL, 0, NULL, NULL, NULL, NULL),
(4, 2, 28, 2, 2, 530, '2021-06-19', 4, NULL, NULL, '2021-06-19', 8114),
(5, 2, 34, 1, 1, 249, '2021-06-19', 4, NULL, NULL, '2021-06-19', 9359),
(6, 3, 34, 1, 1, 249, '2021-06-19', 3, NULL, NULL, '2021-06-19', 1659),
(7, 4, 36, 1, 1, 439, NULL, 0, NULL, NULL, NULL, NULL),
(8, 4, 34, 1, 2, 498, '2021-06-19', 2, NULL, NULL, NULL, 2526),
(9, 4, 29, 2, 4, 3952, NULL, 5, NULL, NULL, NULL, NULL),
(10, 5, 27, 2, 1, 1868, '2021-06-19', 4, NULL, NULL, '2021-06-19', 2997),
(11, 6, 36, 1, 1, 439, '2021-06-20', 4, NULL, NULL, '2021-06-20', 6921);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `order_date` date NOT NULL,
  `billing_add` varchar(200) NOT NULL,
  `shipping_add` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `total_order_amt` double NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `uid` (`uid`),
  KEY `city_id` (`city_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `uid`, `full_name`, `order_date`, `billing_add`, `shipping_add`, `state_id`, `city_id`, `email`, `phno`, `total_order_amt`, `payment_mode`, `order_status`) VALUES
(1, 3, 'Satyam Singh', '2021-06-19', 'Dindoli 394210', 'Dindoli 394210', 1, 1, 'sattu1106@gmail.com', '8877995566', 1622, 'cash on delivery', 0),
(2, 4, 'priti', '2021-06-19', 'Bhatar 395010', 'Bhatar 395010', 1, 1, 'pritipounikar90@gmail.com', '9737931158', 2815, 'cash on delivery', 0),
(3, 3, 'Satyam Singh', '2021-06-19', 'dindoli', 'dindoli', 1, 1, 'sattu1106@gmail.com', '8877995566', 309, 'cash on delivery', 0),
(4, 3, 'Satyam Singh', '2021-06-19', 'G1,Bhatar,Surat', 'G1,Bhatar,Surat', 1, 1, 'sattu1106@gmail.com', '8877995566', 4949, 'cash on delivery', 0),
(5, 3, 'Satyam Singh', '2021-06-19', 'surat', 'surat', 1, 1, 'sattu1106@gmail.com', '8877995566', 1928, 'cash on delivery', 0),
(6, 3, 'Satyam Singh', '2021-06-19', 'G1/101,Swastik Park Society,near Rajhansh Cinema<adajan<surat', 'G1/101,Swastik Park Society,near Rajhansh Cinema<adajan<surat', 1, 1, 'sattu1106@gmail.com', '8877995566', 499, 'cash on delivery', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_return_master`
--

CREATE TABLE IF NOT EXISTS `order_return_master` (
  `return_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `order_detail_id` int(11) NOT NULL,
  `return_date` date NOT NULL,
  `reason` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`return_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_return_master`
--

INSERT INTO `order_return_master` (`return_id`, `uid`, `pid`, `order_detail_id`, `return_date`, `reason`, `status`) VALUES
(1, 3, 37, 2, '2021-06-19', 'I am Not at Home', 0),
(2, 3, 29, 9, '2021-06-19', 'Now someday I am Not at my Home.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `mrp` double NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `pimage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `sid` (`sid`),
  KEY `vid` (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`pid`, `sid`, `vid`, `pname`, `sku`, `brand`, `description`, `rate`, `mrp`, `stock`, `pimage`) VALUES
(1, 2, 1, 'Wonder Shoes''s  Mens Pu Slipper(8-9-10)', '#ws23', 'Wonder Shoes', 'We offer an extensive range of Mens PU Slipper to our customers. These are developed using the premium quality material and advanced technology.', 199, 350, 40, 'gents chappal.jpg'),
(2, 2, 1, 'Wonder shoe''s Gents PU Slippers', '#ws23w', 'Wonder Shoes', 'Footwear Type:Gents PU Slipper\r\nSize	:6-10\r\nOccasion:Daily wear\r\nCountry of Origin:Made in India\r\nSole Material	:PU\r\nUpper Material:Rexine', 100, 299, 30, 'gents chappal2.jpg'),
(3, 2, 1, 'Wonder Shoes''s Gents PU Sandals', '#ws21w', 'Wonder Shoes', 'Size	:6-10\r\nOccasion:Daily wear\r\nMaterial	:PU\r\nCountry of Origin	:Made in India', 149, 399, 40, 'gents sandal.jpg'),
(4, 2, 1, 'Wonder Shoes''s Gents Sandals(8-9-10)', '#ws24', 'Wonder Shoes', 'Style:Sports\r\nGender:Men\r\nCountry of Origin	:Made in India', 99, 299, 30, 'gents sandal2.jpg'),
(5, 4, 1, 'Wonder Shoes''s Sport Shoes', '#ws25', 'Wonder Shoes', 'Birde Brand Offer Designer Canvas Casual Fashionable Looking Loafers & Moccasins Shoes With Different styles, sizes, and colors of Loafers shoes available for purchase, you can find the perfect pair for yourself, your child, or your significant other', 499, 899, 150, 'gents shoes.jpeg'),
(6, 4, 1, 'Wonder Shoes''s Suports Shoes', '#ws26', 'Wonder Shoes', 'Birde Brand Offer Designer Canvas Casual Fashionable Looking Loafers & Moccasins Shoes With Different styles, sizes, and colors of Loafers shoes available for purchase, you can find the perfect pair for yourself, your child, or your significant other', 599, 999, 40, 'gents shoes2.jpeg'),
(7, 5, 1, 'Wonder Shoes''s Men''s Formal Lace Up Shoe', '#ws26e', 'Wonder Shoes', 'Color:Black\r\nOuter material:Synthetic\r\nModel name:Men''s Formal Lace Up Shoe\r\nIdeal for:Men\r\nOccasion:Formal\r\nLeather type:Nubuck\r\nSole material:Rubber\r\nClosure:Lace-Ups\r\nUpper Pttern:Solid\r\nSales package:1 pair of Shoe\r\npack of:1\r\nTip shape:rectangle', 999, 1299, 40, 'formal shoes.jpeg'),
(8, 5, 1, 'Wonder Shoes''s Men''s Formal Lace Up Shoe', '#ws27e', 'Wonder Shoes', 'Color:Black\r\nOuter material:Synthetic\r\nModel name:Men''s Formal Lace Up Shoe\r\nIdeal for:Men\r\nOccasion:Formal\r\nLeather type:Nubuck\r\nSole material:Rubber\r\nClosure:Lace-Ups\r\nUpper Pttern:Solid\r\nSales package:1 pair of Shoe\r\npack of:1\r\nTip shape:rectangle', 899, 999, 100, 'forml.jpeg'),
(9, 6, 1, 'Wonder Shoes''s Ladies Chappal', '#ws27e', 'Wonder Shoes', 'Made From Out Of Best Quality Material Which Is Durable and Comfortable. The comfortable sole makes sure that your feet stay comfortable throughout the day and you enjoy optimal Grip. Designed to offer comfort at its best, without compromising on sty', 149, 259, 49, 'ladis chappal.jpeg'),
(10, 6, 1, 'Wonder Shoes''s Ladies Slippers', '#ws28e', 'Wonder Shoes', 'Sole Materia:Rubber\r\nFaux Fur Slippers and Flipflop by KRENYA for ladies and teenage girls. It has fine quality and is specially designed to be comfortable on your feet.', 129, 299, 20, 'ladies.jpeg'),
(11, 7, 1, 'Wonder Shoes''s Paragon Sandal', '#ws29e', 'Wonder Shoes', 'Sprintx Bellies are Class and Comfort with Latest Design and Top Quality which can be wear on any occasion.', 299, 499, 200, 'ladies sandl.jpeg'),
(12, 8, 1, 'Wonder Shoes''s Casual,Gym Shoes', '#ws30e', 'Wonder Shoes', 'Shozie Breathable, Walking, Running, Casual,Gym Shoes', 399, 699, 30, 'ladies shoes.jpeg'),
(13, 3, 2, 'Kalaart''s Knitted Hand Bag', 'kala12', 'Kalaart', 'Tooba Handicraft Party Wear Hand Embroidered Box Clutch Bag Purse For Bridal, Casual, Party , Wedding', 999, 1299, 30, 'wobag.jpeg'),
(14, 3, 2, 'Kalaart''s  Handicraft Indian Art Ladies', 'kala13', 'Kalaart', 'This Rajasthani grabbing Shoulder Bag features vibrantly colored embroidery. This alluring Tote Bag is enriched with Patchwork work stitched by hard-working women. This handmade Tote is graced with Embroidery work in luscious colors is the remarkable', 988, 1599, 40, 'wobag2.jpeg'),
(15, 3, 2, 'Kalaart''s bag', 'kala14', 'Kalaart', '\r\n100% Cotton Product Easily find all your necessities without wasting any time. New touch of something different to our everyday style. Rather than investing in all new clothes, adding a new style of purse into the mix can give you that change youâ€', 1499, 1599, 100, 'wobag3.jpeg'),
(16, 9, 2, 'Kalaart''s Handicraft Plant', 'kala15', 'Kalaart', '\r\nThis ceramic flower vase pot handmade & decorated with khurja pottery art work use for flower decoration in your home, office, kitchen, table & desk qty- 1 is made by an awarded artisans from Khurja, India. An authentic handmade product with great ', 359, 555, 40, 'hendi1.jpeg'),
(17, 9, 2, 'Kalaart''s  Handicraft Indian Art vessels', 'kala16', 'Kalaart', 'Sampoorna Smart Kitchen Handicraft Planter Pot 4 PCS Small Girls Shape Planter Pot | Small Planter Pot to Decorate your living room, Office Table with Decorative Plant Pots | Resin Plant Pot for Decor your Living | Unique Flower Pot | Succulents Pot ', 449, 669, 12, 'handi2.jpeg'),
(18, 10, 2, 'Kalaart''s eCraftIndia Handcrafted Wall', 'kala17', 'Kalaart', 'eCraftIndia presents decorative wall/door hanging Showpiece which is widely used in worldwide to hang across doors, walls and windows. It is a traditional item made up of fabric, wood, metal Showpiece and artificial pearls. Each bell is of different ', 149, 299, 40, 'sh1.jpeg'),
(19, 10, 2, 'Kalaart''s Handcrafted Dream Catcher', 'kala18', 'Kalaart', 'Beckon Venture Presents you a new Series of Incense holder Cum Showpiece Figurine Which is Back-flow incense burner creates an illusion of a smokey waterfall. This piece of art has fountain waterfall. Simply place an incense cone at the top of the wa', 99, 199, 30, 'sh2.jpeg'),
(20, 10, 2, 'Kalaart''s Home Decorative Cute Shaped plant', 'kala18', 'Kalaart', 'Plant Vase available in the shape of a popular character of marvel movie - Groot who is making a heart with hands and showing love. This plant vase requires low maintenance and gives an attractive look at your decor. This cute little giraffe shaped p', 59, 199, 29, 'sh3.jpeg'),
(21, 11, 2, 'Kalaart''s  Wood Photo Display Picture Frame', 'kala19', 'Kalaart', 'Wood Photo Display Picture Frame Collage Picture Display Organizer with Clips (Black) (65 cm x 47 cm x 1.2 cm)', 499, 599, 100, 'de1.jpeg'),
(22, 11, 2, 'Kalaart''s  HomeDecor ', 'kala20', 'Kalaart', 'The shape of the dream catcher is a circle because it represents the circle of life and how forces like the sun and moon travel each day and night across the sky. The dream catcher web catches the bad dreams during the night and dispose of them when ', 429, 955, 30, 'de2.jpeg'),
(23, 12, 2, 'Kalaart''s Mixer and Grinder ', 'kala21', 'Kalaart', '\r\nKITCHEN KING 3 JAR MIXER GRINDER COMES WITH A POWERFUL 750W OVERLOAD PROTECTED MOTOR. WHIP UP CHUTNEYS, GRIND MASALAS AND PREPARE YUMMY SHAKES EFFORTLESSLY WITH THE SMARTROOT KITCHEN KING MIXER GRINDER.', 2599, 4695, 10, 'kp1.jpeg'),
(24, 12, 2, 'Kalaart''s Kitchen Products', 'kala22', 'Kalaart', '\r\nTurn ordinary food into super food with this is a powerful 550 watt motor and extractor blade that can open seeds, crack through stems, shred skins, and access hidden potters in food. The 550W motor makes it a powerful machine. Livo easily grinds s', 2990, 5889, 30, 'kp2.jpeg'),
(25, 13, 2, 'Kalaart''s Stainless Steel Spoons Set', 'kala23', 'Kalaart', 'Product Content : 4 Stainless Steel Spoon, Product Dimension : 4 X 16 X 2 cm (LXBXH), Weight : 120 gm, Material : Stainless Steel, Color : Silver, These pieces have thick stems for durability, and soft-curved edges for safety, style and functionality', 378, 399, 20, 'kp3.jpeg'),
(26, 13, 2, 'Kalaart''s Stainless Steel Soup Spoon Set', 'kala24', 'Kalaart', 'Shapes Products Pvt. Ltd. provides fine and classy cutlery that can make a difference to your dining experience.It is a world class provider of quality stainless steel cutlery with in-house manufacturing unit in India.Make a difference to your kitche', 960, 1075, 30, 'kp4.jpeg'),
(27, 13, 2, 'Kalaart''s Cookware Set ', 'kala25', 'Kalaart', '\r\nShift to a healthier lifestyle with these set cookware from the house of NIRLON which has a sturdy hard aluminium base allowing faster and even heating. This saves energy and reduces the total time of cooking. Because of the non-stick surface, the ', 1868, 2546, 29, 'kp5.jpeg'),
(28, 14, 2, 'Kalaart''s peelers', 'kala26', 'Kalaart', '\r\nKnife set is the most ideal accessory for your kitchen. It consists of 5 essential pieces of instruments/tools that you need on regular basis for chopping, cutting, slicing etc. Also, this entire set comes in a beautifully made stand that makes it ', 265, 699, 58, 'kp6.jpeg'),
(29, 15, 2, 'Kalaart''s Crockery Set', 'kala26', 'Kalaart', '\r\nThe new whiter, lighter and extra strong range of La Opala has recently been introduced to deliver the best value for money to its consumers. This new range is fully toughened to make it extra strong, microwave safe and break and chip resistant. It', 988, 399, 24, 'cc.jpeg'),
(31, 24, 1, '3-Way Head Tripod for Digital Camera', '#ws32e', 'Wonder Shoes', 'Lightweight aluminum 4-section leg and ABS parts, portable and durable, Quick release plate with standard 1/4 inch mounting screw to connect camera or camcorder, Supplied with a nylon bag, easy to carry it to go traveling anywhere, Non-slip rubber fe', 347, 999, 40, 'gad2.jpeg'),
(32, 24, 1, 'Mi 3i 20000 mAh Power Bank ', '#ws33e', 'Wonder Shoes', 'Donâ€™t let your devices run out of battery while youâ€™re away with this Mi power bank. Thanks to its 18 W fast charge support, this power bank helps you charge your devices quickly and efficiently. It also helps you charge almost all types of devic', 1699, 2199, 45, 'gad3.jpeg'),
(33, 25, 1, 'RootsBranches Keyboard protector', '#ws34', 'Wonder Shoes', '15.6 Laptop Keyboard Skin  (Transparent)\r\n\r\nWith the silicone keyboard skin for 15.6 inch laptop, you no longer have to worry about having a working lunch as the food particles can''t make their way to the keyboard with this cover on. ', 123, 399, 29, 'lap.jpeg'),
(34, 25, 1, '4 Port Hi-Speed USB Hub', '#ws35e', 'Wonder Shoes', '4 USB ports standard A type upto 100 mA current per port, 1 USB Mini B type female input connector. The QHMPL hub provides full over current protection, QHMPL USB hub supports the following signaling rates, A low-speed rate of 1.5 Mbit/s as is define', 249, 310, 16, 'lap2.jpeg'),
(35, 26, 1, ' LED TV Cover for 32'''' Inch Dustproof Cover', '#ws36e', 'Wonder Shoes', 'Wrapped in Smile LED/LCD TV Covers are the perfect insurance that your Box of Entertainment can have, Made from High Quality PVC Material which doesn''t effect the Visuals a bit, Zipper Incloser make it easy to operate, Helps in Protection from Dust, ', 299, 799, 49, 'tv.jpeg'),
(36, 26, 1, '43 inch LCD/LED TV Cover/Dust Proof', '#ws37e', 'Wonder Shoes', '\r\nWrapped in Smile LED/LCD TV Covers are the perfect insurance that your Box of Entertainment can have, Made from High Quality PVC Material which doesn''t effect the Visuals a bit, Zipper Incloser make it easy to operate, Helps in Protection from Dust', 439, 999, 30, 'tv2.jpeg'),
(37, 17, 1, 'Polycotton Printed Shirt Fabric ', '#ws39E', 'Wonder Shoes', '*Digitally_Printed_Fabric* Stylish fabric ready to stitch, The length of Fabric 2.25 mtr & Width 0.91 mtr sufficient to stitch S/ M /L /XL/XXL Size, Premium quality product 100% genuine directly from manufacturer. Shirt fabric you can use at any occa', 342, 999, 36, 'cm.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `review_master`
--

CREATE TABLE IF NOT EXISTS `review_master` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `review_date` date NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `pid` (`pid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `review_master`
--

INSERT INTO `review_master` (`rid`, `uid`, `pid`, `rating`, `review`, `review_date`) VALUES
(1, 4, 34, 5, 'Nice product very good quality', '2021-06-19'),
(2, 3, 34, 1, 'Not so Nice as Expected', '2021-06-19'),
(3, 3, 36, 5, 'superb fitting ðŸ‘ðŸ˜„', '2021-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `statetbl`
--

CREATE TABLE IF NOT EXISTS `statetbl` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(30) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `statetbl`
--

INSERT INTO `statetbl` (`state_id`, `state_name`) VALUES
(1, 'Gujarat'),
(2, 'Delhi'),
(3, 'Rajasthan'),
(4, 'Maharastra'),
(5, 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_detail`
--

CREATE TABLE IF NOT EXISTS `subcategory_detail` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `simage` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `subcategory_detail`
--

INSERT INTO `subcategory_detail` (`sid`, `cid`, `sname`, `simage`) VALUES
(2, 1, 'Gent''s Slippers And Sandals', 'gents chappals.jpg'),
(3, 2, 'Purse & Hand Bags', 'download.jpg'),
(4, 1, 'Gent''s support shoes', 'f1.jpg'),
(5, 1, 'Gent''s formal shoes', 'f2.jpg'),
(6, 1, 'Ladies chappal & slippers', 'f3.jpg'),
(7, 1, 'Ladies sandal', 'f4.jpg'),
(8, 1, 'Ladies Shoes', 'f5.jpg'),
(9, 2, 'Pots And Vessels', 's1.jpg'),
(10, 2, 'Handmade Showpiece', 's2.jpg'),
(11, 2, 'Room Decoration', 's3.jpg'),
(12, 3, 'Mixer And Grinder', 'h1.png'),
(13, 3, 'Spoon Fork & Dish Set', 'h2.jpg'),
(14, 3, 'Knife And Peelers', 'h3.jpg'),
(15, 3, 'Crockeries', 'h4.jpg'),
(16, 4, 'Gent'' Formal Cutpiece', 'c1.webp'),
(17, 4, 'Gent''s Partywear Cutpiece', 'c2.jpg'),
(18, 4, 'Ladies Kurties Cutpiece', 'c3.jpg'),
(19, 4, 'Cushions And Bedsheets', 'c4.jpg'),
(20, 5, 'Cosmetics', 'p1.jpg'),
(21, 5, 'Bathroom Accessories', 'p2.jpg'),
(22, 5, 'Lotions And Talc', 'p3.png'),
(23, 5, 'Laundary Products', 'p4.jpg'),
(24, 6, 'Mobile Accessories', 'm1.jpg'),
(25, 6, 'Laptop Accessories', 'm2.jpg'),
(26, 6, 'TV Accessories', 'm3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `status` varchar(10) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `otp` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`status`, `uid`, `name`, `mobileno`, `email`, `password`, `otp`) VALUES
('1', 3, 'Satyam Singh', '8877995566', 'sattu1106@gmail.com', '123', '6137'),
('1', 4, 'priti', '9737931158', 'pritipounikar90@gmail.com', '1234567', '4160'),
('0', 5, 'priti', '9737931158', 'pritipounikar90@gmail.com', '1234567', '6797'),
('0', 6, 'chanda', '6353502268', 'vipulj461@gmail.com', 'vipul123', '1289'),
('1', 7, 'Rajvi', '9737931158', 'ashita0719@gmail.com', '123456789', '8916'),
('1', 8, 'satyarani', '6353502268', 'vipulj461@gmail.com', 'komal', '4358');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_master`
--

CREATE TABLE IF NOT EXISTS `vendor_master` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vendor_master`
--

INSERT INTO `vendor_master` (`vid`, `vname`, `password`, `email`, `mobileno`, `image`, `status`) VALUES
(1, 'Wonder Shoes', 'komal123', 'lilsattu1999@gmail.com', '9737931158', 'Screenshot (33).png', 1),
(2, 'Kalaart ', '123', 'jaink7676@gmail.com', '7667887767', 'logo3.JPG', 1),
(3, 'Gadget World', '123', 'ms9998867@gmail.com', '6353502268', 'venlogo.png', 1),
(4, 'Better Craft', '123', 'jaink7676@gmail.com', '6353502268', 'venlogo.png', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user_master` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `product_detail` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `citytbl`
--
ALTER TABLE `citytbl`
  ADD CONSTRAINT `citytbl_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `statetbl` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product_detail` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_3` FOREIGN KEY (`vid`) REFERENCES `vendor_master` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_4` FOREIGN KEY (`order_id`) REFERENCES `order_master` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_5` FOREIGN KEY (`pid`) REFERENCES `product_detail` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `order_master_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_master` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_master_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `statetbl` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_master_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `citytbl` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_master`
--
ALTER TABLE `review_master`
  ADD CONSTRAINT `review_master_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_master` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_master_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product_detail` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory_detail`
--
ALTER TABLE `subcategory_detail`
  ADD CONSTRAINT `subcategory_detail_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category_master` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
