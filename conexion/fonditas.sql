-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2022 a las 05:43:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fonditas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `idconfiguracion` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `pie` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`idconfiguracion`, `titulo`, `pie`) VALUES
(1, 'Fondas Godínez', 'Catálogo Fonda Godínez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondas`
--

CREATE TABLE `fondas` (
  `idfonda` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `calle` varchar(200) NOT NULL,
  `numero_exterior` varchar(15) NOT NULL,
  `numero_interior` varchar(15) NOT NULL,
  `codigo_postal` int(8) NOT NULL,
  `colonia` varchar(200) NOT NULL,
  `municipio` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fondas`
--

INSERT INTO `fondas` (`idfonda`, `nombre`, `calle`, `numero_exterior`, `numero_interior`, `codigo_postal`, `colonia`, `municipio`, `ciudad`, `estado`, `pais`, `fecha_creacion`) VALUES
(1, 'Fonda el charro', 'Guadalupe Victoria', '14', '2', 53697, 'El Rosario Izcalli', 'Naucalpan', 'Naucalpan de Juárez', 'Estado de México', 'México', '2022-02-17'),
(2, 'Fonda Don Pérez', 'Miguel Hidalgo', '5', '1', 53697, 'Minas el Tecolote', 'Chalco', 'Chalco de Díaz Covarrubias', 'Estado de México', 'México', '2022-02-17'),
(3, 'Fonda el Bronco', 'Benito Juárez', '56', '7', 56640, 'Santa María', 'Tultitlan', 'Tlalnepantla', 'Estado de México', 'México', '2022-02-17'),
(4, 'Fonda la Radio', 'Polonia', '8', '2', 54710, 'Napoles', 'Benito Juárez', 'Benito Juárez', 'Ciudad de México', 'México', '2022-02-17'),
(5, 'Fonda Garrido', 'Guadalupe Victoria', '4', '6', 54782, 'Huilango', 'Naucalpan', 'Naucalpan de Juárez', 'Estado de México', 'México', '2022-02-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `idplatillo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(240) NOT NULL,
  `ingredientes` varchar(240) NOT NULL,
  `costo` float NOT NULL,
  `idfonda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`idplatillo`, `nombre`, `descripcion`, `ingredientes`, `costo`, `idfonda`) VALUES
(1, 'Enchiladas Verdes', 'Enchiladas con pollo en salsa verde con crema y queso panela.', 'Queso, tomate, agua, ajo, cebolla, tortillas, crema, pechuga de pollo, sal.', 48, 1),
(2, 'Prueba', 'Descripción de prueba', 'Prueba de ingredientes', 60, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `estatus` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `contrasena`, `nombre`, `correo`, `estatus`, `fecha_creacion`) VALUES
(1, 'israel', 'd2f64f55720206f9b8038c3c9e917eb0', 'Israel Jiménez Camacho', 'ingsiscomisra@hotmail.com', 1, '2022-02-13'),
(2, 'prueba', '828c88f34ecb4c1ca8d89e018c6fad1a', 'prueba', 'ingsiscomarsi@hotmail.com', 1, '2022-02-13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idconfiguracion`);

--
-- Indices de la tabla `fondas`
--
ALTER TABLE `fondas`
  ADD PRIMARY KEY (`idfonda`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`idplatillo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idconfiguracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fondas`
--
ALTER TABLE `fondas`
  MODIFY `idfonda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `idplatillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
