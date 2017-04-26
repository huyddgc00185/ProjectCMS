-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2017 at 06:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
(1, 'hungntgt00453', '12345', 'NGUYEN TRAN HUNG', '20/5/1993', 'Ha Noi', 'hungntgt00453@fpt.edu.vn', '0947874123', '1'),
(2, 'huydd', '12345', 'Duong Duc huy', '11/1/1993', 'Ha Noi', 'huydd@fpt.edu.vn', '0912313212', '1'),
(3, 'lampt', '12345', 'Pham Tung Lam', '9/11/1993', 'Ha Noi', 'lampt@fpt.edu.vn', '0912999888', '1'),
(4, 'tuanbq', '12345', 'Bui Quang Tuan', '12/11/1994', 'Ha Noi', 'tuanbq@fpt.edu.vn', '0166789987', '1'),
(5, 'namlh', '12345', 'Le Hai Nam', '6/1/1994', 'Hai Phong', 'namlh@fpt.edu.vn', '0912596854', '1'),
(6, 'ducvt', '12345', 'Vu Trung Duc', '23/3/1993', 'Nam Dinh', 'ducvt@fpt.edu.vn', '0912222333', '1'),
(7, 'duongpt', '12345', 'Pham Tung Duong', '11/7/1992', 'Hai Phong', 'duongpt@fpt.edu.vn', '0987134233', '1'),
(10, 'thanhnv', '12345', 'Nguyen Van Thanh', '29/1/1992', 'Ha Noi', 'thanhnv@fpt.edu.vn', '0166987654', '1'),
(12, 'tungdt', '12345', 'Doan Trung Tung', '21/2/1970', 'Ha Noi', 'tungdt@fpt.edu.vn', '0912331232', '2'),
(13, 'vungpv', '12345', 'Pham Van Vung', '05/4/1980', 'Ha Noi', 'vungpv@fpt.edu.vn', '0931288421', '2'),
(14, 'binhdq', '12345', 'Do Quoc Binh', '06/2/1968', 'Ha Noi', 'binhdq@fpt.edu.vn', '0986878771', '2'),
(15, 'coodinator', '12345', 'HUNG(COODINATOR)', '20/5/1993', 'HA NOI', 'hungntph00695@gmail.com', '0947874123', '3'),
(17, 'manager', '12345', 'manager', '20/5/1993', 'Ha Noi', 'manager@gmail.com', '0947874123', '4');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `ClassID` int(11) NOT NULL,
  `ClassName` varchar(50) NOT NULL,
  `SemesterID` int(11) NOT NULL,
  `Timestart` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ClassID`, `ClassName`, `SemesterID`, `Timestart`) VALUES
(1, 'TCH1408', 3, '2017-04-26 00:12:18'),
(2, 'TCH1409', 2, '2017-04-26 00:12:18'),
(4, 'TCH1402', 4, '2017-04-26 00:12:18'),
(5, 'TCH1403', 5, '2017-04-26 00:12:18'),
(6, 'TCH1404', 6, '2017-04-26 00:12:18'),
(7, 'TCH1405', 7, '2017-04-26 00:12:18'),
(8, 'TCH1406', 9, '2017-04-26 00:12:18'),
(9, 'TCH1407', 9, '2017-04-26 00:12:18'),
(10, 'TCH1412', 2, '2017-04-26 00:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `SemesterID` int(11) NOT NULL,
  `SemesterNo` varchar(50) NOT NULL,
  `Timestart` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SemesterID`, `SemesterNo`, `Timestart`) VALUES
(2, 'Semester 6', '2017-04-26 00:11:52'),
(3, 'Semester 7', '2017-04-26 00:11:52'),
(4, 'Semester 8', '2017-04-26 00:11:52'),
(5, 'Semester 1', '2017-04-26 00:11:52'),
(6, 'Semester 2', '2017-04-26 00:11:52'),
(7, 'Semester 3', '2017-04-26 00:11:52'),
(8, 'Semester 4', '2017-04-26 00:11:52'),
(9, 'Semester 5', '2017-04-26 00:11:52'),
(11, 'Semester 11', '2017-04-26 00:11:52'),
(12, 'Semester 12', '2017-04-26 00:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `studentclaim`
--

CREATE TABLE `studentclaim` (
  `StudentClaimID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `StudentClaimSubject` text NOT NULL,
  `StudentClaimBody` text NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `Fileup` text NOT NULL,
  `StudentClaimTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL,
  `Accepted` int(11) NOT NULL,
  `OverDeadline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentclaim`
--

INSERT INTO `studentclaim` (`StudentClaimID`, `StudentID`, `StudentClaimSubject`, `StudentClaimBody`, `SubjectID`, `Fileup`, `StudentClaimTime`, `Status`, `Accepted`, `OverDeadline`) VALUES
(94, 1, 'body', 'title', 2, '', '2017-06-20 22:41:53', 0, 0, 0),
(95, 1, 'test1', 'test', 2, '../file_upload/teacher/Screen Shot 2017-04-24 at 12.20.07 PM.png', '2017-04-25 22:45:14', 1, 2, 0);

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
(7, 1, 12, 'Title Fb3', 'content fb3', '2017-03-24 21:59:55'),
(8, 1, 0, '', '', '2017-03-25 19:27:04');

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
(2, 5, 3),
(3, 1, 2),
(4, 1, 3),
(9, 5, 4),
(6, 1, 4),
(7, 2, 2),
(10, 2, 4);

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
(33, 3, 1, 'xong', '../file_upload/student/CW.pdf', '2017-06-23 09:42:08'),
(38, 2, 1, 'Application Development for Mobile Devices CW', '../file_upload/student/CW.pdf', '2017-04-02 20:14:29'),
(39, 4, 2, 'TCH1408 - Project', '../file_upload/student/CW.pdf', '2017-04-02 20:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SubjectID` int(11) NOT NULL,
  `SubjectName` varchar(150) NOT NULL,
  `ClassID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `Timestart` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubjectID`, `SubjectName`, `ClassID`, `AccountID`, `Timestart`) VALUES
(1, 'Interaction Design', 1, 14, '2017-04-25 23:52:20'),
(2, 'Application Development for Mobile', 1, 12, '2017-12-25 23:52:20'),
(3, 'Enterprise Web Software Development', 1, 12, '2017-04-25 23:52:20'),
(4, 'Project', 1, 12, '2017-04-25 23:52:20'),
(7, 'Programing Net Work', 2, 13, '2017-04-25 23:52:20'),
(8, 'Developer Net Work', 5, 14, '2017-04-25 23:52:20'),
(9, 'NetWorking', 1, 12, '2017-04-25 23:52:20'),
(10, 'SoftWare NetWorking', 1, 12, '2017-04-25 23:52:20'),
(11, 'Interaction Developing', 1, 14, '2017-04-25 23:52:20');

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
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`SemesterID`);

--
-- Indexes for table `studentclaim`
--
ALTER TABLE `studentclaim`
  ADD PRIMARY KEY (`StudentClaimID`);

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
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `SemesterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `studentclaim`
--
ALTER TABLE `studentclaim`
  MODIFY `StudentClaimID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `studentfeedback`
--
ALTER TABLE `studentfeedback`
  MODIFY `StudentFeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `studentintosubject`
--
ALTER TABLE `studentintosubject`
  MODIFY `StudentIntoSubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `studentupload`
--
ALTER TABLE `studentupload`
  MODIFY `UploadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `SubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `teacherupload`
--
ALTER TABLE `teacherupload`
  MODIFY `UploadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
