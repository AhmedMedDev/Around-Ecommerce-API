-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 03:57 PM
-- Server version: 5.7.30-log
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `around`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `compony_name` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `apartment` varchar(10) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `compony_name`, `country`, `street`, `apartment`, `city`, `postcode`, `phone`) VALUES
(1, 'O\'Conner, Collier and Ernser', 'Peru', 'Dedrick Avenue', '32138', 'South Dominiquebury', '66186-6101', '+1 (939) 267-8620'),
(2, 'Streich Inc', 'Christmas Island', 'Kreiger Greens', '88647', 'Kiaraberg', '59498-6013', '+1-613-256-9466'),
(3, 'D\'Amore, Luettgen and Cassin', 'Luxembourg', 'Sauer Manors', '2778', 'North Monserrate', '81537-0153', '+1.638.670.5350'),
(4, 'Mitchell, Stark and Cassin', 'Guernsey', 'Wehner Pines', '749', 'Blaisehaven', '00446-3377', '1-792-668-0168'),
(5, 'Gottlieb-Schuppe', 'Niger', 'Haag Park', '996', 'Lake Shyann', '14154-2214', '865.704.3804 x82648'),
(6, 'Brakus Ltd', 'Philippines', 'Judah Glens', '7437', 'Shieldsside', '99131-6554', '792-336-3989 x9859'),
(7, 'Hickle, Hodkiewicz and Spencer', 'Dominican Republic', 'Hugh Park', '29690', 'Hilpertstad', '38199', '(453) 647-3232'),
(8, 'Ortiz-Orn', 'Eritrea', 'Jerel Estate', '49092', 'Abbeyhaven', '20245-9848', '(603) 360-0173 x228'),
(9, 'Cruickshank Ltd', 'Jordan', 'Nikko Lights', '5596', 'Kshlerinview', '94057', '230.740.1289 x324'),
(10, 'Hessel-Rempel', 'New Zealand', 'Edd Rest', '3842', 'Reynoldville', '48219-5754', '646.355.2481'),
(11, 'Yundt, Fisher and Gislason', 'Mauritius', 'Bridgette Cove', '9643', 'Nathenland', '39915', '1-264-209-5072 x807'),
(12, 'Macejkovic-Boehm', 'Gambia', 'McClure View', '635', 'North Tamia', '98325-3190', '+12785813115'),
(13, 'Schuster and Sons', 'Lesotho', 'Kiana Springs', '200', 'Turcottebury', '92907-5489', '341-879-2078'),
(14, 'Altenwerth, Considine and Carter', 'Cuba', 'Laney Mountain', '77488', 'Goodwinfort', '86045', '1-903-964-0893 x9265'),
(15, 'King-Ondricka', 'Sierra Leone', 'Herman Springs', '13455', 'New Gaetano', '63498-4888', '221-260-7837 x84069'),
(16, 'Boyle, Wintheiser and Schmeler', 'Sri Lanka', 'Corkery Avenue', '51127', 'Roseside', '94183-6008', '717.703.9897 x74821'),
(17, 'Shields-Fay', 'Jersey', 'Pansy Heights', '7795', 'Hettingerland', '20879-8005', '(889) 264-5760 x617'),
(18, 'Bahringer, Brekke and Williamson', 'Senegal', 'Brett Crescent', '524', 'South Cesar', '37698-4891', '618.395.7812 x1187'),
(19, 'Vandervort-Kassulke', 'Puerto Rico', 'Zboncak Keys', '347', 'Feilbury', '94295', '(479) 322-3908 x634'),
(20, 'Bergstrom, Beier and McGlynn', 'Saint Kitts and Nevis', 'Walker Point', '198', 'Herzogbury', '96234-9869', '+18327878627'),
(21, 'Langworth-Kutch', 'Guyana', 'Mohr Lake', '263', 'North Colt', '66344', '880-516-6924 x313'),
(22, 'Dickens Ltd', 'Isle of Man', 'Effertz Mission', '30571', 'East Bobbyview', '00687', '228-885-3814 x59867'),
(23, 'Howe, Gleason and Hoeger', 'Niger', 'Oscar Viaduct', '274', 'Pietrochester', '26253', '534.727.5176'),
(24, 'Raynor, Hoppe and Mills', 'Chad', 'O\'Keefe Hills', '980', 'Lake Madie', '51192', '1-295-693-1604 x93992'),
(25, 'Brown, Lowe and Schimmel', 'Finland', 'Brook Village', '19828', 'South Macstad', '74460-5523', '1-217-522-7381'),
(26, 'Gutkowski, Huel and Harris', 'Luxembourg', 'Brad Glen', '775', 'West Sammy', '14094', '+1-632-352-2654'),
(27, 'McCullough and Sons', 'Saudi Arabia', 'Bechtelar Motorway', '79578', 'Nyaburgh', '92471', '+1 (542) 904-3178'),
(28, 'Crist LLC', 'Lesotho', 'Virginia Street', '35940', 'West Rosemaryshire', '64318', '1-909-541-0030 x71140'),
(29, 'Hessel, Stamm and Labadie', 'Sao Tome and Principe', 'Kris Ports', '429', 'West Wainoton', '21837', '+18298632198'),
(30, 'Moen and Sons', 'Cote d\'Ivoire', 'Jaskolski Crescent', '85439', 'Georgianamouth', '60566', '(382) 832-4027 x48397'),
(31, 'Armstrong-Nitzsche', 'Bahrain', 'Balistreri Cove', '4243', 'Fordland', '30256-7199', '1-352-824-4812 x50927'),
(32, 'Green Inc', 'Estonia', 'Adelia Summit', '609', 'Lilianshire', '46076', '1-697-278-8690 x30573'),
(33, 'Lowe, Lang and Gottlieb', 'Tokelau', 'Bins Hollow', '19656', 'East Eliseoland', '20829', '1-223-338-2441 x1155'),
(34, 'Pollich-Hilpert', 'Papua New Guinea', 'Hackett Island', '543', 'East Breanna', '47471-0353', '+1.952.358.2331'),
(35, 'Davis Ltd', 'Kiribati', 'Maybelle Pike', '86067', 'Rogahnside', '80858', '1-295-742-7197 x423'),
(36, 'Nitzsche, Schneider and Kuhic', 'Tunisia', 'Micheal Circles', '8754', 'North Santiago', '60031', '+1-327-555-5061'),
(37, 'Walter, Waelchi and Deckow', 'Uzbekistan', 'Bulah Views', '266', 'Andersonton', '02834-1961', '(548) 967-8096'),
(38, 'Brakus, Rutherford and Schneider', 'Romania', 'Otho Estate', '836', 'West Cathrynview', '27072-1519', '(789) 901-8108 x820'),
(39, 'Feeney Ltd', 'Cameroon', 'Sandra Park', '8531', 'West Korbin', '03715-1628', '1-858-322-5197 x34496'),
(40, 'Reynolds, Heidenreich and Boyle', 'Indonesia', 'Rosamond Tunnel', '44278', 'West Connieville', '29160', '+1.951.629.8213'),
(41, 'Ward-Wisoky', 'Nicaragua', 'Isabelle Flats', '2073', 'Lake Walton', '49571-2576', '(847) 996-2173 x036'),
(42, 'Heller-Keeling', 'Kiribati', 'Glenda Pike', '25975', 'West Lon', '21657', '1-556-595-7069'),
(43, 'Jast PLC', 'Montenegro', 'Laura Pike', '1712', 'New Janaview', '78399-0788', '+1 (660) 427-3967'),
(44, 'Raynor Ltd', 'Mali', 'Hintz Fork', '7665', 'Bauchland', '55873', '1-957-583-7941'),
(45, 'Hartmann-Will', 'Canada', 'Brakus Inlet', '96852', 'Braulioborough', '36450-1528', '571-766-0982 x3119'),
(46, 'Lakin Ltd', 'San Marino', 'Garry Shore', '31929', 'West Aniyah', '06761-4956', '+1-680-300-2232'),
(47, 'Braun-Fisher', 'Vietnam', 'Balistreri Expressway', '87935', 'West Minervastad', '32192-9281', '1-713-265-5661 x79407'),
(48, 'Oberbrunner and Sons', 'India', 'Sam Lodge', '1849', 'Romaguerabury', '32693', '657-890-1647'),
(49, 'Hilpert-Cormier', 'Tanzania', 'Sasha Road', '64052', 'Merlinberg', '61156-6724', '1-936-390-5971'),
(50, 'Mayert Group', 'Iraq', 'Johnson Run', '7493', 'Paucekberg', '82032', '1-879-848-4579 x35315'),
(51, 'Weimann, Goyette and Huels', 'Turkmenistan', 'Vicenta Unions', '1317', 'Martinechester', '58074-5847', '+1.963.837.7943'),
(52, 'Eichmann-Bednar', 'Netherlands Antilles', 'Schoen Port', '97462', 'Thielchester', '23023-9052', '1-373-792-0406'),
(53, 'Runolfsson Inc', 'Bosnia and Herzegovina', 'Ruben Plains', '4044', 'Moenburgh', '85874', '(942) 677-9288 x245'),
(54, 'Botsford, Schoen and Shields', 'Singapore', 'Lilyan Path', '4106', 'East Janieside', '05672-2588', '(384) 602-3056'),
(55, 'Konopelski-Mitchell', 'Montenegro', 'Monahan Greens', '16340', 'West Abigalehaven', '18745', '+1-286-694-4519'),
(56, 'Conn, McClure and Simonis', 'Bolivia', 'Scot Ferry', '220', 'Port Rodrigo', '90936', '1-751-822-9789 x01201'),
(57, 'Glover and Sons', 'Morocco', 'Garth Mission', '788', 'Kuvalisburgh', '65703-0817', '+19154067594'),
(58, 'Toy-Schroeder', 'Luxembourg', 'Julien Crest', '56443', 'Lorenview', '35888-7577', '694-681-0478'),
(59, 'Hermann Group', 'Qatar', 'Beer Estate', '49320', 'North Dereckmouth', '18738-4096', '254.961.5442'),
(60, 'Hansen and Sons', 'Thailand', 'Ratke Lake', '20824', 'Lake Leopoldo', '26601-5601', '468.933.2522 x46302'),
(61, 'Heller, Schmitt and Torp', 'Algeria', 'Kuhn Trafficway', '53968', 'North Cooper', '13947-8280', '(936) 767-5543'),
(62, 'Jones, Monahan and Wintheiser', 'Cuba', 'Corwin Skyway', '9708', 'South Mariannemouth', '62758-1382', '(378) 869-4906 x2318'),
(63, 'Denesik Ltd', 'Myanmar', 'Tracy Harbor', '362', 'Andreaneborough', '76257-2332', '+14728369962'),
(64, 'Littel, Jacobi and Weber', 'Iran', 'Maude Pine', '1067', 'Keelingborough', '27311', '769.627.7098 x13859'),
(65, 'Towne PLC', 'Bahrain', 'Harris Loaf', '64285', 'Port Arielburgh', '72825', '586-924-6238 x49387'),
(66, 'Parisian-Lemke', 'Austria', 'Bednar Dale', '6248', 'New Elenor', '09449', '1-708-365-6879 x8813'),
(67, 'Crona LLC', 'Panama', 'Kessler Union', '213', 'Elroymouth', '16477', '(273) 872-5890 x28281'),
(68, 'Kemmer-Mohr', 'Syrian Arab Republic', 'Bruen Landing', '4636', 'Port Oceaneport', '00057', '(561) 543-9766 x7301'),
(69, 'Rath-Effertz', 'Panama', 'Tianna Bridge', '442', 'West Afton', '49795-7155', '824.255.4927'),
(70, 'Ward, Gislason and VonRueden', 'Macao', 'Judy Union', '13123', 'West Demariohaven', '39856-9930', '+1 (445) 231-0224'),
(71, 'Kovacek and Sons', 'Palau', 'Jakubowski Points', '432', 'North Hosea', '27564-7287', '(818) 407-0554 x616'),
(72, 'Tremblay and Sons', 'Thailand', 'Bins Locks', '3313', 'South Daltonport', '10041-5712', '1-461-383-7808 x1309'),
(73, 'Johns-Armstrong', 'Australia', 'Schultz Neck', '910', 'South Opheliachester', '93637', '870-812-1696'),
(74, 'Goodwin, Sanford and DuBuque', 'Saint Helena', 'Morton Summit', '29621', 'Schadenburgh', '07198-4126', '442-898-6059'),
(75, 'Bergstrom, Dickinson and Wolff', 'Lao People\'s Democratic Republic', 'Waylon Ford', '1305', 'Lake Melissa', '66032', '(230) 540-9455 x63855'),
(76, 'Carroll Group', 'Turks and Caicos Islands', 'Jerde Mountain', '5755', 'Lake Lorena', '91825-8793', '328.914.3329 x73766'),
(77, 'Brown Inc', 'Philippines', 'Maureen Views', '67772', 'New Candido', '55980', '1-561-656-0804 x499'),
(78, 'Predovic, Ankunding and Kertzmann', 'Nauru', 'Stoltenberg Drives', '71200', 'Aufderharshire', '83084', '(578) 330-7882 x61778'),
(79, 'Kshlerin-Skiles', 'French Polynesia', 'Bert Orchard', '27505', 'East Bessieton', '58548-1545', '+14388443585'),
(80, 'Von-Leuschke', 'South Georgia and the South Sandwich Islands', 'Koepp Drive', '53095', 'Port Evabury', '49052-6969', '396.280.9453 x97735'),
(81, 'Heller-Collins', 'Saint Vincent and the Grenadines', 'Ondricka Turnpike', '6705', 'Lake Foster', '23153-6035', '334-225-7907'),
(82, 'Lehner, Christiansen and Gislason', 'Afghanistan', 'Pfannerstill Mountains', '97105', 'New Rafael', '81956-8723', '(868) 497-3028'),
(83, 'Grady LLC', 'Nepal', 'Stokes Harbor', '65115', 'Hillshaven', '35422', '275-632-6828 x169'),
(84, 'Fritsch, Collier and Schiller', 'French Guiana', 'Kassulke Ramp', '83903', 'New Joanland', '70917-7185', '1-346-727-3440 x70884'),
(85, 'Pacocha-Conn', 'Montenegro', 'Dorothea Key', '558', 'Helenestad', '62056-9020', '441.769.2711'),
(86, 'Pouros Ltd', 'Cayman Islands', 'Mosciski Turnpike', '1943', 'Cruzshire', '60023', '(989) 627-7288'),
(87, 'Lemke and Sons', 'Solomon Islands', 'Kitty Ville', '6913', 'McLaughlinshire', '98016', '327.853.3117'),
(88, 'Gerlach-Zieme', 'Syrian Arab Republic', 'Gutmann Road', '282', 'Taylorton', '50592-2533', '802-918-7484');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `quantity`, `size_id`, `color_id`) VALUES
(1, 31, 26, 5, 43, 30),
(2, 8, 20, 8, 40, 25),
(3, 12, 6, 6, 43, 30),
(4, 12, 40, 4, 48, 14),
(5, 40, 22, 3, 37, 48),
(6, 7, 25, 5, 29, 13),
(7, 4, 35, 6, 17, 38),
(8, 46, 14, 7, 23, 41),
(9, 2, 41, 1, 9, 24),
(10, 11, 22, 0, 12, 2),
(11, 8, 25, 8, 6, 3),
(12, 37, 40, 8, 8, 47),
(13, 12, 35, 6, 9, 4),
(14, 44, 45, 8, 21, 49),
(15, 22, 27, 6, 28, 8),
(16, 32, 13, 7, 43, 15),
(17, 22, 41, 0, 46, 30),
(18, 23, 20, 5, 42, 1),
(19, 34, 43, 0, 4, 16),
(20, 31, 32, 7, 43, 14),
(21, 43, 6, 1, 26, 28),
(22, 15, 13, 0, 31, 22),
(23, 34, 42, 9, 4, 15),
(24, 28, 32, 7, 39, 21),
(25, 31, 7, 1, 6, 33),
(26, 34, 11, 4, 11, 33),
(27, 37, 42, 1, 16, 7),
(28, 4, 45, 6, 5, 12),
(29, 22, 13, 3, 22, 41),
(30, 25, 13, 9, 42, 2),
(31, 34, 47, 9, 45, 21),
(32, 15, 34, 6, 41, 18),
(33, 47, 29, 6, 21, 39),
(34, 14, 32, 5, 6, 40),
(35, 9, 8, 3, 8, 42),
(36, 22, 30, 6, 1, 15),
(37, 8, 39, 2, 24, 45),
(38, 5, 17, 9, 27, 18),
(39, 42, 33, 8, 12, 48),
(40, 43, 16, 2, 33, 38),
(41, 28, 17, 5, 5, 21),
(42, 16, 43, 4, 24, 47),
(43, 12, 44, 4, 23, 25),
(44, 24, 17, 2, 19, 8),
(45, 37, 47, 4, 24, 6),
(46, 26, 13, 8, 13, 41),
(47, 30, 4, 5, 13, 15),
(48, 49, 3, 9, 1, 36),
(49, 3, 4, 0, 39, 15),
(50, 36, 9, 6, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_img`) VALUES
(1, 'Bertrand Williamson', 'https://lorempixel.com/283/241/?24515'),
(2, 'Frieda Hill', 'https://lorempixel.com/283/241/?48277'),
(3, 'Georgette Flatley', 'https://lorempixel.com/283/241/?50052'),
(4, 'Sierra Rosenbaum IV', 'https://lorempixel.com/283/241/?57607'),
(5, 'Hunter Lang', 'https://lorempixel.com/283/241/?13526'),
(6, 'Dr. Alberto Wuckert', 'https://lorempixel.com/283/241/?33332'),
(7, 'Dr. Skyla Jacobson', 'https://lorempixel.com/283/241/?53155'),
(8, 'Kareem Mraz', 'https://lorempixel.com/283/241/?31711'),
(9, 'Ms. Rowena Keeling DDS', 'https://lorempixel.com/283/241/?61815'),
(10, 'Chad Corwin MD', 'https://lorempixel.com/283/241/?60376'),
(11, 'Prof. Hipolito Funk', 'https://lorempixel.com/283/241/?56414'),
(12, 'Craig Denesik', 'https://lorempixel.com/283/241/?21940'),
(13, 'Rickey Grimes', 'https://lorempixel.com/283/241/?37177'),
(14, 'Dr. Tyson Cassin IV', 'https://lorempixel.com/283/241/?38235'),
(15, 'Ms. Aida Kerluke', 'https://lorempixel.com/283/241/?32591'),
(16, 'Prof. Imelda Vandervort', 'https://lorempixel.com/283/241/?70386'),
(17, 'Angeline Casper', 'https://lorempixel.com/283/241/?11149'),
(18, 'Malcolm Gislason DVM', 'https://lorempixel.com/283/241/?84741'),
(19, 'Prince Considine', 'https://lorempixel.com/283/241/?73953'),
(20, 'Maudie Lowe', 'https://lorempixel.com/283/241/?82770'),
(21, 'Chris Collins', 'https://lorempixel.com/283/241/?43431'),
(22, 'Elise Blick', 'https://lorempixel.com/283/241/?22954'),
(23, 'Ms. Mozell Armstrong', 'https://lorempixel.com/283/241/?24607'),
(24, 'Morgan Conn', 'https://lorempixel.com/283/241/?41369'),
(25, 'Dr. Eliza Romaguera', 'https://lorempixel.com/283/241/?21926'),
(26, 'Odessa Jast', 'https://lorempixel.com/283/241/?98873'),
(27, 'Lavonne Hegmann', 'https://lorempixel.com/283/241/?63847'),
(28, 'Mr. Dawson Bartell', 'https://lorempixel.com/283/241/?87397'),
(29, 'Jacklyn Waters', 'https://lorempixel.com/283/241/?30550'),
(30, 'Krista Schmidt', 'https://lorempixel.com/283/241/?43098'),
(31, 'Nikita Simonis III', 'https://lorempixel.com/283/241/?56067'),
(32, 'Sigurd Schroeder Jr.', 'https://lorempixel.com/283/241/?49231'),
(33, 'Anahi Rosenbaum', 'https://lorempixel.com/283/241/?83771'),
(34, 'Mervin Reichel', 'https://lorempixel.com/283/241/?48880'),
(35, 'Martine Trantow', 'https://lorempixel.com/283/241/?19517'),
(36, 'Heath Thompson', 'https://lorempixel.com/283/241/?72528'),
(37, 'Jakayla Kiehn', 'https://lorempixel.com/283/241/?90988'),
(38, 'Skylar Kertzmann', 'https://lorempixel.com/283/241/?22314'),
(39, 'Asha Bahringer PhD', 'https://lorempixel.com/283/241/?36232'),
(40, 'Monty Hudson', 'https://lorempixel.com/283/241/?43568'),
(41, 'Ardith Ratke', 'https://lorempixel.com/283/241/?62513'),
(42, 'Martina Ankunding', 'https://lorempixel.com/283/241/?39340'),
(43, 'Emily Morissette', 'https://lorempixel.com/283/241/?68163'),
(44, 'Stan Mitchell', 'https://lorempixel.com/283/241/?58339'),
(45, 'Erik Marks', 'https://lorempixel.com/283/241/?15548'),
(46, 'Akeem Auer DVM', 'https://lorempixel.com/283/241/?44823'),
(47, 'Gisselle Cremin', 'https://lorempixel.com/283/241/?37630'),
(48, 'Anabel O\'Connell Sr.', 'https://lorempixel.com/283/241/?82119'),
(49, 'Odell Casper', 'https://lorempixel.com/283/241/?78481'),
(50, 'Asa Frami', 'https://lorempixel.com/283/241/?28782');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `pro_color` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `pro_color`) VALUES
(1, '#530cd2'),
(2, '#030ba8'),
(3, '#cc3afe'),
(4, '#0cef9e'),
(5, '#83e6fb'),
(6, '#db53b2'),
(7, '#d29cb7'),
(8, '#44bb2b'),
(9, '#3881a3'),
(10, '#7e0f8a'),
(11, '#128f0f'),
(12, '#409070'),
(13, '#65b056'),
(14, '#02ccf0'),
(15, '#e7d8e2'),
(16, '#be029e'),
(17, '#ca9c69'),
(18, '#468064'),
(19, '#c17adb'),
(20, '#ce2ec2'),
(21, '#fe1e83'),
(22, '#68c506'),
(23, '#c746c8'),
(24, '#58f2e2'),
(25, '#3a1c04'),
(26, '#fed05d'),
(27, '#4f1604'),
(28, '#cc4b1a'),
(29, '#eb0a17'),
(30, '#3deab8'),
(31, '#fab03d'),
(32, '#86b6c9'),
(33, '#29024e'),
(34, '#e3be09'),
(35, '#cf4e43'),
(36, '#fa1300'),
(37, '#80b6f0'),
(38, '#9ff7a5'),
(39, '#0a9c16'),
(40, '#9a4782'),
(41, '#b46514'),
(42, '#edbc02'),
(43, '#3c8ac5'),
(44, '#7d69b2'),
(45, '#b16196'),
(46, '#0e7127'),
(47, '#6e11df'),
(48, '#19adf0'),
(49, '#2008aa'),
(50, '#ed0fe1');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `product_id`, `user_id`) VALUES
(1, 41, 30),
(2, 13, 40),
(3, 32, 33),
(4, 35, 25),
(5, 2, 23),
(6, 47, 28),
(7, 27, 12),
(8, 22, 24),
(9, 49, 37),
(10, 10, 8),
(11, 50, 7),
(12, 49, 22),
(13, 15, 28),
(14, 17, 26),
(15, 20, 9),
(16, 5, 23),
(17, 47, 31),
(18, 10, 39),
(19, 30, 22),
(20, 22, 39),
(21, 23, 31),
(22, 22, 29),
(23, 30, 1),
(24, 17, 6),
(25, 1, 33),
(26, 33, 28),
(27, 36, 47),
(28, 44, 36),
(29, 48, 6),
(30, 33, 28),
(31, 19, 3),
(32, 25, 47),
(33, 38, 47),
(34, 49, 44),
(35, 12, 13),
(36, 14, 36),
(37, 24, 5),
(38, 50, 13),
(39, 41, 30),
(40, 16, 18),
(41, 42, 36),
(42, 14, 32),
(43, 21, 47),
(44, 35, 14),
(45, 28, 17),
(46, 26, 22),
(47, 17, 9),
(48, 38, 11),
(49, 14, 32),
(50, 28, 39);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `product_id`, `percentage`) VALUES
(1, 35, 69),
(2, 45, 91),
(3, 4, 47),
(4, 23, 73),
(5, 46, 59),
(6, 12, 98),
(7, 45, 45),
(8, 45, 54),
(9, 40, 47),
(10, 14, 72),
(11, 9, 51),
(12, 21, 69),
(13, 24, 41),
(14, 24, 37),
(15, 49, 64),
(16, 36, 39),
(17, 3, 73),
(18, 38, 74),
(19, 15, 55),
(20, 20, 40),
(21, 31, 65),
(22, 13, 39),
(23, 8, 38),
(24, 20, 86),
(25, 15, 32),
(26, 1, 48),
(27, 23, 33),
(28, 13, 76),
(29, 32, 51),
(30, 22, 63),
(31, 3, 51),
(32, 2, 60),
(33, 34, 52),
(34, 6, 71),
(35, 30, 80),
(36, 43, 85),
(37, 12, 46),
(38, 28, 49),
(39, 47, 90),
(40, 22, 67),
(41, 2, 63),
(42, 4, 77),
(43, 23, 30),
(44, 40, 37),
(45, 46, 40),
(46, 3, 48),
(47, 37, 58),
(48, 49, 34),
(49, 31, 36),
(50, 34, 34);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_method` varchar(50) NOT NULL,
  `total_price` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date`, `payment_method`, `total_price`, `address_id`) VALUES
(1, 8, '2019-01-09 08:00:00', 'MasterCard', 113, 27),
(2, 27, '1996-09-29 07:00:00', 'Visa', 78, 32),
(3, 17, '1997-12-16 08:00:00', 'MasterCard', 162, 31),
(4, 39, '1994-09-17 07:00:00', 'MasterCard', 81, 31),
(5, 33, '2007-06-05 07:00:00', 'MasterCard', 154, 42),
(6, 28, '2020-06-12 07:00:00', 'Visa', 138, 10),
(7, 6, '2000-05-18 07:00:00', 'MasterCard', 98, 49),
(8, 9, '2008-09-24 07:00:00', 'Visa', 200, 36),
(9, 10, '1975-10-30 07:00:00', 'MasterCard', 129, 44),
(10, 34, '1986-10-26 07:00:00', 'Visa Retired', 152, 10),
(11, 26, '2015-02-05 08:00:00', 'MasterCard', 178, 31),
(12, 40, '1988-01-22 08:00:00', 'MasterCard', 172, 50),
(13, 1, '1975-09-01 07:00:00', 'MasterCard', 184, 50),
(14, 3, '1975-01-17 08:00:00', 'MasterCard', 142, 1),
(15, 3, '2013-12-08 08:00:00', 'MasterCard', 75, 27),
(16, 2, '1989-11-13 08:00:00', 'MasterCard', 55, 19),
(17, 12, '1997-01-19 08:00:00', 'MasterCard', 199, 5),
(18, 12, '1998-10-22 07:00:00', 'Visa', 130, 12),
(19, 22, '2020-06-12 07:00:00', 'MasterCard', 85, 45),
(20, 29, '1977-07-13 07:00:00', 'MasterCard', 68, 47),
(21, 25, '1979-09-04 07:00:00', 'Visa', 187, 18),
(22, 8, '2005-10-16 07:00:00', 'Visa', 80, 5),
(23, 16, '1992-08-27 07:00:00', 'Visa', 78, 43),
(24, 47, '1977-03-14 07:00:00', 'Visa', 81, 35),
(25, 45, '1976-10-02 07:00:00', 'Visa', 115, 22),
(26, 6, '1976-02-06 08:00:00', 'Visa', 80, 25),
(27, 41, '1980-10-15 07:00:00', 'MasterCard', 113, 35),
(28, 43, '1972-10-30 07:00:00', 'Visa', 144, 36),
(29, 2, '2007-11-29 08:00:00', 'MasterCard', 135, 45),
(30, 5, '2011-12-13 08:00:00', 'Visa', 51, 35),
(31, 44, '1995-09-15 07:00:00', 'Visa', 163, 28),
(32, 19, '2017-01-10 08:00:00', 'Visa', 74, 16),
(33, 41, '2016-09-18 07:00:00', 'Visa', 107, 9),
(34, 21, '1992-09-03 07:00:00', 'American Express', 50, 35),
(35, 41, '1986-04-05 07:00:00', 'MasterCard', 135, 8),
(36, 24, '1981-01-15 08:00:00', 'Visa Retired', 112, 27),
(37, 4, '1997-01-02 08:00:00', 'MasterCard', 56, 18),
(38, 8, '2001-10-22 07:00:00', 'Visa', 66, 9),
(39, 20, '2007-08-02 07:00:00', 'MasterCard', 178, 4),
(40, 45, '1975-09-05 07:00:00', 'MasterCard', 130, 3),
(41, 45, '1985-03-20 07:00:00', 'Visa', 74, 15),
(42, 6, '1971-01-07 08:00:00', 'Visa', 121, 47),
(43, 22, '2016-06-03 07:00:00', 'Visa', 104, 8),
(44, 20, '2001-07-06 07:00:00', 'Visa', 69, 8),
(45, 18, '1995-05-23 07:00:00', 'Visa', 111, 17),
(46, 8, '1977-02-01 08:00:00', 'MasterCard', 93, 30),
(47, 16, '2001-12-27 08:00:00', 'MasterCard', 80, 42),
(48, 50, '2021-04-01 07:00:00', 'Visa Retired', 126, 9),
(49, 14, '1985-06-02 07:00:00', 'MasterCard', 164, 26),
(50, 38, '2021-08-06 07:00:00', 'MasterCard', 133, 33);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `product_id`, `quantity`, `order_id`) VALUES
(1, 33, 9, 48),
(2, 20, 3, 9),
(3, 31, 7, 38),
(4, 41, 2, 39),
(5, 3, 5, 40),
(6, 19, 6, 27),
(7, 36, 9, 24),
(8, 44, 9, 31),
(9, 8, 2, 12),
(10, 22, 4, 33),
(11, 47, 2, 18),
(12, 26, 2, 2),
(13, 20, 9, 2),
(14, 2, 6, 31),
(15, 1, 2, 20),
(16, 2, 4, 39),
(17, 17, 9, 46),
(18, 25, 3, 5),
(19, 27, 7, 31),
(20, 30, 6, 2),
(21, 32, 1, 12),
(22, 21, 4, 12),
(23, 32, 8, 48),
(24, 3, 4, 36),
(25, 16, 7, 36),
(26, 38, 0, 26),
(27, 26, 7, 27),
(28, 22, 5, 33),
(29, 46, 2, 23),
(30, 25, 7, 8),
(31, 24, 4, 49),
(32, 35, 0, 45),
(33, 6, 5, 1),
(34, 37, 9, 39),
(35, 28, 9, 12),
(36, 29, 0, 9),
(37, 28, 1, 23),
(38, 14, 3, 29),
(39, 14, 7, 42),
(40, 23, 8, 41),
(41, 9, 6, 7),
(42, 29, 3, 13),
(43, 15, 0, 27),
(44, 11, 4, 26),
(45, 36, 3, 14),
(46, 23, 9, 16),
(47, 24, 3, 27),
(48, 33, 4, 46),
(49, 47, 4, 49),
(50, 19, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_des` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `mainImage` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pro_rate` int(5) NOT NULL,
  `pro_gender` varchar(1) NOT NULL,
  `favHeader` tinyint(1) NOT NULL DEFAULT '0',
  `trending` tinyint(1) NOT NULL DEFAULT '0',
  `defaultSize_id` int(11) NOT NULL,
  `defaultColor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_des`, `price`, `mainImage`, `category_id`, `pro_rate`, `pro_gender`, `favHeader`, `trending`, `defaultSize_id`, `defaultColor_id`) VALUES
(1, 'Ms. Evelyn Becker DVM', 'Consequuntur architecto nisi aut. Enim eius dicta quo dolores qui et. Ea numquam voluptatem reprehenderit aut molestiae id minima.', 3, 'https://lorempixel.com/283/241/?83609', 19, 5, 'M', 0, 0, 37, 33),
(2, 'Prof. Theodore Mayert', 'In animi ab animi atque omnis repellendus dolores. Est perferendis nihil omnis id qui enim omnis nobis. Ut ut qui est sapiente ducimus.', 64083703, 'https://lorempixel.com/283/241/?68794', 30, 4, 'B', 0, 0, 27, 39),
(3, 'Jalon Leannon', 'Fuga consectetur rerum officia iure. Explicabo ut enim velit sed totam. Soluta blanditiis excepturi id deserunt est. Neque omnis possimus et quam repudiandae nemo.', 61726337, 'https://lorempixel.com/283/241/?55392', 17, 5, 'F', 0, 0, 44, 10),
(4, 'Joshua Kuhn', 'Dolor eos sequi ipsam quod ut aut accusantium. Eveniet dolorem tempore nostrum corrupti. Molestias porro neque ex id sed porro fuga. Temporibus est optio accusamus id.', 0, 'https://lorempixel.com/283/241/?45594', 44, 3, 'F', 0, 0, 44, 32),
(5, 'Modesto Kling', 'Saepe consequatur maxime quo omnis magni maiores dicta doloribus. Nihil ea placeat saepe non quis iusto. Aut fugit praesentium nesciunt non enim aliquam quasi.', 1214, 'https://lorempixel.com/283/241/?50845', 23, 4, 'F', 0, 0, 45, 8),
(6, 'Kamryn Robel', 'Eum explicabo qui vel qui non repudiandae quae ab. Sunt ab est vero voluptas voluptas qui. Accusamus eius distinctio rem quod. Pariatur itaque vitae labore placeat maiores totam in.', 149, 'https://lorempixel.com/283/241/?48131', 6, 1, 'M', 0, 0, 36, 19),
(7, 'Dr. Elton Aufderhar III', 'Id vitae officiis ut quod voluptatem. Dolorem iste sint aspernatur nisi placeat et esse. Laborum expedita voluptatem aut vel et incidunt aut. Velit corrupti veniam ex alias neque et.', 15468, 'https://lorempixel.com/283/241/?88697', 2, 1, 'M', 0, 0, 1, 46),
(8, 'Prof. Emmett Maggio III', 'Ab perspiciatis natus iusto est quod consequuntur. Molestiae ratione atque enim minima. Veniam et ipsa magnam doloremque esse beatae quaerat.', 54455189, 'https://lorempixel.com/283/241/?17695', 6, 4, 'M', 0, 0, 31, 37),
(9, 'Judy Jacobson', 'Consectetur nulla est tempore labore corporis minus. Quod explicabo pariatur alias ab et veritatis facilis. Nihil excepturi rem reprehenderit omnis. Ut et nemo in hic amet.', 3360602, 'https://lorempixel.com/283/241/?64242', 25, 3, 'F', 0, 0, 1, 11),
(10, 'Irwin Auer', 'Et aliquid quos ab occaecati error qui itaque. Beatae eligendi assumenda aut qui placeat. Dolore eaque enim voluptate vel quis.', 160649220, 'https://lorempixel.com/283/241/?66196', 3, 4, 'F', 0, 0, 12, 35),
(11, 'Libbie McClure', 'Qui facere accusantium et corporis inventore dolores. Quia quo et rem eos vitae porro. Saepe in officia quo rerum tempore. Facere vel qui repudiandae qui odio.', 1, 'https://lorempixel.com/283/241/?71135', 46, 2, 'B', 0, 0, 48, 44),
(12, 'Stephanie Hoeger V', 'Sed odio officiis est suscipit. Dicta sint minima et voluptas quaerat. Occaecati quis doloremque quia repellat culpa. Debitis dolorem atque voluptatum laboriosam natus commodi. Sit voluptate ab sit.', 237459, 'https://lorempixel.com/283/241/?57104', 42, 4, 'B', 0, 0, 19, 10),
(13, 'Dr. Niko Pouros', 'Aut harum ullam et officiis qui quaerat. Eos id quae est est et sit. Commodi quo minus id cumque.', 127311894, 'https://lorempixel.com/283/241/?51880', 46, 3, 'F', 0, 0, 50, 39),
(14, 'Mrs. Tiffany Haag IV', 'Est quibusdam mollitia voluptatem fuga eum nostrum. Quod corrupti assumenda esse incidunt nihil suscipit et.', 10268177, 'https://lorempixel.com/283/241/?30613', 13, 1, 'M', 0, 0, 33, 1),
(15, 'Jackson Friesen', 'Sint dolorem numquam itaque laboriosam nihil. Quia architecto ab et delectus. Vel asperiores sint officiis dicta.', 11453602, 'https://lorempixel.com/283/241/?97775', 21, 3, 'F', 0, 0, 16, 24),
(16, 'Meredith Olson Jr.', 'Quidem sed quibusdam tenetur ut sunt. Voluptatibus sunt recusandae nemo voluptatem quia. Facere aliquam autem ex.', 5, 'https://lorempixel.com/283/241/?52020', 35, 3, 'M', 0, 0, 21, 33),
(17, 'Abbie Kilback', 'Dolor a excepturi consequuntur doloribus ad nam. Vitae aut esse saepe deleniti. Aliquid velit repudiandae voluptatem accusamus. Nulla voluptatem porro cupiditate repellat ducimus consequatur est.', 42517, 'https://lorempixel.com/283/241/?25222', 22, 3, 'M', 0, 0, 34, 44),
(18, 'Columbus Schuster V', 'Eveniet praesentium est ut itaque. Doloremque est consectetur sunt cupiditate dolores similique. Vel cupiditate eius possimus sed.', 200363, 'https://lorempixel.com/283/241/?29408', 34, 4, 'B', 0, 0, 35, 47),
(19, 'Pearl Feeney', 'Voluptatum optio aut esse et velit aliquam. Eum et eum id minima qui. Distinctio maxime ut officiis ipsum autem animi sapiente. Est quia nihil vero doloremque iure.', 331721333, 'https://lorempixel.com/283/241/?62112', 34, 5, 'F', 0, 0, 47, 5),
(20, 'Prof. Chanel Ledner MD', 'Blanditiis voluptate et quia sed eveniet sit. Voluptas molestiae dolores eos quaerat odio natus temporibus.', 9, 'https://lorempixel.com/283/241/?75736', 2, 1, 'B', 0, 0, 13, 5),
(21, 'Dr. Wyman Paucek', 'Quia aliquam quaerat voluptates atque. Magni ut ratione amet.', 1049, 'https://lorempixel.com/283/241/?75979', 15, 3, 'F', 0, 0, 23, 16),
(22, 'Prof. Hilton Marquardt', 'Occaecati maxime enim officiis itaque illo. Aut dolor praesentium quia velit. Modi incidunt tenetur voluptas accusantium voluptas voluptatum. Inventore nihil maxime quaerat quia.', 1820665, 'https://lorempixel.com/283/241/?41080', 26, 2, 'M', 0, 0, 46, 19),
(23, 'Wayne Larkin III', 'Nisi ut consequatur in et aut ea. Sit neque ipsa ipsam voluptatem rerum enim. A modi fuga totam aspernatur.', 3230, 'https://lorempixel.com/283/241/?11733', 7, 4, 'M', 0, 0, 48, 24),
(24, 'Mr. Osbaldo Crona', 'Atque molestiae non architecto voluptas qui et quia. Nostrum odit facere et qui. Ut recusandae qui qui incidunt error facere. Ex cupiditate et aut debitis eum modi quam. Sit non placeat quis ut.', 7909949, 'https://lorempixel.com/283/241/?95285', 46, 3, 'B', 0, 0, 15, 7),
(25, 'Mrs. Myah Hahn', 'Sed doloribus fugiat sunt odit. Aperiam explicabo excepturi aliquam qui. Temporibus sunt et veniam. Quos illum asperiores quis ut.', 688, 'https://lorempixel.com/283/241/?48918', 15, 2, 'F', 0, 0, 45, 5),
(26, 'Mr. Murphy Lemke', 'Ut blanditiis officiis ab est dolores. Dolores distinctio deserunt fuga aliquid nam vel nesciunt quasi. Neque a in esse eaque et qui.', 6558, 'https://lorempixel.com/283/241/?11697', 21, 1, 'M', 0, 0, 25, 7),
(27, 'Kamille Kutch', 'Vel quia autem vel est nesciunt rerum qui consectetur. Molestiae voluptas sint iure et. Et culpa est dolorum voluptatem molestiae accusantium. Eos autem quia doloremque rerum.', 21258, 'https://lorempixel.com/283/241/?52348', 2, 2, 'B', 0, 0, 49, 46),
(28, 'Hipolito Fahey', 'Quaerat quas error aut vero. Beatae nemo vel quia veritatis. Ipsa sint et soluta eaque tenetur non.', 27448, 'https://lorempixel.com/283/241/?84117', 16, 4, 'F', 0, 0, 12, 47),
(29, 'Alessandro Rice', 'Aut voluptas fugiat commodi quam. Quisquam placeat deserunt ut quaerat fuga enim. Saepe ex ullam officia maxime voluptatem et dolorem.', 0, 'https://lorempixel.com/283/241/?74288', 31, 4, 'F', 0, 0, 27, 34),
(30, 'Prof. Aiyana Gusikowski', 'Qui voluptatum voluptatem in qui placeat aliquam autem nemo. Voluptatibus blanditiis et voluptate laudantium. Eos explicabo ut in totam quia at dolore.', 41239, 'https://lorempixel.com/283/241/?70815', 26, 2, 'F', 0, 0, 6, 44),
(31, 'Herta Legros III', 'Officia ea neque eveniet non. Non velit et quasi totam libero delectus. Ut expedita occaecati soluta. Et vero eos rerum iusto voluptas saepe et.', 60, 'https://lorempixel.com/283/241/?42627', 42, 2, 'F', 0, 0, 5, 42),
(32, 'Selmer Wilderman', 'Similique fugiat delectus excepturi repudiandae itaque placeat non. Aperiam quia placeat ratione quia officiis. Ratione non nesciunt excepturi sed autem architecto perspiciatis.', 19, 'https://lorempixel.com/283/241/?44128', 37, 3, 'F', 0, 0, 13, 20),
(33, 'Elizabeth Hettinger I', 'Nobis modi magni repellendus eum fuga provident. Eligendi minima et voluptate tempore reprehenderit. Repellat eum quis ut asperiores aut. Est animi aut ut odit recusandae dolorem a.', 772, 'https://lorempixel.com/283/241/?48584', 13, 5, 'M', 0, 0, 3, 30),
(34, 'Jasper Langworth II', 'Mollitia quaerat molestiae minus ut. Quis error omnis commodi eveniet at. Qui veritatis cumque ut sequi. Dolorum molestias sit officiis vitae incidunt.', 33721658, 'https://lorempixel.com/283/241/?32510', 48, 2, 'M', 0, 0, 28, 24),
(35, 'Gregg Smitham', 'Voluptatum illum tenetur aut atque. Nemo nisi eum modi nihil et autem maiores.', 388, 'https://lorempixel.com/283/241/?80505', 31, 5, 'F', 0, 0, 36, 4),
(36, 'Mrs. Georgianna Price DDS', 'Ex rem sint ea nulla. Quo itaque magni molestias ea tempore inventore.', 233, 'https://lorempixel.com/283/241/?47062', 12, 3, 'B', 0, 0, 18, 5),
(37, 'Oswaldo Armstrong', 'Voluptatem omnis aperiam aliquam neque impedit vitae dolorum consequatur. Dolore dolores culpa molestias aut. Nihil aut adipisci ipsa autem ab qui blanditiis. Id in eum quia repellendus.', 4302388, 'https://lorempixel.com/283/241/?74122', 3, 5, 'F', 0, 0, 19, 21),
(38, 'Desiree Franecki', 'Veritatis voluptates consequatur qui nemo dolores saepe et nihil. Quod et perspiciatis placeat minus. Molestiae quos est voluptatem. Fugit est temporibus enim.', 38509643, 'https://lorempixel.com/283/241/?52289', 25, 5, 'F', 0, 0, 34, 50),
(39, 'Trudie Hegmann', 'Quo voluptatem odit sint sunt. Magnam ullam quia voluptates sed doloribus tempora.', 168204, 'https://lorempixel.com/283/241/?71537', 28, 2, 'M', 0, 0, 38, 46),
(40, 'Christina Lockman', 'Consequatur perferendis eveniet vel occaecati sit odit. Beatae incidunt eaque in quod dolorem. Labore dolorem sed ut reprehenderit nobis deleniti enim. Est dolorem incidunt magni nihil aut occaecati.', 0, 'https://lorempixel.com/283/241/?86629', 29, 2, 'F', 0, 0, 45, 47),
(41, 'Mr. Marlin Deckow III', 'Quo eius similique aut perferendis. Sed a animi aut error. Ullam dolorem aut eligendi expedita porro quo. Quia et aperiam quae blanditiis molestiae.', 8912398, 'https://lorempixel.com/283/241/?66436', 13, 5, 'B', 0, 0, 14, 25),
(42, 'Darrel Nitzsche', 'Aut a ut ut dolores. Impedit qui tenetur molestias fugiat tempore adipisci corporis. Dolorem officia autem id alias reiciendis ratione dolores.', 1, 'https://lorempixel.com/283/241/?33208', 9, 4, 'B', 0, 0, 30, 29),
(43, 'Vicente Jakubowski II', 'Aut consectetur vero assumenda autem est nam exercitationem. Numquam eaque non quidem aut ex aliquam nobis. Nemo odio qui sunt officia error.', 29689948, 'https://lorempixel.com/283/241/?49701', 16, 2, 'M', 0, 0, 5, 42),
(44, 'Grover Towne', 'Maxime omnis explicabo odit accusamus nisi et. Eum magnam suscipit eligendi ducimus totam accusantium. Asperiores rerum vel aut et. Illo id sit omnis et.', 10820, 'https://lorempixel.com/283/241/?66337', 36, 4, 'F', 0, 0, 44, 38),
(45, 'Lura Zulauf', 'In culpa quia laudantium in. Fugit aut aliquid est expedita sapiente. Et dolorem facilis aut.', 4, 'https://lorempixel.com/283/241/?75982', 46, 4, 'M', 0, 0, 7, 5),
(46, 'Hillard Feest', 'Odit iusto dolorum exercitationem maxime in iste. Occaecati quas nihil dignissimos dignissimos. Eligendi qui molestiae repellat soluta adipisci.', 2, 'https://lorempixel.com/283/241/?34474', 16, 4, 'M', 0, 0, 45, 11),
(47, 'Cornell Bayer', 'Facere possimus quasi excepturi quasi ducimus nulla. Quia et voluptatibus et ipsum quia nulla pariatur. Nihil officia odio earum quia.', 5, 'https://lorempixel.com/283/241/?56870', 47, 1, 'F', 0, 0, 42, 15),
(48, 'Ms. Rosa Franecki', 'Doloribus ut odit quod qui. Eius quo repudiandae aut non iure. In ipsa qui omnis exercitationem. Placeat voluptatum unde quaerat dolor.', 2769639, 'https://lorempixel.com/283/241/?34653', 26, 5, 'M', 0, 0, 38, 42),
(49, 'Ms. Aracely Hane DVM', 'Nulla repellendus harum voluptas dolorem beatae voluptas et. Soluta id quasi nesciunt et consequuntur ipsa ducimus accusamus. Non sequi dolores animi.', 413076, 'https://lorempixel.com/283/241/?76089', 21, 4, 'B', 0, 0, 47, 33),
(50, 'Angelo Denesik', 'Necessitatibus sunt magnam alias accusantium. Sit vel eum ea earum.', 26475, 'https://lorempixel.com/283/241/?88056', 18, 5, 'M', 0, 0, 29, 24);

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`) VALUES
(1, 9, 25),
(2, 20, 44),
(3, 49, 32),
(4, 39, 26),
(5, 16, 12),
(6, 12, 7),
(7, 11, 49),
(8, 5, 21),
(9, 48, 2),
(10, 40, 46),
(11, 15, 37),
(12, 40, 19),
(13, 27, 38),
(14, 44, 35),
(15, 9, 30),
(16, 6, 28),
(17, 48, 39),
(18, 11, 31),
(19, 48, 32),
(20, 13, 34),
(21, 32, 31),
(22, 36, 43),
(23, 16, 32),
(24, 22, 20),
(25, 38, 12),
(26, 48, 41),
(27, 9, 29),
(28, 33, 14),
(29, 14, 7),
(30, 21, 34),
(31, 8, 35),
(32, 40, 31),
(33, 11, 3),
(34, 34, 22),
(35, 15, 46),
(36, 40, 23),
(37, 23, 40),
(38, 41, 23),
(39, 7, 6),
(40, 35, 12),
(41, 37, 10),
(42, 19, 21),
(43, 30, 48),
(44, 23, 10),
(45, 33, 42),
(46, 25, 26),
(47, 30, 27),
(48, 39, 1),
(49, 35, 4),
(50, 5, 17);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `pro_img`, `product_id`) VALUES
(1, 'https://lorempixel.com/283/241/?41369', 30),
(2, 'https://lorempixel.com/283/241/?47013', 16),
(3, 'https://lorempixel.com/283/241/?28951', 38),
(4, 'https://lorempixel.com/283/241/?82345', 20),
(5, 'https://lorempixel.com/283/241/?56484', 22),
(6, 'https://lorempixel.com/283/241/?42119', 37),
(7, 'https://lorempixel.com/283/241/?50630', 31),
(8, 'https://lorempixel.com/283/241/?98311', 13),
(9, 'https://lorempixel.com/283/241/?60326', 17),
(10, 'https://lorempixel.com/283/241/?88230', 48),
(11, 'https://lorempixel.com/283/241/?90818', 47),
(12, 'https://lorempixel.com/283/241/?86521', 22),
(13, 'https://lorempixel.com/283/241/?91892', 20),
(14, 'https://lorempixel.com/283/241/?80232', 49),
(15, 'https://lorempixel.com/283/241/?71902', 50),
(16, 'https://lorempixel.com/283/241/?69940', 35),
(17, 'https://lorempixel.com/283/241/?15217', 6),
(18, 'https://lorempixel.com/283/241/?24765', 4),
(19, 'https://lorempixel.com/283/241/?80109', 44),
(20, 'https://lorempixel.com/283/241/?72679', 35),
(21, 'https://lorempixel.com/283/241/?80941', 44),
(22, 'https://lorempixel.com/283/241/?23613', 29),
(23, 'https://lorempixel.com/283/241/?32189', 46),
(24, 'https://lorempixel.com/283/241/?51024', 29),
(25, 'https://lorempixel.com/283/241/?99181', 2),
(26, 'https://lorempixel.com/283/241/?96430', 15),
(27, 'https://lorempixel.com/283/241/?75130', 19),
(28, 'https://lorempixel.com/283/241/?41694', 6),
(29, 'https://lorempixel.com/283/241/?24550', 29),
(30, 'https://lorempixel.com/283/241/?81174', 28),
(31, 'https://lorempixel.com/283/241/?61044', 22),
(32, 'https://lorempixel.com/283/241/?57115', 41),
(33, 'https://lorempixel.com/283/241/?67618', 3),
(34, 'https://lorempixel.com/283/241/?79321', 46),
(35, 'https://lorempixel.com/283/241/?96150', 8),
(36, 'https://lorempixel.com/283/241/?85209', 4),
(37, 'https://lorempixel.com/283/241/?29206', 36),
(38, 'https://lorempixel.com/283/241/?98768', 20),
(39, 'https://lorempixel.com/283/241/?49992', 10),
(40, 'https://lorempixel.com/283/241/?16284', 10),
(41, 'https://lorempixel.com/283/241/?69257', 48),
(42, 'https://lorempixel.com/283/241/?97917', 21),
(43, 'https://lorempixel.com/283/241/?89561', 2),
(44, 'https://lorempixel.com/283/241/?18164', 20),
(45, 'https://lorempixel.com/283/241/?64035', 49),
(46, 'https://lorempixel.com/283/241/?23402', 35),
(47, 'https://lorempixel.com/283/241/?41737', 8),
(48, 'https://lorempixel.com/283/241/?10938', 7),
(49, 'https://lorempixel.com/283/241/?99071', 27),
(50, 'https://lorempixel.com/283/241/?28365', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`) VALUES
(1, 9, 42),
(2, 28, 45),
(3, 27, 29),
(4, 32, 32),
(5, 28, 34),
(6, 32, 37),
(7, 1, 32),
(8, 37, 34),
(9, 19, 13),
(10, 47, 45),
(11, 44, 10),
(12, 38, 50),
(13, 46, 48),
(14, 14, 26),
(15, 38, 3),
(16, 28, 25),
(17, 11, 10),
(18, 40, 38),
(19, 35, 47),
(20, 22, 11),
(21, 26, 8),
(22, 12, 3),
(23, 38, 48),
(24, 48, 11),
(25, 18, 29),
(26, 35, 36),
(27, 16, 39),
(28, 20, 33),
(29, 43, 30),
(30, 11, 7),
(31, 15, 10),
(32, 9, 9),
(33, 20, 11),
(34, 31, 49),
(35, 16, 43),
(36, 42, 47),
(37, 22, 44),
(38, 50, 11),
(39, 32, 22),
(40, 18, 29),
(41, 21, 32),
(42, 44, 31),
(43, 12, 19),
(44, 11, 14),
(45, 47, 49),
(46, 39, 21),
(47, 10, 17),
(48, 13, 3),
(49, 14, 34),
(50, 24, 47);

-- --------------------------------------------------------

--
-- Table structure for table `resetpasswords`
--

CREATE TABLE `resetpasswords` (
  `id` int(11) NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `re_des` varchar(255) NOT NULL,
  `re_rate` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `re_des`, `re_rate`, `product_id`, `user_id`) VALUES
(1, 'Nihil dicta provident illo libero. Blanditiis sint officia est perspiciatis vel. Vero id et odit labore enim laudantium.', 1, 7, 34),
(2, 'Et expedita in voluptates laborum. Corrupti deserunt repudiandae perferendis quos vel qui dicta eligendi. Sequi inventore sapiente voluptates possimus ut.', 2, 17, 26),
(3, 'Et aut qui veritatis sequi. Aliquid asperiores aperiam et. Quis quae explicabo labore amet molestiae veritatis. Rerum voluptate et corporis in non.', 2, 47, 40),
(4, 'Quia doloribus illum aliquid ea sapiente omnis. Non sunt deserunt numquam qui. Distinctio ea aperiam suscipit voluptatem.', 5, 32, 3),
(5, 'Non sequi aliquid molestias fugit tenetur laudantium similique. Provident rerum autem dolores placeat. Modi sapiente enim ipsum libero assumenda. Consequatur et nihil consequatur illum hic optio amet voluptatem.', 2, 27, 8),
(6, 'Aspernatur fugit dignissimos expedita dolores repellat. Adipisci veniam ea ut necessitatibus. Similique suscipit corporis aliquid cupiditate asperiores.', 5, 5, 45),
(7, 'Sed quia rerum doloremque atque impedit sequi esse. Ut ipsam beatae voluptatem mollitia consequatur quibusdam.', 1, 31, 7),
(8, 'Nesciunt magni et qui sit eligendi enim assumenda. Dolorem deleniti omnis vero. Laudantium quam illo quibusdam fuga aspernatur tempore. Unde debitis sed soluta. Corrupti placeat illo rerum.', 2, 40, 9),
(9, 'Aut consequatur in atque. Consequatur doloribus omnis aut mollitia. Eos delectus dolorem qui blanditiis quis. Nobis reiciendis voluptas natus nihil in fugit quae. Et ratione labore nihil quidem.', 4, 22, 11),
(10, 'Quos voluptatum recusandae voluptatem nobis temporibus aut repudiandae voluptatem. Asperiores ea quia nihil necessitatibus asperiores. Ut aut nam libero beatae nesciunt facere qui. Ut et incidunt ut est.', 5, 7, 5),
(11, 'Id animi ea est repellat adipisci in in. Culpa possimus voluptatum adipisci tenetur. Iure ipsa nostrum recusandae facere quis impedit. Aut blanditiis quas et recusandae corporis aut.', 5, 15, 33),
(12, 'Exercitationem voluptates beatae rem illum. Doloribus quam repellat id aut deleniti ea. Ut temporibus possimus occaecati quo autem. Eos aut nihil non enim sit distinctio.', 1, 10, 9),
(13, 'Alias aliquid voluptatem libero non vel consectetur ut. Nihil expedita aut ut doloribus nisi. Voluptatem est sint optio incidunt.', 4, 46, 24),
(14, 'Doloribus occaecati sit non at omnis. Non sapiente accusantium quisquam omnis voluptates. Cumque ipsa et aut nulla adipisci occaecati fugit aut.', 2, 31, 14),
(15, 'Rerum autem molestiae totam voluptatem ex aut ducimus. Sed dolores amet molestiae omnis qui. Necessitatibus est veniam dolore reprehenderit harum.', 2, 46, 36),
(16, 'Sit dolorem quia error error corporis. Temporibus non voluptatem ducimus ut. Et omnis est quibusdam delectus quia est cupiditate. Voluptas est nemo voluptatem odit.', 2, 45, 13),
(17, 'Et sint autem et dolores ducimus veritatis et. Qui ut corporis facere sint tenetur aspernatur odio. Vitae corporis dolor dolor optio. Provident ab est quod optio accusamus praesentium.', 1, 23, 25),
(18, 'Rerum eos explicabo sunt. Amet quia velit est molestiae quo accusantium qui adipisci. Magni et et rerum et laudantium cumque. Voluptas et enim quis necessitatibus quia odit et explicabo.', 2, 19, 9),
(19, 'Natus accusantium aperiam eos dolor impedit enim. Ducimus nemo perferendis dicta. Dolorem enim sit aut iure quia.', 3, 6, 47),
(20, 'Magnam fuga eos quibusdam aspernatur voluptas architecto. Cupiditate qui consequatur sint assumenda tempore officia voluptates. Rerum libero autem iusto perferendis eaque voluptatem. Est facilis nihil aut deleniti qui quas labore.', 2, 22, 4),
(21, 'Atque non vero minima amet ipsam minus iusto consectetur. Autem architecto impedit sapiente placeat dolor. Deleniti ipsa consequuntur dolor omnis.', 5, 6, 47),
(22, 'Ratione voluptatem officia vero aperiam iste et voluptas quas. Commodi doloribus est quaerat. Ea porro reprehenderit illum soluta et quasi non. Nihil dignissimos vel tempore corrupti assumenda velit.', 3, 31, 48),
(23, 'Et voluptatibus optio vero rerum est odio dicta. Voluptatem sint rerum repellendus qui rerum. Odit est alias ex sed iusto. Itaque optio rem soluta voluptatem.', 2, 24, 2),
(24, 'Et sed qui id suscipit quia rerum. Quo aperiam qui commodi quo ullam est sit sunt. Nulla est optio veritatis aut ex labore inventore.', 2, 46, 18),
(25, 'Alias et facere temporibus ea. Beatae omnis asperiores repellat id mollitia fugit. Eos nihil excepturi et vero. Deserunt dolorem hic ducimus corrupti id non.', 1, 9, 40),
(26, 'Rerum officia eum quisquam quo praesentium. Commodi cupiditate sit maxime recusandae aut. Non dolore tempora optio nulla. Ullam quos aliquid veniam placeat perspiciatis eveniet.', 5, 47, 48),
(27, 'Qui enim error quas est fugiat. Voluptas voluptatem adipisci doloribus enim et voluptatibus aut. Commodi aliquam non et et ipsum et. Quis recusandae enim exercitationem facilis.', 5, 23, 5),
(28, 'Magnam tempora vero voluptas blanditiis incidunt. Consequatur unde ad similique et totam. Qui ipsam ut ea dolor impedit. Cum provident itaque voluptatem ut.', 2, 23, 45),
(29, 'Voluptas et quasi alias aut. Sit dicta soluta beatae saepe quas odio. Vel nulla perspiciatis et ut occaecati laborum. Pariatur quasi inventore nemo.', 1, 15, 18),
(30, 'Totam quasi aliquid dolores ut dolores possimus quia. Sed rerum aut id velit et. Illo illo ipsum et enim provident sint minus.', 5, 22, 6),
(31, 'Optio harum minus nihil sapiente. Et ut odio eum ab ratione ipsa cumque. Quia et laboriosam nesciunt sed quae et. A dicta et laborum soluta.', 5, 2, 6),
(32, 'Sequi incidunt culpa assumenda incidunt quis reiciendis dignissimos. Dolorum ullam esse perspiciatis possimus nostrum nemo. Error similique ut deleniti praesentium qui molestiae.', 1, 41, 33),
(33, 'Corrupti ipsam rerum qui fuga minima. Iste necessitatibus qui nihil est cumque. Quaerat sed hic et quibusdam amet. Possimus rem eius porro voluptatem repudiandae provident sit. Quae in voluptatem velit beatae.', 5, 21, 3),
(34, 'Aspernatur ea sed ipsa dolores non totam. Et voluptatum quam est qui voluptatem rerum quibusdam. Et iure iusto eos omnis iusto velit tempore consequatur. Hic odit dolorum qui optio nostrum qui inventore accusamus.', 1, 5, 48),
(35, 'Quae aut laudantium quisquam accusamus. Similique aut ut voluptate et non veniam recusandae autem. Ipsam molestiae qui placeat autem ut a. Reiciendis ad porro beatae.', 3, 23, 3),
(36, 'Dolores ratione labore sit qui voluptatem rem corrupti tenetur. Doloremque architecto corporis accusamus. Esse explicabo mollitia consequatur ea iure quo. Autem esse sunt recusandae molestias et.', 1, 49, 15),
(37, 'Ipsa rerum temporibus maiores. Eaque blanditiis temporibus sed minima quos exercitationem enim maxime. Modi qui facere recusandae ipsam ipsam voluptatem illo.', 3, 40, 41),
(38, 'Autem ex dignissimos nihil quia earum doloremque. Sed dolores error qui nulla quia.', 2, 32, 43),
(39, 'Et et ea temporibus magni tempore. Odio quas nam dolor atque ut. Placeat error ullam est quia voluptate magnam totam.', 1, 14, 35),
(40, 'Placeat in veritatis provident voluptatem voluptatem et. Quia dolores quod id dolor maxime facilis veniam. Iste repudiandae fugit esse enim voluptatum. Asperiores aspernatur ad nesciunt.', 2, 42, 13),
(41, 'Quo consequatur ut ipsam deserunt vitae quisquam eligendi. Explicabo atque quia et. Earum fugiat recusandae autem voluptatem omnis quia. Corporis est sunt blanditiis voluptate mollitia aut.', 5, 33, 20),
(42, 'Autem debitis distinctio sit eligendi deleniti quam vel est. Aut consequatur eos et voluptatibus. Et cupiditate et est dolorum architecto.', 5, 42, 42),
(43, 'Explicabo vel molestiae quasi magni dolorum et excepturi ipsam. Molestiae possimus reiciendis dolor reprehenderit asperiores laudantium aut. Et architecto error qui non. Repudiandae dolorem incidunt rerum ipsa quia repellat.', 1, 50, 45),
(44, 'Molestiae velit sed deleniti voluptatem eligendi doloribus est. Quia itaque esse quam aut doloribus ea praesentium. Esse provident rerum fugit. Qui ut occaecati in quae rerum quis sit sed.', 4, 39, 28),
(45, 'Quisquam dolores saepe praesentium sit molestiae repudiandae. Temporibus rem earum reprehenderit quisquam voluptatem perspiciatis. Sunt non labore dolores omnis sit totam aliquam itaque. Ex quaerat ut asperiores voluptatem odit et.', 2, 9, 48),
(46, 'Velit provident ut fugiat dolores. Odit assumenda nisi cum ducimus. Ipsam et vero omnis quo voluptate veniam iure.', 1, 25, 40),
(47, 'Reprehenderit quia repudiandae recusandae. Iure rerum rerum officiis rerum perspiciatis pariatur. Esse ut neque quae debitis. Occaecati enim fugit est et reprehenderit.', 2, 29, 25),
(48, 'Sit minima ea error tempora. Repellat exercitationem iusto iusto quidem facere autem. Repudiandae est fugit ea cum. Et vel qui et nemo voluptatum perspiciatis.', 4, 37, 17);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `pro_size` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `pro_size`) VALUES
(1, 32),
(2, 37),
(3, 45),
(4, 32),
(5, 39),
(6, 37),
(7, 42),
(8, 36),
(9, 38),
(10, 36),
(11, 37),
(12, 33),
(13, 44),
(14, 42),
(15, 35),
(16, 44),
(17, 32),
(18, 44),
(19, 36),
(20, 45),
(21, 37),
(22, 38),
(23, 43),
(24, 33),
(25, 40),
(26, 35),
(27, 44),
(28, 32),
(29, 35),
(30, 33),
(31, 33),
(32, 35),
(33, 43),
(34, 45),
(35, 42),
(36, 42),
(37, 43),
(38, 45),
(39, 45),
(40, 38),
(41, 40),
(42, 44),
(43, 38),
(44, 40),
(45, 38),
(46, 43),
(47, 43),
(48, 42),
(49, 32),
(50, 38);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'uploads/users/img/default.png',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `email`, `verify_code`, `password`, `IsAdmin`, `email_verified_at`, `remember_token`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Dorothy Waters', 'Randy Romaguera Sr.', 'pdavis@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'JYqat3IM9G', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(2, 'Darrion Mohr', 'Lewis Bartell', 'sanford.alysha@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'M7y6eyKEZl', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(3, 'Josephine Auer', 'Magali McKenzie', 'kim.brakus@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'QnQ4lTbL55', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(4, 'Dr. Carissa Kohler', 'Titus Mayert I', 'umitchell@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'nqOYAfqhhu', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(5, 'Dino Becker', 'Keaton Powlowski', 'lhoeger@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', '7f95KS2DDz', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(6, 'Janis Jones', 'Kylee Kuhlman III', 'carissa93@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'QeBkL90WPN', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(7, 'Prof. Meta Okuneva DVM', 'Jammie Nolan', 'deonte.spinka@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'OCND8z7sdq', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(8, 'Lina Halvorson', 'Reva Kshlerin', 'becker.kaelyn@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'HGbDMCNNC3', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(9, 'Katlynn Schaden', 'Mrs. Lorena Casper', 'kortiz@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'sHl94vj85g', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(10, 'Bill Hoeger', 'Rickie Runolfsson', 'janis14@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'kIR8FSodxK', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(11, 'Jett Ratke', 'Newton Russel', 'marie.grady@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'VSid7VfsbY', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(12, 'Lina Lemke V', 'Adelbert Bashirian', 'jaden.dickinson@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'BY0DMQXi3I', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(13, 'Dr. Merl Waelchi II', 'Syble Pagac', 'ayla.zieme@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', '64IVeja9t9', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(14, 'Dominic Cummings', 'Elenor Bechtelar', 'simone.purdy@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'tyl8OX1mcu', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(15, 'Manley Little', 'Dr. Bella Trantow II', 'van68@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', '7D6a8WkyRf', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(16, 'Mrs. Syble Langworth', 'Florine Senger', 'katelin.kuhlman@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'HQyJLccFBY', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(17, 'Jazmin Friesen II', 'Santa Fay', 'crooks.joelle@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'XEOyOuHUiq', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(18, 'Ms. Oma Barrows', 'Mr. Ashton Sauer', 'maureen45@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'rB2AcNYGjl', 'uploads/users/img/default.png', '2021-08-20 19:08:22', '2021-08-20 19:08:22'),
(19, 'Mr. Chadd Goodwin', 'Yazmin Brekke III', 'lakin.damon@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'o3YJd4pLC0', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(20, 'Millie Rohan', 'Lon Toy', 'vanessa78@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', '7oeJOPdtIr', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(21, 'Edna Kassulke Sr.', 'Talon Denesik', 'oparker@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'TH3eT5zO6r', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(22, 'Lurline Rath', 'Giovanni Rice III', 'qfadel@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'PbGU93Y6xh', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(23, 'Jennyfer Jacobson', 'Gideon Goyette', 'kmiller@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'qviVDer8ns', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(24, 'Dr. Aurore Satterfield Sr.', 'Mr. Edgar Wehner I', 'gleichner.xavier@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', '7VADzmEHqd', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(25, 'Dr. Madison Stiedemann V', 'Anastacio Smith', 'alysson.howell@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'T2SDLzd60v', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(26, 'Prof. Dante Kuhlman', 'Miss Roselyn Prohaska PhD', 'oschaden@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'DyaBKf3z0M', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(27, 'Miss Jazlyn Emard', 'Nickolas Greenholt', 'cordia.kuhn@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'OR29X07J8X', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(28, 'Antone Kiehn', 'Alene Gleichner', 'fisher.vaughn@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'nlaPAjgqMW', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(29, 'Kali Kub I', 'Danyka Reichel V', 'finn.farrell@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'OfQqHuxhox', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(30, 'Prof. Raleigh Shanahan MD', 'Isom Weimann PhD', 'helga.halvorson@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'puoXpp8Hl4', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(31, 'Kyleigh Beier', 'Jordon Auer', 'barry.lowe@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'O2l7ifHut0', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(32, 'Reta Hauck', 'Thad Schmeler III', 'pollich.oran@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'nNQeiGiKyc', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(33, 'Thaddeus Ratke', 'Jean Simonis', 'amparo.predovic@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'kjyRw6VSNb', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(34, 'Mrs. Reanna Sipes MD', 'Olga Flatley', 'pmitchell@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'LXMPswz2vz', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(35, 'John Hammes', 'Mr. Gregory Lueilwitz PhD', 'mkub@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'BwvRa82ibB', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(36, 'Kellie Kassulke', 'Abelardo Rowe', 'roman11@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'jse1rWZxc1', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(37, 'Elwin Pfeffer', 'Kailyn Hegmann', 'trantow.garrison@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'vXRVY1zYbY', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(38, 'Ms. Esta Larson DVM', 'Mr. Cordell O\'Keefe', 'hoconnell@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'Cy5SJ6RbxO', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(39, 'Tre Aufderhar', 'Marquise Yost', 'ystehr@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'weTHA5gLnN', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(40, 'Ophelia Keebler', 'Lafayette Murphy V', 'hdouglas@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'TDX0h1hg3x', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(41, 'Mr. Gerardo Ryan I', 'Dr. Blaze Bins', 'wpfeffer@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 's5hewgwKjU', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(42, 'Mitchel Mraz', 'Madisen Johnston', 'baby.haag@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'xOBDhvkGho', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(43, 'Ladarius Powlowski', 'Dr. Garret Osinski', 'jon82@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', '0fJkwvP5hN', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(44, 'Benny Beahan', 'Jacky Howell', 'agustin82@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'iqvhoACscl', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(45, 'Tillman O\'Conner', 'Everett Block', 'carli.haley@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'q0MPFSHcno', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(46, 'Rolando Rath', 'Dr. Cruz Cole MD', 'kiara73@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'w5nxuhCw1g', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(47, 'Prof. Kayla Kunze PhD', 'Tyshawn Sauer', 'heidenreich.joelle@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', '0jz1hjiF21', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(48, 'Nasir White I', 'Hilbert West', 'natalia.doyle@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'jMmU9EGmTM', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(49, 'Nichole Gleason', 'Miss Jaquelin Haag II', 'eusebio71@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'BbA72kRZBU', 'uploads/users/img/default.png', '2021-08-20 19:08:23', '2021-08-20 19:08:23'),
(50, 'Aaliyah Ernser', 'Brooke Cremin', 'roob.weston@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-08-20 19:08:22', 'oNoo2j4wbX', 'uploads/users/img/default.png', '2021-08-20 19:08:24', '2021-08-20 19:08:24'),
(54, 'Ahmed', 'Said', 'dedoa82.as@gmail.com', 'IqYSkwwiBAol1dSpSZqJyhOBBatTaZh07MN2kvuv9R1xUVIHCN', '$2y$10$tijKC7h7j8Ph7vSnheaMROt5toHYNCwgFOzGHG0fT9R0IRVzfRW0O', 0, NULL, NULL, 'storage/users/img/1629513598.jpeg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  ADD PRIMARY KEY (`id`,`pin`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_verify_code_unique` (`verify_code`),
  ADD KEY `email` (`email`),
  ADD KEY `verify_code` (`verify_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_ibfk_4` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_colors_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_sizes_ibfk_2` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  ADD CONSTRAINT `resetpasswords_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;