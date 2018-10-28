SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nombre_carrera` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `carrera` (`id`, `codigo`, `nombre_carrera`) VALUES
(5, 'ISW', 'Ingeniería del Software'),
(6, 'IGA', 'Ingeniería Gestión Ambiental');

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `estudiante` (`id`, `cedula`, `nombre`, `apellidos`, `id_carrera`) VALUES
(3, '507980263', 'Dayanna', 'Perez Solis', 5),
(5, '207570019', 'Sebastian', 'Campos Salas', 6);

ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_carrera` (`id_carrera`);

ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id`);
COMMIT;
