SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `book` (`id`, `title`, `author`, `description`) VALUES
(1, 'Beginning C', 'E Balaguruswamy', 'C Fundamental Book');

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'Pankaj Kumar', 'ccpplinux', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(2, 'ccpplinux', 'ccpplinux', '*0F6D50ECBCCD6024D2A8118FEFCA3F6D2FC45E1B'),
(3, 'ccpplinux', 'ccpplinux', '*0F6D50ECBCCD6024D2A8118FEFCA3F6D2FC45E1B'),
(4, 'ccpplinux', 'ccpplamp', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(5, 'ccpplinux ccpplamp', 'demo', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
