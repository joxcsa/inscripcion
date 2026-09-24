-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2026 a las 23:00:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE `administrativo` (
  `id_administrativo` int(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) DEFAULT NULL,
  `rfc` varchar(15) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `sexo` varchar(16) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `experiencia` int(2) DEFAULT NULL,
  `cuenta_banco` varchar(20) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `ventanilla` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrativo`
--

INSERT INTO `administrativo` (`id_administrativo`, `nombre`, `apellido1`, `apellido2`, `rfc`, `telefono`, `sexo`, `carrera`, `experiencia`, `cuenta_banco`, `correo`, `curp`, `ventanilla`) VALUES
(1, 'luis', 'marin', 'Ruiz', 'MADI890101HDFRN', '5559876543', 'Masculino', 'Ingenier?a Mec?nica', 5, '1234567890123456', 'marco.diaz@mail.com', 'MADI890101HDFRNS09', 1),
(2, 'Clara', 'Vazquez', 'Mendoza', 'CLAV760522MDFLL', '5558765432', 'Femenino', 'Psicolog?a', 3, '2345678901234567', 'clara.vazquez@mail.com', 'CLAV760522MDFLLN08', 2),
(3, 'Ricardo', 'Jim?nez', 'Torres', 'RIJI750920HDFGT', '5557654321', 'Masculino', 'Econom?a', 7, '3456789012345678', 'ricardo.jimenez@mail.com', 'RIJI750920HDFGTR06', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(8) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) DEFAULT NULL,
  `nocontrol` int(20) NOT NULL,
  `sexo` varchar(16) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `numero_seguro` varchar(20) NOT NULL,
  `acta_nacimiento` varchar(50) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `constancia` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `apellido1`, `apellido2`, `nocontrol`, `sexo`, `correo`, `telefono`, `numero_seguro`, `acta_nacimiento`, `curp`, `constancia`, `direccion`) VALUES
(1, 'ANA', 'Garcia', 'Leon', 2147483647, 'Femenino', 'ANA.garcia@email.com', '5551234567', 'NS123456789', 'acta_octavio.pdf', 'GALO010203HDFXXXA9', 'constancia_octavio.pdf', 'estado de mexico'),
(2, 'Mario', 'Flores', 'Montes', 2147483647, 'Masculino', 'mario.flores@email.com', '5552345678', 'NS987654321', 'acta_mario.pdf', 'FOMM020304HDFXXXB8', 'constancia_mario.pdf', 'Guadalajara, M?xico'),
(3, 'Francisco', 'Zapi', 'Centeno', 2147483647, 'Masculino', 'francisco.zapi@email.com', '5553456789', 'NS112233445', 'acta_francisco.pdf', 'ZACE030405HDFXXXC7', 'constancia_francisco.pdf', 'Kabul, Afganist?n'),
(4, 'Mark', 'De Leon', 'Gonzales', 2147483647, 'Masculino', 'mark.deleon@email.com', '5554567890', 'NS556677889', 'acta_mark.pdf', 'DELG040506HDFXXXD6', 'constancia_mark.pdf', 'Monterrey, M?xico'),
(5, 'Pepe', 'Zepeda', 'Juarez', 2147483647, 'Masculino', 'pepe.zepeda@email.com', '5555678901', 'NS998877665', 'acta_pepe.pdf', 'ZEJU050607HDFXXXE5', 'constancia_pepe.pdf', 'Tijuana, M?xico'),
(6, 'hUGO', 'CISNEROS', 'HERANDEZ', 2147483647, 'Masculino', 'juandsjaj@gmail.con', '123-456-7890', '15363', '134353543', '4455367676', 'hIAH', 'San Jeronimo'),
(9, 'Francisco ', 'Flores ', 'Garcia', 2147483647, 'Masculino', 'francisco123@gmail.com', '7224652345', '678876888', 'si', 'sdf9898dfsdf', 'si', 'Av. Hidalgo 23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `id_aula` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `grado` varchar(10) NOT NULL,
  `ubicacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`id_aula`, `numero`, `capacidad`, `grupo`, `grado`, `ubicacion`) VALUES
