-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2017 at 01:43 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Movie_Ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemaTable`
--

CREATE TABLE `cinemaTable` (
`cinema_id` int(11) NOT NULL,
`cinemaName` varchar(50) NOT NULL,
`address` text NOT NULL,
`phoneNr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cinemaTable`
--

INSERT INTO `cinemaTable` (`cinema_id`, `cinemaName`, `address`, `phoneNr`) VALUES
(1, 'Biobaren', 'Fastighetesvägen 22 12122 Karlskrona', '+123123'),
(2, 'Karlskrona Movies', 'Minvervavägen 33 16270 Karlskrona', '+112233');

-- --------------------------------------------------------

--
-- Table structure for table `ContactUsTable`
--

CREATE TABLE `ContactUsTable` (
`subject_ID` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`subject` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ContactUsTable`
--

INSERT INTO `ContactUsTable` (`subject_ID`, `name`, `email`, `subject`) VALUES
(1, '0', '0', ' TEsting Test'),
(2, '0', '0', ' TEsssstt'),
(3, '0', '0', ' HI'),
(4, '0', '0', 'Tessst444 '),
(5, 'This Should Work', 'Work@.com', 'LALALA'),
(6, 'Hi', 'TestAgian', ' Work');

-- --------------------------------------------------------

--
-- Table structure for table `movieEvent`
--

