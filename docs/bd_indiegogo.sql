-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2018 a las 21:40:30
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_indiegogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `codigo_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`codigo_categoria`, `nombre_categoria`) VALUES
(1, 'Accesorios para cámaras'),
(2, 'Alimentos y bebidas'),
(3, 'Audio'),
(4, 'Energía y tecnología ecológica'),
(5, 'Inicio'),
(6, 'Moda y dispositivos portátiles'),
(7, 'Productividad'),
(8, 'Salud y actividad física'),
(9, 'Teléfonos y accesorios'),
(10, 'Transporte'),
(11, 'Viajes y vida al aire libre'),
(12, 'Arte'),
(13, 'Cómics'),
(14, 'Danza y teatro'),
(15, 'Escritura y edición'),
(16, 'Fotografía'),
(17, 'Juegos de mesa'),
(18, 'Música'),
(19, 'Película'),
(20, 'Podcasts y blogs'),
(21, 'Series web y programas de TV'),
(22, 'Videojuegos'),
(23, 'Bienestar'),
(24, 'Cultura'),
(25, 'Derechos de los animales'),
(26, 'Derechos humanos'),
(27, 'Educación'),
(28, 'Empresas locales'),
(29, 'Espiritualidad'),
(30, 'Medio ambiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

CREATE TABLE `tbl_genero` (
  `codigo_genero` int(11) NOT NULL,
  `genero` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`codigo_genero`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_post`
--

CREATE TABLE `tbl_post` (
  `codigo_post` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_categoria` int(11) NOT NULL,
  `nombre_campana` varchar(100) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `fecha_de_publicacion` date DEFAULT NULL,
  `fecha_de_expiracion` date DEFAULT NULL,
  `url_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `codigo_usuario` int(11) NOT NULL,
  `codigo_genero` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `url_image_perfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`codigo_usuario`, `codigo_genero`, `nombre`, `apellido`, `email`, `password`, `url_image_perfil`) VALUES
(1, 1, 'Luis', 'Estrada', 'luis@gmail.com', 'asd.456', 'img/profile/foto_perfil_predeterminado.png'),
(2, 1, 'Ronmel', 'Lizardo', 'ronmel@gmail.com', 'asd.456', 'img/profile/foto_perfil_predeterminado.png'),
(3, 1, 'Juan', 'Perez', 'jperez@gmail.com', 'asd.456', 'img/profile/foto_perfil_predeterminado.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`codigo_categoria`);

--
-- Indices de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  ADD PRIMARY KEY (`codigo_genero`);

--
-- Indices de la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`codigo_post`),
  ADD KEY `fk_tbl_post_tbl_usuario_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_post_tbl_categorias1_idx` (`codigo_categoria`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD KEY `fk_tbl_usuario_tbl_genero1_idx` (`codigo_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  MODIFY `codigo_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `codigo_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `fk_tbl_post_tbl_categorias1` FOREIGN KEY (`codigo_categoria`) REFERENCES `tbl_categorias` (`codigo_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_post_tbl_usuario` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuario` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `fk_tbl_usuario_tbl_genero1` FOREIGN KEY (`codigo_genero`) REFERENCES `tbl_genero` (`codigo_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
