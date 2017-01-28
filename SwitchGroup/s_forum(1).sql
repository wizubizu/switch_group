-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 11:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `body` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `user_time`, `body`, `user_name`) VALUES
(1, 'Ajayi', '2017-01-26 22:28:14', 'adedldmpdmcd mdiodmkd dfcvdef', ''),
(2, 'kolade', '2017-01-26 22:28:33', 'go google go check new', ''),
(3, 'Dele', '2017-01-26 22:28:56', 'go google go check new', ''),
(4, 'Tony', '2017-01-26 22:29:20', 'what do you mean', ''),
(5, 'Fred', '2017-01-26 22:29:43', 'what do you mean', ''),
(6, 'Bola', '2017-01-26 22:30:02', 'dont get you ', ''),
(7, '4', '2017-01-27 17:42:55', '', ''),
(8, '4', '2017-01-27 19:36:41', 'nb yubyububjbhb', ''),
(9, '4', '2017-01-27 19:37:04', 'ademola', ''),
(10, '4', '2017-01-27 19:40:52', 'nuru badgan\r\n', ''),
(11, '4', '2017-01-27 19:43:43', 'nuru badgan\r\n', ''),
(12, '4', '2017-01-27 19:44:42', 'nuru badgan\r\n', ''),
(13, '4', '2017-01-27 19:45:20', 'nuru badgan\r\n', ''),
(14, '4', '2017-01-27 19:49:14', 'nuru badgan\r\n', ''),
(15, '4', '2017-01-27 20:00:29', 'nuru badgan\r\n', ''),
(16, '4', '2017-01-27 20:04:08', 'jbjb', ''),
(17, '4', '2017-01-28 00:17:24', 'JSON and Ajax', ''),
(18, '4', '2017-01-28 09:56:11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', ''),
(19, '4', '2017-01-28 10:01:06', 'ademola', ''),
(20, '4', '2017-01-28 10:03:03', 'mlmsdm,kds,s''[dkpads,oijmdohdinkcxjbnisojdojs', ''),
(21, '', '2017-01-28 10:06:55', '', 'abimbola'),
(22, '', '2017-01-28 10:07:32', '', 'abimbola'),
(23, '', '2017-01-28 10:12:36', 'mlmsdm,kds,s''[dkpads,oijmdohdinkcxjbnisojdojs', ''),
(24, '', '2017-01-28 10:15:12', 'mlmsdm,kds,s''[dkpads,oijmdohdinkcxjbnisojdojs', ''),
(25, '', '2017-01-28 10:15:38', 'ademola', ''),
(26, '', '2017-01-28 10:17:09', 'ademola', ''),
(27, '', '2017-01-28 10:17:49', 'ademola', ''),
(28, '4', '2017-01-28 10:18:23', 'ademola', ''),
(29, '4', '2017-01-28 10:18:33', 'fgshydytd', '');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_body` varchar(255) NOT NULL,
  `time_posted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_by`, `topic_subject`, `topic_body`, `time_posted`) VALUES
(1, 0, 'Hello, Please i want to learn javascript object where should i start from', 'i am the body\r\ni am the bodyi am the bodyi am the bodyibodyi am the bodyi am the bodyi am the  ', ''),
(2, 0, 'what is php', '', ''),
(3, 0, 'what is html\r\n', '', ''),
(4, 0, 'what is html\r\n', '', ''),
(5, 0, 'how can i solve this  jq', '', ''),
(6, 0, '', '', ''),
(7, 0, 'What is the main diffrence betweeb PDO::FETCH_ASSOC AND FETCH() method', '', ''),
(8, 0, 'What is the main diffrence betweeb PDO::FETCH_ASSOC AND FETCH() method', '', ''),
(9, 0, 'WHAT IS PDO', '', ''),
(10, 0, 'WHAT IS PDO', '', ''),
(11, 0, 'how do i send an alert  message on ajax', '', ''),
(12, 0, 'Whats d meaning of HTML HELP PLEASE!', '', ''),
(13, 0, 'Please how do i declare an object in javascript and please can you just sign an example', '', ''),
(14, 0, 'Good Morning', '', ''),
(15, 0, 'hi guy its anonymous', '', ''),
(16, 0, 'Good morning roomies, please i need a brief description and explanation of classes declaration and function or methods in PHP.... Thanx in advance', '', ''),
(17, 0, 'Thank you nurudeen', '', ''),
(18, 0, 'jkxjfidjf', '', ''),
(19, 0, 'my name is abim', '', ''),
(20, 0, 'ade', '', ''),
(21, 0, 'I need a web developer', '', ''),
(22, 0, 'dfbdft', '', ''),
(23, 0, 'who will helpn me', '', ''),
(24, 0, 'bhsn cdsdnc dj dcjd c', '', ''),
(25, 0, 'Good evening guys, i want you to help me', '', ''),
(26, 0, 'asds sjsm js dscbds cdj', '', '  January 2017, at 10.31 pm '),
(28, 0, 'helo sir', '', '  January 2017, at 10.34 pm '),
(29, 0, 'helo good morning timing tins doing', '', '  January 2017, at 10.35 pm '),
(30, 0, 'Hi guys, join me at code demo day where i will be presenting my project called switch group, catch ya!!', '', '  2017-01-24 10pm '),
(31, 0, 'ksjds', '', '  25/01/17 02am '),
(32, 0, 'udfdndeufn dbfdbf df', '', '  25/01/17 02am '),
(33, 0, 'm,zsfhldhsfd', '', '  25/01/17 02am '),
(34, 0, 'sjdshjofkdsf', '', '  25/01/17 03am '),
(35, 0, 'are you still working at all?\r\n', '', '  25/01/17 03am '),
(36, 0, 'sbjdksds', '', '  25/01/17 03am '),
(37, 0, 'kjjsf', '', '  25/01/17 08am '),
(38, 0, 'just posted by ajayi nurudeen', '', '  25/01/17 10am '),
(39, 0, 'asdjlsjkd shd shjsk fs', '', '  25/01/17 10am '),
(40, 0, 'ahjad bsd s s dshd nsdbhs ', '', '  25/01/17 10am '),
(41, 0, 'jaskewedsjksjkdsd', '', '  25/01/17 10am '),
(42, 0, 'hjkjjkabjknknawldnwsfnlkewfnlejfforlejj', '', '  25/01/17 10am '),
(43, 0, 'hyjryuj', '', '  25/01/17 12pm '),
(44, 0, 'abimbola', '', '  25/01/17 12pm '),
(45, 0, 'nurudeen', '', '  25/01/17 12pm '),
(46, 0, 'loop', '', '  25/01/17 12pm '),
(47, 0, 'ikjashshws', '', '  25/01/17 01pm '),
(48, 0, 'lkdfkflep', '', '  25/01/17 01pm '),
(49, 0, 'tony', '', '  25/01/17 01pm '),
(50, 0, 'vbtrrtgetb', '', '  25/01/17 01pm '),
(51, 0, 'htnyujuyjht', '', '  25/01/17 01pm '),
(52, 0, 'adbola', '', '  25/01/17 06pm '),
(53, 0, 'adeola\r\n', '', '  25/01/17 07pm '),
(54, 0, 'What is PHP', '', '  26/01/17 08am '),
(55, 0, 'hugwswuw', '', '  27/01/17 11am '),
(56, 0, 'JavaScript', '', '  27/01/17 11am '),
(57, 0, 'you they look me', '', '  27/01/17 05pm '),
(58, 0, 'klckc', '', '  28/01/17 01am '),
(59, 0, 'ldpew', '', 'java'),
(60, 0, 'javaScript', '', '  28/01/17 01am '),
(61, 0, 'javaScript', '', '  28/01/17 01am '),
(62, 0, 'hjfujgftug', ' njmbh\r\nhjnbghhi\r\nhbhjk', '  28/01/17 01am '),
(63, 0, 'Please i want to learn PHP', 'please where can i learn PHP\r\nplease where can i learn PHPplease where can i learn PHPplease where can i learn PHPplease where can i learn PHPplease where can i learn PHPplease where can i learn PHPplease where can i learn PHPplease where can i learn PHPp', '  28/01/17 02am '),
(64, 0, 'HTML', 'Where can i learn html', '  28/01/17 03am ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Ademola', 'Yusuf', 'adeola@gmail.com', 'adeola1'),
(9, 'nuru', 'adekoya', 'nurnkoya@gmail.com', 'koya'),
(10, '', '', '', ''),
(11, 'kunle', 'wale', 'wale@gmail.com', 'ademola'),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, 'wizubizu', 'abimbola', 'bola@gmail.com', 'odugbesan'),
(15, 'abimbola', 'abimbola', 'kola@me.com', 'kola'),
(16, 'ademola', 'bola', 'bola@you.com', 'bola'),
(17, 'ademola', 'bola', 'bola@you.com', ''),
(18, 'kola', 'abimbola', 'sola', 'ade'),
(19, 'hsdsdj', 'hjdhdfj', 'ssfffdfj', 'nurudeen'),
(20, 'abimbola', 'wizubizu', 'dsdsds', '123'),
(21, 'ade', 'ade', 'ade@gmail.com', 'ade'),
(22, 'abimbola', 'ademola', 'abim@gmail.com', 'abimbola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
