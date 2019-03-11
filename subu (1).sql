-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2019 at 05:33 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subu`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocard`
--

DROP TABLE IF EXISTS `addtocard`;
CREATE TABLE IF NOT EXISTS `addtocard` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `productname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `product_id` varchar(25) NOT NULL,
  `cost` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `data` varchar(255) NOT NULL,
  `wood` varchar(25) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocard`
--

INSERT INTO `addtocard` (`id`, `productname`, `email`, `product_id`, `cost`, `title`, `data`, `wood`, `photo1`) VALUES
(94, 'wooden sofas', 'shubham333@gmail.com', '1800  ', '3456', 'sofas', 'nic product', 'mango', '../imagefolder/a3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `adminpannel`
--

DROP TABLE IF EXISTS `adminpannel`;
CREATE TABLE IF NOT EXISTS `adminpannel` (
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpannel`
--

INSERT INTO `adminpannel` (`email`, `password`) VALUES
('shreesalasarartandcraft@gmail.com', '03032000');

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

DROP TABLE IF EXISTS `beds`;
CREATE TABLE IF NOT EXISTS `beds` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(32, 'beds', 'queen size beds', '1113', '10000', 'mango', 'thid product is queen size bed.\r\nheight and weidtg 400*300*700.\r\nweight is 20kg.\r\n ', '../imagefolder/a1.jpg', '../imagefolder/a1.jpg', '../imagefolder/a1.jpg'),
(31, 'beds', 'king size beds', '1115', '13000', 'mango', 'nic product and looking good', '../imagefolder/h20.jpg', '../imagefolder/h20.jpg', '../imagefolder/h20.jpg'),
(29, 'beds', 'king size beds', '1111', '123456', 'mango', 'nice product and looking good', '../imagefolder/a1.jpg', '../imagefolder/a1.jpg', '../imagefolder/a1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookshelve`
--

DROP TABLE IF EXISTS `bookshelve`;
CREATE TABLE IF NOT EXISTS `bookshelve` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookshelve`
--

INSERT INTO `bookshelve` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(5, 'bookshelve', 'book shelve corner', '1200', '1234', 'mangos', 'nic product', '../imagefolder/a10.jpg', '../imagefolder/a10.jpg', '../imagefolder/a10.jpg'),
(6, 'bookshelve', 'bookshelve', '1201', '1200', 'mango', 'nice product', '../imagefolder/a6.jpg', '../imagefolder/a6.jpg', '../imagefolder/a6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chair`
--

DROP TABLE IF EXISTS `chair`;
CREATE TABLE IF NOT EXISTS `chair` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chair`
--

INSERT INTO `chair` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(5, 'chair', 'kids chair', '1411', '2345', 'mango', 'noic product', '../imagefolder/IMG_20181221_121027.jpg', '../imagefolder/IMG_20181221_160148.jpg', '../imagefolder/IMG_20181221_160218.jpg'),
(6, 'chair', 'chair', '1401', '10000', 'mango', 'nic product', '../imagefolder/a4.jpg', '../imagefolder/a4.jpg', '../imagefolder/a4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `age` int(3) NOT NULL,
  `id` int(255) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer1`
--

DROP TABLE IF EXISTS `customer1`;
CREATE TABLE IF NOT EXISTS `customer1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Age` varchar(5) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer1`
--

INSERT INTO `customer1` (`id`, `Username`, `Age`, `Phone`, `Email`, `Password`) VALUES
(97, 'shubham', '19', '9829180368', 'shubhamdhoot333@gmail.com', '03032000');

-- --------------------------------------------------------

--
-- Table structure for table `customera`
--

DROP TABLE IF EXISTS `customera`;
CREATE TABLE IF NOT EXISTS `customera` (
  `Email` varchar(50) NOT NULL,
  `Clientname` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Pin_code` int(6) NOT NULL,
  `Home_Number` varchar(20) NOT NULL,
  `Colony` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customera`
--

INSERT INTO `customera` (`Email`, `Clientname`, `Phone`, `Pin_code`, `Home_Number`, `Colony`, `City`, `State`, `Type`, `id`) VALUES
('shubhamdhoot333@gmail.com', 'shubham', '9829180368', 342901, '18', 'bank colony', 'jaipur', 'rajasthan', 'home', 93);

-- --------------------------------------------------------

--
-- Table structure for table `decor`
--

DROP TABLE IF EXISTS `decor`;
CREATE TABLE IF NOT EXISTS `decor` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decor`
--

INSERT INTO `decor` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(2, 'decor', 'flower', '1500', '3456', 'mango', 'nic product', '../imagefolder/a8.jpg', '../imagefolder/a8.jpg', '../imagefolder/a8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `company_review` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `mobile`, `email`, `message`, `company_review`) VALUES
(15, 'subu', '9829180368', 'shubhamdhoot333@gmail.com', 'nic product', ''),
(14, 'subu', '9829180368', 'shubhamdhoot333@gmail.com', 'nic product', 'work successful');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification`) VALUES
(1, 'Welcome User,to open Account in Our site.we wish your experience related to our web site will very good.   '),
(2, 'Here You can Purchase Wooden Item and furniture which is really required in your life.');

-- --------------------------------------------------------

--
-- Table structure for table `offertable`
--

DROP TABLE IF EXISTS `offertable`;
CREATE TABLE IF NOT EXISTS `offertable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offersize` varchar(11) NOT NULL,
  `offername` varchar(50) NOT NULL,
  `limitamount` varchar(50) NOT NULL,
  `stage` varchar(50) NOT NULL,
  `promo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offertable`
--

INSERT INTO `offertable` (`id`, `offersize`, `offername`, `limitamount`, `stage`, `promo`) VALUES
(10, '20', 'mega offer', '10000', 'expire', '3subu3'),
(9, '15', 'big dhamal', '5000', 'expire', '2subu4');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

DROP TABLE IF EXISTS `order_table`;
CREATE TABLE IF NOT EXISTS `order_table` (
  `Invoice_no` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date1` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `stage` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  PRIMARY KEY (`Invoice_no`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otheritem`
--

DROP TABLE IF EXISTS `otheritem`;
CREATE TABLE IF NOT EXISTS `otheritem` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otheritem`
--

INSERT INTO `otheritem` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(5, 'otheritem', 'tv unit', '1601', '10000', 'mango', 'nic product', '../imagefolder/a2.jpg', '../imagefolder/a2.jpg', '../imagefolder/a2.jpg'),
(6, 'otheritem', 'shoe racks', '3445', '4500', 'mago', 'nic product', '../imagefolder/a10.jpg', '../imagefolder/a10.jpg', '../imagefolder/a10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `title` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cost` int(10) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `story` varchar(255) NOT NULL,
  `stage` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `username`, `area`, `photo`, `story`, `stage`) VALUES
(17, 'subu', 'asop', '../imagefolder/a1.jpg', 'nic and good product', '');

-- --------------------------------------------------------

--
-- Table structure for table `sideboard`
--

DROP TABLE IF EXISTS `sideboard`;
CREATE TABLE IF NOT EXISTS `sideboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(20) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sideboard`
--

INSERT INTO `sideboard` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(3, 'sideboard', 'sideboard', '1700', '1400', 'mango', 'nic product', '../imagefolder/a9.jpg', '../imagefolder/a9.jpg', '../imagefolder/a9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

DROP TABLE IF EXISTS `sliderimage`;
CREATE TABLE IF NOT EXISTS `sliderimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `photo1`, `photo2`, `photo3`) VALUES
(2, '../imagefolder/a2.jpg', '../imagefolder/a1.jpg', '../imagefolder/a5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sofas`
--

DROP TABLE IF EXISTS `sofas`;
CREATE TABLE IF NOT EXISTS `sofas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `title` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(30) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sofas`
--

INSERT INTO `sofas` (`id`, `name`, `title`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(9, 'wooden sofas', 'sofas', '1800', '3456', 'mango', 'nic product', '../imagefolder/a3.jpg', '../imagefolder/a3.jpg', '../imagefolder/a3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

DROP TABLE IF EXISTS `storage`;
CREATE TABLE IF NOT EXISTS `storage` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(2, 'storage', 'box', '1900', '23456', 'mango', 'nic pro', '../imagefolder/a7.jpg', '../imagefolder/a7.jpg', '../imagefolder/a7.jpg'),
(4, 'storage', 'storage', '1902', '15000', 'mango', 'nice product and looking in very good', '../imagefolder/h5.jpg', '../imagefolder/h5.jpg', '../imagefolder/h5.jpg'),
(3, 'storage', 'box', '1901', '12000', 'mango', 'nic product', '../imagefolder/a7.jpg', '../imagefolder/a7.jpg', '../imagefolder/a7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `lastname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1407 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `title`, `name`, `cost`, `product_id`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(1406, 'table1', 'table', '1000', '2100', 'mango', 'nic product', '../imagefolder/a5.jpg', '../imagefolder/a5.jpg', '../imagefolder/a5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wardrobes`
--

DROP TABLE IF EXISTS `wardrobes`;
CREATE TABLE IF NOT EXISTS `wardrobes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `wood` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wardrobes`
--

INSERT INTO `wardrobes` (`id`, `title`, `name`, `product_id`, `cost`, `wood`, `data`, `photo1`, `photo2`, `photo3`) VALUES
(2, 'wardrobes', 'almari', '2000', '23456', 'mango', 'nic product', '../imagefolder/IMG_20181221_160148.jpg', '../imagefolder/IMG_20181221_121027.jpg', '../imagefolder/IMG_20181221_160218.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
