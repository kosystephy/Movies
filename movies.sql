--
-- Database: `movies`
--
CREATE DATABASE IF NOT EXISTS `movies` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `movies`;
-- --------------------------------------------------------

--
-- Table structure for table `title`
--

DROP TABLE IF EXISTS movie;
CREATE TABLE movie (
  `movieID` int NOT NULL AUTO_INCREMENT,
  `poster`  varchar(25),
  `title` varchar(100) NOT NULL,
  `producer` varchar(50),
  `release_date` date,
  `type` varchar(15),
  `genre` varchar(50),
  `duration` time, 
  PRIMARY KEY(movieID)
  );

CREATE TABLE artiste(
   `movieID` int  NOT NULL,
    `artisteID` int(11) NOT NULL,
     `name` varchar(25),
    `dob` date,
    `origin` varchar(25),
       `gender` varchar(10),
PRIMARY KEY(artisteID,movieID),
FOREIGN KEY(movieID) REFERENCES movie(movieID));


--
-- Dumping data for table `products`
--

INSERT INTO `movie` (`movieID`,`poster`, `title`, `producer`, `release_date`, `type`,  `genre`,  `duration` ) VALUES
(1,'images\Avatar_(2009_film)_poster.jpg', 'Avatar', 'Joy Thomas', '2009-12-10','movie','science fiction','01:58:12'),
(2,'images\Titanic_(1997_film)_poster.png' ,'Titanic', 'Kate Grant', '1997-11-18','movie','romance','02:01:45'),
(3,'images\The_Avengers_(2012_film)_poster.jpg' ,'The Avengers','Gavin Doyle', '2012-04-25','series','super-hero','02:30:12'),
(4,'images\Jurassic_World_poster.jpg' ,'Jurassic World', 'Susan Grey', '2015-06-09','movie','action','01:55:10'),
(5,'images\Furious_7_poster.jpg' ,'Furious 7', 'William McCourt', '2015-04-01','series','action/thriller','02:10:22'),
(6,'images\Avengers_Age_of_Ultron_poster.jpg' ,'Avengers: Age of Ultron', 'Ronald White', '2015-04-22','movie','super-hero','02:20:12'),
(7, 'images\Frozen_(2013_film)_poster.jpg','Frozen', 'Faith Hope', '2013-11-27','movie','fantasy','01:49:58'),
(8, 'images\Iron_Man_3_poster.jpg','Iron Man 3', 'Hofner Icon', '2013-04-18','movie','super-hero','02:32:15'),
(9,'images\Minions_(2015_film).jpg' ,'Minions', 'John Lurthwig', '2015-06-17','movie','comedy','01:41:12'),
(10, 'images\Greys Anatomy.jpg','Grey Anatomy','Sarah Garaham', '2016-04-27','series','drama','00:48:15'),
(11,'images\Vikings.jpg' ,'The Vikings', 'Cian Malik', '2011-06-28','series','historical drama','1:00:12'),
(12,'images\Squid_Game.jpg' ,'Squid game', 'Kim Lee Jung', '2003-12-01','series','drama','59:20:15'),
(13, 'images\Alice_in_Wonderland_.png','Alice in Wonderland', 'Faith Hope', '2012-10-25','movie','adventure','01:15:12'),
(14, 'images\Toy_Story_3.jpg','Toy Story 3', 'John Lurthwig', '2014-06-25','movie','comedy','02:01:12'),
(15,'images\Transformers_Age_of_Extinction_poster.jpg' ,'Transformers: Age of Extinction','William McCourt', '2012-07-16','movie','science-fiction','02:03:12');


INSERT INTO `artiste` (`movieID`,`artisteID`, `name`, `dob`, `origin`, `gender` ) VALUES
(13,1, 'Johnny Depp', '1972-12-10','American','Male'),
(15,2, 'Mark Wahlberg',  '1980-11-18','American','Male'),
(11,3, 'Travis Fimmel','1978-04-25','Canadian','Male'),
(4,4, 'Chris Pratt',  '1990-06-09','Scottish','Male'),
(5,5, 'Vin Diesel',  '1971-04-01','Brazillian','Male'),
(4, 6,'Owen Grady',  '1981-08-23','America','Male'),
(1,7, 'Sam Worthington',  '1981-11-18','British','Male'),
(1,8, 'Zoe Saldaña',  '1974-02-16','British','Female'),
(2,9, 'Kate Winslet', '1975-02-03','American','Female'),
(2,10, 'Leonardo DiCaprio',  '1982-02-03','American','Male'),
(3, 11,'Robert Downey Jr',  '1985-12-22','American','Male'),
(5, 12,'Paul Walker',  '1978-04-22','American','Male'),
(6, 13,'Robert Downey Jr', '1985-12-22','American','Male'),
(6, 14,'Chris Hemsworth',  '1982-04-22','American','Male'),
(7,15, 'Kristen Bell',  '1980-04-22','American','Female'),
(8,16, 'Gwyneth Paltrow',  '1976-09-04','American','Female'),
(8, 17,'Robert Downey Jr', '1985-12-22','American','Male'),
(9, 18,'Sandra Bullock',  '1980-08-12','Italian','Female'),
(10,19, 'Ellen Pompeo',  '1983-07-07','Scottish','Female'),
(10,20, 'Chandra Wilson',  '1977-11-07','American','Female'),
(12,21, 'Lee Jung-jae', '1969-01-23','Korean','Male'),
(12,22, 'HoYeon Jung',  '1997-06-06','Korean','Female'),
(14,23, 'Tom Hanks',  '1981-05-19','American','Male');


-- --
-- -- Indexes for table `products`
-- --
-- ALTER TABLE `movies`
-- --  ADD PRIMARY KEY (`movieID`),
--   ADD UNIQUE KEY `movieID` (`movieID`);

-- --
-- -- AUTO_INCREMENT for table `products`
-- --
-- ALTER TABLE `movies`
--   MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
