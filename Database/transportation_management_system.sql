-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 09:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transportation_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Full_name` text NOT NULL,
  `Mobile_number` int(14) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Full_name`, `Mobile_number`, `Password`) VALUES
('Abid Shahriar Aunu', 1731556939, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `port` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`port`) VALUES
('Dhaka'),
('Chittagong'),
('Sylhet'),
('Saidpur');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stands`
--

CREATE TABLE `bus_stands` (
  `stand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_stands`
--

INSERT INTO `bus_stands` (`stand`) VALUES
('Dhaka'),
('Bogura'),
('Chittagong'),
('Sylhet'),
('Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `job_id` varchar(30) NOT NULL,
  `Full_name` text NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Educational_qualification` varchar(200) NOT NULL,
  `Present_address` varchar(200) NOT NULL,
  `Permanent_address` varchar(200) NOT NULL,
  `Mobile_number` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` varchar(30) NOT NULL,
  `transport` varchar(15) NOT NULL,
  `post` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `educational_qualification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `launch_port`
--

CREATE TABLE `launch_port` (
  `port` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `launch_port`
--

INSERT INTO `launch_port` (`port`) VALUES
('Barishal'),
('Feni');

-- --------------------------------------------------------

--
-- Table structure for table `plane`
--

CREATE TABLE `plane` (
  `Plane_ID` varchar(4) NOT NULL,
  `Total_Seats` int(3) NOT NULL,
  `Plane_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plane`
--

INSERT INTO `plane` (`Plane_ID`, `Total_Seats`, `Plane_Name`) VALUES
('BDB1', 300, 'Bangladesh Biman'),
('BDB2', 200, 'Bangladesh Biman-2');

-- --------------------------------------------------------

--
-- Table structure for table `plane_class`
--

CREATE TABLE `plane_class` (
  `Class_Name` varchar(20) NOT NULL,
  `Price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plane_class`
--

INSERT INTO `plane_class` (`Class_Name`, `Price`) VALUES
('Economy Class', 1500),
('Business Class', 3500),
('First Class', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `plane_number_of_seats`
--

CREATE TABLE `plane_number_of_seats` (
  `Plane_ID` varchar(4) NOT NULL,
  `available_seats` int(3) NOT NULL,
  `Total_Seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plane_number_of_seats`
--

INSERT INTO `plane_number_of_seats` (`Plane_ID`, `available_seats`, `Total_Seats`) VALUES
('BDB2', 200, 200),
('BDB1', 300, 300);

-- --------------------------------------------------------

--
-- Table structure for table `plane_payment`
--

CREATE TABLE `plane_payment` (
  `Account_number` int(12) NOT NULL,
  `NID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plane_port`
--

CREATE TABLE `plane_port` (
  `port` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plane_port`
--

INSERT INTO `plane_port` (`port`) VALUES
('Dhaka'),
('Chittagong'),
('Sylhet'),
('Saidpur');

-- --------------------------------------------------------

--
-- Table structure for table `plane_route`
--

CREATE TABLE `plane_route` (
  `Departure_Time` varchar(7) NOT NULL,
  `Port_From` varchar(20) NOT NULL,
  `Arrival_Time` varchar(7) NOT NULL,
  `Port_To` varchar(20) NOT NULL,
  `Plane_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plane_route`
--

INSERT INTO `plane_route` (`Departure_Time`, `Port_From`, `Arrival_Time`, `Port_To`, `Plane_ID`) VALUES
('04:00PM', 'Dhaka', '05:00PM', 'Chittagong', 'BDB1'),
('10:00AM', 'Chittagong', '11:00AM', 'Dhaka', 'BDB1'),
('01:00PM', 'Sylhet', '02:00PM', 'Saidpur', 'BDB2'),
('09:00PM', 'Saidpur', '10:00PM', 'Sylhet', 'BDB2');

-- --------------------------------------------------------

--
-- Table structure for table `plane_ticket`
--

CREATE TABLE `plane_ticket` (
  `Ticket_Number` varchar(50) NOT NULL,
  `Journey_Date` varchar(15) NOT NULL,
  `Seat_class` varchar(20) NOT NULL,
  `Price` int(4) NOT NULL,
  `NID` int(10) NOT NULL,
  `Plane_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rail_class`
--

CREATE TABLE `rail_class` (
  `Class_Name` varchar(10) NOT NULL,
  `Price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rail_class`
--

INSERT INTO `rail_class` (`Class_Name`, `Price`) VALUES
('SHOVON', 250),
('SNIGDHA', 600),
('AC Seat', 750),
('AC Berth', 990);

-- --------------------------------------------------------

--
-- Table structure for table `rail_number_of_seats`
--

CREATE TABLE `rail_number_of_seats` (
  `Train_ID` varchar(4) NOT NULL,
  `available_seats` int(3) NOT NULL,
  `Total_Seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rail_number_of_seats`
--

INSERT INTO `rail_number_of_seats` (`Train_ID`, `available_seats`, `Total_Seats`) VALUES
('JAM3', 100, 100),
('PAD1', 130, 130),
('MEG2', 150, 150),
('KAR4', 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `rail_payment`
--

CREATE TABLE `rail_payment` (
  `Account_number` int(12) NOT NULL,
  `NID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rail_route`
--

CREATE TABLE `rail_route` (
  `Departure_Time` varchar(7) NOT NULL,
  `Station_From` varchar(20) NOT NULL,
  `Arrival_Time` varchar(7) NOT NULL,
  `Station_To` varchar(20) NOT NULL,
  `Train_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rail_route`
--

INSERT INTO `rail_route` (`Departure_Time`, `Station_From`, `Arrival_Time`, `Station_To`, `Train_ID`) VALUES
('10:00AM', 'Dhaka', '04:00PM', 'Bogura', 'PAD1'),
('10:00AM', 'Dhaka', '03:00PM', 'Chittagong', 'MEG2'),
('02:30PM', 'Pabna', '11:00PM', 'Dhaka', 'JAM3'),
('09:00PM', 'Dinajpur', '08:30AM', 'Dhaka', 'KAR4'),
('05:00PM', 'Bogura', '11:00PM', 'Dhaka', 'PAD1'),
('04:00PM', 'Chittagong', '09:00PM', 'Dhaka', 'MEG2'),
('12:00AM', 'Dhaka', '08:30AM', 'Pabna', 'JAM3'),
('09:30AM', 'Dhaka', '08:30AM', 'Dinajpur', 'KAR4');

-- --------------------------------------------------------

--
-- Table structure for table `rail_station`
--

CREATE TABLE `rail_station` (
  `station` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rail_station`
--

INSERT INTO `rail_station` (`station`) VALUES
('Dhaka'),
('Bogura'),
('Pabna'),
('Dinajpur'),
('Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `rail_ticket`
--

CREATE TABLE `rail_ticket` (
  `Ticket_Number` varchar(50) NOT NULL,
  `Journey_Date` varchar(15) NOT NULL,
  `Seat_class` varchar(10) NOT NULL,
  `Price` int(4) NOT NULL,
  `NID` int(10) NOT NULL,
  `Train_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rail_train`
--

CREATE TABLE `rail_train` (
  `Train_ID` varchar(4) NOT NULL,
  `Total_Seats` int(3) NOT NULL,
  `Train_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rail_train`
--

INSERT INTO `rail_train` (`Train_ID`, `Total_Seats`, `Train_Name`) VALUES
('JAM3', 100, 'Jamuna'),
('KAR4', 200, 'Karnafuli'),
('MEG2', 150, 'Meghna'),
('PAD1', 130, 'Padma');

-- --------------------------------------------------------

--
-- Table structure for table `registered_customers`
--

CREATE TABLE `registered_customers` (
  `NID` int(10) NOT NULL,
  `Full_name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Mobile_number` int(14) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Post_Code` int(4) NOT NULL,
  `number_of_tickets` int(2) NOT NULL,
  `cost` int(3) NOT NULL,
  `journeys` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_customers`
--

INSERT INTO `registered_customers` (`NID`, `Full_name`, `Email`, `Password`, `Mobile_number`, `Address`, `Post_Code`, `number_of_tickets`, `cost`, `journeys`) VALUES
(123456789, 'Abid Shahriar Aunu', 'iamabid.shahriar@gmail.com', 'asdf', 1784583749, 'Lakeshore Apartment, BA- 1/4, South Badda, Gulshan, Dhaka- 1212', 1212, 0, 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Mobile_number`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `plane`
--
ALTER TABLE `plane`
  ADD PRIMARY KEY (`Plane_ID`);

--
-- Indexes for table `plane_class`
--
ALTER TABLE `plane_class`
  ADD PRIMARY KEY (`Price`);

--
-- Indexes for table `plane_number_of_seats`
--
ALTER TABLE `plane_number_of_seats`
  ADD PRIMARY KEY (`Total_Seats`),
  ADD KEY `Plane_ID` (`Plane_ID`);

--
-- Indexes for table `plane_payment`
--
ALTER TABLE `plane_payment`
  ADD KEY `NID` (`NID`);

--
-- Indexes for table `plane_ticket`
--
ALTER TABLE `plane_ticket`
  ADD PRIMARY KEY (`Ticket_Number`),
  ADD KEY `NID` (`NID`),
  ADD KEY `Plane_ID` (`Plane_ID`);

--
-- Indexes for table `rail_class`
--
ALTER TABLE `rail_class`
  ADD PRIMARY KEY (`Price`);

--
-- Indexes for table `rail_number_of_seats`
--
ALTER TABLE `rail_number_of_seats`
  ADD PRIMARY KEY (`Total_Seats`),
  ADD KEY `Train_ID` (`Train_ID`);

--
-- Indexes for table `rail_payment`
--
ALTER TABLE `rail_payment`
  ADD KEY `NID` (`NID`);

--
-- Indexes for table `rail_ticket`
--
ALTER TABLE `rail_ticket`
  ADD PRIMARY KEY (`Ticket_Number`),
  ADD KEY `NID` (`NID`),
  ADD KEY `Train_ID` (`Train_ID`);

--
-- Indexes for table `rail_train`
--
ALTER TABLE `rail_train`
  ADD PRIMARY KEY (`Train_ID`);

--
-- Indexes for table `registered_customers`
--
ALTER TABLE `registered_customers`
  ADD PRIMARY KEY (`NID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plane_number_of_seats`
--
ALTER TABLE `plane_number_of_seats`
  ADD CONSTRAINT `plane_number_of_seats_ibfk_1` FOREIGN KEY (`Plane_ID`) REFERENCES `plane` (`Plane_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plane_payment`
--
ALTER TABLE `plane_payment`
  ADD CONSTRAINT `plane_payment_ibfk_1` FOREIGN KEY (`NID`) REFERENCES `registered_customers` (`NID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plane_ticket`
--
ALTER TABLE `plane_ticket`
  ADD CONSTRAINT `plane_ticket_ibfk_1` FOREIGN KEY (`NID`) REFERENCES `registered_customers` (`NID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plane_ticket_ibfk_2` FOREIGN KEY (`Plane_ID`) REFERENCES `plane` (`Plane_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rail_number_of_seats`
--
ALTER TABLE `rail_number_of_seats`
  ADD CONSTRAINT `rail_number_of_seats_ibfk_1` FOREIGN KEY (`Train_ID`) REFERENCES `rail_train` (`Train_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rail_payment`
--
ALTER TABLE `rail_payment`
  ADD CONSTRAINT `rail_payment_ibfk_1` FOREIGN KEY (`NID`) REFERENCES `registered_customers` (`NID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rail_ticket`
--
ALTER TABLE `rail_ticket`
  ADD CONSTRAINT `rail_ticket_ibfk_1` FOREIGN KEY (`NID`) REFERENCES `registered_customers` (`NID`),
  ADD CONSTRAINT `rail_ticket_ibfk_2` FOREIGN KEY (`Train_ID`) REFERENCES `rail_train` (`Train_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
