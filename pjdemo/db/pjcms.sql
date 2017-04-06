-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 01:26 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountID` int(11) NOT NULL,
  `AccountAcc` varchar(50) NOT NULL,
  `AccountPassword` varchar(50) NOT NULL,
  `AccountFullName` varchar(50) NOT NULL,
  `DateOfBirth` varchar(50) NOT NULL,
  `AccountAddress` varchar(100) NOT NULL,
  `AccountEmail` varchar(50) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Position` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountID`, `AccountAcc`, `AccountPassword`, `AccountFullName`, `DateOfBirth`, `AccountAddress`, `AccountEmail`, `PhoneNumber`, `Position`) VALUES
(1, 'hungntgt00453', '12345', 'NGUYEN TRAN HUNG', '20/5/1993', 'HA NOI', 'hungntgt00453@fpt.edu.vn', '0947874123', '1'),
(2, 'huydd', '12345', 'Duong Duc huy', '11/1/1993', 'Ha Noi', 'huydd@fpt.edu.vn', '0912313212', '1'),
(3, 'lampt', '12345', 'Pham Tung Lam', '9/11/1993', 'Ha Noi', 'lampt@fpt.edu.vn', '0912999888', '1'),
(4, 'tuanbq', '12345', 'Bui Quang Tuan', '12/11/1994', 'Ha Noi', 'tuanbq@fpt.edu.vn', '0166789987', '1'),
(5, 'namlh', '12345', 'Le Hai Nam', '6/1/1994', 'Hai Phong', 'namlh@fpt.edu.vn', '0912596854', '1'),
(6, 'ducvt', '12345', 'Vu Trung Duc', '23/3/1993', 'Nam Dinh', 'ducvt@fpt.edu.vn', '0912222333', '1'),
(7, 'duongpt', '12345', 'Pham Tung Duong', '11/7/1992', 'Hai Phong', 'duongpt@fpt.edu.vn', '0987134233', '1'),
(8, 'bachpt', '12345', 'Pham Tung Bach', '10/3/1995', 'Dien Bien', 'bachpt@fpt.edu.vn', '0981234561', '1'),
(9, 'tuannv', '12345', 'Nguyen Van Tuan', '20/8/1993', 'Hai Phong', 'tuannv@fpt.edu.vn', '0912086973', '1'),
(10, 'thanhnv', '12345', 'Nguyen Van Thanh', '29/1/1992', 'Ha Noi', 'thanhnv@fpt.edu.vn', '0166987654', '1'),
(11, 'minhhv', '12345', 'Hoang Van Minh', '23/2/1992', 'Ha Noi', 'minhhv@fpt.edu.vn', '0912322333', '1'),
(12, 'tungdt', '12345', 'Doan Trung Tung', '21/2/1970', 'Ha Noi', 'tungdt@fpt.edu.vn', '0912331232', '2'),
(13, 'vungpv', '12345', 'Pham Van Vung', '05/4/1980', 'Ha Noi', 'vungpv@fpt.edu.vn', '0931288421', '2'),
(14, 'binhdq', '12345', 'Do Quoc Binh', '06/2/1968', 'Ha Noi', 'binhdq@fpt.edu.vn', '0986878771', '2');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `ClassID` int(11) NOT NULL,
  `ClassName` varchar(50) NOT NULL,
  `SemesterID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ClassID`, `ClassName`, `SemesterID`) VALUES
(1, 'TCH1408', 3),
(2, 'TCH1409', 2);

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `CoordinatorID` int(11) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `TeacherID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`CoordinatorID`, `Position`, `TeacherID`) VALUES
(1, '3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ManagerID` int(11) NOT NULL,
  `ManagerAcc` varchar(50) NOT NULL,
  `ManagerPassword` varchar(50) NOT NULL,
  `ManagerFullName` varchar(50) NOT NULL,
  `ManagerAddress` varchar(100) NOT NULL,
  `ManagerEmail` varchar(50) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ManagerID`, `ManagerAcc`, `ManagerPassword`, `ManagerFullName`, `ManagerAddress`, `ManagerEmail`, `PhoneNumber`) VALUES
(1, 'tudm', '12345', 'Do Minh Tu', 'Ha Noi', 'tudmgc00376@fpt.edu.vn', '01667815581'),
(2, 'hungnt', '12345', 'Nguyen Tran Hung', 'Ha Noi', 'hungnt@fpt.edu.vn', '0912223422');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `SemesterID` int(11) NOT NULL,
  `SemesterNo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SemesterID`, `SemesterNo`) VALUES
(2, 'Semester 6'),
(3, 'Semester 7');

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedback`
--

CREATE TABLE `studentfeedback` (
  `StudentFeedbackID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `MessageTitle` text NOT NULL,
  `MessageContent` text NOT NULL,
  `TimeFB` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentfeedback`
--

INSERT INTO `studentfeedback` (`StudentFeedbackID`, `StudentID`, `TeacherID`, `MessageTitle`, `MessageContent`, `TimeFB`) VALUES
(4, 1, 13, 'ques1', 'fed1', '2017-03-22 02:06:02'),
(5, 1, 12, 'Title Fb1', 'content fb1', '2017-03-23 04:06:04'),
(6, 1, 14, 'Title Fb2', 'content fb2', '2017-03-24 21:59:34'),
(7, 1, 12, 'Title Fb3', 'content fb3', '2017-03-24 21:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `studentintosubject`
--

CREATE TABLE `studentintosubject` (
  `StudentIntoSubjectID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentintosubject`
--

INSERT INTO `studentintosubject` (`StudentIntoSubjectID`, `StudentID`, `SubjectID`) VALUES
(1, 1, 1),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentupload`
--

CREATE TABLE `studentupload` (
  `UploadID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `LinkUpload` text COLLATE utf8_unicode_ci NOT NULL,
  `TimeUpload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentupload`
--

INSERT INTO `studentupload` (`UploadID`, `SubjectID`, `StudentID`, `Name`, `LinkUpload`, `TimeUpload`) VALUES
(37, 1, 1, '1', '../file_upload/student/CW.pdf', '2017-01-12 22:47:59'),
(36, 3, 1, 'xong', '../file_upload/student/CW.pdf', '2017-04-12 09:42:08'),
(35, 3, 1, '3', '../file_upload/student/CW.pdf', '2017-05-17 09:32:00'),
(34, 3, 1, '2', '../file_upload/student/CW.pdf', '2017-06-16 09:32:00'),
(32, 3, 1, '3', '../file_upload/student/CW.pdf', '2017-09-14 09:32:00'),
(33, 3, 1, 'xong', '../file_upload/student/CW.pdf', '2017-06-23 09:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SubjectID` int(11) NOT NULL,
  `SubjectName` varchar(150) NOT NULL,
  `ClassID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubjectID`, `SubjectName`, `ClassID`, `AccountID`) VALUES
(1, 'Interaction Design', 1, 14),
(2, 'Application Development for Mobile Devices', 1, 13),
(3, 'Enterprise Web Software Development', 1, 12),
(4, 'Project', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherID` int(11) NOT NULL,
  `TeacherAcc` varchar(50) NOT NULL,
  `TeacherPassword` varchar(50) NOT NULL,
  `TeacherFullName` varchar(50) NOT NULL,
  `TeacherAddress` varchar(100) NOT NULL,
  `TeacherEmail` varchar(50) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Position` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherID`, `TeacherAcc`, `TeacherPassword`, `TeacherFullName`, `TeacherAddress`, `TeacherEmail`, `PhoneNumber`, `Position`) VALUES
(1, 'tungdt', '12345', 'Doan Trung Tung', 'Ha Noi', 'tungdt@fpt.edu.vn', '0912331232', '2'),
(2, 'vungpv', '12345', 'Pham Van Vung', 'Ha Noi', 'vungpv@fpt.edu.vn', '0931288421', '2'),
(3, 'binhdq', '12345', 'Do Quoc Binh', 'Ha Noi', 'binhdq@fpt.edu.vn', '0986878771', '2');

-- --------------------------------------------------------

--
-- Table structure for table `teacherupload`
--

CREATE TABLE `teacherupload` (
  `UploadID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `folder` int(11) NOT NULL,
  `LinkUploadTeacher` text COLLATE utf8_unicode_ci NOT NULL,
  `TimeUpload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacherupload`
--

INSERT INTO `teacherupload` (`UploadID`, `SubjectID`, `AccountID`, `Name`, `folder`, `LinkUploadTeacher`, `TimeUpload`) VALUES
(21, 4, 12, 'slide1.pdf', 1, '../file_upload/teacher/22222222.pdf', '2017-01-17 22:57:28'),
(22, 3, 12, 'slider2', 2, '../file_upload/teacher/22222222.pdf', '2017-03-24 22:57:28'),
(23, 4, 12, 'book1', 2, '../file_upload/teacher/folder.pdf', '2017-03-24 22:57:28'),
(24, 3, 12, 'xong', 1, '../file_upload/teacher/CW.pdf', '2017-03-24 22:57:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ClassID`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`CoordinatorID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ManagerID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`SemesterID`);

--
-- Indexes for table `studentfeedback`
--
ALTER TABLE `studentfeedback`
  ADD PRIMARY KEY (`StudentFeedbackID`);

--
-- Indexes for table `studentintosubject`
--
ALTER TABLE `studentintosubject`
  ADD PRIMARY KEY (`StudentIntoSubjectID`);

--
-- Indexes for table `studentupload`
--
ALTER TABLE `studentupload`
  ADD PRIMARY KEY (`UploadID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SubjectID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`);

--
-- Indexes for table `teacherupload`
--
ALTER TABLE `teacherupload`
  ADD PRIMARY KEY (`UploadID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `CoordinatorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `ManagerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `SemesterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studentfeedback`
--
ALTER TABLE `studentfeedback`
  MODIFY `StudentFeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `studentintosubject`
--
ALTER TABLE `studentintosubject`
  MODIFY `StudentIntoSubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studentupload`
--
ALTER TABLE `studentupload`
  MODIFY `UploadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `SubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacherupload`
--
ALTER TABLE `teacherupload`
  MODIFY `UploadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
