-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2021 a las 19:03:45
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `online_rest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `adm_id` int NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', '', '2018-04-09 07:36:18'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int NOT NULL,
  `rs_id` int NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(11, 48, 'Mega Recargado', '8 Presas de Pollo + 8 Strips (Tiras de pechuga de pollo apanadas) + 1 Pop Corn Mediano (Trocitos de pechuga de pollo apanados) + 2 Ensaladas Col Personales+ 1 Papa Grande', '62900', 'mega-recargado.png'),
(12, 48, 'Mega Familiar', '8 Presas de Pollo + 4 Papas Pequeñas al mejor precio.', '45900', 'mega-familiar.png'),
(13, 49, '20 Hot Wings', '20 Alitas (Las alitas picantes hot wings equivalen a un trozo de ala).', '24900', 'hot-wings.png'),
(14, 50, 'Mega 12 Gaseosa', '12 Presas de Pollo + 2 Papas Pequeñas+ 1 Ensalada Coleslaw Familiar + 1 Gaseosa 1,5lts', '66900', 'mega12-gaseosa.png'),
(15, 51, 'Wow Box Duo', '2 Sándwiches BBQ Crunch (c/u 1 Filete de pollo apanado) + 1 Pop Corn Pequeño (Trocitos de pechuga de pollo apanados) + 4 Alitas Picantes (Las alitas picantes hot wings equivalen a un trozo de ala) + 2 Papa Pequeña + 2 Gaseosas PET 400ml', '29900', 'wowbox-duo.png'),
(16, 52, '3 Avalanchas Chokis', '¡Nuevas! 3 Avalanchas Chokis con un Increible Descuento', '12900', 'chockis.png'),
(17, 53, 'Mega Box Coronel', '4 Sándwiches del Coronel cada uno (2 Tiras de pechuga apanadas, Mayonesa, Salsa BBQ Sweet y ensalada Coleslaw) + 2 Presas de Pollo + 2 Pop Corn Pequeños (Trocitos de pechuga de pollo apanados) + 4 Papas Pequeñas', '59900', 'box-coronel.png');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remark`
--

CREATE TABLE `remark` (
  `id` int NOT NULL,
  `frm_id` int NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50'),
(71, 42, 'in process', 'Orden en camino', '2021-09-26 15:16:09'),
(72, 39, 'in process', '  ', '2021-09-26 15:38:32'),
(73, 44, 'in process', 'en proceso', '2021-09-27 03:27:27'),
(74, 45, 'in process', ' ', '2021-09-28 19:20:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int NOT NULL,
  `c_id` int NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(48, 5, 'KFC Kennedy', 'kennedy@kfc.co', '3203509848', 'kfc.co', '7am', '4pm', 'mon-tue', ' Calle 38c Sur #78a-59 ', 'kfc-kennedy.jpg', '2021-10-02 13:49:23'),
(49, 5, 'KFC Toberin', 'kennedy@kfc.co', '3203509848', 'kfc.co', '6am', '5pm', 'mon-fri', 'Cr19 # 161-14', 'kfc-toberin.jpg', '2021-10-02 13:53:36'),
(50, 6, 'KFC Plaza Imperial', 'kennedy@kfc.co', '3203509848', 'kfc.co', '6am', '6pm', 'mon-sat', 'Carrera 104 # 48-07', 'kfc-imperial.jpg', '2021-10-02 13:55:31'),
(51, 7, 'KFC Centro Mayor', 'kennedy@kfc.co', '3203509848', 'kfc.co', '8am', '4pm', 'mon-thu', 'Calle 38 A sur No. 34D-51 local 2 027', 'kfc-centrom.jpg', '2021-10-02 13:57:19'),
(52, 8, 'KFC Portal 80', 'kennedy@kfc.co', '3203509848', 'kfc.co', '6am', '7pm', 'mon-fri', 'Ak. 80 #100-52', 'kfc-portal.jpg', '2021-10-02 14:32:17'),
(53, 9, 'KFC Restrepo', 'kennedy@kfc.co', '3203509848', 'kfc.co', '7am', '7pm', 'mon-sat', 'Cll. 51 sur #48-57', 'kfc-restrepo.jpg', '2021-10-02 19:37:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'Pollo', '2018-04-14 18:45:28'),
(6, 'Sandwich', '2018-04-14 18:44:56'),
(7, 'Helado', '2018-04-14 18:45:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `u_id` int NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(31, 'Alejandro', 'Juan', 'Alejandro', 'juanalcarios@gmail.com', '3005456427', 'e10adc3949ba59abbe56e057f20f883e', 'cr 88d', 1, '2021-09-26 15:11:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int NOT NULL,
  `u_id` int NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(37, 31, 'jklmno', 5, '17.99', 'closed', '2018-04-18 19:51:50'),
(38, 31, 'Red Robins Chick on a Stick', 2, '34.99', NULL, '2018-04-18 19:52:34'),
(47, 33, 'Hard Rock Cafe', 1, '22.12', NULL, '2021-10-01 16:03:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indices de la tabla `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indices de la tabla `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indices de la tabla `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indices de la tabla `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
