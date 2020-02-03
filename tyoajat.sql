SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `projekti`;
CREATE TABLE IF NOT EXISTS `projekti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projekti_nimi` varchar(50) NOT NULL,
  `tyontekija` varchar(50) NOT NULL,
  `pvm` varchar(20) NOT NULL,
  `tunnit` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12314 DEFAULT CHARSET=latin1;
COMMIT;