-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2016 a las 22:45:13
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plan_global`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bibliografia`
--

CREATE TABLE `bibliografia` (
  `Id_Bibliografia` int(11) NOT NULL,
  `texto` text NOT NULL,
  `ID_PG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bibliografia`
--

INSERT INTO `bibliografia` (`Id_Bibliografia`, `texto`, `ID_PG`) VALUES
(1, 'James Foley, Andries van Dam, Steven Feiner, John Hughes, "COMPUTER\r\nGRAPHICS Principles and Practice", Addison Wesley (1992)\r\n', 1),
(2, 'Donald Eran, Pauline Baker, "COMPUTER GRAPHICS", Prentice Hall (1994).', 1),
(3, 'M. E. Mortenson, "COMPUTER GRAPHICS An introduction to the mathematics and\r\nGeometry", Industrial Press\r\n', 1),
(4, 'Heinz-Otto Peitgen, Hartmut Jürgens, Dietmar Saupe, "FRACTALS FOR THE\r\nCLASSROOM Introduction to Fractals and Chaos", Springer Verlag (1993)\r\n', 1),
(5, 'Craig A. Lindley, "PRACTICAL RAY TRACING IN C", John Wiley and Sons (1992)\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `ID_Carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(200) NOT NULL,
  `facultad` varchar(100) NOT NULL,
  `id_facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`ID_Carrera`, `nombre_carrera`, `facultad`, `id_facultad`) VALUES
(1, 'Ingenieria De Sistemas', 'Tecnologia', 1),
(2, 'Ingenieria Civil', 'Tecnologia', 1),
(3, 'Nutricion', 'Medicina', 3),
(4, 'Medicina', 'Medicina', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `ID_Contenido` int(11) NOT NULL,
  `nombre_unidad` varchar(200) NOT NULL,
  `numero_unidad` int(11) NOT NULL,
  `objetivo` text NOT NULL,
  `contenido` text NOT NULL,
  `ID_PG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`ID_Contenido`, `nombre_unidad`, `numero_unidad`, `objetivo`, `contenido`, `ID_PG`) VALUES
(1, 'UNIDAD 1.- INTRODUCCIÓN A LAS GRÁFICAS POR COMPUTADORA', 1, 'Realizar una revisión histórica de la Infografía.\r\n\r\nPresentar las múltiples aplicaciones de la Infografía.\r\n\r\nPresentar los fundamentos de la Infografía.\r\n', 'Introducción a las Gráficas por Computadora\r\n\r\nAplicaciones\r\n\r\nHistoria de las Gráficas por Computadora\r\n\r\nDispositivos de Despliegue\r\n\r\nFundamentos gráficos\r\n', 1),
(2, 'UNIDAD 2.- FUNDAMENTOS MATEMATICOS PARA LA INFOGRAFIA\r\n', 2, 'Establecer claramente la relación entre algebra-geometría-código.\r\n\r\nProporcionar los fundamentos matemáticos usados en las Gráficas por Computadora.\r\n\r\nLograr un entendimiento geométrico de los conceptos matemáticos para su\r\nimplementación en software.', 'El álgebra Lineal y las Gráficas por Computadora\r\n\r\nSistemas de Coordenadas\r\n\r\nVectores y Matrices\r\n\r\nMatrices y las Transformaciones Lineales\r\n\r\nCoordenadas Homogéneas\r\n\r\nTransformaciones Afines\r\n\r\nMatrices Avanzadas y Proyecciones\r\n\r\nOrientación y Desplazamiento Angular en 3D\r\n\r\nGeneralización de las Transformaciones\r\n\r\nTransformaciones Window-Viewport\r\n\r\nVerificaciones Geométricas\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterio_evaluacion`
--

CREATE TABLE `criterio_evaluacion` (
  `Id_Criterio` int(11) NOT NULL,
  `Criterio` text NOT NULL,
  `ID_PG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `criterio_evaluacion`
--

INSERT INTO `criterio_evaluacion` (`Id_Criterio`, `Criterio`, `ID_PG`) VALUES
(1, 'Los parciales y el Examen final se evaluarán con un examen escrito y una práctica cada uno. El\r\ntrabajo práctico servirá para reforzar los conocimientos adquiridos y para lograr la relación\r\nalgebra-geometría.\r\nPara el examen final, se desarrollará un proyecto que ponga en práctica todos los conceptos\r\ndesarrollados en el curso. La defensa será en computadora. Dependiendo de la cantidad de\r\nalumnos se puede considerar el trabajo en grupos de dos personas.\r\nPara el examen Final se deberá presentar un artículo científico relacionado con un tema\r\nespecífico de la infografía. Este trabajo será individual.\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `Id_Cronograma` int(11) NOT NULL,
  `Unidad` text NOT NULL,
  `Duracion_Horas` int(11) NOT NULL,
  `Duracion_Semnas` int(11) NOT NULL,
  `ID_PG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`Id_Cronograma`, `Unidad`, `Duracion_Horas`, `Duracion_Semnas`, `ID_PG`) VALUES
(1, 'Introducción a las Gráficas por Computadora ', 6, 1, 1),
(2, 'Fundamentos Matemáticos para la Infografía', 18, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ID_Docente` int(11) NOT NULL,
  `Nombre_Completo` varchar(200) NOT NULL,
  `Apellido_Paterno` varchar(200) NOT NULL,
  `Apellido_Materno` varchar(200) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ID_Docente`, `Nombre_Completo`, `Apellido_Paterno`, `Apellido_Materno`, `Telefono`, `Celular`, `Correo`, `Direccion`) VALUES
(1, 'Jaime Christian', 'Villazon', 'Alcocer', 4543241, 77974363, 'christian@umss.edu.bo', 'av. America y Juan de La Rosa #132');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `ID_Facultad` int(11) NOT NULL,
  `Facultad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`ID_Facultad`, `Facultad`) VALUES
(1, 'Facultad de Ciencias y Tecnologia'),
(2, 'Facultad de Ciencias Economicas'),
(3, 'Facultad de Medicina'),
(4, 'Facultad de Humanidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justificacion`
--

CREATE TABLE `justificacion` (
  `Id_Justificacion` int(11) NOT NULL,
  `Justificacion` text NOT NULL,
  `ID_PG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `justificacion`
--

INSERT INTO `justificacion` (`Id_Justificacion`, `Justificacion`, `ID_PG`) VALUES
(1, 'Durante las últimas décadas, el campo de la Graficación por Computadora ha evolucionado de\r\nuna manera continua y rápida aplicándose a diversas áreas del saber humano que van desde la\r\nsimulación hasta el entretenimiento, muchas de las cuales han maravillado e impactado a la\r\nsociedad.\r\nEntre las numerosas aplicaciones, podemos mencionar las siguientes: Interfaces GUI, Industria\r\ndel Entretenimiento, Aplicaciones Comerciales, Diseño Asistido, Aplicaciones Científicas,\r\nMedicina, Cartografía y GIS.\r\nTodos estos sistemas, utilizados para fines tan diversos, tienen un fundamento subyacente que\r\nconsiste en una seria de técnicas derivadas de la aplicación de la Graficación por Computadora.\r\nEn este contexto se hace necesario un estudio de los algoritmos y técnicas gráficas que\r\npermitan el desarrollo de nuevas aplicaciones para solucionar diversos problemas que se\r\npresentan.\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `ID_Materia` int(11) NOT NULL,
  `Nombre_Materia` varchar(200) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Grupo` varchar(10) NOT NULL,
  `Nivel_Materia` varchar(10) NOT NULL,
  `Carga_Horaria` varchar(100) NOT NULL,
  `Materias_Relacionadas` text NOT NULL,
  `ID_Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_Materia`, `Nombre_Materia`, `Codigo`, `Grupo`, `Nivel_Materia`, `Carga_Horaria`, `Materias_Relacionadas`, `ID_Carrera`) VALUES
(1, 'Graficacion por Computadora', 2010042, '1', 'D', '24 hrs/mes', 'Algoritmos Avanzados,\r\nProgramacion Web', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodologia`
--

CREATE TABLE `metodologia` (
  `ID_Metod` int(11) NOT NULL,
  `Metodologia` text NOT NULL,
  `ID_PG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodologia`
--

INSERT INTO `metodologia` (`ID_Metod`, `Metodologia`, `ID_PG`) VALUES
(1, 'Los cursos estarán compuestos de clases magistrales en aula, complementados por ejercicio,\r\ndonde el alumno podrá poner en práctica los conceptos aprendidos. El curso tendrá sesiones\r\nprácticas en laboratorio, donde el alumno debe participar con sus dudas y resultados de los\r\nejercicios propuestos.\r\n', 1),
(2, 'En las clases, los alumnos deberán mostrarse participativos, y deberán mostrar creatividad e\r\niniciativa en la resolución de los ejercicios planteados\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE `objetivos` (
  `ID_Objetivo` int(11) NOT NULL,
  `Objetivo` text NOT NULL,
  `ID_PG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`ID_Objetivo`, `Objetivo`, `ID_PG`) VALUES
(1, 'Tener los suficientes fundamentos matemáticos, geométricos y de programación para\r\ndesarrollar aplicaciones gráficas.\r\n\r\nIntroducir los algoritmos y estructura de datos necesarios para presentar datos gráficamente\r\nen una computadora.\r\n\r\nEstudiar la generación de las primitivas básicas y su correspondiente manipulación.\r\n\r\nDesarrollar modelos 3D, junto con su representación, visualización y transformación.\r\n\r\nGenerar imágenes con realismo fotográfico.\r\n\r\nAprender algoritmos y técnicas para el modelamiento geométrico.\r\n\r\nTener conocimiento sobre los modelos Fractales y su aplicación.\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planglobal`
--

CREATE TABLE `planglobal` (
  `ID_PG` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `ID_Materia` int(11) NOT NULL,
  `ID_Docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `planglobal`
--

INSERT INTO `planglobal` (`ID_PG`, `tipo`, `ID_Materia`, `ID_Docente`) VALUES
(1, 'Titular', 1, 1),
(2, 'Normal', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bibliografia`
--
ALTER TABLE `bibliografia`
  ADD PRIMARY KEY (`Id_Bibliografia`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`ID_Carrera`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`ID_Contenido`);

--
-- Indices de la tabla `criterio_evaluacion`
--
ALTER TABLE `criterio_evaluacion`
  ADD PRIMARY KEY (`Id_Criterio`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`Id_Cronograma`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`ID_Docente`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`ID_Facultad`);

--
-- Indices de la tabla `justificacion`
--
ALTER TABLE `justificacion`
  ADD PRIMARY KEY (`Id_Justificacion`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`ID_Materia`);

--
-- Indices de la tabla `metodologia`
--
ALTER TABLE `metodologia`
  ADD PRIMARY KEY (`ID_Metod`);

--
-- Indices de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`ID_Objetivo`);

--
-- Indices de la tabla `planglobal`
--
ALTER TABLE `planglobal`
  ADD PRIMARY KEY (`ID_PG`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bibliografia`
--
ALTER TABLE `bibliografia`
  MODIFY `Id_Bibliografia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `ID_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `ID_Contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `criterio_evaluacion`
--
ALTER TABLE `criterio_evaluacion`
  MODIFY `Id_Criterio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `Id_Cronograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `ID_Docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `ID_Facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `justificacion`
--
ALTER TABLE `justificacion`
  MODIFY `Id_Justificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `ID_Materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `metodologia`
--
ALTER TABLE `metodologia`
  MODIFY `ID_Metod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `ID_Objetivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `planglobal`
--
ALTER TABLE `planglobal`
  MODIFY `ID_PG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
