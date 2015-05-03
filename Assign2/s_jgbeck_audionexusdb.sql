-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 10:40 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `s_jgbeck_audionexusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE IF NOT EXISTS `functions` (
`FunctionID` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Description` text
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`FunctionID`, `Name`, `Description`) VALUES
(1, 'SecurityManageUsers', 'Allows for reading users and interface to add, change, and delete.'),
(2, 'SecurityUserAdd', 'Allows for adding of users by enabling link on manage form.'),
(3, 'SecurityUserEdit', 'Allows for editing of users by enabling link on manage form.'),
(4, 'SecurityUserDelete', 'Allows for deleting of users by enabling checkbox on manage form.'),
(5, 'SecurityProcessUserAddEdit', 'Required to process an add, change, or delete of users.'),
(6, 'SecurityManageFunctions', 'Allows for reading functions and interface to add, change, and delete.'),
(7, 'SecurityFunctionAdd', 'Allows for adding of functions by enabling link on manage form.'),
(8, 'SecurityFunctionEdit', 'Allows for editing of functions by enabling link on manage form.'),
(9, 'SecurityFunctionDelete', 'Allows for deleting of functions by enabling checkbox on manage form.'),
(10, 'SecurityProcessFunctionAddEdit', 'Required to process an add, change, or delete of functions.'),
(11, 'SecurityManageRoles', 'Allows for reading roles and interface to add, change, and delete.'),
(12, 'SecurityRoleAdd', 'Allows for adding of roles by enabling link on manage form.'),
(13, 'SecurityRoleEdit', 'Allows for editing of roles by enabling link on manage form.'),
(14, 'SecurityRoleDelete', 'Allows for deleting of roles by enabling checkbox on manage form.'),
(15, 'SecurityProcessRoleAddEdit', 'Required to process an add, change, or delete of roles.'),
(16, 'SecurityLogin', 'Provide Username and Password'),
(17, 'SecurityLogOut', 'Exit the application.'),
(18, 'SecurityProcessLogin', 'Try to authorize a user login.'),
(19, 'SecurityHome', 'Default security page with login button.'),
(20, 'About', 'Describes Information about the site'),
(21, 'AddMusic', 'Allows You to add music to the site'),
(22, 'DeleteMusic', 'Allows you to delete music from the site'),
(23, 'EditMusic', 'Allows you to edit information about a song on the site'),
(24, 'EmailSend', 'Sends emails to the user who are on the newsletter'),
(25, 'FileManagement', 'Sends you to the file management page where uploads of images,newsletters and quote files'),
(26, 'Admin', 'Takes you to admin login page'),
(27, 'IndividualRecord', 'Shows you the details of a song that has been selected from the all music list'),
(28, 'Ideas', 'Loads the ideas page where you can see what contributed to the site in some way'),
(29, 'ListMusic', 'This connects to db and grabs all music files and displays them in a table'),
(30, 'Newsletter', 'Loads the newsletter page'),
(31, 'ProcessAddEdit', 'This allows the adding and editing of music'),
(32, 'ProcessRegisterMember', 'This is for processing newsletter applicants'),
(33, 'SearchMusic', 'This function searches the music currently on the site'),
(34, 'SignIn', 'Takes you to the login page'),
(35, 'Checksheet', 'Takes you to the checksheet page'),
(36, 'ProcessFileUpload', 'Process a file that has been uploaded'),
(37, 'Index', 'Is for viewing home page');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
`ID` int(1) NOT NULL,
  `artistName` varchar(50) NOT NULL,
  `albumName` varchar(50) NOT NULL,
  `trackName` varchar(50) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `releaseDate` date NOT NULL,
  `isLocalBand` varchar(1) NOT NULL,
  `filePath` varchar(200) NOT NULL,
  `fileType` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`ID`, `artistName`, `albumName`, `trackName`, `rating`, `releaseDate`, `isLocalBand`, `filePath`, `fileType`) VALUES
(3, 'August Burns Redddd', 'Messengers', 'Back Burner', '3.9', '2007-06-19', 'N', '"../music/Back Burner.mp3"', '"audio/mpeg"'),
(4, 'Circa Survive', 'Violent Waves', 'Birth of the Economic Hit Man', '4.5', '2012-08-28', 'N', '"../music/Birth of the Economic Hit Man.m4a"', 'audio/mpeg'),
(5, 'Dance Gavin Dance', 'Happiness', 'Carl Barker', '4.0', '2009-06-09', 'N', '"../music/Carl Barker.mp3"', '"audio/mpeg"'),
(6, 'Circa Survive', 'On Letting Go', 'Carry Us Away', '4.8', '2007-05-29', 'N', '"../music/Carry Us Away.mp3"', '"audio/mpeg"'),
(7, 'Circa Survive', 'Blue Sky Noise', 'Frozen Creek', '4.7', '2010-04-20', 'N', '"../music/Frozen Creek.m4a"', '"audio/mpeg"'),
(9, 'Emarosa', 'Relativity', 'I Still Feel Her Part I', '4.3', '2008-07-08', 'N', '"../music/I Still Feel Her Part I.mp3"', '"audio/mpeg"'),
(10, 'Dance Gavin Dance', 'Happiness', 'NASA', '3.9', '2009-06-09', 'N', '"../music/NASA.mp3"', '"audio/mpeg"'),
(11, 'Joshua Beck', 'Ringtones For Dayz', 'Ringtone II', '4.9', '2014-12-12', 'Y', '"../music/ringtone.WAV"', '"audio/wav"'),
(12, 'Emarosa', 'Relativity', 'Set It Off Like Napalm', '4.7', '2008-07-08', 'N', '"../music/Set It Off Like Napalm.mp3"', '"audio/mpeg"'),
(13, 'Tony Gregory', 'My Music', 'Still Asleep', '4.9', '2014-04-20', 'Y', '"../music/Still Asleep.WAV"', '"audio/wav"');

