-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2014 at 06:19 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twenty8_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cover_boys`
--

CREATE TABLE IF NOT EXISTS `cover_boys` (
`id` int(11) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cover_boys`
--

INSERT INTO `cover_boys` (`id`, `date_upload`, `name`, `image`) VALUES
(1, '10/07/2014 04:07:19', '1412690839_625491_514697618594000_687114550_n.jpg', 0x313332303039),
(2, '10/18/2014 03:46:27', '1413639987_item4.jpg', 0x3537383235);

-- --------------------------------------------------------

--
-- Table structure for table `cover_cap`
--

CREATE TABLE IF NOT EXISTS `cover_cap` (
`id` int(11) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cover_cap`
--

INSERT INTO `cover_cap` (`id`, `date_upload`, `name`, `image`) VALUES
(1, '10/18/2014 04:08:00', '1413641280_cap1.jpg', 0x3533393034),
(2, '10/18/2014 04:08:05', '1413641285_cap2.jpg', 0x3438333837);

-- --------------------------------------------------------

--
-- Table structure for table `cover_girls`
--

CREATE TABLE IF NOT EXISTS `cover_girls` (
`id` int(11) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cover_girls`
--

INSERT INTO `cover_girls` (`id`, `date_upload`, `name`, `image`) VALUES
(1, '10/07/2014 05:45:02', '1412696702_400728_543671185696643_832522617_n.jpg', 0x313038373536),
(2, '10/18/2014 04:07:00', '1413641220_2.jpg', 0x3334313938);

-- --------------------------------------------------------

--
-- Table structure for table `cover_item`
--

CREATE TABLE IF NOT EXISTS `cover_item` (
`id` int(11) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name` varchar(70) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cover_item`
--

INSERT INTO `cover_item` (`id`, `date_upload`, `name`, `image`) VALUES
(4, '10/18/2014 04:03:41', '1413641021_item1.jpg', 0x3435343437),
(5, '10/18/2014 04:04:52', '1413641092_item2.jpg', 0x3434363132);

-- --------------------------------------------------------

--
-- Table structure for table `cover_padala`
--

CREATE TABLE IF NOT EXISTS `cover_padala` (
`id` int(11) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `cover_padala`
--

INSERT INTO `cover_padala` (`id`, `date_upload`, `name`, `image`) VALUES
(33, '10/18/2014 01:22:53', '1413631373_1.jpg', 0x3239323438),
(34, '10/18/2014 01:22:56', '1413631376_2.jpg', 0x3337363332),
(35, '10/18/2014 01:22:59', '1413631379_3.jpg', 0x3234393534),
(36, '10/18/2014 01:23:02', '1413631382_5.jpg', 0x3238383239),
(37, '10/18/2014 01:23:05', '1413631385_6.jpg', 0x3331393330);

-- --------------------------------------------------------

--
-- Table structure for table `cover_shoes`
--

CREATE TABLE IF NOT EXISTS `cover_shoes` (
`id` int(11) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cover_shoes`
--

INSERT INTO `cover_shoes` (`id`, `date_upload`, `name`, `image`) VALUES
(1, '10/18/2014 04:06:56', '1413641216_1.jpg', 0x3237363033),
(2, '10/18/2014 04:07:28', '1413641248_3.jpg', 0x3332363737);

-- --------------------------------------------------------

--
-- Table structure for table `cover_upload`
--

CREATE TABLE IF NOT EXISTS `cover_upload` (
`id` int(11) NOT NULL,
  `date_upload` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cover_upload`
--

INSERT INTO `cover_upload` (`id`, `date_upload`, `name`, `image`) VALUES
(3, '09/20/2014 07:26:36', '1411190796_TwentyEight.png', 0x3236363431),
(4, '09/28/2014 07:39:25', '1411882765_10668112_779792115417881_1783490097_o.jpg', 0x3336373131),
(5, '10/01/2014 11:03:20', '1412154200_Chrysanthemum.jpg', 0x383739333934),
(6, '10/01/2014 11:03:47', '1412154227_1411882765_10668112_779792115417881_1783490097_o.jpg', 0x3336373131),
(7, '10/07/2014 05:48:33', '1412696913_1411190796_TwentyEight.png', 0x3236363431);

-- --------------------------------------------------------

--
-- Table structure for table `table_accessories`
--

CREATE TABLE IF NOT EXISTS `table_accessories` (
`id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(60) NOT NULL,
  `image_upload` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `table_accessories`
--

INSERT INTO `table_accessories` (`id`, `category_name`, `product_name`, `date_upload`, `name_upload`, `image_upload`) VALUES
(2, 'Accessories', 'Product', '10/15/2014 01:35:19', '1413372919_14.jpg', 0x313736303132),
(3, 'Accessories', 'sadsad', '10/18/2014 05:00:45', '1413601245_1413562682_pic1.jpg', 0x38373631),
(4, 'Accessories', 'asddf', '10/18/2014 05:00:57', '1413601257_1413562728_pic3.jpg', 0x3630373138),
(5, 'Accessories', 'g', '10/18/2014 05:01:14', '1413601274_1413562748_pic5.jpg', 0x38313236);

-- --------------------------------------------------------

--
-- Table structure for table `table_bags`
--

CREATE TABLE IF NOT EXISTS `table_bags` (
`id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(70) NOT NULL,
  `image_upload` longblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `table_bags`
--

INSERT INTO `table_bags` (`id`, `category_name`, `product_name`, `date_upload`, `name_upload`, `image_upload`) VALUES
(6, 'Bags', 'asdsad', '10/13/2014 01:17:09', '1413199029_10247346_570538076425357_2430842577389813930_n.jpg', 0x3336353836);

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE IF NOT EXISTS `table_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`category_id`, `category_name`) VALUES
(1, 'Accessories'),
(2, 'Bags'),
(3, 'Jackets'),
(4, 'Shirts'),
(5, 'Shoes'),
(6, 'Shorts'),
(7, 'Slippers');

-- --------------------------------------------------------

--
-- Table structure for table `table_jackets`
--

CREATE TABLE IF NOT EXISTS `table_jackets` (
`id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(30) NOT NULL,
  `image_upload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_message`
--

CREATE TABLE IF NOT EXISTS `table_message` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL,
  `sendto` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `table_message`
--

INSERT INTO `table_message` (`id`, `username`, `date`, `time`, `message`, `sendto`) VALUES
(14, 'admin', 'Friday, October 17, 2014', '12:53:45pm', ' dsfsdfsdfd', 'jung'),
(15, 'admin', 'Friday, October 17, 2014', '01:06:36pm', ' fdsfdsfdsfdf', 'benidict'),
(19, 'admin', 'Friday, October 17, 2014', '01:34:08pm', ' ', 'jung'),
(21, 'admin', 'Friday, October 17, 2014', '01:38:17pm', ' ', 'jung'),
(23, 'jung', 'Friday, October 17, 2014', '03:49:38pm', ' Hi Admin!', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `table_padala`
--

CREATE TABLE IF NOT EXISTS `table_padala` (
`padala_id` int(11) NOT NULL,
  `padala_name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `table_padala`
--

INSERT INTO `table_padala` (`padala_id`, `padala_name`) VALUES
(1, 'M.Lhuiller'),
(2, 'LBC'),
(3, 'Western Union'),
(4, 'Cebuana'),
(5, 'Palawan Pawnshop');

-- --------------------------------------------------------

--
-- Table structure for table `table_shipping`
--

CREATE TABLE IF NOT EXISTS `table_shipping` (
`shipping_id` int(11) NOT NULL,
  `buyer_username` varchar(30) NOT NULL,
  `padala_name` varchar(30) NOT NULL,
  `complete_name` varchar(30) NOT NULL,
  `complete_address` varchar(30) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `item_size` varchar(60) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(60) NOT NULL,
  `image_upload` longblob NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `table_shipping`
--

INSERT INTO `table_shipping` (`shipping_id`, `buyer_username`, `padala_name`, `complete_name`, `complete_address`, `contact_number`, `item_size`, `date_upload`, `name_upload`, `image_upload`, `Status`) VALUES
(30, 'jung', 'Western Union', 'Benidict', 'Tanza,Cavite', '09', 'Larg', '10/16/2014 04:29:47', '1413469787_images.jpg', 0x38373631, 'Order'),
(32, 'jung', 'Express Pera Padala', 'adxad', 'asdsad', '3423', 'asd', '10/17/2014 03:54:27', '1413554067_1779106_654031651361367_3761512698219129189_n.jpg', 0x3132303437, 'Order'),
(33, 'jung', 'Cebuana', 'asd', 'asd', '5435', 'dsa', '10/17/2014 03:54:45', '1413554085_14.jpg', 0x313736303132, 'Order'),
(34, 'benidict', 'Western Union', 'asd', 'asd', '3423', 'ads', '10/17/2014 03:55:47', '1413554147_Desert.jpg', 0x383435393431, 'Order');

-- --------------------------------------------------------

--
-- Table structure for table `table_shirts`
--

CREATE TABLE IF NOT EXISTS `table_shirts` (
`id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(60) NOT NULL,
  `image_upload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_shoes`
--

CREATE TABLE IF NOT EXISTS `table_shoes` (
`id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(60) NOT NULL,
  `image_upload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_shorts`
--

CREATE TABLE IF NOT EXISTS `table_shorts` (
`id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(60) NOT NULL,
  `image_upload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_slippers`
--

CREATE TABLE IF NOT EXISTS `table_slippers` (
`id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `date_upload` varchar(30) NOT NULL,
  `name_upload` varchar(60) NOT NULL,
  `image_upload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `verify` int(11) NOT NULL,
  `user_firstname` varchar(30) NOT NULL,
  `user_lastname` varchar(30) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`verify`, `user_firstname`, `user_lastname`, `user_username`, `user_password`) VALUES
(1, '', '', 'admintwenty8', '762930825dd8b0cae64e4677fa7774e3'),
(0, 'ben10', '12', 'benidict', '7694f4a66316e53c8cdd9d9954bd611d'),
(0, 'benidict', 'dulce', 'jung', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cover_boys`
--
ALTER TABLE `cover_boys`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_cap`
--
ALTER TABLE `cover_cap`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_girls`
--
ALTER TABLE `cover_girls`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_item`
--
ALTER TABLE `cover_item`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_padala`
--
ALTER TABLE `cover_padala`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_shoes`
--
ALTER TABLE `cover_shoes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_upload`
--
ALTER TABLE `cover_upload`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_accessories`
--
ALTER TABLE `table_accessories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_bags`
--
ALTER TABLE `table_bags`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
 ADD PRIMARY KEY (`category_name`);

--
-- Indexes for table `table_jackets`
--
ALTER TABLE `table_jackets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_message`
--
ALTER TABLE `table_message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_padala`
--
ALTER TABLE `table_padala`
 ADD PRIMARY KEY (`padala_id`);

--
-- Indexes for table `table_shipping`
--
ALTER TABLE `table_shipping`
 ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `table_shirts`
--
ALTER TABLE `table_shirts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_shoes`
--
ALTER TABLE `table_shoes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_shorts`
--
ALTER TABLE `table_shorts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_slippers`
--
ALTER TABLE `table_slippers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
 ADD PRIMARY KEY (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cover_boys`
--
ALTER TABLE `cover_boys`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cover_cap`
--
ALTER TABLE `cover_cap`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cover_girls`
--
ALTER TABLE `cover_girls`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cover_item`
--
ALTER TABLE `cover_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cover_padala`
--
ALTER TABLE `cover_padala`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `cover_shoes`
--
ALTER TABLE `cover_shoes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cover_upload`
--
ALTER TABLE `cover_upload`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table_accessories`
--
ALTER TABLE `table_accessories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_bags`
--
ALTER TABLE `table_bags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `table_jackets`
--
ALTER TABLE `table_jackets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_message`
--
ALTER TABLE `table_message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `table_padala`
--
ALTER TABLE `table_padala`
MODIFY `padala_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_shipping`
--
ALTER TABLE `table_shipping`
MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `table_shirts`
--
ALTER TABLE `table_shirts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_shoes`
--
ALTER TABLE `table_shoes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_shorts`
--
ALTER TABLE `table_shorts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_slippers`
--
ALTER TABLE `table_slippers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
