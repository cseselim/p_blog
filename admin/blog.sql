-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 04:01 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpage`
--

CREATE TABLE `addpage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpage`
--

INSERT INTO `addpage` (`id`, `name`, `body`) VALUES
(8, 'About us', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut libero ut mi sollicitudin ullamcorper in vel nisl. Proin consequat lacinia nisl, sit amet tempus leo vehicula nec. Nam sed facilisis justo, mattis sagittis eros. Morbi sit amet imperdiet nisi. Suspendisse consequat nunc a leo dictum ultrices. Aenean eu scelerisque enim. Integer a pharetra arcu, sed egestas mauris. Aenean quis congue velit. Curabitur eu libero id diam dignissim dictum.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut libero ut mi sollicitudin ullamcorper in vel nisl. Proin consequat lacinia nisl, sit amet tempus leo vehicula nec. Nam sed facilisis justo, mattis sagittis eros. Morbi sit amet imperdiet nisi. Suspendisse consequat nunc a leo dictum ultrices. Aenean eu scelerisque enim. Integer a pharetra arcu, sed egestas mauris. Aenean quis congue velit. Curabitur eu libero id diam dignissim dictum.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut libero ut mi sollicitudin ullamcorper in vel nisl. Proin consequat lacinia nisl, sit amet tempus leo vehicula nec. Nam sed facilisis justo, mattis sagittis eros. Morbi sit amet imperdiet nisi. Suspendisse consequat nunc a leo dictum ultrices. Aenean eu scelerisque enim. Integer a pharetra arcu, sed egestas mauris. Aenean quis congue velit. Curabitur eu libero id diam dignissim dictum.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut libero ut mi sollicitudin ullamcorper in vel nisl. Proin consequat lacinia nisl, sit amet tempus leo vehicula nec. Nam sed facilisis justo, mattis sagittis eros. Morbi sit amet imperdiet nisi. Suspendisse consequat nunc a leo dictum ultrices. Aenean eu scelerisque enim. Integer a pharetra arcu, sed egestas mauris. Aenean quis congue velit. Curabitur eu libero id diam dignissim dictum.</span></p>\r\n<p>;</p>'),
(10, 'Privecy policy', '<p>Here are the important rules and regulations which outlines our privacy policy:</p>\r\n<ul>\r\n<li>We never collect any personal information but if there is a need to do the same, we will inform the visitor about the same and will identify the clear purpose behind the same.</li>\r\n<li>If there is any purpose for which we are collecting the personal information, we will make sure that purpose is only related to analysis of traffic or important facts.</li>\r\n<li>We will never share your personal information with anyone under any condition. In fact we will always protect your personal information by deploying certain security standards and essential safeguards.</li>\r\n<li>We are fully committed to conduct our business by ethical means and in accordance to the principles set by leading search engines.</li>\r\n</ul>\r\n<p>At certain times users may be asked for their email addresses, name or other information. You have the full right to deny us with the information.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` int(11) NOT NULL,
  `copy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`id`, `copy`) VALUES
(1, '&amp;copyright selim khan.me');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagory`
--

CREATE TABLE `tbl_catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_catagory`
--