-- --------------------------------------------------------

--
-- Table structure for table `rolefunctions`
--

CREATE TABLE IF NOT EXISTS `rolefunctions` (
  `RoleID` int(11) NOT NULL,
  `FunctionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rolefunctions`
--

INSERT INTO `rolefunctions` (`RoleID`, `FunctionID`) VALUES
(2, 1),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(1, 20),
(1, 21),
(1, 26),
(1, 35),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 28),
(1, 27),
(1, 29),
(1, 30),
(1, 31),
(1, 36),
(1, 32),
(1, 33),
(1, 7),
(1, 9),
(1, 8),
(1, 6),
(1, 11),
(1, 1),
(1, 10),
(1, 15),
(1, 5),
(1, 12),
(1, 14),
(1, 13),
(1, 2),
(1, 4),
(1, 3),
(1, 34),
(1, 37),
(4, 20),
(4, 26),
(4, 35),
(4, 28),
(4, 27),
(4, 29),
(4, 30),
(4, 33),
(4, 19),
(4, 16),
(4, 17),
(4, 11),
(4, 18),
(4, 34),
(4, 37),
(5, 20),
(5, 21),
(5, 35),
(5, 22),
(5, 23),
(5, 28),
(5, 37),
(5, 27),
(5, 29),
(5, 30),
(5, 31),
(5, 32),
(5, 33),
(5, 19),
(5, 16),
(5, 17),
(5, 34),
(3, 6),
(3, 11),
(3, 1),
(3, 20),
(3, 26),
(3, 35),
(3, 28),
(3, 37),
(3, 27),
(3, 29),
(3, 30),
(3, 33),
(3, 19),
(3, 16),
(3, 17),
(3, 18),
(3, 34);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`RoleID` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Description` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RoleID`, `Name`, `Description`) VALUES
(1, 'admin', 'Full privileges.'),
(2, 'updater', 'Update/Read privileges.'),
(3, 'reader', 'Read-only privileges.'),
(4, 'guest', 'Features available to all visitors without logging in.'),
(5, 'user', 'Users can add/edit/delete songs and do everything accept what admins can do');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE IF NOT EXISTS `userroles` (
  `UserID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`UserID`, `RoleID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`UserID` int(11) NOT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `UserName` varchar(32) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `UserName`, `Password`, `Email`) VALUES
(1, 'Jon', 'ODonnell', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'jodonnell@clarion.edu'),
(2, 'Bill', 'Updater', 'bill', 'c692d6a10598e0a801576fdd4ecf3c37e45bfbc4', 'bill@localhost'),
(3, 'Joe', 'Reader', 'joe', '16a9a54ddf4259952e3c118c763138e83693d7fd', 'joe@localhost'),
(4, 'guest', 'guest', 'guest', '35675e68f4b5af7b995d9205ad0fc43842f16450', 'guest@localhost'),
(5, 'Rea', 'Der', 'reader', '24b55fe81e9e7b11798d3a4e4677dd48ffc81559', 'iLoveReading@reader.read');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `functions`
--
ALTER TABLE `functions`
 ADD PRIMARY KEY (`FunctionID`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rolefunctions`
--
ALTER TABLE `rolefunctions`
 ADD KEY `RoleID` (`RoleID`), ADD KEY `FunctionID` (`FunctionID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
 ADD KEY `UserID` (`UserID`), ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `functions`
--
ALTER TABLE `functions`
MODIFY `FunctionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rolefunctions`
--
ALTER TABLE `rolefunctions`
ADD CONSTRAINT `rolefunctions_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`) ON DELETE CASCADE,
ADD CONSTRAINT `rolefunctions_ibfk_2` FOREIGN KEY (`FunctionID`) REFERENCES `functions` (`FunctionID`) ON DELETE CASCADE;

--
-- Constraints for table `userroles`
--
ALTER TABLE `userroles`
ADD CONSTRAINT `userroles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE,
ADD CONSTRAINT `userroles_ibfk_2` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
