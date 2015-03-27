-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2014 at 11:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_concert`
--

CREATE TABLE IF NOT EXISTS `add_concert` (
  `concert_id` varchar(20) NOT NULL,
  `concert_name` varchar(20) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `music_type` varchar(20) NOT NULL,
  `concert_date` datetime NOT NULL,
  `place` varchar(20) NOT NULL,
  `concert_city` varchar(20) NOT NULL,
  `duration` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_tickets` int(10) NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_concert`
--

INSERT INTO `add_concert` (`concert_id`, `concert_name`, `a_name`, `u_name`, `music_type`, `concert_date`, `place`, `concert_city`, `duration`, `price`, `total_tickets`, `post_date`) VALUES
('5', 'Shankar Concert', 'SMahadevan', 'navinm', 'Dance Music', '2000-11-12 22:00:00', 'Manhattan', 'New York', 120, 250, 1000, '2011-11-11 22:00:00');

--
-- Triggers `add_concert`
--
DROP TRIGGER IF EXISTS `t1`;
DELIMITER //
CREATE TRIGGER `t1` BEFORE INSERT ON `add_concert`
 FOR EACH ROW begin

declare msg varchar(255); 
declare `cur_dt` datetime; 
set `cur_dt` = now() ;

select reg_date from user_reg where u_name= new.u_name into @a;

if(timestampdiff(year,@a,`cur_dt`)>2) then

INSERT into concert(concert_id, concert_name, a_name, music_type, concert_date, place,concert_city, duration, price, total_tickets, post_date) values(new.concert_id,new.concert_name, new.a_name, new.music_type, new.concert_date, new.place,new.concert_city, new.duration, new.price, new.total_tickets, new.post_date);

else

set msg = concat('MyTriggerError: Your Trust Score is low cant add concert:', cast(new.concert_id as char));
signal sqlstate '45000' set message_text = msg;

end if; 
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `artist_data`
--

CREATE TABLE IF NOT EXISTS `artist_data` (
  `a_name` varchar(20) NOT NULL,
  `a_password` varchar(20) NOT NULL,
  `a_city` varchar(20) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `a_dob` date NOT NULL,
  `a_fname` varchar(20) NOT NULL,
  `a_lname` varchar(20) NOT NULL,
  `hyperlink` varchar(40) NOT NULL,
  `registry_date` datetime DEFAULT NULL,
  PRIMARY KEY (`a_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_data`
--

INSERT INTO `artist_data` (`a_name`, `a_password`, `a_city`, `a_email`, `a_dob`, `a_fname`, `a_lname`, `hyperlink`, `registry_date`) VALUES
('A.Rehman', 'rehman', 'Mumbai', 'rehman@gmail.com', '1989-10-02', 'A R', 'Rehman', 'https://www.rehman.com', '2014-11-09 18:00:01'),
('HSingh', 'honey', 'Chicago', 'honeys@gmail.com', '1975-10-02', 'Honey', 'Singh', 'https://www.honeysingh.com', '2010-01-09 16:00:01'),
('Miley_cyrus', 'miley', 'Los Angeles', 'miley@gmail.com', '1995-10-02', 'Miley', 'Cyrus', 'https://www.miley.com', '2011-11-09 18:00:01'),
('SMahadevan', 'shankar', 'New York', 'shankar@gmail.com', '1990-10-02', 'Shankar', 'Mahadevan', 'https://www.smahadevan.com', '2011-11-09 18:00:01'),
('Taylor_swift', 'taylor', 'New York', 'shankar@gmail.com', '1990-10-02', 'Shankar', 'Mahadevan', 'https://www.smahadevan.com', '2011-11-09 18:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `music_type` varchar(20) NOT NULL,
  `sub_type` varchar(20) NOT NULL,
  PRIMARY KEY (`music_type`,`sub_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`music_type`, `sub_type`) VALUES