INSERT INTO `tbl_catagory` (`id`, `name`) VALUES
(1, 'JAVA'),
(2, 'PHP'),
(3, 'HTML'),
(4, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `date`) VALUES
(11, 'Shahin khan', 'Omor Faruk', 'Shainkhan989@gmail.com', 'afdafsdasdf', 1, '2017-01-07 09:36:14'),
(12, 'Selim Khan', 'Omar faruc', 'selimkhan989@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante nec tempus rutrum. In ultrices lorem quis ligula faucibus tempus. In vitae libero ut dui sodales laoreet in at diam. Mauris tortor elit, gravida ac sem id, eleifend facilisis magna. Nulla facilisi. Quisque sed odio sapien. Proin fringilla lectus purus, sit amet molestie magna porta nec. Sed eget euismod tellus. Nunc convallis rutrum hendrerit. Proin consequat mi ex, mollis mollis erat posuere sit amet. Aliquam egestas ipsum et varius pellentesque. In augue leo, pretium at pharetra in, blandit in turpis. Aenean egestas diam odio, sit amet tincidunt augue finibus sedLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante nec tempus rutrum. In ultrices lorem quis ligula faucibus tempus. In vitae libero ut dui sodales laoreet in at diam. Mauris tortor elit, gravida ac sem id, eleifend facilisis magna. Nulla facilisi. Quisque sed odio sapien. Proin fringilla lectus purus, sit amet molestie magna porta nec. Sed eget euismod tellus. Nunc convallis rutrum hendrerit. Proin consequat mi ex, mollis mollis erat posuere sit amet. Aliquam egestas ipsum et varius pellentesque. In augue leo, pretium at pharetra in, blandit in turpis. Aenean egestas diam odio, sit amet tincidunt augue finibus sedLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante nec tempus rutrum. In ultrices lorem quis ligula faucibus tempus. In vitae libero ut dui sodales laoreet in at diam. Mauris tortor elit, gravida ac sem id, eleifend facilisis magna. Nulla facilisi. Quisque sed odio sapien. Proin fringilla lectus purus, sit amet molestie magna porta nec. Sed eget euismod tellus. Nunc convallis rutrum hendrerit. Proin consequat mi ex, mollis mollis erat posuere sit amet. Aliquam egestas ipsum et varius pellentesque. In augue leo, pretium at pharetra in, blandit in turpis. Aenean egestas diam odio, sit amet tincidunt augue finibus sed', 1, '2017-01-07 09:58:20'),
(13, 'Shahin khan', 'sumon', 'Shainkhan989@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante nec tempus rutrum. In ultrices lorem quis ligula faucibus tempus. In vitae libero ut dui sodales laoreet in at diam. Mauris tortor elit, gravida ac sem id, eleifend facilisis magna. Nulla facilisi. Quisque sed odio sapien. Proin fringilla lectus purus, sit amet molestie magna porta nec. Sed eget euismod tellus. Nunc convallis rutrum hendrerit. Proin consequat mi ex, mollis mollis erat posuere sit amet. Aliquam egestas ipsum et varius pellentesque. In augue leo, pretium at pharetra in, blandit in turpis. Aenean egestas diam odio, sit amet tincidunt augue finibus sedLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante nec tempus rutrum. In ultrices lorem quis ligula faucibus tempus. In vitae libero ut dui sodales laoreet in at diam. Mauris tortor elit, gravida ac sem id, eleifend facilisis magna. Nulla facilisi. Quisque sed odio sapien. Proin fringilla lectus purus, sit amet molestie magna porta nec. Sed eget euismod tellus. Nunc convallis rutrum hendrerit. Proin consequat mi ex, mollis mollis erat posuere sit amet. Aliquam egestas ipsum et varius pellentesque. In augue leo, pretium at pharetra in, blandit in turpis. Aenean egestas diam odio, sit amet tincidunt augue finibus sed', 1, '2017-01-07 09:58:58'),
(16, 'Saiful Islam', 'Tuhin', 'tuhin@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante nec tempus rutrum. In ultrices lorem quis ligula faucibus tempus. In vitae libero ut dui sodales laoreet in at diam. Mauris tortor elit, gravida ac sem id, eleifend facilisis magna. Nulla facilisi. Quisque sed odio sapien. Proin fringilla lectus purus, sit amet molestie magna porta nec. Sed eget euismod tellus. Nunc convallis rutrum hendrerit. Proin consequat mi ex, mollis mollis erat posuere sit amet. Aliquam egestas ipsum et varius pellentesque. In augue leo, pretium at pharetra in, blandit in turpis. Aenean egestas diam odio, sit amet tincidunt augue finibus sed', 0, '2017-01-07 10:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(19, 0, 'HTML post will  be here', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span></p>', 'upload/2bcd0da71b.jpg', 'Limon ', 'php,html,css', '2017-01-01 17:01:32', 0),
(20, 1, 'Java post ', '<p><span>Lorem ipsum dolor sit amet, <span style="background-color: #888888;">consectetu</span>r adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span></p>\r\n<p>"</p>\r\n<p>"</p>\r\n<p>"</p>', 'upload/0b8869590d.jpg', 'Shaiful islam', 'java', '2017-04-01 09:36:54', 20),
(21, 1, 'Java post', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span></p>\r\n<p>"</p>', 'upload/e8973c4a2c.png', 'Hanif khan', 'JAVA', '2017-03-31 13:24:00', 0),
(22, 3, 'HTML ', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span></p>\r\n<p>"</p>', 'upload/2ea2ecf404.png', 'Tuhin khan', 'HTML', '2017-03-31 13:27:38', 0),
(23, 3, 'HTML', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span></p>\r\n<p>"</p>\r\n<p>"</p>\r\n<p>"</p>\r\n<p>"</p>', 'upload/e1e269e1c0.png', 'Mosiur Rhaman', 'html', '2017-04-01 09:35:11', 20),
(24, 4, 'Css post will be here', '<p><span>css Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit vitae nunc at consectetur. Sed quis nunc mi. Ut consectetur facilisis ex ac sollicitudin. Nullam sit amet mauris quis odio imperdiet mollis. Vestibulum ante orci, dictum vel sem sit amet, blandit porttitor metus. Vestibulum viverra euismod euismod. Integer egestas nibh tempus odio luctus feugiat. Duis placerat erat vitae arcu egestas, in condimentum sapien consectetur. Duis finibus ante sit amet convallis sollicitudin. Nulla non leo lacinia, suscipit dui vel, gravida ligula. Nulla sagittis sed nulla sit amet placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi lobortis lectus vel mi lacinia, aliquam cursus eros hendrerit. In hac habitasse platea dictumst. Proin sollicitudin a diam non cursus. Quisque dui felis, dapibus eu tellus ut, vestibulum gravida erat.</span></p>\r\n<p>"</p>', 'upload/b28fa4070e.png', 'Mosiru Rhaman', 'css', '2017-01-02 01:43:47', 0),
(25, 2, 'php', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut libero ut mi sollicitudin ullamcorper in vel nisl. Proin consequat lacinia nisl, sit amet tempus leo vehicula nec. Nam sed facilisis justo, mattis sagittis eros. Morbi sit amet imperdiet nisi. Suspendisse consequat nunc a leo dictum ultrices. Aenean eu scelerisque enim. Integer a pharetra arcu, sed egestas mauris. Aenean quis congue velit. Curabitur eu libero id diam dignissim dictum.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut libero ut mi sollicitudin ullamcorper in vel nisl. Proin consequat lacinia nisl, sit amet tempus leo vehicula nec. Nam sed facilisis justo, mattis sagittis eros. Morbi sit amet imperdiet nisi. Suspendisse consequat nunc a leo dictum ultrices. Aenean eu scelerisque enim. Integer a pharetra arcu, sed egestas mauris. Aenean quis congue velit. Curabitur eu libero id diam dignissim dictum.</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</span></p>', 'upload/ce48515f15.png', 'selim', 'php', '2017-03-31 13:29:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sosial`
--

CREATE TABLE `tbl_sosial` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sosial`
--

INSERT INTO `tbl_sosial` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'http://facebook.com', 'http://twiter.com', 'http://linkedin.com', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme`
--

CREATE TABLE `tbl_theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_theme`
--

INSERT INTO `tbl_theme` (`id`, `theme`) VALUES
(1, 'green');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(19, 'Md. selim Khan', 'selim', '827ccb0eea8a706c4c34a16891f84e7b', 'cseselimreza@gmail.com', '&lt;p&gt;My name is selim khan. I am a webdeveloper.&lt;/p&gt;', 1),
(20, '', 'shahin', '827ccb0eea8a706c4c34a16891f84e7b', '', '&lt;p&gt;&quot;&lt;/p&gt;', 2),
(21, '', 'moshiur', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Codding Adda', 'Read more learn more', 'upload/logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpage`
--
ALTER TABLE `addpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sosial`
--
ALTER TABLE `tbl_sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpage`
--
ALTER TABLE `addpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_sosial`
--
ALTER TABLE `tbl_sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
