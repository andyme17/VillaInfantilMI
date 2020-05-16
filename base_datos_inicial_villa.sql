-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para villa
CREATE DATABASE IF NOT EXISTS `villa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `villa`;

-- Volcando estructura para tabla villa.aviso
CREATE TABLE IF NOT EXISTS `aviso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla villa.aviso: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `aviso` DISABLE KEYS */;
INSERT INTO `aviso` (`id`, `thumb`) VALUES
	(1, 'img-aviso1.jpg'),
	(2, 'img-aviso2.png');
/*!40000 ALTER TABLE `aviso` ENABLE KEYS */;

-- Volcando estructura para tabla villa.contenido_img
CREATE TABLE IF NOT EXISTS `contenido_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(100) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla villa.contenido_img: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `contenido_img` DISABLE KEYS */;
INSERT INTO `contenido_img` (`id`, `seccion`, `thumb`) VALUES
	(1, 'modal-banner', 'banner-inicial.png'),
	(2, 'sec-equipo', 'imgp-kinder.jpg'),
	(3, 'sec-comida', 'imgs-comida.jpg');
/*!40000 ALTER TABLE `contenido_img` ENABLE KEYS */;

-- Volcando estructura para tabla villa.contenido_texto
CREATE TABLE IF NOT EXISTS `contenido_texto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla villa.contenido_texto: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `contenido_texto` DISABLE KEYS */;
INSERT INTO `contenido_texto` (`id`, `seccion`, `descripcion`) VALUES
	(1, 'sec-bienvenida', 'El jardín de niños Villa Infantil María Isabel le da las más cordial bienvenida a sus pequeños. Ponemos a su disposición los servicios para el adecuado desarrollo de sus hijos en diversas áreas como la convivencia, idiomas y valores para que sus niños tengan un desarrollo sano y obtengan las habilidades que les permitirán continuar con su proceso de maduración.'),
	(2, 'sec-quienes-somos', 'Villa Infantil María Isabel somos un equipo de profesionales especializados en educación infantil, que tiene como MISIÓN lograr que los niños de edad preescolar desarrollen sus capacidades de forma integral, a fin de alcanzar un nivel óptimo de convivencia con su entorno y en su vida futura.'),
	(3, 'sec-vision', 'Ser una escuela con la mejor calidad, personal altamente calificado y la infraestructura adecuada, que permita brindar a los niños y niñas de edad preescolar las herramientas necesarias para desarrollar sus capacidades intelectuales, de autonomía y valores universales como el respeto, la responsabilidad, el bien común y la honestidad, siendo reconocida en la comunidad donde se desempeña.'),
	(4, 'sec-equipo', 'El Jardín de Niños Villa Infantil María Isabel se encuentra en un continuo proceso de mejora, tanto en sus instalaciones como en sus planes de estudio y mecánicas de trabajo, esto también incluye a padres de familia.'),
	(5, 'sec-comida', 'A partir del mes de febrero, pondremos a su disposición el servicio de comedor dentro de las instalaciones de Villa Infantil, a fin de poder brindarles una alternativa cómoda y saludable para este propósito. Con asesoría nutricional, tendremos menús variados y balanceados, para asegurar un aporte calórico adecuado, además de un excelente sabor para los niños.');
/*!40000 ALTER TABLE `contenido_texto` ENABLE KEYS */;

-- Volcando estructura para tabla villa.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `thumb` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla villa.evento: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `titulo`, `descripcion`, `fecha`, `thumb`) VALUES
	(1, 'Pastorela', 'Nuestros alumnos presentaron la divertida pastorela “entre pastores y diabluras” en el teatro de la Unidad Santa Fe, donde hicieron gala de su talento y gracia para bailar, entreteniendo a familiares y amigos de la comunidad Villa Infantil y Jesús Romero Flores.', '2019-12-12', 'evento-dic.jpg'),
	(2, 'Día de reyes', 'Los Reyes Magos también visitaron nuestras instalaciones de Villa Infantil y nuestros pequeños recibieron un presente al regresar a clases después de las fiestas decembrinas. ¡Estuvimos muy emocionados y felices!', '2020-01-07', 'evento-enero.jpg'),
	(3, 'Día del amor y la amistad', 'Para conmemorar el día de la amistad, nuestros alumnos realizaron un intercambio de playeritas y convivieron compartiendo su lunch con todos, como buenos amigos. También se tomaron lindas fotos con un tierno fondo que sus maestras prepararon con mucho cariño para la ocasión.', '2020-02-14', 'evento-feb.jpg');
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Volcando estructura para tabla villa.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla villa.galeria: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` (`id`, `thumb`) VALUES
	(1, 'img-instalacion2.jpg'),
	(2, 'img-instalacion3.jpg'),
	(3, 'img-instalacion4.jpg'),
	(4, 'img-instalacion5.jpg'),
	(5, 'img-instalacion6.jpg'),
	(6, 'img-instalacion7.jpg'),
	(7, 'img-instalacion8.jpg'),
	(8, 'img-instalacion9.jpg');
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;

-- Volcando estructura para tabla villa.personal
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla villa.personal: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` (`id`, `nombre`, `cargo`, `thumb`) VALUES
	(1, 'Lic. María Isabel Rincón', 'Directora General', 'imgp-directora-grnl.jpg'),
	(2, 'M.B.A. Alba Selene Chávez', 'Directora Administrativa', 'imgp-directora-admin.jpg'),
	(3, 'Lic. Perla Susana Beltrán', 'Directora Técnica', 'imgp-directora-tec.jpg');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Volcando estructura para tabla villa.servicio_after
CREATE TABLE IF NOT EXISTS `servicio_after` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla villa.servicio_after: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `servicio_after` DISABLE KEYS */;
INSERT INTO `servicio_after` (`id`, `nombre`, `thumb`) VALUES
	(1, 'Ballet', 'imgs-ballet.jpg'),
	(2, 'Zumba Kids', 'imgs-zumba.jpg'),
	(3, 'Taekwondo', 'imgs-taekwondo.jpg'),
	(4, 'Regularización en Inglés', 'img10-service.jpg'),
	(5, 'Regularización en Francés', 'img11-service.jpg');
/*!40000 ALTER TABLE `servicio_after` ENABLE KEYS */;

-- Volcando estructura para tabla villa.testimonio
CREATE TABLE IF NOT EXISTS `testimonio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `votacion` int(1) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla villa.testimonio: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `testimonio` DISABLE KEYS */;
INSERT INTO `testimonio` (`id`, `nombre`, `votacion`, `mensaje`) VALUES
	(1, 'Rosa María Meza Iglesias', 5, '... está súper completo Villa Infantil pues es personalizado con personal capacitado, precio excelente y sobre todo calidad en educación. Recomendable para que los pequeños aprendan.'),
	(2, 'Zaira Rebollo', 5, '...el Amor, respeto y cuidado que tienen las especialistas con los niños, forman un muy buen equipo ... además la enseñanza es personalizada!, yo estoy muy contenta! porque mi hija estudie ahí'),
	(3, 'Angélica González Martínez', 5, 'Recomiendo ampliamente el jardín de niños Villa Infantil, el trato tanto a los pequeños como a los papás es el mejor, las maestras son un amor, pacientes y comprometidas.');
/*!40000 ALTER TABLE `testimonio` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
