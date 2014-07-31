-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.8


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema loginoficial
--

CREATE DATABASE IF NOT EXISTS loginoficial;
USE loginoficial;

--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL_USUARIO` varchar(35) NOT NULL,
  `SENHA_USUARIO` varchar(60) NOT NULL,
  `NOME_USUARIO` varchar(45) NOT NULL,
  `TIPO_USUARIO` char(3) NOT NULL,
  `CONFIRMA_SENHA_USUARIO` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`COD_USUARIO`),
  UNIQUE KEY `EMAIL_USUARIO_UNIQUE` (`EMAIL_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`COD_USUARIO`,`EMAIL_USUARIO`,`SENHA_USUARIO`,`NOME_USUARIO`,`TIPO_USUARIO`,`CONFIRMA_SENHA_USUARIO`) VALUES 
 (1,'lucas@hotmail.com','lucas1234','Lucas','ADM','lucas1234'),
 (2,'wesllen@hotmail.com','wesllen1234','Wesllen','RES','wesllen1234'),
 (3,'anderson@hotmail.com','anderson1234','Anderson','ADM','anderson1234'),
 (4,'ana@hotmail.com','1234','ana','RES','1234'),
 (5,'','','','','');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  
  
