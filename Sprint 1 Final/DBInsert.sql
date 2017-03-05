INSERT INTO `cinemaTable` (`cinema_id`, `cinemaName`, `address`, `phoneNr`) VALUES
(1, 'Biobaren', 'Fastighetesvägen 22 12122 Karlskrona', '+123123'),
(2, 'Karlskrona Movies', 'Minvervavägen 33 16270 Karlskrona', '+112233');

INSERT INTO `MovieTable` (`id_movie`, `movieName`, `movieType`, `movieIntro`, `movieDate`, `Rating`, `pictureName`) VALUES
(1, 'A Man Called Ove', 'Comedy, Drama', 'Ove, an ill-tempered, isolated retiree who spends his days enforcing block ', '2017-03-01', 0, 'uploads/58b85d0f21ef16.78641536.jpg'),
(2, 'La La Land', 'Comedy, Drama, Musical', 'A jazz pianist falls for an aspiring actress in Los Angeles.', '2017-03-02', 0, 'uploads/58b867ac3da651.21184066.jpg'),
(3, 'Fifty Shades Darker', 'Drama, Romance', 'While Christian wrestles with his inner demons, Anastasia must confront ..', '2017-03-02', 0, 'uploads/58b867ed112c11.65709561.jpg'),
(4, 'The Great Wall', 'Action, Adventure, Fantasy', 'European mercenaries searching for black powder become embroiled...', '2017-02-16', 0, 'uploads/58b8681a39f173.82478860.jpg'),
(5, 'Moana in Disney', 'Animation, Adventure, Comedy', 'In Ancient Polynesia, when a terrible curse incurred by the Demigod', '2017-01-14', 0, 'uploads/58b86abb270e71.59807123.jpg'),
(6, 'The Light between Oceans', 'Drama, Romance', 'A lighthouse keeper and his wife living off the coast of Western..', '2016-02-20', 0, 'uploads/58b86b0cd72b43.08023824.jpg'),
(7, 'Testing', 'Testttt', 'This is a test				', '2017-03-02', 0, 'uploads/58b8715c722ae4.60725136.png');

INSERT INTO `UserTable` (`id_user`, `userName`, `password`, `e_Mail`) VALUES
(5, 'User01', '1234', ''),
(6, 'User02', '1234', 'asdasd'),
(7, 'User03', '1234', 'user03@mail.se'),
(8, 'User04', '1234', 'user04@hotmail.com'),
(9, 'User1', '123', 'mattiasbitar@hotmail.se'),
(10, 'User44', '12', 'asdass.com'),
(11, 'user111', '1', 'iser@.com'),
(12, 'User0133', '1', 'asdasd@asdas'),
(13, 'User11111', '1', 'asdasd@asdas'),
(14, 'user111111123', '1', 'sdasd@dd.c'),
(15, 'User300303', '1', 'asdasd@asdas'),
(16, 'User1234', '1234', 'asdasd@asdas'),
(17, 'Test1', '123', 'djdjjdhewqqd@hotmail.com'),
(18, 'Test2', '123', 'djdjjdhewqqd@hotmail.com'),
(19, 'User0112312213123', '1', 'asdasd@asdas'),
(20, 'Test.3', '123', 'djdjjdhewqqd@hotmail.com'),
(21, 'User01222121212', '1', 'djdjjdhewqqd@hotmail.com'),
(22, 'User122', '1', '1'),
(23, 'User02sadasd', '123', 'asdasd@12');

INSERT INTO `ContactUsTable` (`subject_ID`, `name`, `email`, `subject`) VALUES
(1, '0', '0', ' TEsting Test'),
(2, '0', '0', ' TEsssstt'),
(3, '0', '0', ' HI'),
(4, '0', '0', 'Tessst444 '),
(5, 'This Should Work', 'Work@.com', 'LALALA'),
(6, 'Hi', 'TestAgian', ' Work');

INSERT INTO `paymentTable` (`FirstName`, `LastName`, `nrOfSeatsBuy`, `event_ID`, `CardType`, `exDay`, `CVC`, `cardFName`, `cardLName`, `paymeny_ID`, `userName`, `cardNumber`) VALUES
('A', 'B', 1, 4, 'VISA', '3', 5, 'C', 'D', 1, 'User02', '2'),
('Test1', 'Test2', 10, 8, 'MasterCard', '1217', 123, 'Test3', 'Test4', 2, 'User02', '11');

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
