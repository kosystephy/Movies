--
-- Database: `movies`
--
CREATE DATABASE IF NOT EXISTS `movies` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `movies`;
-- --------------------------------------------------------

--
-- Table structure for table `title`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `movieID` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `producer` varchar(25),
  `release_date` date,
  `type` varchar(15),
  `genre` varchar(25),
  `duration` time 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `products`
--

INSERT INTO `movie` (`movieID`, `title`, `producer`, `release_date`, `type`,  `genre`,  `duration` ) VALUES
(1, 'Avatar', 'Joy Thomas', '2009-12-10','movie','science fiction','01:58:12'),
(2, 'Titanic', 'Kate Grant', '1997-11-18','movie','romance','02:01:45'),
(3, 'The Avengers','Gavin Doyle', '2012-04-25','series','super-hero','02:30:12'),
(4, 'Jurassic World', 'Susan Grey', '2015-06-09','movie','action','01:55:10'),
(5, 'Furious 7', 'William McCourt', '2015-04-01','series','action/thriller','02:10:22'),
(6, 'Avengers: Age of Ultron', 'Ronald White', '2015-04-22','movie','super-hero','02:20:12'),
(7, 'Frozen', 'Faith Hope', '2013-11-27','movie','fantasy','01:49:58'),
(8, 'Iron Man 3', 'Hofner Icon', '2013-04-18','movie','super-hero','02:32:15'),
(9, 'Minions', 'John Lurthwig', '2015-06-17','movie','comedy','01:41:12'),
(10, 'Grey Anatomy','Sarah Garaham', '2016-04-27','series','drama','00:48:15'),
(11, 'The Vikings', 'Cian Malik', '2011-06-28','series','historical drama','1:00:12'),
(12, 'Squid game', 'Kim Lee Jung', '2003-12-01','series','drama','59:20:15'),
(13, 'Alice in Wonderland', 'Faith Hope', '2012-10-25','movie','adventure','01:15:12'),
(14, 'Toy Story 3', 'John Lurthwig', '2014-06-25','movie','comedy','02:01:12'),
(15, 'Transformers: Age of Extinction',`William McCourt', '2012-07-16','movie','science-fiction','02:03:12');