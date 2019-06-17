-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2019 a las 04:29:39
-- Versión del servidor: 5.7.26-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `melicar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(255) NOT NULL,
  `nombre_cli` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_cli` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono_cli` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correo_cli` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usuario_cli` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contrasena_cli` varchar(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pais_cli` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ciudad_cli` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `calle_cli` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numero_cli` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigo_postal_cli` varchar(12) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nombre_cli`, `apellido_cli`, `telefono_cli`, `correo_cli`, `usuario_cli`, `contrasena_cli`, `pais_cli`, `ciudad_cli`, `calle_cli`, `numero_cli`, `codigo_postal_cli`) VALUES
(11, 'administrador', '', '', '', 'admin', 'e3afed0047b08059d0fada10f400c1e5', '', '', '', '', ''),
(16, 'Pepe', 'Romero', '654120987', 'pepe@gmail.com', 'pepe', 'e885d567f57b0f87333c25f7f3a1e381', 'EspaÃ±a', 'Barcelona', 'Gran capitÃ¡n', '22', '34032'),
(17, 'IÃ±igo', 'Alas', '652976745', 'iÃ±igo@gmail.com', 'iÃ±igo', 'f67b40a9a0992f00bd247c2f2a0c5dcf', 'EspaÃ±a', 'Sevilla', 'Rodeos', '23', '452445'),
(18, 'Olvido', 'Alcantara', '609123276', 'olvido@gmail.com', 'olvido', '3d66541a77d71a3f8598c0fca217c1ff', 'EspaÃ±a', 'CÃ¡diz', 'Lagunas', '17', '45256'),
(19, 'RamÃ³n', 'Cervantes', '698323873', 'ramon@gmail.com', 'ramon', '2e4cf903f6fa9e5019f5a2c1d947dc4f', 'EspaÃ±a', 'Galicia', 'RincÃ³n ', '23', '34675'),
(20, 'Rita', 'Murillo', '689123240', 'rita@gmail.com', 'rita', 'be1ae2eeeca8fb8302aed56fb0a6019d', 'EspaÃ±a', 'Granada', 'Las gabias', '35', '23987'),
(21, 'Esperanza', 'Murillo', '684729284', 'esperanza@gmail.com', 'esperanza', 'aacf431f0072cb516066adf83d013e5d', 'EspaÃ±a', 'Valencia', 'Manises', '28', '45425'),
(22, 'LÃ¡zaro', 'Bas', '659184723', 'lazaro@gmail.com', 'lazaro', '5065a5f63e87b102af0308c2d959ea16', 'EspaÃ±a', 'Valencia', 'Almoina', '9', '45676'),
(23, 'Luis', 'Montes', '682402257', 'luis@gmail.com', 'luis', 'c44688b5061756b3cca2b86c016a1535', 'EspaÃ±a', 'AlmerÃ­a', 'Zapillo', '45', '63562'),
(24, 'Dina', 'Palomares', '612743983', 'dina@gmail.com', 'dina', '7f3f50f5fda824900ef8b87e1b3b0a6f', 'EspaÃ±a', 'Zaragoza', 'Serrano', '43', '78729'),
(27, 'Yasser', 'Mohamed', '653105506', 'yasser@gmail.com', 'yass', '750aa360aa8f8dbf3d03f508b30129eb', 'EspaÃ±a', 'Melilla', 'Juan RÃ­os', '11', '52003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_res` int(255) NOT NULL,
  `id_cli` int(255) NOT NULL,
  `id_veh` int(255) NOT NULL,
  `fecha_entrega` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hora_entrega` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_devolucion` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hora_devolucion` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `id_val` int(255) NOT NULL,
  `id_cli` int(255) NOT NULL,
  `opinion_val` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `puntuacion_val` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_valoracion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `valoraciones`
--

INSERT INTO `valoraciones` (`id_val`, `id_cli`, `opinion_val`, `puntuacion_val`, `fecha_valoracion`) VALUES
(7, 16, 'Me gustÃ³ mucho el servicio, el auto en muy buenas condiciones.', '5', '2019-06-15 22:31:54'),
(8, 18, 'El servicio y la atenciÃ³n son muy buenos', '4', '2019-06-15 22:32:40'),
(9, 23, 'Facilidad en la devoluciÃ³n del vehÃ­culo.', '3', '2019-06-15 22:33:33'),
(10, 20, 'El personal de Melicar es muy amable.', '5', '2019-06-15 22:34:48'),
(11, 24, 'Excelente servicio', '4', '2019-06-16 16:42:27'),
(17, 27, 'Personal muy amable', '4', '2019-06-17 00:28:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_veh` int(255) NOT NULL,
  `tipo_veh` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marca_veh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modelo_veh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `plazas_veh` int(10) NOT NULL,
  `maletas_veh` int(10) NOT NULL,
  `puertas_veh` int(10) NOT NULL,
  `cambio_veh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `air_veh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `combustible_veh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `precio_veh` int(4) NOT NULL,
  `imagen_veh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado_veh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_veh`, `tipo_veh`, `marca_veh`, `modelo_veh`, `plazas_veh`, `maletas_veh`, `puertas_veh`, `cambio_veh`, `air_veh`, `combustible_veh`, `precio_veh`, `imagen_veh`, `estado_veh`) VALUES
(4, 'PequeÃ±o', 'Fiat', '500', 4, 1, 3, 'Manual', 'Si', 'Mixto', 96, 'C:fakepathFiat500.png', 'disponible'),
(5, 'PequeÃ±o', 'Renault', 'Clio', 4, 2, 5, 'Manual', 'Si', 'Mixto', 96, 'C:fakepathRenaultClio.png', 'alquilado'),
(7, 'Mediano', 'Volkswagen', 'Golf', 5, 3, 5, 'Manual', 'Si', 'Mixto', 181, 'C:fakepathVolkswagenGolf.PNG', 'disponible'),
(8, 'Mediano', 'Audi', 'A3 SB', 5, 3, 3, 'Manual', 'Si', 'Mixto', 220, 'C:fakepathAudiA3SB.PNG', 'disponible'),
(10, 'Grande', 'Seat', 'Leon ST', 5, 4, 5, 'Manual', 'Si', 'Mixto', 200, 'C:fakepathSeatLeonST.PNG', 'disponible'),
(11, 'Grande', 'BMW', 'Serie 3', 5, 4, 5, 'Manual', 'Si', 'Mixto', 290, 'C:fakepathBWMSerie3.PNG', 'disponible'),
(18, 'Mediano', 'Seat', 'Leon', 5, 2, 5, 'Manual', 'Si', 'Mixto', 110, 'C:fakepathSeatLeon.png', 'disponible'),
(19, 'Furgoneta', 'Mercedes', 'Vito', 7, 8, 3, 'Manual', 'Si', 'Mixto', 340, 'C:fakepathMercedesVito.png', 'disponible'),
(21, 'Furgoneta', 'Mercedes', 'Citan', 3, 5, 3, 'Manual', 'Si', 'Mixto', 280, 'C:fakepathMercedesCitan.png', 'disponible'),
(22, 'MonovolÃºmen', 'Volkswagen', 'Touran', 7, 4, 5, 'Manual', 'Si', 'Mixto', 260, 'C:fakepathVolkswagenTouran.png', 'disponible'),
(23, 'Grande', 'Renault', 'Talisman', 5, 3, 5, 'Manual', 'Si', 'Mixto', 230, 'C:fakepathRenaultTalisman.png', 'disponible');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `id_cli` (`id_cli`),
  ADD KEY `id_veh` (`id_veh`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`id_val`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_veh`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_res` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id_val` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_veh` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id_cli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_veh`) REFERENCES `vehiculos` (`id_veh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `valoraciones_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id_cli`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
