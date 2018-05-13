-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2018 a las 02:40:14
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

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
  `codigo_categoria` int(50) NOT NULL,
  `nombre_categoria` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`codigo_categoria`, `nombre_categoria`) VALUES
(1, 'Accesorios para camaras'),
(2, 'Alimentos y bebidas'),
(3, 'Audio'),
(4, 'Energia y tecnologia ecologica'),
(5, 'Inicio'),
(6, 'Moda y dispositivos portatiles'),
(7, 'Productividad'),
(8, 'Salud y actividad fisica'),
(9, 'Telefonos y accesorios'),
(10, 'Transporte'),
(11, 'Viajes y vida al aire libre'),
(12, 'Arte'),
(13, 'Comics'),
(14, 'Danza y teatro'),
(15, 'Escritura y edicion'),
(16, 'Fotografia'),
(17, 'Juegos de mesa'),
(18, 'Musica'),
(19, 'Pelicula'),
(20, 'Podcasts y blogs'),
(21, 'Series web y programas de TV'),
(22, 'Videojuegos'),
(23, 'Bienestar'),
(24, 'Cultura'),
(25, 'Derechos de los animales'),
(26, 'Derechos humanos'),
(27, 'Educacion'),
(28, 'Empresas locales'),
(29, 'Espiritualidad'),
(30, 'Medio ambiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contribuciones`
--

CREATE TABLE `tbl_contribuciones` (
  `codigo_contribuciones` int(100) NOT NULL,
  `codigo_post` int(100) NOT NULL,
  `codigo_usuario` int(100) NOT NULL,
  `monto` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `visibilidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_post`
--

CREATE TABLE `tbl_post` (
  `codigo_post` int(100) NOT NULL,
  `codigo_usuario` int(100) NOT NULL,
  `codigo_categoria` int(50) NOT NULL,
  `nombre_campana` varchar(100) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `fecha_de_publicacion` date DEFAULT NULL,
  `fecha_de_expiracion` date DEFAULT NULL,
  `url_image` varchar(100) DEFAULT NULL,
  `monto_a_recaudar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_post`
--

INSERT INTO `tbl_post` (`codigo_post`, `codigo_usuario`, `codigo_categoria`, `nombre_campana`, `descripcion`, `fecha_de_publicacion`, `fecha_de_expiracion`, `url_image`, `monto_a_recaudar`) VALUES
(1, 1, 1, 'Primer Campana', 'Demostracion de almacenamiento en la bd', '2018-01-18', '2018-02-15', 'img/icon-icon-go.png', '12000'),
(2, 2, 3, 'Apps IS410', 'Nueva app diferente innovadora', '2018-01-18', '2018-02-15', 'img/imgpost/imagen4.png', '3000'),
(3, 2, 11, 'restaurante innovador', 'Nueva y diferente innovadora', '2018-01-18', '2018-05-15', 'img/imgpost/imagen3.png', '123000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_de_usuarios`
--

CREATE TABLE `tbl_tipo_de_usuarios` (
  `codigo_tipo_de_usuario` int(11) NOT NULL,
  `tipo_de_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_de_usuarios`
--

INSERT INTO `tbl_tipo_de_usuarios` (`codigo_tipo_de_usuario`, `tipo_de_usuario`) VALUES
(1, 'Administrador'),
(2, 'Usuario Invitado'),
(3, 'Usuario Registrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `codigo_usuario` int(100) NOT NULL,
  `codigo_tipo_de_usuario` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `url_image_perfil` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usuario`, `codigo_tipo_de_usuario`, `nombre`, `apellido`, `email`, `password`, `url_image_perfil`) VALUES
(1, 1, 'Luis', 'Estrada', 'luis@gmail.com', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'img/profile/foto_perfil_predeterminado.png'),
(2, 1, 'Ronmel', 'Lizardo', 'ronmel@gmail.com', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'img/profile/foto_perfil_predeterminado.png'),
(3, 3, 'Juan', 'Perez', 'jperez@gmail.com', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'img/profile/foto_perfil_predeterminado.png'),
(4, 1, '3', 'Idania', 'Oliva', '85e740e60fc24b4f0a28842047e858131e8b885e', 'img/profile/foto_perfil_predeterminado.png'),
(5, 3, 'Juan', 'Osorto', 'osorto@yahoo.com', '4b6f75ac963a888140505d500f19a673c1eabb80', 'img/profile/foto_perfil_predeterminado.png'),
(6, 3, 'Douglas', 'Hernandez', 'douglas@hotmail.com', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'img/profile/foto_perfil_predeterminado.png'),
(7, 3, 'Douglas', 'Hernandez', 'douglas@gmail.com', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'img/profile/foto_perfil_predeterminado.png'),
(8, 3, 'Douglas', 'Hernandez', 'douglas@hotmail.com', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'img/profile/foto_perfil_predeterminado.png'),
(9, 3, 'Marlon', 'Palma', 'palma@yahoo.es', '77b5149d698866edc312b9dabcd52107ed72cb67', 'img/profile/foto_perfil_predeterminado.png'),
(10, 3, 'Ricardo', 'Herrera', 'herrera@gmail.com', 'b69bdeeac09a06a5650dba3e0635ecf73fac78fb', 'img/profile/foto_perfil_predeterminado.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`codigo_categoria`);

--
-- Indices de la tabla `tbl_contribuciones`
--
ALTER TABLE `tbl_contribuciones`
  ADD PRIMARY KEY (`codigo_contribuciones`),
  ADD KEY `fk_tbl_contribuciones_tbl_post1_idx` (`codigo_post`),
  ADD KEY `fk_tbl_contribuciones_tbl_usuarios1_idx` (`codigo_usuario`);

--
-- Indices de la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`codigo_post`),
  ADD KEY `fk_tbl_post_tbl_usuario_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_post_tbl_categorias1_idx` (`codigo_categoria`);

--
-- Indices de la tabla `tbl_tipo_de_usuarios`
--
ALTER TABLE `tbl_tipo_de_usuarios`
  ADD PRIMARY KEY (`codigo_tipo_de_usuario`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD KEY `fk_tbl_usuarios_tbl_tipo_de_usuarios1_idx` (`codigo_tipo_de_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_de_usuarios`
--
ALTER TABLE `tbl_tipo_de_usuarios`
  MODIFY `codigo_tipo_de_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_contribuciones`
--
ALTER TABLE `tbl_contribuciones`
  ADD CONSTRAINT `fk_tbl_contribuciones_tbl_post1` FOREIGN KEY (`codigo_post`) REFERENCES `tbl_post` (`codigo_post`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_contribuciones_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `fk_tbl_post_tbl_categorias1` FOREIGN KEY (`codigo_categoria`) REFERENCES `tbl_categorias` (`codigo_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_post_tbl_usuario` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_tipo_de_usuarios1` FOREIGN KEY (`codigo_tipo_de_usuario`) REFERENCES `tbl_tipo_de_usuarios` (`codigo_tipo_de_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
