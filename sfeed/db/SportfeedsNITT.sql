-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2014 at 11:52 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SportfeedsNITT`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `Id` int(120) NOT NULL,
  `comment_id` int(120) NOT NULL AUTO_INCREMENT,
  `messages` varchar(1500) NOT NULL,
  `postdate` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Id`, `comment_id`, `messages`, `postdate`) VALUES
(1, 2, '<p>good to <span style="color:#FF0000;">talk to u</span></p>', '0000-00-00 00:00:00'),
(1, 4, '<p>good</p>', '0000-00-00 00:00:00'),
(1, 5, '<p><em>good day</em></p>', '0000-00-00 00:00:00'),
(1, 6, '<p>hey nice to speak to u<br></p>', '0000-00-00 00:00:00'),
(1, 10, '<p>kjhgfgdf</p>', '0000-00-00 00:00:00'),
(1, 13, '<p>good lol<br></p>', '0000-00-00 00:00:00'),
(2, 23, 'We''re setting a color, floating them to the left, setting some font values, and a healthy amount of padding. Take note of the z-index property. This is a necessity, and will be explained shortly. However, remember that, in order to adjust the z-index, we must set a positioning context, which we''ve done.\r\nBecause we''re not implementing a full reset stylesheet, let''s ensure that we zero out any default margins and padding on our ul and li, just to save any potential headaches. ', '0000-00-00 00:00:00'),
(2, 24, '<p><span style="color:#FF0000;">Football</span><br></p><p><span style="color:#FF0000;"> </span><span style="color:#A52A2A;">Various forms of football can be identified in history, often as popular peasant games. Contemporary codes of football can be traced back to the codification of these games at English public schools in the eighteenth and nineteenth </span><br></p>', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `Id` int(11) DEFAULT NULL,
  `id_member1` int(11) NOT NULL AUTO_INCREMENT,
  `membername` varchar(125) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `rollno` int(50) DEFAULT NULL,
  `dept` varchar(125) DEFAULT NULL,
  `pos` varchar(125) DEFAULT NULL,
  `file_name` varchar(300) NOT NULL,
  `post_date` datetime NOT NULL,
  UNIQUE KEY `id_member1` (`id_member1`),
  UNIQUE KEY `rollno` (`rollno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Id`, `id_member1`, `membername`, `age`, `rollno`, `dept`, `pos`, `file_name`, `post_date`) VALUES
(1, 1, 'bhavya', 18, 106113019, 'cse', 'playe', 'bgbb2.jpg', '0000-00-00 00:00:00'),
(1, 6, 'such', 20, 106113084, 'Ic', 'player', '161495.jpg', '0000-00-00 00:00:00'),
(1, 8, 'nandhi', 19, 106113063, 'cse', 'playe', '130603214439-football-neymar-barcelona-story-top.jpg', '0000-00-00 00:00:00'),
(1, 9, 'arthi', 19, 456789, 'ic', 'player', '130603214439-football-neymar-barcelona-story-top.jpg', '0000-00-00 00:00:00'),
(1, 10, 'keekee', 19, 106113047, 'cse', 'player2', '130603214439-football-neymar-barcelona-story-top.jpg', '0000-00-00 00:00:00'),
(1, 11, 'nandhini', 19, 106113098, 'cse', 'basketbalo', '470294651-463453.jpg', '0000-00-00 00:00:00'),
(1, 14, 'ananya', 20, 106113010, 'cse', 'ST', 'bgbb2.jpg', '0000-00-00 00:00:00'),
(2, 15, 'sowmya', 20, 106113099, 'cse', 'ST', 'bgbb.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `admin_id` int(200) NOT NULL,
  `Id` int(200) NOT NULL AUTO_INCREMENT,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`admin_id`, `Id`, `message`) VALUES
(0, 1, '<p>Despite many prior suggested references, the first definite mention of the game is found in a 1598 court case concerning an ownership dispute over a plot of common land in&nbsp;<a data-cke-saved-href="http://en.wikipedia.org/wiki/Guildford" href="http://en.wikipedia.org/wiki/Guildford" title="Gui'),
(0, 2, 'good to play'),
(0, 3, '<p>hey good day</p>'),
(0, 4, '<p>good to <em>see u</em></p>');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `Id` int(11) NOT NULL,
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` text,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  PRIMARY KEY (`postID`),
  UNIQUE KEY `postID` (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id`, `postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
(1, 16, 'cirket', 'WONNN', '<br>', '2014-10-17 01:49:11'),
(1, 17, 'circket', 'won in trichy', 'hurrry', '2014-09-17 08:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `Teams`
--

CREATE TABLE IF NOT EXISTS `Teams` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Team` varchar(30) NOT NULL,
  `AccessKey` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Teams`
--

INSERT INTO `Teams` (`Id`, `Team`, `AccessKey`) VALUES
(1, 'Basket Ball', '1234basc'),
(2, 'football', '456foot');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `Id` int(11) NOT NULL,
  `pic_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(300) NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`pic_id`),
  UNIQUE KEY `pic_id` (`pic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`Id`, `pic_id`, `file_name`, `post_date`) VALUES
(1, 30, 'nittbb.jpg', '2014-10-08 19:32:47'),
(1, 33, 'basketball_youtube_one_channel_thumb.jpg', '2014-10-18 22:50:31'),
(1, 34, 'bgbb.jpg', '2014-10-18 22:50:39'),
(1, 35, 'bgbb2.jpg', '2014-10-18 22:50:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
