-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 16:25:43
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `institucion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `IDadministrador` int(11) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`IDadministrador`, `Nombres`, `Apellidos`, `Usuario`, `Correo`, `Clave`, `Codigo`) VALUES
(1, 'Giacomo', 'Cairo Bowman', 'Armand', 'justo@dolorsit.net', '123', 1),
(2, 'Hamilton', 'Karly Cote', 'John', 'et.magna.Praesent@nonenimcommodo.org', 'HNG72FZH9HB', 2),
(3, 'Jonas', 'Cassandra Mcintyre', 'Kaseem', 'et@Nunc.ca', 'CQI48SXB4KO', 1),
(4, 'Chester', 'Mohammad S. Flynn', 'Bernard', 'nec.leo@dictum.net', 'RJD41AQQ3MI', 1),
(5, 'Nehru', 'Forrest Park', 'Igor', 'magna.sed@Utnecurna.edu', 'SYC81FCI2IT', 1),
(6, 'Albert', 'Perez loaiza', 'queloque', 'lolazo@hotmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `IDcargo` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`IDcargo`, `Descripcion`) VALUES
(1, 'Rector'),
(2, 'Decano'),
(3, 'Director de Escuela'),
(4, 'Encargado de laboratorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_libro`
--

CREATE TABLE `cargo_libro` (
  `IDcargo_lib` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo_libro`
--

INSERT INTO `cargo_libro` (`IDcargo_lib`, `Descripcion`) VALUES
(1, 'Entrega del Ministerio'),
(2, 'Donaciones'),
(3, 'Presupuesto escolar'),
(4, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `IDcategoria` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`IDcategoria`, `Descripcion`) VALUES
(1, 'Generalidades'),
(2, 'Filosofia y Psicologia'),
(3, 'Religion'),
(4, 'Ciencias Sociales'),
(5, 'Lenguas'),
(6, 'Matemáticas y Ciencias Naturales'),
(7, 'Tecnología y Ciencias Aplicadas'),
(8, 'Artes '),
(9, 'Literatura'),
(10, 'Historia y geografia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `IDdocente` int(11) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `IDespecialidad` int(11) NOT NULL,
  `IDseccion` int(11) NOT NULL,
  `IDturno` int(11) NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`IDdocente`, `Nombres`, `Apellidos`, `Telefono`, `IDespecialidad`, `IDseccion`, `IDturno`, `Usuario`, `Clave`, `Codigo`) VALUES
(1, 'Kyle', 'Colette Z. Morrison', 65, 2, 2, 2, 'Alan', 'JXX89LGJ1YA', 1),
(2, 'Jeremy', 'Yoshi Barker', 9, 1, 3, 2, 'Palmer', 'BVC37DCA9AT', 2),
(3, 'Blake', 'Russell C. Morin', 99, 2, 8, 1, 'Magee', 'GQJ48OFY8TN', 2),
(4, 'Uriah', 'Nero Sellers', 33, 3, 1, 2, 'Todd', 'JOT11LLH9AU', 1),
(5, 'Armando', 'Vera Bass', 92, 3, 2, 1, 'Tate', 'ZOE65XPY3BA', 2),
(6, 'Aristotle', 'Gail B. Lowery', 21, 3, 2, 1, 'Perry', 'CXB10AFG5ZT', 1),
(7, 'Fitzgerald', 'Walker Morin', 48, 2, 1, 1, 'Brent', 'DTY65PDE4KM', 2),
(8, 'Reese', 'Sigourney Q. Barton', 6, 1, 8, 2, 'Kelly', 'QGT45DJI7ID', 1),
(9, 'Slade', 'Sebastian Martin', 47, 3, 3, 2, 'Stephen', 'KIR41RSD6MM', 2),
(10, 'Alexander', 'Sean S. Logan', 19, 2, 8, 1, 'Duncan', 'WUZ68NYW6YP', 2),
(11, 'Moses', 'Clare Stewart', 49, 2, 9, 1, 'Tate', 'NNS14SFD9EH', 1),
(12, 'Lionel', 'Elliott Delaney', 52, 1, 2, 2, 'Vincent', 'VBT55DBE9GO', 1),
(13, 'Aquila', 'Stone Castillo', 87, 3, 8, 2, 'Ferris', 'DPR02DUP2RR', 1),
(14, 'Demetrius', 'Quinn X. Burke', 6, 2, 8, 1, 'Kyle', 'EMB60TAQ0WA', 2),
(15, 'Louis', 'Rafael Perez', 54, 1, 9, 1, 'Noah', 'LJR28RTR8ZA', 1),
(16, 'Aquila', 'Quentin Leach', 43, 2, 1, 2, 'Philip', 'YQF86RCG3DS', 2),
(17, 'Boris', 'Steven F. Aguilar', 32, 3, 7, 2, 'Dante', 'QBV86OHI2OS', 1),
(18, 'Paki', 'Rana Stanton', 82, 2, 9, 1, 'Luke', 'PFF54SDG7SF', 2),
(19, 'Thane', 'Austin X. Marshall', 1, 3, 4, 2, 'Prescott', 'GUL67ZXQ7FN', 1),
(20, 'Eric', 'Kevyn Robertson', 63, 1, 6, 1, 'Cade', 'FDQ81YIC9UW', 1),
(21, 'Axel', 'Ivan J. Flores', 98, 3, 7, 1, 'Ira', 'LWT00ZVV9CT', 2),
(22, 'Xanthus', 'Roary N. Guerrero', 72, 2, 10, 1, 'Talon', 'WYG50LLP2EP', 2),
(23, 'Amal', 'Abbot Z. Weaver', 6, 3, 2, 2, 'Baker', 'WXJ40HZA8EL', 2),
(24, 'Daniel', 'Brody R. Delaney', 40, 1, 3, 1, 'Callum', 'NLL83KCN5EE', 1),
(25, 'Vance', 'Hayes Langley', 28, 1, 6, 2, 'Paul', 'SUO86EQA9AC', 2),
(26, 'Lane', 'Arsenio Alexander', 12, 1, 8, 2, 'Walker', 'GBS67SNL1XD', 2),
(27, 'Adam', 'Lee Sherman', 75, 1, 7, 2, 'Ulysses', 'QPD16EGP3MF', 1),
(28, 'Grady', 'Elvis Kim', 92, 2, 4, 2, 'Fuller', 'YXJ98XMG3ST', 2),
(29, 'Leo', 'Yuli N. Whitaker', 60, 3, 10, 1, 'Bradley', 'OIL03YOJ5AJ', 2),
(30, 'Andrew', 'Roary G. Watts', 18, 1, 4, 2, 'Declan', 'HLK59NWV0GL', 2),
(31, 'Gabriel', 'Signe Sweet', 25, 1, 9, 2, 'Gannon', 'QSB39ARA8RF', 1),
(32, 'Stuart', 'Garrett Finch', 32, 2, 1, 1, 'Sean', 'XUG48ZQN7EL', 1),
(33, 'Lionel', 'Dylan Shields', 2, 2, 6, 1, 'Peter', 'SJU28RNI4VL', 2),
(34, 'Quamar', 'Ella Morin', 14, 3, 7, 2, 'Dillon', 'WAS11ASX5KB', 1),
(35, 'Branden', 'Kasper Noel', 47, 2, 7, 2, 'Clark', 'VYL96SNZ8SO', 2),
(36, 'Harlan', 'Illana E. Sheppard', 59, 1, 4, 1, 'Noah', 'OQU05BWJ4DU', 2),
(37, 'Lawrence', 'Kyra J. Lloyd', 80, 1, 3, 2, 'Quinlan', 'QCY81WCP3TO', 1),
(38, 'Keane', 'Desirae M. Carrillo', 18, 1, 7, 1, 'Vladimir', 'EPO60ZRP1SB', 1),
(39, 'Ethan', 'Lacey Stevenson', 50, 3, 1, 1, 'Abdul', 'AVU55AQP9YL', 1),
(40, 'Acton', 'Lenore U. Patel', 10, 2, 9, 1, 'Jacob', 'YKZ99FOU2ZA', 1),
(41, 'Gareth', 'Jonas Gomez', 92, 2, 5, 1, 'Devin', 'YGC18CAJ4OW', 1),
(42, 'Jack', 'Odessa G. Shepard', 57, 1, 8, 2, 'Kasper', 'PFB52WLV6YL', 2),
(43, 'Chaim', 'Victor N. Molina', 93, 3, 10, 1, 'Vance', 'FUS66ZMB1FW', 2),
(44, 'Wing', 'Steel S. Spears', 66, 3, 5, 1, 'Gil', 'VBZ68OVE2YT', 2),
(45, 'Prescott', 'Mira V. Randolph', 57, 2, 4, 2, 'Tucker', 'KRL67MVD1QZ', 1),
(46, 'Colt', 'Eagan I. Ruiz', 38, 1, 10, 2, 'Wayne', 'HFM06HZF0MV', 1),
(47, 'Geoffrey', 'Anne Fletcher', 51, 1, 8, 2, 'Eagan', 'FCB54FBE4RP', 1),
(48, 'Silas', 'Orlando Blake', 87, 3, 9, 2, 'Ross', 'ACY45SFP8FI', 1),
(49, 'Alexander', 'Carson M. George', 24, 3, 7, 2, 'Nero', 'HUU40RMV0FL', 2),
(50, 'Joshua', 'Kelsie L. Brady', 63, 1, 9, 2, 'Brody', 'LDU73ZNO6HJ', 1),
(51, 'Tyrone', 'Veda Curry', 60, 2, 7, 1, 'Chancellor', 'XNN67GZU4IR', 2),
(52, 'Ulric', 'Lucas Strong', 57, 3, 9, 2, 'Dale', 'ZUT68XWF3PB', 1),
(53, 'Stone', 'Hasad X. Foley', 1, 2, 4, 1, 'Scott', 'VCG41FFP1DD', 1),
(54, 'Cole', 'Ruby Barry', 41, 1, 2, 1, 'Lance', 'VGR44AOX2GA', 2),
(55, 'Aidan', 'Amena Preston', 58, 3, 1, 2, 'Eaton', 'UHG34POB7UG', 1),
(56, 'Cairo', 'Dane French', 72, 1, 9, 1, 'Brennan', 'BBF54UVD3MC', 1),
(57, 'Ira', 'Alexandra V. Guzman', 57, 3, 9, 1, 'Clayton', 'WLP63ZHI7EU', 2),
(58, 'Clarke', 'Lev Patrick', 57, 1, 1, 2, 'Calvin', 'SYX78BYF7VC', 1),
(59, 'Burton', 'Kimberly Bennett', 51, 3, 7, 1, 'Logan', 'JWE86CPI0DX', 1),
(60, 'Conan', 'Steven Melendez', 44, 2, 5, 1, 'Ethan', 'PAE16DNI5NW', 2),
(61, 'Ahmed', 'Shoshana G. Hendrix', 70, 1, 3, 1, 'Barrett', 'HUQ67HHT5OA', 2),
(62, 'Theodore', 'Lee Owens', 74, 1, 5, 1, 'Samuel', 'QXQ66ANV6XW', 2),
(63, 'Brent', 'Kevin P. Maxwell', 94, 3, 8, 2, 'Neville', 'KZA93FRK2BQ', 2),
(64, 'Palmer', 'Bo B. Vincent', 15, 2, 3, 1, 'Sawyer', 'CZG28LRT7FX', 2),
(65, 'Byron', 'Rose E. Dalton', 95, 1, 9, 2, 'Vincent', 'LOS28LPF9RJ', 1),
(66, 'Carson', 'Kylan L. Taylor', 98, 2, 3, 1, 'Barrett', 'RKF45GMQ3JS', 2),
(67, 'Elton', 'Keegan Valdez', 46, 2, 5, 2, 'Rashad', 'HDO86KGR8TS', 1),
(68, 'Rajah', 'Sloane N. French', 84, 1, 4, 2, 'Abel', 'NJH02UAH8HM', 1),
(69, 'Finn', 'Noah Horne', 63, 3, 2, 2, 'Lamar', 'XOF89EIM8WM', 2),
(70, 'Yuli', 'Gillian Holcomb', 52, 2, 7, 2, 'Brett', 'TSZ52WGG9IX', 2),
(71, 'Ashton', 'Kieran Mcmillan', 6, 3, 3, 2, 'Tate', 'APA72RVU2PS', 2),
(72, 'Jordan', 'Hiroko Gray', 43, 3, 5, 1, 'Nolan', 'DNU21GUM5EK', 1),
(73, 'Baker', 'Inez N. Rice', 55, 3, 7, 1, 'Abdul', 'VFT71TUF9JT', 1),
(74, 'Jonas', 'Cameran S. Fields', 21, 3, 10, 1, 'Beau', 'JVW84RVB4BA', 1),
(75, 'Ira', 'Laurel Forbes', 18, 1, 2, 1, 'Byron', 'KTJ02IWL7QL', 2),
(76, 'Gray', 'McKenzie Cotton', 60, 3, 7, 1, 'Sebastian', 'GEN83EGK5YE', 2),
(77, 'Abel', 'Xena R. Mcgee', 54, 2, 7, 1, 'Nigel', 'YZO37VPP7LV', 1),
(78, 'Alfonso', 'Malik Cross', 82, 1, 4, 2, 'Thaddeus', 'AMO64YPV9ZU', 2),
(79, 'Beau', 'Arden D. Charles', 65, 2, 2, 2, 'Abdul', 'JSN34HRL7WQ', 1),
(80, 'Bevis', 'Abdul Long', 93, 2, 7, 1, 'Austin', 'AYG37ZIF7WP', 1),
(81, 'Jacob', 'Bevis G. Foster', 8, 3, 10, 1, 'Barclay', 'HZZ91AWQ6MD', 2),
(82, 'Barclay', 'Wang G. Vega', 1, 2, 1, 1, 'Barry', 'EPM62WXK0CR', 2),
(83, 'Amal', 'Dustin N. Browning', 58, 2, 8, 1, 'Barry', 'GVZ16EBP6XC', 1),
(84, 'Tyler', 'MacKenzie F. Cooper', 42, 1, 7, 1, 'Aristotle', 'GFD52SYY9AV', 1),
(85, 'Logan', 'Shelly L. Mayer', 44, 2, 5, 2, 'Rigel', 'HBV93UDD2OD', 2),
(86, 'Erich', 'Sylvester X. Welch', 84, 1, 6, 1, 'Jeremy', 'QUB63AZM5MM', 2),
(87, 'Vance', 'Wylie Manning', 48, 1, 9, 1, 'Armando', 'JKI81ZLO6ZB', 1),
(88, 'Stuart', 'Isabelle Christian', 47, 3, 10, 2, 'Rafael', 'RAT77BMA0WM', 2),
(89, 'Oleg', 'Chaim K. Patel', 24, 2, 1, 1, 'Tad', 'UWJ88GZA0QQ', 1),
(90, 'Solomon', 'Shoshana O. Evans', 60, 2, 5, 1, 'George', 'PZR03AAA0XU', 1),
(91, 'Herman', 'Grady Weiss', 97, 2, 2, 2, 'Lionel', 'PUW82XVT6FD', 2),
(92, 'Channing', 'Carly Watts', 59, 1, 4, 1, 'Mufutau', 'YWR12HYC3IZ', 1),
(93, 'Holmes', 'Candice E. Espinoza', 65, 3, 7, 2, 'Christian', 'PFS24LVW7WS', 2),
(94, 'Orlando', 'Slade Melton', 7, 3, 6, 1, 'Odysseus', 'TBY57JWS9RG', 1),
(95, 'Basil', 'Riley D. Leach', 99, 1, 6, 2, 'Lars', 'PZY68QMO4HG', 1),
(96, 'Magee', 'Allistair Dyer', 80, 2, 1, 2, 'Sean', 'XCB69YFP1IU', 1),
(97, 'Philip', 'Katelyn Cooke', 39, 2, 2, 1, 'Mannix', 'ZDQ67HWL9KP', 1),
(98, 'Lane', 'Colton M. Solomon', 89, 3, 1, 2, 'Alan', 'WAM79IOI4ZQ', 2),
(99, 'Brendan', 'Brennan Austin', 94, 1, 1, 1, 'Kuame', 'RAS85WLX2FW', 1),
(100, 'Eaton', 'Tatum Z. Vasquez', 38, 3, 3, 1, 'Devin', 'WOZ02OPC1XL', 1),
(102, 'Juan', 'Sandoval Egusquiza', 44852132, 2, 3, 1, 'juachito', '123', 1),
(104, 'Loidith', 'Bartra Garcia', 15463498, 2, 2, 1, 'lodi', '123', 3),
(105, 'Paul Melo', 'Chupon Pello', 65183479, 1, 1, 1, 'peluchin', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `IDencargado` int(11) NOT NULL,
  `IDparentesco` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`IDencargado`, `IDparentesco`, `DNI`, `Nombres`) VALUES
(1, 5, 20875813, 'Dolan Cooke'),
(2, 5, 28654972, 'Audrey Keith'),
(3, 5, 14885768, 'Mollie Kline'),
(4, 3, 27664142, 'Nicole Perez'),
(5, 2, 14334371, 'Steven F. Forbes'),
(6, 4, 19778634, 'Hop English'),
(7, 2, 41443041, 'Hall Drake'),
(8, 4, 43486168, 'Alexander Anthony'),
(9, 3, 39481250, 'Herman Q. Knight'),
(10, 2, 37081045, 'Colby J. Good'),
(11, 4, 26033650, 'Naida K. Guthrie'),
(12, 4, 31517677, 'Shea Mccormick'),
(13, 2, 10475291, 'Lynn L. Hardy'),
(14, 4, 39309543, 'Kaitlin O. Richardson'),
(15, 2, 18473546, 'Felix Schultz'),
(16, 4, 20092069, 'Kelly K. Flores'),
(17, 5, 40058770, 'Kaden I. White'),
(18, 2, 38087739, 'Ross Bond'),
(19, 5, 20755537, 'Cole Wells'),
(20, 2, 7135135, 'Drake P. Lancaster'),
(21, 4, 31990025, 'Sybil Vasquez'),
(22, 5, 49873380, 'Jakeem May'),
(23, 1, 19887502, 'Jamal Q. Fleming'),
(24, 5, 22569949, 'Hyacinth Sims'),
(25, 5, 44692195, 'Rigel K. Townsend'),
(26, 2, 19896515, 'Noble Beard'),
(27, 1, 15681207, 'Maite Torres'),
(28, 4, 21998562, 'Cade Banks'),
(29, 4, 38278783, 'Jillian Austin'),
(30, 1, 43493525, 'Emerald H. Mcguire'),
(31, 1, 8027209, 'Deanna Brock'),
(32, 5, 50260676, 'Fredericka L. Kemp'),
(33, 4, 39653205, 'Amaya Castillo'),
(34, 3, 45302174, 'Ila L. Reese'),
(35, 1, 42024233, 'Jarrod M. Santiago'),
(36, 3, 20365588, 'Kadeem Guerrero'),
(37, 2, 20207924, 'Yeo Y. Myers'),
(38, 1, 43707215, 'Kaden K. Hodge'),
(39, 3, 5438785, 'Sade Morin'),
(40, 2, 21283159, 'Frances O. Beach'),
(41, 1, 18904578, 'Brenden G. Evans'),
(42, 2, 46167984, 'John H. Robinson'),
(43, 2, 14091797, 'Holmes V. Santana'),
(44, 5, 48400931, 'Keegan M. Wilkins'),
(45, 2, 9902158, 'Keiko Whitney'),
(46, 4, 28167799, 'John F. Kerr'),
(47, 2, 9586027, 'Ursula Cardenas'),
(48, 4, 49792845, 'Kimberley U. Holden'),
(49, 1, 17613850, 'Fritz K. Gardner'),
(50, 5, 7354480, 'Alana Z. West'),
(51, 2, 28920111, 'Tiger Leonard'),
(52, 3, 48194141, 'Lacota V. Simmons'),
(53, 5, 9610937, 'Ezra W. Le'),
(54, 5, 10966928, 'Talon Cole'),
(55, 4, 16871701, 'Gannon Q. Calderon'),
(56, 1, 44601176, 'Christian A. Dejesus'),
(57, 2, 5705896, 'Leslie G. Moody'),
(58, 5, 32808336, 'Nasim Casey'),
(59, 1, 35311254, 'Shaine G. Mccarty'),
(60, 2, 38919013, 'Kato Garner'),
(61, 4, 25453230, 'Tucker Christian'),
(62, 3, 46581355, 'Henry Z. Wise'),
(63, 4, 29308126, 'Macaulay Q. Mccormick'),
(64, 2, 47589893, 'Jana R. Barry'),
(65, 3, 30790738, 'Fritz X. Branch'),
(66, 4, 23391208, 'Quon E. Calderon'),
(67, 1, 23314725, 'Chastity Emerson'),
(68, 3, 42141500, 'Mona W. Duncan'),
(69, 4, 47534837, 'Aspen Vang'),
(70, 5, 43763549, 'Alisa Salas'),
(71, 5, 37978883, 'Taylor G. Bruce'),
(72, 3, 37322308, 'Bruce Case'),
(73, 3, 12111668, 'Erasmus I. Dawson'),
(74, 2, 20868181, 'Dakota I. Cardenas'),
(75, 1, 41509117, 'Colin Lopez'),
(76, 5, 33130497, 'Fredericka Fry'),
(77, 2, 17947034, 'Troy I. Lynch'),
(78, 1, 16286858, 'Lance Allison'),
(79, 4, 39202345, 'Amir Lindsay'),
(80, 2, 10395622, 'Carson S. Ford'),
(81, 1, 44487619, 'Maia Schwartz'),
(82, 1, 25500379, 'Francis Jennings'),
(83, 5, 27707663, 'Dolan D. Lane'),
(84, 2, 9716346, 'Belle M. Sanders'),
(85, 5, 45029270, 'Nell Lambert'),
(86, 1, 50689854, 'Leila Oneal'),
(87, 2, 11091337, 'Alan C. Hoffman'),
(88, 1, 41066500, 'Mannix P. Ware'),
(89, 5, 48051433, 'Xanthus Gaines'),
(90, 1, 42825211, 'Lars Q. Carver'),
(91, 2, 45803709, 'Whitney Craft'),
(92, 2, 8629832, 'Demetrius Good'),
(93, 3, 45816697, 'Lisandra Nixon'),
(94, 5, 29243712, 'Ronan V. Marquez'),
(95, 5, 43382055, 'Piper B. Patrick'),
(96, 1, 12422629, 'Harding Dickson'),
(97, 4, 39544057, 'Kieran Mccray'),
(98, 5, 50404852, 'Maia O. Atkins'),
(99, 3, 50822592, 'Harrison S. Morrow'),
(100, 4, 5670543, 'Cailin R. Clayton'),
(101, 2, 45618592, 'Juan Pecho Leiva'),
(102, 2, 45618592, 'Juan Pecho Leiva'),
(103, 2, 45618592, 'Juan Pecho Leiva'),
(104, 2, 78945612, 'Maria Mercedes Tantalean');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `IDespecialidad` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`IDespecialidad`, `Descripcion`) VALUES
(1, 'Letras'),
(2, 'Ciencias'),
(3, 'Educacion Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_libro`
--

CREATE TABLE `estado_libro` (
  `IDestado_lib` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado_libro`
--

INSERT INTO `estado_libro` (`IDestado_lib`, `Descripcion`) VALUES
(1, 'Bueno'),
(2, 'Deteriorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `IDestudiante` int(11) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `IDseccion` int(11) NOT NULL,
  `IDencargado` int(11) NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`IDestudiante`, `Nombres`, `Apellidos`, `IDseccion`, `IDencargado`, `Usuario`, `Clave`, `Codigo`) VALUES
(1, 'Richmond, Amanda B.', 'Irene Y. Douglas', 2, 1, 'Owen', '123', 2),
(2, 'Snow, Echo X.', 'Alice E. Mccarthy', 17, 2, 'Macaulay', 'XDT81RQN1ND', 2),
(3, 'Hudson, Keelie Z.', 'Ora Munoz', 13, 3, 'Ronan', 'CSE59GWW1CG', 1),
(4, 'Sears, Maggie B.', 'Tatiana T. Dunlap', 6, 4, 'Nehru', 'KDH43XHR4RE', 2),
(5, 'Key, Basia V.', 'Thane I. Heath', 3, 5, 'Steven', 'HGI82RBZ6UQ', 1),
(6, 'Newman, Cailin D.', 'Vladimir Frye', 8, 6, 'Octavius', 'TBU09MOZ3PJ', 1),
(7, 'Alexander, Scott B.', 'Rajah Sloan', 18, 7, 'Cedric', 'JRL78LDB3SC', 1),
(8, 'Ross, Mufutau B.', 'Lee Wilcox', 11, 8, 'Acton', 'MHJ68UEJ9RA', 2),
(9, 'Kelly, Doris L.', 'Kieran S. Mccormick', 2, 9, 'Mark', 'NWW72WOH8LJ', 2),
(10, 'Mays, Hakeem Y.', 'Athena Stein', 8, 10, 'Derek', 'NNZ79YUH4CY', 1),
(11, 'Sears, Rahim I.', 'Eliana Norton', 5, 11, 'Oliver', 'CTB14NKC5BG', 1),
(12, 'Gillespie, Maite B.', 'Julie G. Rowland', 9, 12, 'Steven', 'RRF90SBY4GC', 1),
(13, 'Head, Chester X.', 'Florence M. Griffith', 13, 13, 'Ignatius', 'KZM75LKK5DM', 2),
(14, 'Hinton, Ralph G.', 'Kirestin Whitehead', 6, 14, 'Palmer', 'RKG17FRC9SO', 1),
(15, 'Kennedy, Freya T.', 'Amery Wyatt', 17, 15, 'Emmanuel', 'SOP97OYN3BW', 2),
(16, 'Bright, Haley E.', 'Akeem P. Bailey', 17, 16, 'Ferdinand', 'NEA59JWN0SX', 1),
(17, 'Daniel, Zelda G.', 'Juliet Mullen', 14, 17, 'Cole', 'BFK81NQN0IY', 2),
(18, 'Farrell, Aurora R.', 'Moana Wilkins', 13, 18, 'Brandon', 'TUL67TLO8WN', 2),
(19, 'Moody, Joel Z.', 'Kelly M. Gay', 1, 19, 'Wallace', 'NVF34SZY8GB', 1),
(20, 'Rhodes, Demetrius Y.', 'Ori Z. Sargent', 1, 20, 'Howard', 'MBC82FWM0SA', 2),
(21, 'Bowman, Kathleen Q.', 'Flynn L. Molina', 15, 21, 'Xenos', 'CYX24SVP2JE', 2),
(22, 'Cannon, Serina W.', 'Rogan Rice', 17, 22, 'Dane', 'NQK07PLT1PB', 1),
(23, 'Blackburn, Omar X.', 'Joel P. Dejesus', 12, 23, 'Graiden', 'GCK80YQJ2JE', 1),
(24, 'Heath, Flavia U.', 'Carlos Moss', 12, 24, 'Abbot', 'TDO02TSP8HX', 1),
(25, 'Mccoy, Avye L.', 'Dante Z. Estes', 10, 25, 'Akeem', 'DTC41JXO7ZQ', 1),
(26, 'Benson, Isaac V.', 'Lance K. Sargent', 8, 26, 'Yoshio', 'PRI33DRI2KR', 1),
(27, 'Nolan, Dolan H.', 'Whilemina G. Sloan', 8, 27, 'Sylvester', 'ISQ56YHA6WB', 1),
(28, 'Price, May C.', 'Giacomo P. Ferrell', 3, 28, 'Samson', 'TOF31LWA7HY', 2),
(29, 'Fletcher, Griffin U.', 'Stacy Ward', 15, 29, 'Nathan', 'PKE32BLE8WM', 1),
(30, 'Sparks, Summer Y.', 'Hadley F. Ward', 17, 30, 'Phillip', 'DFA06PJG4MM', 2),
(31, 'French, Madonna Y.', 'Shaeleigh G. Melendez', 8, 31, 'Blaze', 'RUC42CGL0KE', 1),
(32, 'White, Rhonda Q.', 'Mason I. Deleon', 14, 32, 'Ignatius', 'HIO63BZO8QQ', 2),
(33, 'Chaney, Abigail L.', 'Martin Kaufman', 4, 33, 'Martin', 'JTO24BEM9RE', 1),
(34, 'Herring, Zahir C.', 'Veronica U. Cameron', 10, 34, 'Grady', 'SGH11THR4QV', 2),
(35, 'Noel, Belle Z.', 'Yoko J. Vaughn', 12, 35, 'Mannix', 'DNU67WPO9FZ', 1),
(36, 'Hart, Pearl A.', 'Joel Gray', 15, 36, 'Vance', 'OOX01SPP2CB', 1),
(37, 'Mcconnell, Ruby Q.', 'Yetta I. Baker', 7, 37, 'Bruce', 'GTD25UPU7NU', 2),
(38, 'Watts, Violet N.', 'Cameron P. Holcomb', 5, 38, 'Mannix', 'GLK43LGO0NJ', 2),
(39, 'Bruce, Iola K.', 'Leila Skinner', 18, 39, 'Armando', 'BPW56WLO3VR', 1),
(40, 'Cabrera, Megan O.', 'Carolyn Nixon', 15, 40, 'Barrett', 'CRY77OSX4CK', 2),
(41, 'Harvey, Victor Z.', 'Lyle Q. Hess', 5, 41, 'Tad', 'UIU98NOJ0DP', 2),
(42, 'Dotson, Samson G.', 'Alec R. Ellis', 1, 42, 'Dieter', 'ARG24WWM4IS', 1),
(43, 'Mayer, Bradley B.', 'Daria Webster', 10, 43, 'Lars', 'VNL05WDW1EX', 2),
(44, 'Casey, Mark A.', 'Cameron Dale', 11, 44, 'Dennis', 'SAI67LYZ5ZM', 1),
(45, 'Bonner, Kennedy M.', 'Scarlett Andrews', 18, 45, 'Wang', 'ROW72FPC1YX', 1),
(46, 'Allison, Maite J.', 'Quinlan O. Rocha', 3, 46, 'Alden', 'BRN54RRI4KV', 2),
(47, 'Manning, Prescott P.', 'Reed Baker', 11, 47, 'Amir', 'ALP34YBE6CO', 2),
(48, 'Schroeder, Lester S.', 'Aiko Lewis', 5, 48, 'Ashton', 'OUK10ADJ8ZC', 1),
(49, 'Sloan, Bevis F.', 'Riley B. Burke', 13, 49, 'Bert', 'LKD32GRX0WE', 1),
(50, 'Hughes, Levi Q.', 'Vaughan E. Kennedy', 2, 50, 'Garth', 'HML82LFN4TM', 2),
(51, 'Key, Shoshana J.', 'Coby Ellison', 8, 51, 'Baxter', 'YVT05RAL4EB', 1),
(52, 'Herring, Deanna V.', 'Jena Harvey', 10, 52, 'Nathaniel', 'LWO76DTL3PH', 1),
(53, 'Davis, Erich F.', 'Chancellor Johnson', 7, 53, 'Quamar', 'XMS16MKT9EV', 2),
(54, 'Blanchard, Dai U.', 'Jenna Harrington', 10, 54, 'Hiram', 'NSI20PBL5SS', 2),
(55, 'Horn, Jolie M.', 'Fiona Blevins', 15, 55, 'Jack', 'PAI40JYD2NJ', 1),
(56, 'Tanner, Gray G.', 'Alika P. Hancock', 5, 56, 'Xanthus', 'CGX03SOX6DA', 2),
(57, 'Shelton, Yeo T.', 'Blaine C. Cote', 3, 57, 'Geoffrey', 'FTO13KLM9JI', 1),
(58, 'Buck, Molly D.', 'Phyllis Kerr', 4, 58, 'Malcolm', 'IFE50CUX5DU', 1),
(59, 'Knowles, Kelsie Q.', 'Vera Cardenas', 13, 59, 'Zachary', 'MJA54GUN3SC', 1),
(60, 'Chavez, Abbot A.', 'Adrian O. Meyers', 16, 60, 'Oren', 'MDN11YEU2LU', 1),
(61, 'Stephens, Leonard H.', 'Caldwell B. Simpson', 13, 61, 'Elton', 'AQS95VWY1UO', 1),
(62, 'Gaines, Emmanuel W.', 'Deirdre B. Irwin', 4, 62, 'Simon', 'PLQ50UVN4VF', 2),
(63, 'Barnes, Xerxes A.', 'Maris Norton', 15, 63, 'Kuame', 'ZWM94NRP8PN', 2),
(64, 'Meyer, Yuri Q.', 'Kyla Hunter', 2, 64, 'Acton', 'OPG21SKE1NQ', 2),
(65, 'Butler, Knox W.', 'Yael Z. Perez', 2, 65, 'Ira', 'AAO16OQE2AS', 2),
(66, 'Marshall, Luke A.', 'Stacey Fisher', 6, 66, 'Noah', 'NKP93BYB6PM', 1),
(67, 'Green, Shoshana T.', 'Miranda W. Wise', 16, 67, 'Upton', 'YFE62JCQ5JR', 1),
(68, 'Fitzgerald, Linus X.', 'Tanner J. Meyers', 14, 68, 'Lars', 'ZQV50CLO2RL', 1),
(69, 'Berger, Adrienne Y.', 'Grant V. Mullen', 14, 69, 'Herman', 'NMV41AIX4MC', 2),
(70, 'Sanford, Martha Y.', 'Ifeoma P. Mccormick', 14, 70, 'Trevor', 'RXN87UVK2AR', 1),
(71, 'Morris, Imelda C.', 'Chase X. Hunt', 5, 71, 'Richard', 'BHY97TUE3QR', 2),
(72, 'Burt, Ava N.', 'Macey Strickland', 18, 72, 'Bernard', 'WSH96FFR6UY', 1),
(73, 'Morris, Mira N.', 'Harlan Q. Nichols', 14, 73, 'Cairo', 'FBC14BVP7YB', 1),
(74, 'Gould, Wallace P.', 'Claudia Sellers', 14, 74, 'Tanek', 'FME84KQK3AR', 1),
(75, 'Good, Tad G.', 'Elliott T. Mitchell', 13, 75, 'Ryan', 'UBG93SHA0IX', 1),
(76, 'Guzman, Odette U.', 'Warren I. Ferrell', 14, 76, 'Randall', 'EJH69NEX6II', 2),
(77, 'James, Minerva H.', 'Hop R. Owen', 16, 77, 'Talon', 'JJS97VSL7YD', 1),
(78, 'Dean, Akeem E.', 'Veronica D. Matthews', 14, 78, 'Clayton', 'OSZ20DXW6JN', 2),
(79, 'Kinney, Abdul S.', 'Connor Guzman', 15, 79, 'Fritz', 'NJA92OIF4UM', 2),
(80, 'Guzman, Derek H.', 'Gray Y. Benson', 17, 80, 'Vincent', 'ZZM64FZT2WQ', 1),
(81, 'Harper, Desiree B.', 'Baxter Herman', 13, 81, 'Ezra', 'SHQ60BYX7YN', 1),
(82, 'Townsend, Nissim Z.', 'Felicia Roach', 18, 82, 'Devin', 'FYA48CEY7UD', 1),
(83, 'Gibbs, Eden C.', 'Moana T. Dunn', 17, 83, 'Duncan', 'VQC86IJX1VY', 2),
(84, 'Stanley, Evelyn K.', 'Michael Franks', 9, 84, 'Sebastian', 'SDZ30XDL1LY', 1),
(85, 'Knox, Olivia Y.', 'Sean Vega', 12, 85, 'Cooper', 'LRO15HRA4TK', 2),
(86, 'Chan, Yeo E.', 'India Murphy', 16, 86, 'Daniel', 'PDH79EVS9KT', 2),
(87, 'Barber, Clayton N.', 'Leonard Y. Hart', 6, 87, 'Boris', 'BUG33EEH3QY', 2),
(88, 'Carr, Virginia J.', 'Darius X. Buckley', 8, 88, 'Jackson', 'XJV39IXJ2FO', 1),
(89, 'Torres, Jasmine T.', 'Kermit H. Sharpe', 15, 89, 'Brian', 'VVU70ZVW1QC', 2),
(90, 'Powers, Wyoming C.', 'Miranda T. Vega', 9, 90, 'Drake', 'OIS56KMV6LS', 1),
(91, 'Preston, Arsenio O.', 'Nash Avery', 18, 91, 'Kibo', 'IZC00JAA7YF', 1),
(92, 'Woodard, Cassidy L.', 'Madeson Jackson', 17, 92, 'Lester', 'WKZ82HYW7JX', 1),
(93, 'Orr, Micah N.', 'Kylynn P. Reid', 7, 93, 'Justin', 'CPU24WBM3OZ', 1),
(94, 'Roman, Edan W.', 'Conan H. Townsend', 9, 94, 'Herman', 'ICU52TDL8RG', 2),
(95, 'Walters, Yen E.', 'Rudyard Malone', 16, 95, 'Dustin', 'GFZ49YQW7JK', 1),
(96, 'Santiago, Ulla K.', 'Jarrod Avila', 14, 96, 'George', 'IDP13OJK1VQ', 2),
(97, 'Sampson, Sharon K.', 'Philip K. Bruce', 7, 97, 'Stone', 'DYX19YZO3WA', 2),
(98, 'Norton, Ferris L.', 'Ann N. Forbes', 7, 98, 'Malcolm', 'FKD86BIR7YI', 2),
(99, 'Diaz, Indira V.', 'Plato Ryan', 13, 99, 'Craig', 'QSQ17AHP4VG', 2),
(100, 'Andrews, Moses S.', 'Kelly S. Lopez', 11, 100, 'Reese', 'EGU00VKI1HG', 1),
(101, 'James David', 'Sandoval Bartra', 18, 100, 'stylesaint', '123', 2),
(102, 'Luis Vitor', 'Pallar Laim', 14, 103, 'usuarrio1', '123', 2),
(103, 'Joselyn', 'Uriol Tantalean', 14, 104, 'joshita1', '123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `IDlibro` int(11) NOT NULL,
  `IDcategoria` int(11) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Autor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `IDproveedor` int(11) NOT NULL,
  `Año` int(11) NOT NULL,
  `Editorial` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Edicion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Ejemplares` int(11) NOT NULL,
  `IDcargo` int(11) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `IDestado_lib` int(11) NOT NULL,
  `IDubicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`IDlibro`, `IDcategoria`, `Titulo`, `Autor`, `IDproveedor`, `Año`, `Editorial`, `Edicion`, `Ejemplares`, `IDcargo`, `Precio`, `IDestado_lib`, `IDubicacion`) VALUES
(201, 9, 'Kieran Petersen', 'Cailin', 2, 2002, 'Dapibus Id Blandit Company', 'Nicholas', 9, 1, '18.67', 2, 1),
(202, 3, 'Idola Y. Moreno', 'Sacha', 1, 2001, 'Ultrices Vivamus Rhoncus Company', 'Fritz', 11, 2, '15.17', 2, 3),
(203, 6, 'Maya H. Bullock', 'Wilma', 1, 2017, 'Lectus Convallis Est Institute', 'Arden', 13, 2, '65.66', 1, 6),
(204, 3, 'Logan Z. Gibson', 'Robin', 1, 2003, 'Mauris Ipsum PC', 'Harper', 14, 4, '69.01', 2, 2),
(205, 9, 'Abigail Ellis', 'Adria', 2, 2013, 'Amet Nulla Limited', 'Mohammad', 7, 1, '19.61', 1, 2),
(206, 2, 'Katelyn F. Palmer', 'Rose', 2, 2009, 'Tristique Neque LLC', 'Oleg', 7, 3, '69.13', 1, 3),
(207, 5, 'Hakeem Day', 'Leigh', 1, 2015, 'Sapien Molestie Orci Foundation', 'Jakeem', 4, 3, '30.64', 1, 5),
(208, 5, 'Wallace H. Acosta', 'Tanya', 2, 1999, 'Aliquam Rutrum Lorem Corp.', 'Zephania', 13, 4, '38.68', 1, 6),
(209, 6, 'Aquila Hopper', 'Hollee', 2, 2004, 'Dapibus Quam Company', 'Cairo', 11, 2, '19.20', 2, 4),
(210, 1, 'Bo Bowers', 'Imelda', 2, 2009, 'Donec Fringilla LLC', 'Hoyt', 6, 4, '48.36', 2, 4),
(211, 7, 'Lana Vazquez', 'Sierra', 2, 2017, 'Enim Corporation', 'Aidan', 15, 4, '62.30', 2, 5),
(212, 5, 'Maia G. Schwartz', 'Yuri', 1, 2007, 'Consectetuer Euismod Est Company', 'Dillon', 2, 4, '31.72', 1, 6),
(213, 8, 'Garrett Y. Garcia', 'Kessie', 2, 2011, 'Condimentum Donec At Foundation', 'Graiden', 5, 2, '20.53', 1, 6),
(214, 9, 'Nero Conway', 'Rinah', 1, 2011, 'Phasellus At Inc.', 'Geoffrey', 13, 1, '22.73', 2, 3),
(215, 3, 'Whilemina Dejesus', 'Odette', 2, 2011, 'Interdum PC', 'Jelani', 13, 4, '59.47', 2, 1),
(216, 2, 'Valentine Howard', 'Audrey', 1, 2014, 'Fringilla Institute', 'Tyler', 8, 4, '39.08', 2, 6),
(217, 5, 'Xavier Fisher', 'Tatyana', 1, 2003, 'Ad LLP', 'Joseph', 13, 3, '19.57', 1, 5),
(218, 3, 'Scarlett Malone', 'Kylynn', 1, 2008, 'Phasellus Dapibus LLC', 'Bradley', 8, 1, '19.56', 2, 4),
(219, 5, 'Jermaine Mullins', 'Faith', 2, 2009, 'Aliquam Adipiscing PC', 'Drew', 11, 2, '35.38', 2, 3),
(220, 1, 'Amery S. Farmer', 'Emi', 2, 2000, 'Sagittis Lobortis Mauris Associates', 'Jerry', 2, 1, '15.97', 2, 5),
(221, 6, 'Libby Drake', 'Sybil', 2, 2006, 'Taciti Inc.', 'Ulysses', 10, 4, '32.48', 2, 5),
(222, 5, 'Rosalyn J. Campbell', 'Lani', 1, 2005, 'Velit Incorporated', 'Octavius', 10, 4, '36.95', 1, 3),
(223, 2, 'Wyoming Santos', 'Iola', 2, 2004, 'Nulla Ante Industries', 'Wyatt', 9, 2, '44.08', 1, 6),
(224, 4, 'Nichole E. Caldwell', 'Stacey', 2, 2005, 'Quis Pede Praesent Incorporated', 'Harlan', 6, 3, '65.99', 1, 1),
(225, 10, 'Claudia Jenkins', 'Rebekah', 1, 2006, 'Malesuada Augue Company', 'Porter', 9, 1, '62.90', 1, 6),
(226, 2, 'Daquan W. Peck', 'Aiko', 1, 2012, 'Lorem Auctor LLP', 'Gabriel', 13, 1, '36.90', 2, 6),
(227, 2, 'Samson Z. Bright', 'Ora', 2, 2001, 'Enim Sed Nulla Ltd', 'Preston', 11, 4, '37.64', 2, 5),
(228, 8, 'Kiara Black', 'Dacey', 1, 2009, 'Risus Donec LLC', 'Alvin', 11, 3, '26.41', 1, 6),
(229, 7, 'Indira Valenzuela', 'Jada', 2, 2001, 'Ridiculus Mus Donec Incorporated', 'Russell', 2, 4, '44.76', 1, 6),
(230, 6, 'Lesley E. Austin', 'Daria', 1, 2004, 'Ullamcorper Institute', 'Trevor', 13, 4, '54.80', 1, 2),
(231, 10, 'Kyla Leach', 'McKenzie', 1, 2017, 'Fermentum Foundation', 'Hilel', 9, 4, '59.19', 1, 4),
(232, 3, 'Haley Hensley', 'Megan', 1, 2000, 'Maecenas Mi Felis Industries', 'Rahim', 6, 3, '25.29', 2, 6),
(233, 1, 'Orli H. Ray', 'Candice', 1, 2015, 'Ridiculus Mus Donec PC', 'Kadeem', 6, 2, '66.97', 1, 6),
(234, 7, 'Haley X. Conrad', 'Shana', 1, 1999, 'At Lacus Quisque Corp.', 'Caleb', 6, 1, '47.61', 2, 2),
(235, 2, 'Keane K. Wyatt', 'Hayley', 2, 2006, 'Egestas PC', 'Kermit', 14, 3, '32.18', 2, 6),
(236, 8, 'Sebastian Middleton', 'Bianca', 1, 2010, 'Curabitur Institute', 'Francis', 2, 2, '57.73', 2, 3),
(237, 9, 'Jonas Morris', 'Tallulah', 2, 2000, 'Libero Morbi Accumsan Corporation', 'Cullen', 11, 3, '46.54', 1, 6),
(238, 4, 'Shaeleigh S. Roach', 'Xena', 2, 2006, 'Pellentesque Massa Lobortis Consulting', 'Steel', 7, 1, '49.16', 1, 5),
(239, 9, 'Blake I. Page', 'Haley', 1, 2005, 'Penatibus Associates', 'Tate', 7, 1, '53.96', 2, 3),
(240, 10, 'Iliana G. Pate', 'Angela', 1, 2017, 'Sed Industries', 'Kennedy', 6, 3, '49.50', 1, 3),
(241, 7, 'Pascale C. Sears', 'Lara', 2, 2000, 'Adipiscing Fringilla Institute', 'Herman', 11, 2, '40.72', 1, 3),
(242, 8, 'Josephine Kim', 'Signe', 2, 1999, 'Cras Convallis Industries', 'Kennan', 10, 3, '20.70', 2, 6),
(243, 3, 'Zephania M. Norman', 'Echo', 1, 1999, 'Amet Diam Consulting', 'Keane', 5, 4, '53.72', 1, 3),
(244, 4, 'Sandra Bell', 'Signe', 1, 2006, 'Ante Iaculis Industries', 'Timon', 5, 3, '36.38', 1, 2),
(245, 1, 'Allistair D. Gonzales', 'Erin', 2, 2008, 'Sociis Natoque Penatibus PC', 'Garrison', 12, 3, '43.79', 2, 1),
(246, 3, 'Emma H. Brady', 'Claire', 1, 2010, 'Sem Molestie Sodales Ltd', 'Hedley', 9, 2, '21.69', 1, 3),
(247, 4, 'Griffin Serrano', 'Latifah', 2, 2003, 'Dictum Proin Eget LLC', 'Uriah', 2, 4, '45.55', 2, 4),
(248, 2, 'Neville Cortez', 'Inez', 2, 2002, 'Nibh Phasellus Foundation', 'Leo', 15, 2, '33.53', 2, 3),
(249, 1, 'Tate Delgado', 'Hadassah', 1, 2006, 'Nullam Feugiat Placerat LLP', 'Xenos', 8, 1, '68.87', 1, 6),
(250, 10, 'Cassandra Byers', 'Hayley', 2, 2010, 'Quis Consulting', 'Leroy', 4, 1, '26.41', 2, 1),
(251, 9, 'Sandra Whitley', 'Cheyenne', 1, 2010, 'Tincidunt Aliquam Inc.', 'Ashton', 10, 1, '47.25', 2, 5),
(252, 10, 'Sophia A. Gilliam', 'Nina', 2, 2005, 'Dictum Cursus LLP', 'Lane', 8, 4, '25.17', 1, 4),
(253, 2, 'Chelsea L. Robinson', 'Jordan', 2, 2005, 'Ligula Ltd', 'Bradley', 4, 4, '35.30', 2, 2),
(254, 7, 'Hyatt Levine', 'Mariko', 1, 2016, 'Diam Pellentesque Habitant Incorporated', 'Forrest', 8, 3, '68.90', 2, 5),
(255, 5, 'Vivian X. Holmes', 'Kelsey', 1, 2012, 'Volutpat Nulla Dignissim Incorporated', 'Zephania', 9, 2, '40.89', 2, 1),
(256, 10, 'Fitzgerald Valenzuela', 'Isabelle', 1, 2011, 'Semper Egestas LLC', 'Richard', 10, 2, '29.05', 2, 4),
(257, 1, 'Griffin G. Reese', 'Sheila', 1, 2009, 'Eu Nulla Incorporated', 'Igor', 13, 4, '47.94', 2, 5),
(258, 3, 'Christen Y. Finch', 'Phyllis', 1, 2000, 'Elit Corporation', 'Timon', 13, 4, '35.00', 1, 5),
(259, 3, 'Henry V. Nolan', 'Diana', 2, 2015, 'Aliquam Iaculis Incorporated', 'Ali', 8, 4, '38.12', 1, 6),
(260, 10, 'Kathleen Walker', 'Lee', 2, 2015, 'Tortor At Consulting', 'Dorian', 6, 1, '59.10', 1, 4),
(261, 10, 'Breanna L. Drake', 'Hayfa', 1, 2005, 'Lorem Vehicula Institute', 'Conan', 3, 1, '49.93', 2, 4),
(262, 4, 'Otto Watkins', 'Shelby', 1, 2000, 'Diam Associates', 'Vance', 9, 1, '69.37', 2, 5),
(263, 8, 'Ivana Z. Mclaughlin', 'Audrey', 2, 2016, 'Nec Ante Blandit LLP', 'Carson', 2, 2, '31.01', 2, 6),
(264, 7, 'Robert House', 'Irene', 1, 2016, 'Amet Faucibus Ut PC', 'Blake', 14, 2, '49.73', 1, 6),
(265, 5, 'Buckminster Johns', 'Yetta', 1, 2015, 'Vel Arcu Curabitur Institute', 'Daquan', 14, 4, '65.64', 1, 3),
(266, 4, 'Talon Dominguez', 'Kaye', 2, 2013, 'Nisl Associates', 'Zeph', 6, 3, '53.77', 1, 1),
(267, 6, 'Nora Hammond', 'Sade', 2, 2012, 'Vitae Diam Proin Limited', 'Stuart', 10, 4, '19.80', 2, 4),
(268, 4, 'Charity Patrick', 'Cameron', 2, 2001, 'Lectus LLP', 'Geoffrey', 9, 2, '65.31', 1, 2),
(269, 1, 'Paki Calhoun', 'Sasha', 1, 2013, 'Turpis Industries', 'Dieter', 13, 3, '68.11', 2, 3),
(270, 10, 'Priscilla U. Patrick', 'Minerva', 2, 2015, 'Non Leo Vivamus Industries', 'Leroy', 3, 3, '48.96', 1, 4),
(271, 1, 'Bo Mills', 'Yolanda', 1, 2011, 'Molestie Company', 'Christopher', 6, 2, '27.85', 1, 1),
(272, 10, 'Regina Melton', 'Maggie', 2, 2010, 'Blandit Nam Industries', 'Abbot', 4, 4, '21.76', 2, 4),
(273, 8, 'Griffith Jennings', 'Kimberly', 2, 2017, 'Et Magnis Dis PC', 'Akeem', 6, 2, '40.38', 1, 6),
(274, 3, 'John N. Weiss', 'Orla', 2, 2011, 'Rutrum Lorem LLC', 'Lionel', 9, 1, '40.56', 2, 5),
(275, 7, 'Zeph N. Carr', 'Lael', 1, 2005, 'Morbi Tristique Company', 'Holmes', 14, 1, '32.94', 2, 3),
(276, 2, 'Robin I. Montgomery', 'Brynne', 1, 2009, 'Auctor Ullamcorper Nisl Limited', 'Tanek', 8, 2, '33.43', 2, 1),
(277, 5, 'Ariana F. Marquez', 'Katell', 1, 2017, 'Semper Egestas LLP', 'Octavius', 15, 3, '45.79', 2, 2),
(278, 10, 'Ciara Patton', 'Meredith', 1, 2017, 'Posuere Foundation', 'Caleb', 5, 2, '45.18', 2, 1),
(279, 2, 'Noelani V. Rosa', 'Xantha', 1, 2004, 'Non Enim Mauris Company', 'Mohammad', 2, 3, '36.99', 2, 5),
(280, 3, 'Basil Barton', 'Willa', 1, 2005, 'Ligula Elit Pretium Associates', 'Aladdin', 7, 3, '17.61', 1, 2),
(281, 5, 'Simone Fitzpatrick', 'Tatiana', 2, 2000, 'Non LLP', 'Nathaniel', 5, 1, '53.40', 2, 2),
(282, 1, 'Charissa Maddox', 'Jael', 2, 2012, 'Dapibus Quam Inc.', 'Dean', 3, 4, '54.36', 1, 3),
(283, 6, 'Uriel Bernard', 'Christen', 2, 2001, 'Magna Phasellus Dolor Ltd', 'Cameron', 7, 3, '67.91', 1, 3),
(284, 2, 'Perry Bradshaw', 'Brynne', 1, 2010, 'Turpis Vitae Purus Industries', 'Burke', 4, 1, '45.56', 2, 5),
(285, 3, 'Solomon K. Saunders', 'Yeo', 1, 2007, 'Hendrerit Neque Company', 'Keaton', 4, 4, '69.91', 1, 3),
(286, 3, 'Yuri Dominguez', 'Yvette', 1, 2001, 'Inceptos LLP', 'Denton', 9, 2, '24.16', 1, 1),
(287, 2, 'Serina A. Maynard', 'Naida', 1, 2002, 'Cras Pellentesque Sed LLP', 'Raymond', 15, 2, '52.00', 2, 5),
(288, 8, 'Axel Q. Johnston', 'Germaine', 2, 2009, 'Nam Ac Ltd', 'Wade', 6, 3, '36.91', 2, 3),
(289, 1, 'Vincent F. Long', 'Athena', 1, 2010, 'Mi Lacinia Mattis Inc.', 'Jeremy', 14, 1, '44.69', 2, 5),
(290, 3, 'Deacon G. Petty', 'Emerald', 2, 2002, 'Elementum Dui Quis Inc.', 'Demetrius', 9, 2, '45.87', 2, 6),
(291, 2, 'Priscilla B. Anderson', 'Leah', 1, 2002, 'Inceptos Company', 'Stewart', 14, 2, '60.16', 2, 4),
(292, 9, 'Isadora P. Rowe', 'Zelenia', 1, 2012, 'Consequat Industries', 'Hector', 11, 4, '35.44', 2, 1),
(293, 4, 'Cecilia I. Harvey', 'Vera', 1, 2006, 'Augue Associates', 'Ferris', 7, 1, '20.65', 1, 1),
(294, 9, 'Aimee Kirby', 'Lacota', 2, 2015, 'Semper Industries', 'Dean', 13, 3, '66.14', 1, 5),
(295, 7, 'Mary Gill', 'Ramona', 1, 2013, 'Morbi Metus PC', 'Dominic', 5, 1, '21.93', 2, 6),
(296, 6, 'Desiree I. Hensley', 'TaShya', 1, 2016, 'Faucibus Orci Luctus Industries', 'Chester', 4, 1, '42.79', 2, 1),
(297, 9, 'Phelan Turner', 'Breanna', 2, 2007, 'Quam Elementum At Inc.', 'William', 3, 3, '23.25', 2, 1),
(298, 7, 'Deanna Nguyen', 'Risa', 2, 2016, 'Rutrum Fusce PC', 'Steven', 4, 1, '28.13', 1, 6),
(299, 5, 'Oprah S. Tyler', 'Grace', 1, 2005, 'A Auctor Non Incorporated', 'Griffith', 2, 2, '21.74', 2, 2),
(300, 1, 'Gillian Y. Burnett', 'Patience', 2, 2017, 'Rutrum Fusce Consulting', 'Channing', 14, 2, '68.72', 1, 1),
(302, 2, 'safqwwqfwq', 'qwfwqfwq', 3, 2342, 'dassa', 'asfasfas', 21, 2, '42.00', 1, 2),
(303, 6, 'Matematica 1', 'Ing Sandoval', 10, 2010, 'Laiconza', 'Perillo 2015', 24, 2, '45.00', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `Codigo` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Distrito` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`Codigo`, `Descripcion`, `Distrito`, `Telefono`, `Year`) VALUES
(1, 'Institucion Educativa Publica San Antonio', 'Trujillo', '255825', 2018),
(2, 'Institucion Educativa Publica \"Lurigancho\"', 'Trujillo', '482584', 2018),
(3, 'Colegio Nacional \"San Juan\"', 'Trujillo', '44215512', 2018),
(4, 'Leoncio Prado', 'Trujillo', '14251358', 2018),
(5, 'Ricardo Palma', 'Trujillo', '44255825', 2018),
(6, 'Santa Rosa', 'Trujillo', '15483265', 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `IDparentesco` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`IDparentesco`, `Descripcion`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Tio'),
(4, 'Abuelo'),
(5, 'Padrino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pers_administrativo`
--

CREATE TABLE `pers_administrativo` (
  `IDper_admin` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `IDcargo` int(11) NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pers_administrativo`
--

INSERT INTO `pers_administrativo` (`IDper_admin`, `DNI`, `Nombres`, `Apellidos`, `Telefono`, `IDcargo`, `Usuario`, `Clave`, `Codigo`) VALUES
(1, 20314197, 'Ivor', 'Elijah Cobb', 1, 2, 'Chester', 'UUT32GTM9NZ', 2),
(2, 40243597, 'Quinn', 'Theodore Poole', 1, 2, 'Ross', 'EFG13BEH6AT', 2),
(3, 31974335, 'Cullen', 'Aline Yates', 1, 1, 'Hamilton', 'FEH22QBV7QD', 2),
(4, 37469622, 'Dean', 'Susan Hatfield', 1, 1, 'Tucker', 'CIE92XWY4AE', 1),
(5, 16742944, 'Aladdin', 'Curran Q. Patterson', 1, 4, 'Addison', 'NQK33XPX0NY', 1),
(6, 13237348, 'Ray', 'Whoopi Poole', 1, 1, 'Wesley', 'EUC63NGN3ZH', 2),
(7, 45672765, 'Dennis', 'Fay H. Stewart', 1, 2, 'Marsden', 'UFW56PUA5UH', 1),
(8, 41048038, 'Vladimir', 'Camilla Scott', 1, 1, 'Basil', 'UES37ZBK8OC', 1),
(9, 7639828, 'Reece', 'Kato E. Webb', 1, 4, 'Malcolm', 'EXA17YGM5IB', 2),
(10, 36918464, 'Brandon', 'Robert Meyers', 1, 1, 'Alvin', 'MXZ31BUU1TI', 2),
(11, 12857836, 'Isaac', 'Zenia Grant', 1, 3, 'Hyatt', 'YVB90SHW8TS', 1),
(12, 7831570, 'Patrick', 'Darrel Graves', 1, 1, 'Wang', 'FXB20JKP2KP', 1),
(13, 47560306, 'Gil', 'Wing P. Jennings', 1, 1, 'Forrest', 'ODF61ZCQ2MG', 1),
(14, 6029502, 'Joel', 'Eugenia Calhoun', 1, 4, 'Ishmael', 'HLF11GRR7XW', 1),
(15, 24853950, 'Brian', 'Vincent Bowen', 1, 4, 'Alfonso', 'PMF05BSY6VN', 1),
(16, 26632244, 'Jasper', 'Libby Dejesus', 1, 1, 'Orson', 'RTH91QVM3KP', 2),
(17, 26111301, 'Jonah', 'Jane Chan', 1, 1, 'Oliver', 'JDV01VAR4CK', 1),
(18, 5783661, 'Igor', 'Aladdin I. Rivas', 1, 2, 'Griffin', 'BHP91SIC2EQ', 1),
(19, 22644445, 'Devin', 'Kelly S. Holden', 1, 4, 'Griffin', 'KLJ40IDK8ES', 2),
(20, 36795041, 'Thor', 'Ezekiel Allison', 1, 4, 'Cullen', 'ZLU88RMO0NX', 1),
(21, 14448026, 'Mufutau', 'Cynthia K. Booth', 1, 3, 'Bernard', 'QWB42EQE6DI', 2),
(22, 14905808, 'Harlan', 'Aidan E. Serrano', 1, 4, 'Dieter', 'CVE80RAB6ZB', 1),
(23, 8969731, 'Elmo', 'Lilah Walters', 1, 3, 'Elvis', 'CZL47NKY9HL', 1),
(24, 41865229, 'Hiram', 'Shannon H. Sawyer', 1, 3, 'Brent', 'GWF26FXI3RM', 2),
(25, 30486754, 'Kieran', 'Chase I. Dotson', 1, 1, 'Cruz', 'PXW68KEU6PR', 2),
(26, 28903045, 'Armand', 'Althea X. Wiggins', 1, 3, 'Sean', 'YWN44OSK4AP', 2),
(27, 45118512, 'Fitzgerald', 'Pearl Gutierrez', 1, 4, 'Driscoll', 'KVX92GPE9PS', 1),
(28, 46328997, 'Isaiah', 'Allegra Chang', 1, 3, 'Leo', 'LFD41BXC4RN', 1),
(29, 29550055, 'Brett', 'Hedy Higgins', 1, 4, 'Damon', 'LOW70AVX0DX', 2),
(30, 49244438, 'Barry', 'Delilah W. Oconnor', 1, 4, 'Hall', 'PKJ21DLE9BJ', 2),
(31, 49135876, 'Dean', 'Jade Leach', 1, 1, 'Ignatius', 'ICP06VLY7WV', 2),
(32, 37132875, 'Oliver', 'Hillary House', 1, 3, 'Harrison', 'OBL42TJD7AW', 1),
(33, 46714032, 'Lionel', 'Zephr Alvarado', 1, 1, 'Kuame', 'OQS02VDK4TS', 1),
(34, 5855448, 'Vladimir', 'Renee I. Kim', 1, 2, 'Quentin', 'WKZ89RRN6GZ', 2),
(35, 9079138, 'Jameson', 'Forrest Thompson', 1, 2, 'Honorato', 'SRQ97DRH9DU', 2),
(36, 32237981, 'Lucian', 'Daniel O. Munoz', 1, 4, 'Lewis', 'JBE16GPK6HR', 2),
(37, 15708856, 'Drake', 'Hayes K. Mckenzie', 1, 1, 'Mannix', 'LEA24HMW6YP', 2),
(38, 33040771, 'Steven', 'Keegan Nolan', 1, 3, 'Davis', 'IJN81WOX4LJ', 2),
(39, 7755687, 'Adam', 'Inez Daniels', 1, 4, 'Jared', 'FOV70MER5QD', 1),
(40, 5521673, 'Basil', 'Tate R. Blackburn', 1, 3, 'Arthur', 'PLI14GTT0BB', 1),
(41, 48568078, 'Timothy', 'Renee I. Mcpherson', 1, 4, 'Jerry', 'SBZ62ZTR3HU', 1),
(42, 33700366, 'Bernard', 'Duncan Andrews', 1, 4, 'Yardley', 'LUM36SSL6DW', 1),
(43, 17356323, 'Brian', 'Gisela Abbott', 1, 4, 'Fulton', 'KRK45GKK3EZ', 2),
(44, 34315040, 'Quamar', 'Jorden Ramirez', 1, 4, 'Aquila', 'GJZ53DRW2RX', 1),
(45, 32158918, 'Bruce', 'Nissim T. Mann', 1, 3, 'Gabriel', 'NGS23RVO1OM', 2),
(46, 33181929, 'Leo', 'Beck U. Clements', 1, 2, 'Amir', 'OSR51OFL9SA', 1),
(47, 8605213, 'Logan', 'Denise J. Banks', 1, 1, 'Clark', 'TFX88LON2YF', 1),
(48, 21036971, 'Ulysses', 'Grady W. Rivas', 1, 1, 'Dennis', 'XYR26SHU2NF', 2),
(49, 25715250, 'Ferris', 'Violet Cannon', 1, 4, 'Marshall', 'IOQ64OKO5MX', 1),
(50, 35904621, 'Malachi', 'Camden I. Cantrell', 1, 4, 'Howard', 'HNY53JZF5TE', 2),
(51, 50623133, 'Solomon', 'Blake Hewitt', 1, 2, 'Harlan', 'QDN34KBZ6IV', 2),
(52, 39236814, 'Mohammad', 'Minerva Schmidt', 1, 1, 'Ray', 'LLY63TIA8NF', 2),
(53, 26714040, 'Edward', 'Keegan W. Collier', 1, 2, 'Wesley', 'GWY91HHL3UC', 2),
(54, 7559729, 'Brian', 'Flynn Z. Fulton', 1, 4, 'Gage', 'VPP69SZA1PQ', 2),
(55, 26065941, 'Valentine', 'Brett Y. Berg', 1, 4, 'Dorian', 'TZX14DTT9AN', 1),
(56, 50894251, 'Arthur', 'Abraham Wallace', 1, 2, 'Hayes', 'TUR92ERR5XH', 1),
(57, 45193998, 'Zahir', 'Alma E. Bush', 1, 2, 'Fitzgerald', 'DMQ09IGK8EH', 2),
(58, 41907053, 'Neville', 'Dacey Davis', 1, 2, 'Alden', 'SMB68JXY7AW', 2),
(59, 45412393, 'Vernon', 'Rylee D. Mcfadden', 1, 2, 'Walker', 'WSW69KXF7XF', 2),
(60, 6989971, 'Dale', 'Dominique Parker', 1, 1, 'Phillip', 'ZIR53ARP5NX', 2),
(61, 11974797, 'Rajah', 'Deborah Hays', 1, 2, 'Steven', 'HPQ45NWC5EA', 1),
(62, 22589285, 'Gabriel', 'Laith Cain', 1, 2, 'Salvador', 'HFJ43ATE2LO', 2),
(63, 50543161, 'Luke', 'Irma Owens', 1, 2, 'Castor', 'UOD97QZP6RI', 1),
(64, 46056020, 'Mufutau', 'Keane Greer', 1, 2, 'August', 'KQL00RPN9DW', 1),
(65, 15856977, 'Gary', 'Jin Hubbard', 1, 4, 'Walker', 'YBH23GVA1MJ', 2),
(66, 50751907, 'Dillon', 'Sylvester N. Mcgee', 1, 1, 'Tobias', 'FYT02BYU2MM', 1),
(67, 12745652, 'Rogan', 'Abel Huber', 1, 3, 'George', 'IVN99JWT2CO', 2),
(68, 18090434, 'Nicholas', 'Lynn B. Guthrie', 1, 3, 'Oliver', 'RQE07FRM4GK', 2),
(69, 11781663, 'Gary', 'Madison N. Wynn', 1, 1, 'Caleb', 'RAK85AIJ7WI', 2),
(70, 44077740, 'Allistair', 'Jaquelyn Kirk', 1, 1, 'Kadeem', 'BTZ40PAH4LT', 2),
(71, 46683055, 'Dennis', 'Paloma E. Watson', 1, 2, 'Thomas', 'OQA60YBA2GL', 2),
(72, 41553237, 'Geoffrey', 'Zena G. Flores', 1, 3, 'Gareth', 'INU14FVD1ES', 1),
(73, 33754990, 'Ralph', 'Heidi L. Duffy', 1, 1, 'Wade', 'JUK90RQG5LZ', 2),
(74, 6591401, 'Darius', 'Stacy Bray', 1, 4, 'Nathaniel', 'CHY71BYI3RD', 1),
(75, 18473622, 'Zachery', 'Lani Bullock', 1, 1, 'Isaiah', 'XXN32VNO8GP', 1),
(76, 43305695, 'Walker', 'Jana D. Glenn', 1, 2, 'Alexander', 'YNS44FTV4FN', 1),
(77, 26321818, 'Amir', 'Thane Cunningham', 1, 4, 'Hamish', 'SUS69DPM0NO', 2),
(78, 18126999, 'Damian', 'Chadwick Lewis', 1, 4, 'Cooper', 'KZS59VNU4UD', 2),
(79, 41033048, 'Coby', 'Hanna E. Harmon', 1, 2, 'Anthony', 'DJR95MUA9JO', 2),
(80, 27293871, 'Colorado', 'Claudia P. Carney', 1, 4, 'Ali', 'OKZ54VGE6FX', 2),
(81, 48586921, 'Bernard', 'Abdul Fulton', 1, 2, 'Kuame', 'YDK20LKX6TV', 2),
(82, 5810545, 'Talon', 'Taylor Graham', 1, 4, 'Malcolm', 'RFE68IWN1DK', 2),
(83, 32486727, 'Dieter', 'Keiko U. Benton', 1, 2, 'Brady', 'NJA67ZDY8AQ', 2),
(84, 9299128, 'Lance', 'Deborah J. Kennedy', 1, 2, 'Nigel', 'VMW61JNT9SJ', 2),
(85, 37667360, 'Jermaine', 'Palmer Harding', 1, 4, 'Rudyard', 'LUM98WEG4ZZ', 2),
(86, 11860773, 'Caesar', 'Jared Young', 1, 1, 'Ahmed', 'HYD75ABN1CG', 2),
(87, 38250736, 'Dillon', 'Cody Weiss', 1, 1, 'Arsenio', 'VCH08QOA7BH', 1),
(88, 36157015, 'Oleg', 'Dustin F. Beck', 1, 3, 'Wayne', 'XPI28JZY1VZ', 1),
(89, 5210819, 'Beck', 'Rogan W. Nguyen', 1, 4, 'Ivan', 'LNG06OOP3VJ', 2),
(90, 47245549, 'Richard', 'Audrey Schultz', 1, 1, 'Allistair', 'OMD32AIJ4ZB', 2),
(91, 15205292, 'Thomas', 'Aretha Murray', 1, 4, 'Allistair', 'CCL16SDW6IM', 1),
(92, 22843715, 'Daquan', 'Imogene Mills', 1, 3, 'Steel', 'JGQ63HEI0YP', 1),
(93, 16108844, 'Paki', 'Knox H. Murray', 1, 3, 'Aladdin', 'ZOE71JQJ7CT', 2),
(94, 7252949, 'Ross', 'Jonah W. Newton', 1, 1, 'Josiah', 'VVA81XLG1LG', 2),
(95, 43354052, 'Abdul', 'Ferdinand Hess', 1, 3, 'Rudyard', 'EHM49PDK6GI', 2),
(96, 22187062, 'Amal', 'Nelle T. Charles', 1, 4, 'Magee', 'WJW16ZWS7YC', 1),
(97, 43170202, 'Martin', 'Ebony Benton', 1, 2, 'Nash', 'IHC28XUF4QZ', 1),
(98, 25241338, 'Hedley', 'Regina Z. Kramer', 1, 2, 'Keane', 'WRQ24XRR5CD', 2),
(99, 50947321, 'Berk', 'Elaine O. Jefferson', 1, 3, 'Alan', 'HMY39FIM4PK', 2),
(100, 11162893, 'Jacob', 'Faith B. Huffman', 1, 4, 'Jackson', 'KDX51RXF0BF', 2),
(101, 78915965, 'Lolazo Lei', 'Lions Levi', 98715354, 2, 'dec123', '123', 4),
(102, 15481234, 'Hinos Menor', 'Fujimori', 32154897, 1, 'rector1', '123', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pers_atencion`
--

CREATE TABLE `pers_atencion` (
  `IDper_aten` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pers_atencion`
--

INSERT INTO `pers_atencion` (`IDper_aten`, `DNI`, `Nombres`, `Apellidos`, `Codigo`) VALUES
(1, 48825198, 'Javier Luis', 'Sanchez Lopez', 1),
(2, 87432158, 'Lucho Carlos', 'Leonhio PErez', 1),
(3, 78341596, 'Davo Ole', 'Kathic Laeche', 2),
(4, 78249615, 'Peluche Urio', 'Lamere Oiper', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `IDprestamo` int(11) NOT NULL,
  `IDestudiante` int(11) NOT NULL,
  `IDlibro` int(11) NOT NULL,
  `Fecha_Prestamo` date NOT NULL,
  `Fecha_Devolucion` date NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`IDprestamo`, `IDestudiante`, `IDlibro`, `Fecha_Prestamo`, `Fecha_Devolucion`, `Estado`) VALUES
(11, 7, 205, '2018-11-01', '2018-12-01', 0),
(12, 7, 209, '2018-11-02', '2018-12-02', 0),
(13, 17, 210, '2018-11-03', '2018-12-03', 0),
(14, 21, 220, '2018-11-04', '2018-12-04', 1),
(15, 22, 225, '2018-11-05', '2018-12-05', 0),
(16, 23, 226, '2018-11-06', '2018-12-06', 1),
(17, 26, 245, '2018-11-07', '2018-12-07', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `IDproveedor` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Ruc` int(11) NOT NULL,
  `Correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `IDper_aten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IDproveedor`, `Nombre`, `Ruc`, `Correo`, `Direccion`, `Telefono`, `IDper_aten`) VALUES
(1, 'Proveedores CarlinC SAC', 78915349, 'carlin@hotmail.com', 'AV. La Direccion N°2', '01-4821451', 1),
(2, 'La inversion Magica SAA', 64953157, 'lauz.123@gmail.com', 'Calle 123 2da Cuadra', '044-781545', 2),
(3, 'Colorin', 79342816, 'lozal@gmail.com', 'Av.Feliz', '12398745', 1),
(4, 'Colorin', 15349659, 'lozal@gmail.com', 'Av.Feliz', '12398745', 1),
(5, 'Libreria Pizarro SAC', 41567815, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(6, 'Libreria Pizarro SAC', 48137946, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(7, 'Libreria Pizarro SAC', 48671398, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(8, 'Libreria Pizarro SAC', 97263158, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(9, 'Libreria Pizarro SAC', 32158742, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(10, 'Libreria Pizarro SAC', 0, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(11, 'Libreria Pizarro SAC', 0, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(12, 'Libreria Pizarro SAC', 0, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(13, 'Libreria Pizarro SAC', 0, 'pizaa12@gmail.com', 'Av. EspaÃ±a 124', '15354871', 2),
(14, 'asdsadsa', 0, 'asdsadsa@gmail.com', 'asdsad', '12321525', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `IDseccion` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `IDyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`IDseccion`, `Descripcion`, `IDyear`) VALUES
(1, 'A ', 1),
(2, 'A ', 2),
(3, 'A ', 3),
(4, 'A ', 4),
(5, 'A ', 5),
(6, 'A', 6),
(7, 'B', 1),
(8, 'B', 2),
(9, 'B', 3),
(10, 'B', 4),
(11, 'B', 5),
(12, 'B', 6),
(13, 'C', 1),
(14, 'C', 2),
(15, 'C', 3),
(16, 'C', 4),
(17, 'C', 5),
(18, 'C', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `IDturno` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`IDturno`, `Descripcion`) VALUES
(1, 'Día'),
(2, 'Tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion_libro`
--

CREATE TABLE `ubicacion_libro` (
  `IDubicacion` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ubicacion_libro`
--

INSERT INTO `ubicacion_libro` (`IDubicacion`, `Descripcion`) VALUES
(1, 'Columna 1 '),
(2, 'Columna 2'),
(3, 'Columna 3'),
(4, 'Columna 4'),
(5, 'Columna 5'),
(6, 'Columna 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_electivo`
--

CREATE TABLE `year_electivo` (
  `IDyear` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `year_electivo`
--

INSERT INTO `year_electivo` (`IDyear`, `Descripcion`) VALUES
(1, 'Primero de Primaria'),
(2, 'Segundo de Primaria'),
(3, 'Tercero de primaria'),
(4, 'Cuarto de Primaria'),
(5, 'Quinto de Primaria'),
(6, 'Sexto de Primaria'),
(7, 'Primero de Secundaria'),
(8, 'Segundo de Secundaria'),
(9, 'Tercero de Secundaria'),
(10, 'Cuarto de Secundaria'),
(11, 'Quinto de Secundaria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`IDadministrador`),
  ADD KEY `Codigo` (`Codigo`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`IDcargo`);

--
-- Indices de la tabla `cargo_libro`
--
ALTER TABLE `cargo_libro`
  ADD PRIMARY KEY (`IDcargo_lib`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`IDcategoria`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`IDdocente`),
  ADD KEY `IDespecialidad` (`IDespecialidad`),
  ADD KEY `IDseccion` (`IDseccion`),
  ADD KEY `IDturno` (`IDturno`),
  ADD KEY `Codigo` (`Codigo`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`IDencargado`),
  ADD KEY `IDparentesco` (`IDparentesco`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`IDespecialidad`);

--
-- Indices de la tabla `estado_libro`
--
ALTER TABLE `estado_libro`
  ADD PRIMARY KEY (`IDestado_lib`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`IDestudiante`),
  ADD KEY `IDseccion` (`IDseccion`),
  ADD KEY `IDencargado` (`IDencargado`),
  ADD KEY `Codigo` (`Codigo`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`IDlibro`),
  ADD KEY `IDcategoria` (`IDcategoria`),
  ADD KEY `IDproveedor` (`IDproveedor`),
  ADD KEY `IDestado_lib` (`IDestado_lib`),
  ADD KEY `IDcargo` (`IDcargo`),
  ADD KEY `IDubicacion` (`IDubicacion`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`IDparentesco`);

--
-- Indices de la tabla `pers_administrativo`
--
ALTER TABLE `pers_administrativo`
  ADD PRIMARY KEY (`IDper_admin`),
  ADD KEY `IDcargo` (`IDcargo`),
  ADD KEY `Codigo` (`Codigo`);

--
-- Indices de la tabla `pers_atencion`
--
ALTER TABLE `pers_atencion`
  ADD PRIMARY KEY (`IDper_aten`),
  ADD KEY `Codigo` (`Codigo`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`IDprestamo`),
  ADD KEY `IDestudiante` (`IDestudiante`),
  ADD KEY `IDlibro` (`IDlibro`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`IDproveedor`),
  ADD KEY `IDper_aten` (`IDper_aten`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`IDseccion`),
  ADD KEY `IDyear` (`IDyear`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`IDturno`);

--
-- Indices de la tabla `ubicacion_libro`
--
ALTER TABLE `ubicacion_libro`
  ADD PRIMARY KEY (`IDubicacion`);

--
-- Indices de la tabla `year_electivo`
--
ALTER TABLE `year_electivo`
  ADD PRIMARY KEY (`IDyear`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `IDadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `IDcargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cargo_libro`
--
ALTER TABLE `cargo_libro`
  MODIFY `IDcargo_lib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `IDcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `IDdocente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
  MODIFY `IDencargado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `IDespecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_libro`
--
ALTER TABLE `estado_libro`
  MODIFY `IDestado_lib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `IDestudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `IDlibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `IDparentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pers_administrativo`
--
ALTER TABLE `pers_administrativo`
  MODIFY `IDper_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `pers_atencion`
--
ALTER TABLE `pers_atencion`
  MODIFY `IDper_aten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `IDprestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `IDproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `IDseccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `IDturno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ubicacion_libro`
--
ALTER TABLE `ubicacion_libro`
  MODIFY `IDubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `year_electivo`
--
ALTER TABLE `year_electivo`
  MODIFY `IDyear` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`Codigo`) REFERENCES `organizacion` (`Codigo`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`IDturno`) REFERENCES `turno` (`IDturno`),
  ADD CONSTRAINT `docente_ibfk_2` FOREIGN KEY (`IDespecialidad`) REFERENCES `especialidad` (`IDespecialidad`),
  ADD CONSTRAINT `docente_ibfk_3` FOREIGN KEY (`IDseccion`) REFERENCES `seccion` (`IDseccion`),
  ADD CONSTRAINT `docente_ibfk_4` FOREIGN KEY (`Codigo`) REFERENCES `organizacion` (`Codigo`);

--
-- Filtros para la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD CONSTRAINT `encargado_ibfk_1` FOREIGN KEY (`IDparentesco`) REFERENCES `parentesco` (`IDparentesco`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`IDseccion`) REFERENCES `seccion` (`IDseccion`),
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`IDencargado`) REFERENCES `encargado` (`IDencargado`),
  ADD CONSTRAINT `estudiante_ibfk_3` FOREIGN KEY (`Codigo`) REFERENCES `organizacion` (`Codigo`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`IDcategoria`) REFERENCES `categorias` (`IDcategoria`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`IDproveedor`) REFERENCES `proveedor` (`IDproveedor`),
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`IDcargo`) REFERENCES `cargo_libro` (`IDcargo_lib`),
  ADD CONSTRAINT `libro_ibfk_4` FOREIGN KEY (`IDestado_lib`) REFERENCES `estado_libro` (`IDestado_lib`),
  ADD CONSTRAINT `libro_ibfk_5` FOREIGN KEY (`IDubicacion`) REFERENCES `ubicacion_libro` (`IDubicacion`);

--
-- Filtros para la tabla `pers_administrativo`
--
ALTER TABLE `pers_administrativo`
  ADD CONSTRAINT `pers_administrativo_ibfk_1` FOREIGN KEY (`IDcargo`) REFERENCES `cargo` (`IDcargo`),
  ADD CONSTRAINT `pers_administrativo_ibfk_2` FOREIGN KEY (`Codigo`) REFERENCES `organizacion` (`Codigo`);

--
-- Filtros para la tabla `pers_atencion`
--
ALTER TABLE `pers_atencion`
  ADD CONSTRAINT `pers_atencion_ibfk_1` FOREIGN KEY (`Codigo`) REFERENCES `organizacion` (`Codigo`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`IDestudiante`) REFERENCES `estudiante` (`IDestudiante`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`IDlibro`) REFERENCES `libro` (`IDlibro`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`IDper_aten`) REFERENCES `pers_atencion` (`IDper_aten`);

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`IDyear`) REFERENCES `year_electivo` (`IDyear`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