('Dance Music', 'Tango'),
('Opera', 'Operetta'),
('Popular Music', 'Hip Hop'),
('Popular Music', 'Jazz');

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `concert_id` varchar(20) NOT NULL,
  `concert_name` varchar(20) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `music_type` varchar(20) NOT NULL,
  `concert_date` datetime NOT NULL,
  `place` varchar(20) NOT NULL,
  `concert_city` varchar(20) NOT NULL,
  `duration` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_tickets` int(10) NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`concert_id`, `concert_name`, `a_name`, `music_type`, `concert_date`, `place`, `concert_city`, `duration`, `price`, `total_tickets`, `post_date`) VALUES
('1', 'Shankar Concert', 'SMahadevan', 'Popular Music', '2019-10-30 16:00:00', 'Manhattan', 'New York', 60, 100, 995, '2014-11-23 18:00:00'),
('2', 'Honey Singh Live', 'HSingh', 'Opera', '2014-11-29 15:00:00', 'Staples Center', 'Los Angeles', 120, 250, 500, '2013-12-29 15:00:00'),
('3', 'Shankar Concert', 'SMahadevan', 'Dance Music', '2000-11-12 22:00:00', 'Manhattan', 'New York', 120, 250, 1000, '2011-11-11 22:00:00'),
('5', 'Shankar Concert', 'SMahadevan', 'Dance Music', '2000-11-12 22:00:00', 'Manhattan', 'New York', 120, 250, 950, '2011-11-11 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `concert_review`
--

CREATE TABLE IF NOT EXISTS `concert_review` (
  `concert_id` varchar(20) NOT NULL,
  `concert_name` varchar(20) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `review` varchar(60) NOT NULL,
  `rate` int(10) NOT NULL,
  `music_type` varchar(20) NOT NULL,
  PRIMARY KEY (`concert_id`,`u_name`),
  KEY `u_name` (`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert_review`
--

INSERT INTO `concert_review` (`concert_id`, `concert_name`, `u_name`, `review`, `rate`, `music_type`) VALUES
('1', 'Shankar Concert', 'navinm', 'Very Bad, will not recommend to a friend', 2, 'Popular Music'),
('1', 'Honey Singh Live', 'Visheshjp', 'Had a great time, loved it', 10, 'Opera'),
('2', 'Shankar Concert', 'navinm', 'Boring, poor sound! Will not recommend', 2, 'Popular Music'),
('4', 'Honey Singh Live', 'Visheshjp', 'Very good experience', 10, 'Opera'),
('5', 'Shankar Concert', 'navinm', 'Very Bad, will not recommend to a friend', 2, 'Popular Music'),
('5', 'Honey Singh Live', 'Visheshjp', 'Very good experience', 10, 'Opera');

-- --------------------------------------------------------

--
-- Table structure for table `concert_venue`
--

CREATE TABLE IF NOT EXISTS `concert_venue` (
  `v_id` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `concert_city` varchar(20) NOT NULL,
  `link` varchar(40) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert_venue`
--

INSERT INTO `concert_venue` (`v_id`, `place`, `concert_city`, `link`) VALUES
('V001', 'Manhattan', 'New York', 'https://www.mymanhattan.com'),
('V002', 'Staples Center', 'Los Angeles', 'https://www.staples.com'),
('V003', 'Sears Tower', 'Chicago', 'https://www.sears.com');

-- --------------------------------------------------------

--
-- Table structure for table `fan_of`
--