(1, 'A 101', 35, '3A', 'tercer gra', 'EDIFICIO A - PLANTA BAJA'),
(2, 'a 102', 50, '3B', '3', 'Edificio A-Planta Baja'),
(3, 'A 103', 50, '3C', '3', 'Edificio A-Planta Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliares`
--

CREATE TABLE `auxiliares` (
  `id_auxiliares` int(8) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) DEFAULT NULL,
  `rfc` varchar(13) NOT NULL,
  `sexo` varchar(16) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `experiencia` int(2) NOT NULL,
  `cuenta_bancaria` varchar(25) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auxiliares`
--

INSERT INTO `auxiliares` (`id_auxiliares`, `nombre`, `apellido1`, `apellido2`, `rfc`, `sexo`, `telefono`, `experiencia`, `cuenta_bancaria`, `direccion`) VALUES
(1, 'mariano', 'Navarro', 'Torres', 'RNT920101ABC', 'Masculino', '5552345678', 7, '1239876543214567', 'Av. Insurgentes 500, CDMX'),
(2, 'Valeria', 'Mendoza', 'Castillo', 'VMC890606XYZ', 'Femenino', '5565432109', 6, '7890123456789012', 'Calle Hidalgo 100, Monterrey'),
(3, 'Fernando', 'Ortega', NULL, 'FOR750808DEF', 'Masculino', '5578901234', 9, '4567890123456789', 'Blvd. Las Torres 250, Guadalajara'),
(4, 'Andrea', 'Cort?s', 'L?pez', 'ACL990715GHI', 'Femenino', '5587654321', 4, '5678901234567890', 'Calle Benito Ju?rez 75, Puebla'),
(5, 'Javier', 'Ram?rez', 'Garc?a', 'JRG870920JKL', 'Masculino', '5590123456', 11, '6789012345678901', 'Av. Revoluci?n 300, Quer?taro'),
(6, 'Ricardo', 'Navarro', 'Torres', 'RNT920101ABC', 'Masculino', '5552345678', 7, '1239876543214567', 'Av. Insurgentes 500, CDMX'),
(7, 'Valeria', 'Mendoza', 'Castillo', 'VMC890606XYZ', 'Femenino', '5565432109', 6, '7890123456789012', 'Calle Hidalgo 100, Monterrey'),
(8, 'Fernando', 'Ortega', NULL, 'FOR750808DEF', 'Masculino', '5578901234', 9, '4567890123456789', 'Blvd. Las Torres 250, Guadalajara'),
(9, 'Andrea', 'Cort?s', 'L?pez', 'ACL990715GHI', 'Femenino', '5587654321', 4, '5678901234567890', 'Calle Benito Ju?rez 75, Puebla'),
(10, 'Javier', 'Ram?rez', 'Garc?a', 'JRG870920JKL', 'Masculino', '5590123456', 11, '6789012345678901', 'Av. Revoluci?n 300, Quer?taro'),
(11, 'pepe', 'CISNEROS', 'HERANDEZ', '12344', '', '7273723709', 0, '5644431', 'San Jeronimo'),
(12, 'hUGO', 'CISNEROS', 'Nache', 'juan', '', '7273723727', 0, '5644431', 'sanjuan'),
(13, 'pepe', 'CISNEROS', 'HERANDEZ', '12344', '', '7273723709', 0, '5644431', 'sanjuan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `id_boleta` int(8) NOT NULL,
  `calificacion` varchar(3) NOT NULL,
  `id_alumno` int(8) NOT NULL,
  `id_carreras` int(8) NOT NULL,
  `id_grado` int(8) NOT NULL,
  `id_grupo` int(8) NOT NULL,
  `id_turno` int(8) NOT NULL,
  `id_materia` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `boleta`
--

INSERT INTO `boleta` (`id_boleta`, `calificacion`, `id_alumno`, `id_carreras`, `id_grado`, `id_grupo`, `id_turno`, `id_materia`) VALUES
(1, '10', 1, 1, 1, 1, 1, 1),
(2, '9.5', 2, 2, 2, 2, 2, 2),
(3, '8.3', 3, 3, 3, 3, 3, 3),
(4, '6.4', 4, 4, 4, 4, 4, 4),
(5, '7.2', 5, 5, 5, 5, 5, 5),
(6, '10', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carreras` int(8) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `id_docente` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carreras`, `nombre`, `id_docente`) VALUES
(1, 'Ingenier?a en Sistemas', 1),
(2, 'Medicina', 2),
(3, 'Derecho', 3),
(4, 'Arquitectura', 4),
(5, 'Psicolog?a', 5),
(6, 'arquitectura', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `n_control` varchar(20) DEFAULT NULL,
  `ventanilla` varchar(2) DEFAULT NULL,
  `fec` date DEFAULT NULL,
  `hora` varchar(7) DEFAULT NULL,
  `id_administrativo` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `n_control`, `ventanilla`, `fec`, `hora`, `id_administrativo`, `id_alumno`) VALUES
(1, '1', '4', '2025-05-07', '08:49', 2, 1),
(2, '1', '4', '2025-05-10', '08:39', 1, 1),
(3, '1', '2', '2025-05-12', '07:00', 3, 3),
(4, '2', '2', '2025-05-12', '07:30', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_docs` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `acta_nacimiento` tinyint(1) DEFAULT 0,
  `certificado_estudios` tinyint(1) DEFAULT 0,
  `carnet` tinyint(1) DEFAULT 0,
  `seguro_social` varchar(30) DEFAULT NULL,
  `comprobante_domicilio` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_docs`, `id_alumno`, `acta_nacimiento`, `certificado_estudios`, `carnet`, `seguro_social`, `comprobante_domicilio`) VALUES
(1, 3, 1, 1, 1, '17398593', 1),
(2, 1, 1, 1, 1, '17398593', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` int(8) NOT NULL,
  `grado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `grado`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 0),
(7, 3),
(8, 0),
(9, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(8) NOT NULL,
  `grupo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `grupo`) VALUES
