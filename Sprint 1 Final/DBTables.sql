
CREATE TABLE `cinemaTable` (
  `cinema_id` int(11) NOT NULL,
  `cinemaName` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phoneNr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `cinemaTable`
  ADD PRIMARY KEY (`cinema_id`);

	ALTER TABLE `cinemaTable`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


CREATE TABLE `movieEvent` (
  `event_ID` int(11) NOT NULL,
  `movieName` varchar(50) NOT NULL,
  `nrOfSeats` int(11) NOT NULL,
  `movieDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `movieEvent`
  ADD PRIMARY KEY (`event_ID`);

	ALTER TABLE `movieEvent`
	  MODIFY `event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

CREATE TABLE `MovieTable` (
  `id_movie` int(11) NOT NULL,
  `movieName` varchar(500) NOT NULL,
  `movieType` varchar(500) NOT NULL,
  `movieIntro` longtext NOT NULL,
  `movieDate` date NOT NULL,
  `Rating` int(11) NOT NULL,
  `pictureName` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `MovieTable`
  ADD PRIMARY KEY (`id_movie`);

	ALTER TABLE `MovieTable`
	  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

CREATE TABLE `UserTable` (
  `id_user` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `e_Mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  ALTER TABLE `UserTable`
    ADD PRIMARY KEY (`id_user`);

	ALTER TABLE `UserTable`
    MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

CREATE TABLE `ContactUsTable` (
    `subject_ID` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `subject` longtext NOT NULL
  ) ENGINE=InnoALTER TABLE `ContactUsTable`

  ADD PRIMARY KEY (`subject_ID`);
DB DEFAULT CHARSET=utf8;

ALTER TABLE `ContactUsTable`
  ADD PRIMARY KEY (`subject_ID`);

  ALTER TABLE `ContactUsTable`
    MODIFY `subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

  ALTER TABLE `paymentTable`
  ADD PRIMARY KEY (`paymeny_ID`);

  ALTER TABLE `paymentTable`
    MODIFY `paymeny_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