CREATE TABLE IF NOT EXISTS `fan_of` (
  `u_name` varchar(20) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  PRIMARY KEY (`u_name`,`a_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fan_of`
--

INSERT INTO `fan_of` (`u_name`, `a_name`) VALUES
('Gaurav', ''),
('Gaurav', 'HSingh'),
('Gaurav', 'Miley_Cyrus'),
('jayesh', 'Miley_cyrus'),
('love', 'Miley_cyrus'),
('navinm', 'HSingh'),
('Rajesh', 'A.Rehman'),
('Visheshjp', 'SMahadevan');

-- --------------------------------------------------------

--
-- Table structure for table `follows_artist`
--

CREATE TABLE IF NOT EXISTS `follows_artist` (
  `follower` varchar(20) NOT NULL,
  `following` varchar(20) NOT NULL,
  PRIMARY KEY (`following`,`follower`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follows_artist`
--

INSERT INTO `follows_artist` (`follower`, `following`) VALUES
('love', 'bharat'),
('raj', 'jayesh'),
('Rajesh', 'navinm'),
('A.rehman', 'neha'),
('Gaurav', 'neha'),
('jayesh', 'neha'),
('Gaurav', 'Rahul'),
('Gaurav', 'Visheshjp'),
('Rahul', 'Visheshjp');

-- --------------------------------------------------------

--
-- Table structure for table `is_going`
--

CREATE TABLE IF NOT EXISTS `is_going` (
  `u_name` varchar(20) NOT NULL,
  `concert_id` varchar(20) NOT NULL,
  `is_going` tinyint(1) NOT NULL,
  PRIMARY KEY (`u_name`,`concert_id`),
  KEY `concert_id` (`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_going`
--

INSERT INTO `is_going` (`u_name`, `concert_id`, `is_going`) VALUES
('Gaurav', '1', 1),
('navinm', '1', 0),
('navinm', '5', 1),
('Rahul', '1', 1),
('Rajesh', '2', 1),
('Visheshjp', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `u_name` varchar(20) NOT NULL,
  `music_type` varchar(20) NOT NULL,
  PRIMARY KEY (`u_name`,`music_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`u_name`, `music_type`) VALUES
('Gaurav', 'Country'),
('Gaurav', 'Jazz'),
('Gaurav', 'Opera'),
('Gaurav', 'pop'),
('jayesh', 'jazz'),
('navinm', 'Popular Music'),
('Rajesh', 'Dance Music'),
('Visheshjp', 'Opera');

-- --------------------------------------------------------

--
-- Table structure for table `list_of_artist`
--

CREATE TABLE IF NOT EXISTS `list_of_artist` (
  `a_name` varchar(20) NOT NULL,
  `music_type` varchar(20) NOT NULL,
  PRIMARY KEY (`a_name`,`music_type`),
  KEY `music_type` (`music_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_artist`
--

INSERT INTO `list_of_artist` (`a_name`, `music_type`) VALUES
('A.Rehman', 'Dance Music'),
('HSingh', 'Opera');

-- --------------------------------------------------------

--
-- Table structure for table `list_of_user`
--

CREATE TABLE IF NOT EXISTS `list_of_user` (
  `u_name` varchar(20) NOT NULL,
  `concert_id` varchar(20) NOT NULL,
  `concert_date` datetime NOT NULL,
  PRIMARY KEY (`u_name`,`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_user`
--

INSERT INTO `list_of_user` (`u_name`, `concert_id`, `concert_date`) VALUES
('Gaurav', '1', '2019-10-30 16:00:00'),
('Gaurav', '2', '2014-11-29 15:00:00'),
('Gaurav', '3', '2000-11-12 22:00:00'),
('Gaurav', '5', '2000-11-12 22:00:00'),
('navinm', '2', '2015-12-29 15:00:00'),
('Visheshjp', '1', '2019-10-30 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `u_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `reg_date` datetime NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  PRIMARY KEY (`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`u_name`, `dob`, `email`, `u_pwd`, `city`, `reg_date`, `first_name`, `last_name`) VALUES
('aniket', '1991-02-12', 'aniket@gmail.com', 'aniket', 'mumbai', '2014-12-05 15:35:33', 'aniket', 'bezalwar'),
('bharat', '2014-12-15', 'bharat@gmail.com', '8/20/1991', 'mumbai', '2014-12-05 12:15:30', 'Bharat', 'patel'),
('Gaurav', '2010-08-05', 'Gaurav@gmail.com', 'Gaurav_Db', 'Manhattan', '2013-10-11 19:00:00', 'Gaurav', 'Mukharjee'),
('jayesh', '1991-02-12', 'jayesh@gmail.com', 'jayesh', 'brooklyn', '2014-12-05 12:55:29', 'jayesh', 'mehta'),
('love', '2014-12-28', 'love@gmail.com', '8/20/1993', 'mumbai', '2014-12-05 12:34:04', 'love', 'patel'),
('navinm', '2011-11-28', 'navinm@gmail.com', 'navin_Db', 'Queens', '2000-10-11 23:00:00', 'Navin', 'Mittal'),
('neha', '0000-00-00', 'neha@gmail.com', '1991-2-12', 'Mumbai', '2014-12-05 12:46:19', 'Neha', 'Lokhande'),
('Rachit', '1998-11-02', 'rachitr@gmail.com', 'rachit_Db', 'Brooklyn', '2012-11-10 23:00:00', 'Rachit', 'Ranjan'),
('Rahul', '1989-10-02', 'rahul@gmail.com', 'rahul_Db', 'New York', '2011-10-11 16:00:00', 'Rahul', 'Kumar'),
('Raj', '1991-02-12', 'raj@gmail.com', 'raj', 'mumbai', '2014-12-05 16:13:10', 'raj', 'mara'),
('Rajesh', '1994-03-02', 'rajeshj@gmail.com', 'rajesh_Db', 'Long Island', '2010-10-11 23:00:00', 'Rajesh', 'Jorigal'),
('Visheshjp', '2000-04-21', 'visheshjp@gmail.com', 'vishesh_Db', 'Brooklyn', '2014-11-12 22:00:00', 'Vishesh', 'Pathak');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_of_artist`
--
ALTER TABLE `list_of_artist`
  ADD CONSTRAINT `list_of_artist_ibfk_1` FOREIGN KEY (`a_name`) REFERENCES `artist_data` (`a_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