(1, 'AMP'),
(2, 'BMP'),
(3, 'AMG'),
(4, 'BPC'),
(5, 'CGX'),
(6, 'amp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_academico`
--

CREATE TABLE `historial_academico` (
  `id_alumno` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `asistencia` int(11) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `id_historial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_academico`
--

INSERT INTO `historial_academico` (`id_alumno`, `id_materia`, `calificacion`, `asistencia`, `observaciones`, `id_historial`) VALUES
(2, 3, 10, 80, 'buen estudiante', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_disciplina`
--

CREATE TABLE `historial_disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `tipo` enum('Merito','Sancion') NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_disciplina`
--

INSERT INTO `historial_disciplina` (`id_disciplina`, `id_alumno`, `tipo`, `descripcion`, `fecha`) VALUES
(0, 1, 'Sancion', 'LE PEGO A ZAPI', '2025-05-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(8) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `descripcion`) VALUES
(1, 'matematicas', 'Estudio de los n?meros, cantidades y formas'),
(2, 'Ciencias', 'Estudio de los fen?menos naturales y sus leyes'),
(3, 'Historia', 'Estudio de los eventos y procesos del pasado humano'),
(4, 'Lengua Espa?ola', 'Estudio de la lengua, literatura y gram?tica espa?ola'),
(5, 'geografia', 'Estudio de la Tierra, sus caracter?sticas y los seres que la habitan'),
(6, 'matematicas', 'sumas,restas etc\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_doc` int(8) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) DEFAULT NULL,
  `rfc` varchar(13) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `sexo` varchar(16) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `experiencia` int(2) DEFAULT NULL,
  `cuenta_banco` varchar(20) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `curp` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_doc`, `nombre`, `apellido1`, `apellido2`, `rfc`, `telefono`, `sexo`, `carrera`, `experiencia`, `cuenta_banco`, `correo`, `curp`) VALUES
(0, 'juan', 'CISNEROS', 'Nache', '13456', '123-456-7890', 'Masculino', 'Programación', 4, '7457484', 'hulo@gmail.com', 'CFD451DEW2'),
(1, 'Carlos', 'G?mez', 'L?pez', 'GMLC910101XYZ', '5551234567', 'Masculino', 'Ingenier?a en Sistemas', 10, '12345678901234567890', 'carlos.gomez@example.com', 'GMLC910101HDFXYZ01'),
(2, 'Mar?a', 'Fern?ndez', NULL, 'MFEN920202ABC', '5612345678', 'Femenino', 'Matem?ticas', 8, '09876543210987654321', 'maria.fernandez@example.com', 'MFEN920202MDFABC02'),
(3, 'Jos?', 'Ram?rez', 'Mart?nez', 'JRMZ930303DEF', NULL, 'Masculino', 'F?sica', 12, '11223344556677889900', 'jose.ramirez@example.com', 'JRMZ930303HDFDEF03'),
(4, 'Ana', 'Torres', 'Hern?ndez', 'ANTH940404GHI', '5598765432', 'Femenino', 'Qu?mica', 6, '22334455667788990011', 'ana.torres@example.com', 'ANTH940404MDFGHI04'),
(5, 'Luis', 'Mart?nez', 'D?az', 'LMDZ950505JKL', '5576543210', 'Masculino', 'Historia', 15, '33445566778899001122', 'luis.martinez@example.com', 'LMDZ950505HDFJKL05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(8) NOT NULL,
  `turno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `turno`) VALUES
(1, 'Matutino'),
(2, 'Vespertino'),
(3, 'Matutino'),
(4, 'Vespertino'),
(5, 'Matutino'),
(6, 'Matutino'),
(7, 'Matutino'),
(8, 'Matutino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `relacion` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id`, `nombre_completo`, `relacion`, `direccion`, `telefono`, `correo`) VALUES
(1, 'jose', 'papa', 'san juan, toluca', '7273723727', 'jose@jdhgd.com'),
(2, 'jose', 'papa', 'toluca', '7273723727', 'jose@jdhgd.com'),
(3, 'jose', 'papa', 'TOLUCA', '7273723709', 'jose@jdhgd.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`id_administrativo`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id_aula`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `auxiliares`
--
ALTER TABLE `auxiliares`
  ADD PRIMARY KEY (`id_auxiliares`);

--
-- Indices de la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD PRIMARY KEY (`id_boleta`),
  ADD KEY `fk_alumno` (`id_alumno`),
  ADD KEY `fk_carreras` (`id_carreras`),
  ADD KEY `fk_grado` (`id_grado`),
  ADD KEY `fk_grupo` (`id_grupo`),
  ADD KEY `fk_turno` (`id_turno`),
  ADD KEY `fk_boleta_materia` (`id_materia`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carreras`),
  ADD KEY `fk_docente` (`id_docente`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_administrativo` (`id_administrativo`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_docs`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `historial_academico`
--
ALTER TABLE `historial_academico`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `historial_disciplina`
--
ALTER TABLE `historial_disciplina`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  MODIFY `id_administrativo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id_aula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `auxiliares`
--
ALTER TABLE `auxiliares`
  MODIFY `id_auxiliares` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `boleta`
--
ALTER TABLE `boleta`
  MODIFY `id_boleta` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carreras` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_docs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id_grado` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `historial_academico`
--
ALTER TABLE `historial_academico`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD CONSTRAINT `fk_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `fk_boleta_materia` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `fk_carreras` FOREIGN KEY (`id_carreras`) REFERENCES `carreras` (`id_carreras`),
  ADD CONSTRAINT `fk_grado` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`),
  ADD CONSTRAINT `fk_grupo` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`),
  ADD CONSTRAINT `fk_turno` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id_turno`);

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `fk_docente` FOREIGN KEY (`id_docente`) REFERENCES `profesor` (`id_doc`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_administrativo`) REFERENCES `administrativo` (`id_administrativo`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `historial_academico`
--
ALTER TABLE `historial_academico`
  ADD CONSTRAINT `historial_academico_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `historial_academico_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `historial_disciplina`
--
ALTER TABLE `historial_disciplina`
  ADD CONSTRAINT `historial_disciplina_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
