-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 12:39:52
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almazara`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aceite`
--

CREATE TABLE `aceite` (
  `codigo` bigint(20) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `cantidad` varchar(50) DEFAULT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `precio` int(3) DEFAULT NULL,
  `pre_pun` int(3) NOT NULL,
  `activo` varchar(1) NOT NULL,
  `premiado` varchar(1) NOT NULL,
  `limitado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aceite`
--

INSERT INTO `aceite` (`codigo`, `nombre`, `cantidad`, `descripcion`, `foto`, `precio`, `pre_pun`, `activo`, `premiado`, `limitado`) VALUES
(1, 'RINCÓN DE LA SUBBÉTICA', '500ML', 'Rincón de la Subbética nace en los primeros días de la cosecha. Es un virgen extra ecológico producto del mimo de los expertos que cuidan del fruto durante todo el año. Es una auténtica obra maestra para los paladares más exigentes. Es un viaje gastronómico a la esencia del aceite de oliva virgen extra ecológico.', 'producto1', 19, 19, 's', 's', 'n'),
(2, 'PARQUEOLIVA SERIE ORO', '500ML', 'Parqueoliva Serie Oro es una auténtica joya. Se seleccionan los mejores frutos de oliva al principio de la campaña para envasar uno de los mejores aceites del mundo. La perfecta combinación de la variedad picuda y hojiblanca se convierte en el deleite de los sentidos para el catador.', 'producto2', 12, 12, 's', 's', 'n'),
(3, 'ALMAOLIVA ARBEQUINO', '500ML', 'Con este maravilloso virgen extra hemos envasado las mejores esencias de la variedad arbequina. El sol de nuestra tierra ilumina un aceite con una personalidad definida por unos matices de aromas y sabor sorprendente que no dejarán indiferente al catador.\r\n\r\n', 'producto3', 11, 11, 's', 's', 'n'),
(4, 'PARQUEOLIVA SERIE ORO LATA', '3L', 'Parqueoliva Serie Oro es una auténtica joya. Se seleccionan los mejores frutos de oliva al principio de la campaña para envasar uno de los mejores aceites del mundo. La perfecta combinación de la variedad picuda y hojiblanca se convierte en el deleite de los sentidos para el catador.\r\n\r\n', 'producto4', 41, 41, 's', 's', 'n'),
(5, 'ALMAOLIVA BIO', '500ML', 'Nuestra versión del Almaoliva BIO es un aceite que deleitará y apasionará a los amantes de los productos BIO. Su calidad se acerca a una categoría superior, A.O.V.E. excelente que presenta una armonía entre los distintos matices que forman parte de él.', 'producto5', 6, 6, 's', 's', 'n'),
(6, 'VINAGRE DULCE DE MEMBRILLO', '250ML', 'Vinagre procedente de la variedad Membrillo Común o Zagrilla, característica de la zona de la que procede, las Sierras de la Subbética Cordobesa. Sin envejecimiento y manteniendo los aromas y sabores característicos de esta fruta tan aromática.', 'producto6', 4, 4, 's', 's', 'n'),
(7, 'ESTUCHE PARQUEOLIVA SERIE ORO Y ALMAOLIVA ARBEQUINO', '1L', 'Botella Parqueoliva Serie Oro de 500ml\r\nParqueoliva Serie Oro es una auténtica joya. Se seleccionan los mejores frutos de oliva al principio de la campaña para envasar uno de los mejores aceites del mundo. La perfecta combinación de la variedad picuda y hojiblanca se convierte en el deleite de los sentidos para el catador.\r\n\r\nBotella Almaoliva Arbequino de 500ml\r\nCon este maravilloso virgen extra hemos envasado las mejores esencias de la variedad arbequina. El sol de nuestra tierra ilumina un aceite con una personalidad definida por unos matices de aromas y sabor sorprendente que no dejarán indiferente al catador.', 'producto7', 27, 27, 's', 's', 'n'),
(8, 'BOTELLAS SOLIDARIAS', '500ML', 'Botellas con Alma, es LA IDEA que surge de un grupo de personas de la gran familia Almazaras de la Subbética que conocen muy de cerca la enfermedad en sus seres más cercanos e indefensos: sus hijos. Su idea consiste en la creación de botellas únicas, en la que la imagen de cada una sea el sentimiento plasmado en un dibujo realizado por los alumnos  de los colegios adheridos al proyecto. La temática utilizada es sobre “La Familia, El Olivar y el Aceite”. Los dibujos están hechos sobre una cartulina de papel con certificación FSC. Esa magnífica aportación solidaria irá acompañada en su interior acorde a su valor único artístico y sentimental, con los aceites de oliva virgen extra de la máxima calidad y prestigio.', 'producto8', 10, 10, 's', 'n', 'n'),
(9, 'ALMAOLIVA GRAN SELECCIÓN, CAJA 3 UNIDADES', '5L', 'Almaoliva Gran Selección es un gran aceite de oliva para los cocineros más exigentes del mundo. Su perfecta combinación de aceitunas picudas, picuales y hojiblancas hacen que Almaoliva Gran Selección sea un aceite de oliva perfecto para aquellos que disfrutan con un aceite de oliva virgen extra frutado medio.', 'producto9', 72, 72, 's', 'n', 'n'),
(10, 'ALMAOLIVA BIO, CAJA 4 UNIDADES', '3L', 'Nuestra versión del Almaoliva BIO es un aceite que deleitará y apasionará a los amantes de los productos BIO. Su calidad se acerca a una categoría superior, A.O.V.E. excelente que presenta una armonía entre los distintos matices que forman parte de él.', 'producto10', 90, 90, 's', 's', 'n'),
(11, 'ALMAOLIVA GRAN SELECCIÓN, CAJA 6 UNIDADES', '2L', 'Almaoliva Gran Selección es un gran aceite de oliva para los cocineros más exigentes del mundo. Su perfecta combinación de aceitunas picudas, picuales y hojiblancas hacen que Almaoliva Gran Selección sea un aceite de oliva perfecto para aquellos que disfrutan con un aceite de oliva virgen extra frutado medio.', 'producto11', 60, 60, 's', 'n', 'n'),
(12, 'ALMAOLIVA GASTRONOMÍA, CAJA 3 UNIDADES', '5L', 'Almaoliva especial gastronomía ha sido diseñado para ofrecer un aceite de oliva virgen extra exquisito para frituras saludables. Crear productos 100% naturales, saludables y complementarios para los requerimientos nutricionales que demanda nuestra salud, se alcanza con los componentes beneficiosos de los mejores aceites de Almazaras de la Subbética.\r\n\r\nLa perfecta combinación de aceitunas picudas, picuales y hojiblancas hacen que Almaoliva sea un Aceite de Oliva Virgen Extra perfecto para su uso en distintos rangos de temperatura, desde crudo hasta su uso para frituras en la restauración profesional.', 'producto12', 70, 70, 's', 'n', 'n'),
(13, 'ALMAOLIVA BIO, CAJA 15 UNIDADES', '500ML', 'Nuestra versión del Almaoliva BIO es un aceite que deleitará y apasionará a los amantes de los productos BIO. Su calidad se acerca a una categoría superior, A.O.V.E. excelente que presenta una armonía entre los distintos matices que forman parte de él.', 'producto13', 80, 80, 's', 's', 'n'),
(14, 'PARQUEOLIVA, CAJA 4 UNIDADES', '3L', 'Parqueoliva es una parte de nuestro origen, de nuestra historia. Una marca insignia que nos ha permitido ser una de las mejores almazaras del mundo. Es un aceite de oliva virgen extra perfecto para aquellos que buscan un aceite excelente por su equilibrio perfecto, por su armonía en aromas y sabores.', 'producto14', 75, 75, 's', 'n', 'n'),
(15, 'ALMAOLIVA, CAJA 12 UNIDADES', '500ML', 'Almaoliva especial gastronomía ha sido diseñado para ofrecer un aceite de oliva virgen extra exquisito para frituras saludables. Crear productos 100% naturales, saludables y complementarios para los requerimientos nutricionales que demanda nuestra salud, se alcanza con los componentes beneficiosos de los mejores aceites de Almazaras de la Subbética.\r\n\r\nLa perfecta combinación de aceitunas picudas, picuales y hojiblancas hacen que Almaoliva sea un Aceite de Oliva Virgen Extra perfecto para su uso en distintos rangos de temperatura, desde crudo hasta su uso para frituras en la restauración profesional.', 'producto15', 42, 42, 's', 'n', 'n'),
(16, 'PARQUEOLIVA, CAJA 12 UNIDADES', '250ML', 'Parqueoliva es una parte de nuestro origen, de nuestra historia. Una marca insignia que nos ha permitido ser una de las mejores almazaras del mundo. Es un aceite de oliva virgen extra perfecto para aquellos que buscan un aceite excelente por su equilibrio perfecto, por su armonía en aromas y sabores.\r\n\r\n', 'producto16', 33, 33, 's', 'n', 'n'),
(17, 'ALMAOLIVA GRAN SELECCIÓN AOVE SIN FILTRAR', '2L', 'Almaoliva Gran Selección es un aceite de oliva virgen extra fresco SIN FILTRAR de la campaña 2021/2022.', 'producto17', 12, 12, 's', 'n', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carburante`
--

CREATE TABLE `carburante` (
  `codigo` bigint(20) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `precio_l` decimal(3,2) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `activo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carburante`
--

INSERT INTO `carburante` (`codigo`, `tipo`, `precio_l`, `foto`, `activo`) VALUES
(1, 'GASOLINA', '1.25', 'producto5', 's'),
(2, 'GASOIL', '1.09', 'producto4', 's'),
(3, 'AGRODIESEL', '0.75', 'producto3', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cosecha`
--

CREATE TABLE `cosecha` (
  `codigo` bigint(20) NOT NULL,
  `id_socio` bigint(20) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `tolva` int(2) DEFAULT NULL,
  `termino` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `kilos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cosecha`
--

INSERT INTO `cosecha` (`codigo`, `id_socio`, `tipo`, `tolva`, `termino`, `fecha`, `kilos`) VALUES
(1, 1, 2, 3, 'Granada', '2021-11-03', 231),
(2, 1, 1, 2, 'Granada', '2021-10-23', 345),
(3, 3, 1, 1, 'Guadix', '2020-01-29', 234),
(4, 3, 2, 5, 'Guadix', '2020-10-01', 230),
(5, 3, 2, 2, 'Guadix', '2021-04-16', 347),
(9, 10, 2, 6, 'Granada', '2021-12-10', 136),
(10, 10, 2, 1, 'Granada', '2020-01-13', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `codigo` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `pre_pun` int(5) NOT NULL,
  `activo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maquina`
--

INSERT INTO `maquina` (`codigo`, `nombre`, `descripcion`, `foto`, `pre_pun`, `activo`) VALUES
(1, 'Vareador SPA 65 - SISTEMA AP', 'Silencioso vareador de batería diseñado para la recolección de aceitunas y la recogida de frutos secos de cáscara dura (almendras, nueces, pistachos...). Cuenta con ocho varillas tipo peine de alta resistencia de fibra de carbono. Regulación progresiva de la velocidad. La batería es compatible con todas las máquinas de batería STIHL. Para uso profesional.', 'producto1', 598, 's'),
(2, 'Vareador SP 482', 'Vareador profesional con un potente motor de 2.2kW. Baja vibración debido a componentes de magnesio. Práctico arnés para mayor comodidad, optimización en el peso de la caja reductora, bajas emisiones de gases y menor consumo, cumplimiento de la normativa de gases.', 'producto2', 1769, 's'),
(3, 'Soplador BR 200', 'Sopladora de gasolina compacta y muy ligera, sistema antivibración STIHL, Motor 2 MIX, de fácil arranque, acelerador regulable con pulsador stop, asa para el transporte.', 'producto3', 425, 's'),
(4, 'Podadora de altura HT 105', 'La podadora de altura de gasolina STIHL HT 105 es muy adecuada para el cuidado de árboles profesional en huertos y municipios. Con esta potente podadora de altura podrá eliminar fácil y eficazmente la madera muerta, las ramas o los restos de la tormenta y también cortar árboles frutales. Su motor STIHL 4-MIX® no sólo es potente, sino que también trabaja con bajas emisiones. La bomba de combustible manual junto con la descompresión automática\r\n\r\nasegura un arranque rápido y cómodo del motor.', 'producto4', 699, 's'),
(5, 'Fardo de aceitunas', 'Fardos de 8 metros de ancho y 14 metros de largo', 'producto5', 57, 's'),
(6, 'Rastrillo', 'Rastrillo de cabezál desmontable, ajustable 97cm - 164cm', 'producto6', 28, 's'),
(7, 'Batería de mochila AR 3000', 'Batería de litio ion portátil con capacidad de 1.520 Wh para una larga vida útil de la batería. Puerto USB, interfaz Bluetooth® para conexión a un dispositivo STIHL. Carcasa robusta con asa de transporte integrada e indicador de estado de carga (seis LED). Puede conectarse directamente con RMA 765 V. Junto con el sistema de soporte AR L y el cable de conexión AR L adecuado para dispositivos con conector, así como en conexión con el adaptador AP para dispositivos con compartimiento de batería. Uso en lluvia posible. Sin cable de conexión, adaptador AP y sistema de arnés', 'producto7', 1649, 's'),
(8, 'Pulverizador a presión con indicador de nivel', 'Mochila pulverizadora de 16 litros', 'producto8', 34, 's'),
(9, 'Pluma cargadora', 'Pluma cargadora para tractores', 'producto9', 1600, 's'),
(10, 'Desbrozadora FS 38', 'Ligera y ergonómica desbrozadora muy bien equipada. Ideal para mantener en orden su jardín, muros, árboles y arbustos, así como para segar pequeñas superficies de césped.', 'producto10', 179, 's'),
(11, 'Atomizador arrastrado ST', 'Atomizador arrastrado a tractor montado sobre un robusto chasis de acero estructural, con capacidades de 2000 litros. Dispone de depósito principal, depósito auxiliar y depósito lava-manos, todo integrado en un conjunto compacto.', 'producto11', 1800, 's'),
(12, 'Remolque agricola', 'Remolque agrícola DRP20 para tractor con carga útil máxima 2000kg, peso neto 450kg', 'producto12', 4100, 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_aceite`
--

CREATE TABLE `pedido_aceite` (
  `codigo` bigint(20) UNSIGNED NOT NULL,
  `id_socio` bigint(20) NOT NULL,
  `cod_aceite` bigint(20) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `precio` int(3) NOT NULL,
  `total` int(5) NOT NULL,
  `confirmado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_aceite`
--

INSERT INTO `pedido_aceite` (`codigo`, `id_socio`, `cod_aceite`, `fecha`, `precio`, `total`, `confirmado`) VALUES
(10, 1, 1, '2021-12-02', 19, 190, 'n'),
(11, 1, 7, '2021-12-02', 27, 270, 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_car`
--

CREATE TABLE `pedido_car` (
  `codigo` bigint(20) UNSIGNED NOT NULL,
  `id_socio` bigint(20) NOT NULL,
  `id_carburante` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `precio` int(3) NOT NULL,
  `total` int(3) NOT NULL,
  `confirmado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_car`
--

INSERT INTO `pedido_car` (`codigo`, `id_socio`, `id_carburante`, `fecha`, `precio`, `total`, `confirmado`) VALUES
(2, 1, 1, '2021-11-22', 1, 14, 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_maq`
--

CREATE TABLE `pedido_maq` (
  `codigo` bigint(20) UNSIGNED NOT NULL,
  `id_socio` bigint(20) NOT NULL,
  `cod_maq` bigint(20) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `precio` int(3) NOT NULL,
  `total` int(5) NOT NULL,
  `confirmado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_maq`
--

INSERT INTO `pedido_maq` (`codigo`, `id_socio`, `cod_maq`, `fecha`, `precio`, `total`, `confirmado`) VALUES
(1, 1, 6, '2021-11-15', 28, 28, 's'),
(2, 1, 1, '2021-11-16', 599, 599, 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE `premios` (
  `id` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `activo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`id`, `nombre`, `imagen`, `activo`) VALUES
(1, 'aipo', 'aipo', 's'),
(2, 'angeles', 'angeles', 's'),
(3, 'argoliva', 'argoliva', 's'),
(4, 'armonia', 'armonia', 's'),
(5, 'athena', 'athena', 's'),
(6, 'china', 'china', 's'),
(7, 'cinve', 'cinve', 's'),
(8, 'cordoba', 'cordoba', 's'),
(9, 'ecotrama', 'ecotrama', 's'),
(10, 'esao', 'esao', 's'),
(11, 'exoliva', 'exoliva', 's'),
(12, 'iberoleum', 'iberoleum', 's'),
(13, 'japon', 'japon', 's'),
(14, 'joop', 'joop', 's'),
(15, 'leone_doro', 'leone_doro', 's'),
(16, 'london_iooc', 'london_iooc', 's'),
(17, 'nyiooc', 'nyiooc', 's'),
(18, 'oli_vinus', 'oli_vinus', 's'),
(19, 'olio_award', 'olio_award', 's'),
(20, 'olio_capitale', 'olio_capitale', 's'),
(21, 'olive', 'olive', 's'),
(22, 'olive_dor', 'olive_dor', 's'),
(23, 'sol_doro', 'sol_doro', 's'),
(24, 'terra_leum', 'terra_leum', 's'),
(25, 'evo', 'evo', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `id` bigint(20) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellidos` varchar(10) NOT NULL,
  `telefono` int(9) NOT NULL,
  `puntos` int(5) NOT NULL,
  `nombre_soc` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `activo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`id`, `dni`, `nombre`, `apellidos`, `telefono`, `puntos`, `nombre_soc`, `contrasena`, `activo`) VALUES
(0, '26823724C', 'Rafael', 'Sánchez', 617808120, 0, 'admin', 'admin', 's'),
(1, '15712613B', 'Iván', 'Gómez', 617345679, 540, 'ivan', 'rl_wow', 's'),
(3, '47932683Q', 'Luis', 'Frutos', 617438912, 1000, 'luis', 'guadix', 's'),
(10, '87654321F', 'Pablo', 'Fuentes', 617864246, 1000, 'pablo', 'sport', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`codigo`, `descripcion`) VALUES
(1, 'arbol'),
(2, 'suelo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aceite`
--
ALTER TABLE `aceite`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `carburante`
--
ALTER TABLE `carburante`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `cosecha`
--
ALTER TABLE `cosecha`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `ce_cos_soc` (`id_socio`),
  ADD KEY `ce_cos_tip` (`tipo`);

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pedido_aceite`
--
ALTER TABLE `pedido_aceite`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `ce_ppro_soc` (`id_socio`),
  ADD KEY `ce_ppro_ace` (`cod_aceite`);

--
-- Indices de la tabla `pedido_car`
--
ALTER TABLE `pedido_car`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `ce_pcar_car` (`id_carburante`),
  ADD KEY `ce_pcar_soc` (`id_socio`);

--
-- Indices de la tabla `pedido_maq`
--
ALTER TABLE `pedido_maq`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `ce_ppro_soc` (`id_socio`),
  ADD KEY `ce_ppro_maq` (`cod_maq`);

--
-- Indices de la tabla `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aceite`
--
ALTER TABLE `aceite`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `carburante`
--
ALTER TABLE `carburante`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cosecha`
--
ALTER TABLE `cosecha`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pedido_aceite`
--
ALTER TABLE `pedido_aceite`
  MODIFY `codigo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pedido_car`
--
ALTER TABLE `pedido_car`
  MODIFY `codigo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido_maq`
--
ALTER TABLE `pedido_maq`
  MODIFY `codigo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `premios`
--
ALTER TABLE `premios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `socio`
--
ALTER TABLE `socio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cosecha`
--
ALTER TABLE `cosecha`
  ADD CONSTRAINT `ce_cos_soc` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id`),
  ADD CONSTRAINT `ce_cos_tip` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`codigo`);

--
-- Filtros para la tabla `pedido_aceite`
--
ALTER TABLE `pedido_aceite`
  ADD CONSTRAINT `ce_ppro_ace` FOREIGN KEY (`cod_aceite`) REFERENCES `aceite` (`codigo`),
  ADD CONSTRAINT `ce_ppro_soc` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id`);

--
-- Filtros para la tabla `pedido_car`
--
ALTER TABLE `pedido_car`
  ADD CONSTRAINT `ce_pcar_car` FOREIGN KEY (`id_carburante`) REFERENCES `carburante` (`codigo`),
  ADD CONSTRAINT `ce_pcar_soc` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id`);

--
-- Filtros para la tabla `pedido_maq`
--
ALTER TABLE `pedido_maq`
  ADD CONSTRAINT `ce_ppro_maq` FOREIGN KEY (`cod_maq`) REFERENCES `maquina` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