CREATE TABLE `movieEvent` (
`event_ID` int(11) NOT NULL,
`movieName` varchar(50) NOT NULL,
`nrOfSeats` int(11) NOT NULL,
`movieDate` date NOT NULL,
`eventPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movieEvent`
--

INSERT INTO `movieEvent` (`event_ID`, `movieName`, `nrOfSeats`, `movieDate`, `eventPrice`) VALUES
(4, 'The Great Wall', 50, '2017-03-09', 150),
(5, 'The Great Wall', 44, '2017-03-04', 150),
(6, 'The Great Wall', 67, '2017-03-08', 150),
(7, 'A Man Called Ove', 40, '2017-03-01', 120),
(8, 'A Man Called Ove', 32, '2017-03-08', 120),
(9, 'A Man Called Ove', 30, '2017-03-05', 120),
(10, 'A Man Called Ove', 77, '2017-03-07', 120),
(11, 'La La Land', 44, '2017-03-23', 130),
(12, 'La La Land', 50, '2017-03-24', 130),
(13, 'Fifty Shades Darker', 23, '2017-03-18', 160),
(14, 'Fifty Shades Darker', 55, '2017-03-19', 160),
(15, 'Moana in Disney', 33, '2017-03-06', 90),
(16, 'The Light between Oceans', 20, '2017-03-20', 140);

-- --------------------------------------------------------

--
-- Table structure for table `MovieTable`
--

CREATE TABLE `MovieTable` (
`id_movie` int(11) NOT NULL,
`movieName` varchar(500) NOT NULL,
`movieType` varchar(500) NOT NULL,
`movieIntro` longtext NOT NULL,
`movieDate` date NOT NULL,
`Rating` int(11) NOT NULL,
`pictureName` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MovieTable`
--

INSERT INTO `MovieTable` (`id_movie`, `movieName`, `movieType`, `movieIntro`, `movieDate`, `Rating`, `pictureName`) VALUES
(1, 'A Man Called Ove', 'Comedy, Drama', 'Ove, an ill-tempered, isolated retiree who spends his days enforcing block ', '2017-03-01', 0, 'uploads/58b85d0f21ef16.78641536.jpg'),
(2, 'La La Land', 'Comedy, Drama, Musical', 'A jazz pianist falls for an aspiring actress in Los Angeles.', '2017-03-02', 0, 'uploads/58b867ac3da651.21184066.jpg'),
(3, 'Fifty Shades Darker', 'Drama, Romance', 'While Christian wrestles with his inner demons, Anastasia must confront ..', '2017-03-02', 0, 'uploads/58b867ed112c11.65709561.jpg'),
(4, 'The Great Wall', 'Action, Adventure, Fantasy', 'European mercenaries searching for black powder become embroiled...', '2017-02-16', 0, 'uploads/58b8681a39f173.82478860.jpg'),
(5, 'Moana in Disney', 'Animation, Adventure, Comedy', 'In Ancient Polynesia, when a terrible curse incurred by the Demigod', '2017-01-14', 0, 'uploads/58b86abb270e71.59807123.jpg'),
(6, 'The Light between Oceans', 'Drama, Romance', 'A lighthouse keeper and his wife living off the coast of Western..', '2016-02-20', 0, 'uploads/58b86b0cd72b43.08023824.jpg'),
(7, 'Testing', 'Testttt', 'This is a test				', '2017-03-02', 0, 'uploads/58b8715c722ae4.60725136.png');

-- --------------------------------------------------------

--
-- Table structure for table `paymentTable`
--

CREATE TABLE `paymentTable` (
`FirstName` varchar(50) NOT NULL,
`LastName` varchar(50) NOT NULL,
`nrOfSeatsBuy` int(11) NOT NULL,
`event_ID` int(11) NOT NULL,
`CardType` varchar(50) NOT NULL,
`exDay` varchar(50) NOT NULL,
`CVC` int(11) NOT NULL,
`cardFName` varchar(50) NOT NULL,
`cardLName` varchar(50) NOT NULL,
`paymeny_ID` int(11) NOT NULL,
`userName` varchar(50) NOT NULL,
`cardNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paymentTable`
--

INSERT INTO `paymentTable` (`FirstName`, `LastName`, `nrOfSeatsBuy`, `event_ID`, `CardType`, `exDay`, `CVC`, `cardFName`, `cardLName`, `paymeny_ID`, `userName`, `cardNumber`) VALUES
('A', 'B', 1, 4, 'VISA', '3', 5, 'C', 'D', 1, 'User02', '2'),
('Test1', 'Test2', 10, 8, 'MasterCard', '1217', 123, 'Test3', 'Test4', 2, 'User02', '11'),
('Mattias', 'Bitar', 5, 5, 'VISA', '1220', 321, 'Mattias', 'Bitar', 4, 'User02', '12303012390'),
('Mattias', 'Bitar', 34, 5, 'VISA', '12', 12, 'ss', 'as', 5, 'User02', '1123'),
('Mattias', 'Bitar', 34, 5, 'VISA', '12', 12, 'ss', 'as', 6, 'User02', '1123'),
('Mattias', 'Bitar', 34, 5, 'VISA', '12', 12, 'ss', 'as', 7, 'User02', '1123'),
('Mattias', 'Bitar', 2, 5, 'VISA', '3', 3, 'as', 'sa', 8, 'User02', '3'),
('Matt', 'Bit', 4, 11, 'MasterCard', '123', 123, 'Matte', 'Bit', 42, 'User02', '123123'),
('Matt', 'DD', 12, 11, 'MasterCard', '213', 123, 'asdas', 'asdasd', 43, 'User02', '223'),
('Matttt', 'BIIITTT', 12, 16, 'MasterCard', '12', 12, 'aa', 'bb', 44, 'User02', '212');

-- --------------------------------------------------------

--
-- Table structure for table `UserTable`
--

CREATE TABLE `UserTable` (
`id_user` int(11) NOT NULL,
`userName` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`e_Mail` varchar(100) NOT NULL,
`mob` varchar(50) NOT NULL,
`name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `UserTable`
--

INSERT INTO `UserTable` (`id_user`, `userName`, `password`, `e_Mail`, `mob`, `name`) VALUES
(5, 'User01', '1234', '', '', '0'),
(6, 'User02', '1234', 'asdasd', '', '0'),
(7, 'User03', '1234', 'user03@mail.se', '', '0'),
(8, 'User04', '1234', 'user04@hotmail.com', '', '0'),
(9, 'User1', '123', 'mattiasbitar@hotmail.se', '', '0'),
(10, 'User44', '12', 'asdass.com', '', '0'),
(11, 'user111', '1', 'iser@.com', '', '0'),
(12, 'User0133', '1', 'asdasd@asdas', '', '0'),
(13, 'User11111', '1', 'asdasd@asdas', '', '0'),
(14, 'user111111123', '1', 'sdasd@dd.c', '', '0'),
(15, 'User300303', '1', 'asdasd@asdas', '', '0'),
(16, 'User1234', '1234', 'asdasd@asdas', '', '0'),
(17, 'Test1', '123', 'djdjjdhewqqd@hotmail.com', '', '0'),
(18, 'Test2', '123', 'djdjjdhewqqd@hotmail.com', '', '0'),
(19, 'User0112312213123', '1', 'asdasd@asdas', '', '0'),
(20, 'Test.3', '123', 'djdjjdhewqqd@hotmail.com', '', '0'),
(21, 'User01222121212', '1', 'djdjjdhewqqd@hotmail.com', '', '0'),
(22, 'User122', '1', '1', '', '0'),
(23, 'User02sadasd', '123', 'asdasd@12', '', '0'),
(24, 'User011213123123123', '123', 'dasdas@hotmail.com', '0731123456', '0'),
(25, 'User0112131231231232', '123', 'dasdas@hotmail.com', '0731123456', '0'),
(26, 'User01121312312312323', '12', 'dasdas@hotmail.com', '073112345633', '0'),
(27, 'User01123wswqdsad', '12', 'asdasd@asdas', '123123123', '0'),
(28, 'User123123123123', '123', '123@123.com', '123', 'name123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemaTable`
--
ALTER TABLE `cinemaTable`
ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `ContactUsTable`
--
ALTER TABLE `ContactUsTable`
ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `movieEvent`
--
ALTER TABLE `movieEvent`
ADD PRIMARY KEY (`event_ID`);

--
-- Indexes for table `MovieTable`
--
ALTER TABLE `MovieTable`
ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `paymentTable`
--
ALTER TABLE `paymentTable`
ADD PRIMARY KEY (`paymeny_ID`);

--
-- Indexes for table `UserTable`
--
ALTER TABLE `UserTable`
ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinemaTable`
--
ALTER TABLE `cinemaTable`
MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ContactUsTable`
--
ALTER TABLE `ContactUsTable`
MODIFY `subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `movieEvent`
--
ALTER TABLE `movieEvent`
MODIFY `event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `MovieTable`
--
ALTER TABLE `MovieTable`
MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `paymentTable`
--
ALTER TABLE `paymentTable`
MODIFY `paymeny_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `UserTable`
--
ALTER TABLE `UserTable`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
