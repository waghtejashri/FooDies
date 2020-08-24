-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 06:15 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_recipes`
--

CREATE TABLE `add_recipes` (
  `image` varchar(500) NOT NULL,
  `title` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `recipe` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_recipes`
--

INSERT INTO `add_recipes` (`image`, `title`, `name`, `recipe`) VALUES
('77.jpg', 'Baking Recipes', 'bread food', 'jhytyrtesrtyuio\r\nlkjhytdsxhj\r\n jhgf jhgfd'),
('cake.jpg', 'Baking Recipes', 'cake', 'kgytfrdd\r\njhgfds'),
('cake.jpg', 'Baking Recipes', 'cake', 'kgytfrdd\r\njhgfds'),
('carrot-cake.jpg', 'Baking Recipes', 'Carrot Cake', 'lkjwhgehjhkjksl\r\nlfkjuiyuwjhbsdmn\r\n iuytfdhgjj'),
('', 'Baking Recipes', '', 'Method\r\n1. To make the pastry, mix the flour and icing sugar together in a bowl. Rub the butter into the flour with your fingertips until it resembles fresh breadcrumbs then mix in the egg yolks. If the pastry feels too dry to form a dough, add 2 tbsp water. Roll into a ball then flatten it out into a disc and wrap the dough in cling film, then chill for at least 30 mins\r\n2. While the pastry is chilling, make the filling by simply mixing all of the ingredients together in a large jug or bowl. Roll out the pastry on a lightly floured surface to about the thickness of a Â£1 coin, then lift into a 23cm tart tin. Press down gently on the bottom and sides, then trim off any excess around the edges with a sharp knife. Prick the base of the pastry case with a fork and put it back in the fridge for 30 mins.\r\n'),
('pina-colada-tart.jpg', 'Baking Recipes', '', 'Method\r\n1. To make the pastry, mix the flour and icing sugar together in a bowl. Rub the butter into the flour with your fingertips until it resembles fresh breadcrumbs then mix in the egg yolks. If the pastry feels too dry to form a dough, add 2 tbsp water. Roll into a ball then flatten it out into a disc and wrap the dough in cling film, then chill for at least 30 mins\r\n2. While the pastry is chilling, make the filling by simply mixing all of the ingredients together in a large jug or bowl. Roll out the pastry on a lightly floured surface to about the thickness of a Â£1 coin, then lift into a 23cm tart tin. Press down gently on the bottom and sides, then trim off any excess around the edges with a sharp knife. Prick the base of the pastry case with a fork and put it back in the fridge for 30 mins.'),
('2.jpg', 'Baking Recipes', 'Spicy Cake', 'oiruygruivhj\r\n[pepoipuiyigufgvchj\r\nlfoidvuhcjbnfjhv\r\njhjgfvc'),
('1.jpg', 'Dessert', 'Pina Colada Tart Cake', 'wrjitu5trkgj\r\neprtoiuyuthgjkopr[]rtr[thjhm'),
('2dccn.png', 'Breakfast', 'Pina Colada Tart Cake', 'wldkeiwuytr dtyuiop poiuyhgfhjkl; [oiuytgf'),
('2dccn.png', 'Breakfast', 'Pina Colada Tart Cake', 'wldkeiwuytr dtyuiop poiuyhgfhjkl; [oiuytgf'),
('', 'Baking Recipes', '', ''),
('', 'Baking Recipes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image`) VALUES
('23.jpg'),
('78.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('tejuwagh@gmail.com', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('teju.wagh@spt.ac.in', '12345678'),
('teju.wagh@spt.ac.in', '12345678'),
('tejuwagh@gmail.com', '123456789'),
('sbarua7575@gmail.com', '123456789'),
('pinkuwagh123@gmail.com', 'abcd123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `con_pass` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `dob`, `email`, `password`, `con_pass`, `address`, `city`, `state`, `country`) VALUES
('tejashri wagh', '1970-01-01', 'tejuwagh@gmail.com', '', '', 'at post shivde sinner', 'maharashtra', 'nashik', 'india'),
('', '1970-01-01', '', '', '', '', '', '', ''),
('Tejal Wagh', '1999-12-08', 'teju.wagh@spt.ac.in', '', '12345678', 'at post shivde sinner', 'maharashtra', 'nashik', 'india'),
('Sujoy Barua', '2019-04-01', 'sbarua7575@gmail.com', '', '123456789', 'sion', 'maharashtra', 'mumbai', 'india'),
('Pinku Wagh', '2019-04-12', 'pinkuwagh123@gmail.com', '', 'abcd123', 'at post shivde sinner', 'maharashtra', 'nashik', 'india');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
