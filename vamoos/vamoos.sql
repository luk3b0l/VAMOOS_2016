-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 01:29 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vamoos`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorised`
--

CREATE TABLE IF NOT EXISTS `authorised` (
  `authorisedID` int(11) NOT NULL,
  `state` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`authorisedID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorised`
--

INSERT INTO `authorised` (`authorisedID`, `state`) VALUES
(1, 'Valid'),
(2, 'Expired'),
(3, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `authorise_card`
--

CREATE TABLE IF NOT EXISTS `authorise_card` (
  `statusID` int(11) NOT NULL AUTO_INCREMENT,
  `cardID` int(11) NOT NULL,
  `officialID` int(11) NOT NULL,
  `authorisedID` int(11) NOT NULL,
  `sportID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL DEFAULT '0',
  `venueID` int(11) NOT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_to` date DEFAULT NULL,
  PRIMARY KEY (`statusID`,`cardID`,`officialID`,`authorisedID`,`sportID`,`eventID`,`venueID`),
  UNIQUE KEY `cardID_UNIQUE` (`cardID`,`officialID`,`eventID`),
  KEY `fk_authorise_CARD_CARDS1_idx` (`cardID`),
  KEY `fk_authorise_CARD_OFFICIALS1_idx` (`officialID`),
  KEY `fk_authorise_CARD_SPORTS1_idx` (`sportID`),
  KEY `fk_authorise_CARD_EVENTS1_idx` (`eventID`),
  KEY `fk_authorise_CARD_VENUES1_idx` (`venueID`),
  KEY `fk_authorise_CARD_AUTHORISED1_idx` (`authorisedID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `authorise_card`
--

INSERT INTO `authorise_card` (`statusID`, `cardID`, `officialID`, `authorisedID`, `sportID`, `eventID`, `venueID`, `valid_from`, `valid_to`) VALUES
(1, 1, 1, 1, 1, 1, 1, '2016-08-17', '2016-08-17'),
(2, 1, 1, 1, 1, 17, 1, '2016-08-18', '2016-08-18'),
(3, 1, 1, 1, 1, 3, 1, '2016-08-20', '2016-08-20'),
(4, 2, 2, 1, 1, 4, 1, '2016-08-15', '2016-08-15'),
(5, 2, 2, 1, 1, 6, 1, '2016-08-13', '2016-08-13'),
(6, 2, 2, 1, 1, 7, 1, '2016-08-12', '2016-08-12'),
(13, 3, 9, 1, 1, 1, 1, '2016-08-12', '2016-08-20'),
(14, 3, 9, 1, 1, 17, 1, '2016-08-18', '2016-08-18'),
(15, 3, 9, 1, 1, 3, 1, '2016-08-20', '2016-08-20'),
(16, 3, 9, 1, 1, 4, 1, '2016-08-15', '2016-08-15'),
(17, 3, 9, 1, 1, 5, 1, '2016-08-17', '2016-08-17'),
(18, 3, 9, 1, 1, 6, 1, '2016-08-13', '2016-08-13'),
(19, 3, 9, 1, 1, 7, 1, '2016-08-12', '2016-08-12'),
(20, 4, 8, 1, 4, 12, 5, '2016-08-07', '2016-08-07'),
(21, 4, 8, 1, 4, 13, 5, '2016-08-06', '2016-08-06'),
(22, 4, 8, 1, 4, 14, 4, '2016-08-10', '2016-08-10'),
(23, 5, 7, 1, 5, 15, 6, '2016-08-19', '2016-08-19'),
(24, 5, 7, 1, 5, 16, 6, '2016-08-20', '2016-08-20'),
(25, 6, 5, 1, 3, 10, 3, '2016-08-08', '2016-08-08'),
(26, 6, 5, 1, 3, 11, 3, '2016-09-09', '2016-09-09'),
(27, 7, 11, 1, 2, 9, 2, '2016-08-08', '2016-08-08'),
(28, 7, 11, 1, 2, 8, 2, '2016-08-06', '2016-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `cardID` int(11) NOT NULL AUTO_INCREMENT,
  `c_start_date` date DEFAULT NULL,
  `c_end_date` date DEFAULT NULL,
  `officialID` int(11) NOT NULL,
  `authorisedID` int(11) NOT NULL,
  PRIMARY KEY (`cardID`,`officialID`,`authorisedID`),
  UNIQUE KEY `cardID_UNIQUE` (`cardID`),
  KEY `fk_CARD_OFFICIAL1_idx` (`officialID`),
  KEY `fk_CARDS_AUTHORISED1_idx` (`authorisedID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`cardID`, `c_start_date`, `c_end_date`, `officialID`, `authorisedID`) VALUES
(1, '2016-08-03', '2016-08-21', 1, 1),
(2, '2016-08-03', '2016-08-21', 2, 1),
(3, '2016-08-03', '2016-08-21', 9, 1),
(4, '2016-08-03', '2016-08-21', 8, 1),
(5, '2016-08-03', '2016-08-21', 7, 1),
(6, '2016-08-03', '2016-08-21', 5, 1),
(7, '2016-08-03', '2016-08-21', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `card_has_venue`
--

CREATE TABLE IF NOT EXISTS `card_has_venue` (
  `cardID` int(11) NOT NULL,
  `venueID` int(11) NOT NULL,
  PRIMARY KEY (`cardID`,`venueID`),
  KEY `fk_CARD_has_VENUE_VENUE1_idx` (`venueID`),
  KEY `fk_CARD_has_VENUE_CARD1_idx` (`cardID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card_has_venue`
--

INSERT INTO `card_has_venue` (`cardID`, `venueID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(7, 2),
(6, 3),
(4, 4),
(4, 5),
(5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `entrylogs`
--

CREATE TABLE IF NOT EXISTS `entrylogs` (
  `entryLogID` int(11) NOT NULL AUTO_INCREMENT,
  `entryDate` date NOT NULL,
  `cardID` int(11) NOT NULL,
  `venue` varchar(45) NOT NULL,
  `access_status` varchar(45) NOT NULL,
  PRIMARY KEY (`entryLogID`,`cardID`),
  KEY `cardID_idx` (`cardID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `entrylogs`
--

INSERT INTO `entrylogs` (`entryLogID`, `entryDate`, `cardID`, `venue`, `access_status`) VALUES
(1, '2016-08-17', 1, 'Olympic Stadium', 'ACCESS GRANTED'),
(2, '2016-08-15', 1, 'Olympic Stadium', 'ACCESS DENIED'),
(3, '2016-08-20', 1, 'Carioca Arena 3', 'ACCESS DENIED'),
(4, '2015-08-17', 2, 'Olympic Stadium', 'ACCESS DENIED'),
(5, '2016-08-17', 3, 'Olympic Stadium', 'ACCESS GRANTED'),
(6, '2016-08-20', 3, 'Olympic Stadium', 'ACCESS GRANTED');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(45) DEFAULT NULL,
  `date_of_event` date DEFAULT NULL,
  `gender` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `event`, `date_of_event`, `gender`) VALUES
(1, '200m heats', '2016-08-17', 'M'),
(3, '5000m final', '2016-08-20', 'M'),
(4, 'Hammer final', '2016-08-15', 'W'),
(5, '200m final', '2016-08-17', 'W'),
(6, 'Triple Jump qualifier', '2016-08-13', 'W'),
(7, 'Long Jump qualifier', '2016-08-12', 'M'),
(8, 'Team Quarter finals', '2016-08-06', 'M'),
(9, 'Individual Eliminations 1/32', '2016-08-08', 'W'),
(10, '57Kg Eliminations', '2016-08-08', 'W'),
(11, '81Kg Bronze Medal Contests', '2016-08-09', 'M'),
(12, 'Road race', '2016-08-07', 'W'),
(13, 'Road race', '2016-08-06', 'M'),
(14, 'Individual Time Trial', '2016-08-10', 'M'),
(15, '67Kg Repechanges', '2016-08-19', 'W'),
(16, '67Kg Gold Medal Contest', '2016-08-20', 'W'),
(17, '200m final', '2016-08-18', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `event_has_venue`
--

CREATE TABLE IF NOT EXISTS `event_has_venue` (
  `eventID` int(11) NOT NULL,
  `venueID` int(11) NOT NULL,
  PRIMARY KEY (`eventID`,`venueID`),
  KEY `fk_EVENT_has_VENUE_VENUE1_idx` (`venueID`),
  KEY `fk_EVENT_has_VENUE_EVENT1_idx` (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_has_venue`
--

INSERT INTO `event_has_venue` (`eventID`, `venueID`) VALUES
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(17, 1),
(1, 2),
(3, 2),
(8, 2),
(9, 2),
(10, 3),
(11, 3),
(14, 4),
(12, 5),
(13, 5),
(15, 6),
(16, 6);

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE IF NOT EXISTS `officials` (
  `officialID` int(11) NOT NULL AUTO_INCREMENT,
  `officialName` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `sportID` int(11) NOT NULL,
  `titleID` int(11) NOT NULL,
  PRIMARY KEY (`officialID`,`sportID`,`titleID`),
  UNIQUE KEY `titleID_UNIQUE` (`officialName`),
  KEY `fk_OFFICIAL_SPORT1_idx` (`sportID`),
  KEY `fk_OFFICIALS_TITLES1_idx` (`titleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`officialID`, `officialName`, `role`, `sportID`, `titleID`) VALUES
(1, 'Dan Gerous', 'Starter', 1, 1),
(2, 'Sandy Raker', 'Field Official', 1, 2),
(3, 'Ham Mertoss', 'Field Official', 1, 1),
(4, 'Ro Tate', 'Timekeeper', 4, 2),
(5, 'Penny Thrower', 'Referee', 3, 3),
(6, 'Tae Do Kwan', 'Referee', 5, 2),
(7, 'John Deed', 'Judge', 5, 1),
(8, 'Cola Drinkmann', 'Roadside Official', 4, 1),
(9, 'Vito Gelato', 'Medical Officer', 1, 4),
(10, 'Anne Bell', 'Track Official', 1, 3),
(11, 'Hi Twang', 'Safety Officer', 2, 1),
(12, 'John Bull', 'Scorer', 2, 1),
(13, 'Maria Sedzina', 'Judge', 3, 2),
(14, 'Hela Greenstick', 'Medical Officer', 4, 4),
(15, 'Jean Jettez', 'Judge', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `official_has_event`
--

CREATE TABLE IF NOT EXISTS `official_has_event` (
  `officialID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  PRIMARY KEY (`officialID`,`eventID`),
  KEY `fk_OFFICIAL_has_EVENT_EVENT1_idx` (`eventID`),
  KEY `fk_OFFICIAL_has_EVENT_OFFICIAL1_idx` (`officialID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `official_has_venue`
--

CREATE TABLE IF NOT EXISTS `official_has_venue` (
  `officialID` int(11) NOT NULL,
  `venueID` int(11) NOT NULL,
  PRIMARY KEY (`officialID`,`venueID`),
  KEY `fk_OFFICIAL_has_VENUE_VENUE1_idx` (`venueID`),
  KEY `fk_OFFICIAL_has_VENUE_OFFICIAL1_idx` (`officialID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `sportID` int(11) NOT NULL AUTO_INCREMENT,
  `sport` varchar(30) DEFAULT NULL,
  `governingBody` varchar(45) DEFAULT NULL,
  `acronym` varchar(10) DEFAULT NULL,
  `s_from_date` date DEFAULT NULL,
  `s_to_date` date DEFAULT NULL,
  PRIMARY KEY (`sportID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sportID`, `sport`, `governingBody`, `acronym`, `s_from_date`, `s_to_date`) VALUES
(1, 'Athletics', 'International Amateur Athletics Federation', 'IAAF', '2016-08-12', '2016-08-20'),
(2, 'Archery', 'World Archery Federation', 'WAF', '2016-08-06', '2016-08-12'),
(3, 'Judo', 'International Judo Federation', 'IJF', '2016-08-06', '2016-08-12'),
(4, 'Road Cycling', 'Union Cycliste Internationale', 'UCI', '2016-08-06', '2016-08-10'),
(5, 'Taekwando', 'World TaeKwanDo Federation', 'WTF', '2016-08-17', '2016-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `sport_has_event`
--

CREATE TABLE IF NOT EXISTS `sport_has_event` (
  `sportID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  PRIMARY KEY (`sportID`,`eventID`),
  KEY `fk_SPORT_has_EVENT_EVENT1_idx` (`eventID`),
  KEY `fk_SPORT_has_EVENT_SPORT1_idx` (`sportID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport_has_event`
--

INSERT INTO `sport_has_event` (`sportID`, `eventID`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 8),
(2, 9),
(3, 10),
(3, 11),
(4, 12),
(4, 13),
(4, 14),
(5, 15),
(5, 16),
(1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `sport_has_venue`
--

CREATE TABLE IF NOT EXISTS `sport_has_venue` (
  `sportID` int(11) NOT NULL,
  `venueID` int(11) NOT NULL,
  PRIMARY KEY (`sportID`,`venueID`),
  KEY `fk_SPORT_has_VENUE_VENUE1_idx` (`venueID`),
  KEY `fk_SPORT_has_VENUE_SPORT1_idx` (`sportID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport_has_venue`
--

INSERT INTO `sport_has_venue` (`sportID`, `venueID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(4, 5),
(5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE IF NOT EXISTS `titles` (
  `titleID` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`titleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`titleID`, `title`) VALUES
(1, 'Mr'),
(2, 'Ms'),
(3, 'Mrs'),
(4, 'Dr');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE IF NOT EXISTS `venues` (
  `venueID` int(11) NOT NULL AUTO_INCREMENT,
  `venue` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`venueID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venueID`, `venue`, `area`) VALUES
(1, 'Olympic Stadium', 'Maracana'),
(2, 'Sambodromo', 'Maracana'),
(3, 'Carioca Arena 2', 'Barra'),
(4, 'Pontal', 'Barra'),
(5, 'Fort Copacabana', 'Copacabana'),
(6, 'Carioca Arena 3', 'Barra');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorise_card`
--
ALTER TABLE `authorise_card`
  ADD CONSTRAINT `fk_authorise_CARD_AUTHORISED1` FOREIGN KEY (`authorisedID`) REFERENCES `authorised` (`authorisedID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_authorise_CARD_CARDS1` FOREIGN KEY (`cardID`) REFERENCES `cards` (`cardID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_authorise_CARD_EVENTS1` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_authorise_CARD_OFFICIALS1` FOREIGN KEY (`officialID`) REFERENCES `officials` (`officialID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_authorise_CARD_SPORTS1` FOREIGN KEY (`sportID`) REFERENCES `sports` (`sportID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_authorise_CARD_VENUES1` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `fk_CARDS_AUTHORISED1` FOREIGN KEY (`authorisedID`) REFERENCES `authorised` (`authorisedID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CARD_OFFICIAL1` FOREIGN KEY (`officialID`) REFERENCES `officials` (`officialID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `card_has_venue`
--
ALTER TABLE `card_has_venue`
  ADD CONSTRAINT `fk_CARD_has_VENUE_CARD1` FOREIGN KEY (`cardID`) REFERENCES `cards` (`cardID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CARD_has_VENUE_VENUE1` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `entrylogs`
--
ALTER TABLE `entrylogs`
  ADD CONSTRAINT `cardID` FOREIGN KEY (`cardID`) REFERENCES `cards` (`cardID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_has_venue`
--
ALTER TABLE `event_has_venue`
  ADD CONSTRAINT `fk_EVENT_has_VENUE_EVENT1` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EVENT_has_VENUE_VENUE1` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `officials`
--
ALTER TABLE `officials`
  ADD CONSTRAINT `fk_OFFICIALS_TITLES1` FOREIGN KEY (`titleID`) REFERENCES `titles` (`titleID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OFFICIAL_SPORT1` FOREIGN KEY (`sportID`) REFERENCES `sports` (`sportID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `official_has_event`
--
ALTER TABLE `official_has_event`
  ADD CONSTRAINT `fk_OFFICIAL_has_EVENT_EVENT1` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OFFICIAL_has_EVENT_OFFICIAL1` FOREIGN KEY (`officialID`) REFERENCES `officials` (`officialID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `official_has_venue`
--
ALTER TABLE `official_has_venue`
  ADD CONSTRAINT `fk_OFFICIAL_has_VENUE_OFFICIAL1` FOREIGN KEY (`officialID`) REFERENCES `officials` (`officialID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OFFICIAL_has_VENUE_VENUE1` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sport_has_event`
--
ALTER TABLE `sport_has_event`
  ADD CONSTRAINT `fk_SPORT_has_EVENT_EVENT1` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SPORT_has_EVENT_SPORT1` FOREIGN KEY (`sportID`) REFERENCES `sports` (`sportID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sport_has_venue`
--
ALTER TABLE `sport_has_venue`
  ADD CONSTRAINT `fk_SPORT_has_VENUE_SPORT1` FOREIGN KEY (`sportID`) REFERENCES `sports` (`sportID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SPORT_has_VENUE_VENUE1` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
