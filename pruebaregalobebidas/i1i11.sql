CREATE TABLE `datemp` (
  `APELLIDOS` varchar(8) DEFAULT NULL,
  `NOMBRE` varchar(9) DEFAULT NULL,
  `SEXO` varchar(1) DEFAULT NULL,
  `SALARIO` mediumint(9) DEFAULT NULL,
  `DEPTO` varchar(6) DEFAULT NULL,
  `CONTRA` varchar(6) DEFAULT NULL,
  `AUSENCIAS` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `datemp` (`APELLIDOS`, `NOMBRE`, `SEXO`, `SALARIO`, `DEPTO`, `CONTRA`, `AUSENCIAS`) VALUES
('LARROCHA', 'FEDERICO', 'V', 80160, 'ADMIN', 'MAY-77', '3'),
('BEADES', 'ALBERTO', 'V', 58800, 'ADMIN', 'ENE-79', '1'),
('LORENTE', 'ALFONSO', 'V', 91200, 'CONTAB', 'MAY-77', '8'),
('VITORIA', 'JOSE P.', 'V', 87560, 'CONTAB', 'OCT-78', '5'),
('BRAVO', 'ANGELA', 'M', 85920, 'DIREC', 'NOV-79', '1'),
('GRANADOS', 'PEDRO', 'V', 61920, 'DIREC', 'ENE-72', '1'),
('CARRASCO', 'ANTONIO', 'V', 95520, 'PROD', 'AGO-77', '1'),
('IBARRA', 'JUAN A.', 'V', 92880, 'PROD', 'ENE-72', '1'),
('TIANA', 'JOSE L.', 'V', 89760, 'VENTAS', 'JUN-76', '1'),
('IBORRA', 'LUIS', 'V', 78720, 'VENTAS', 'OCT-81', '1');

CREATE TABLE `datlic` (
  `LICOR` varchar(7) DEFAULT NULL,
  `MARCA` varchar(14) DEFAULT NULL,
  `TAMANO` varchar(3) DEFAULT NULL,
  `CANTIDAD` smallint(6) DEFAULT NULL,
  `COSTE` smallint(6) DEFAULT NULL,
  `PVP` smallint(6) DEFAULT NULL,
  `CODIGO` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `datlic` (`LICOR`, `MARCA`, `TAMANO`, `CANTIDAD`, `COSTE`, `PVP`, `CODIGO`) VALUES
('CERVEZA', 'ADLERBRAUN', '1/4', 200, 40, 56, 'A'),
('CERVEZA', 'BUCKLE', '1/5', 150, 35, 49, 'B'),
('CERVEZA', 'BUCKLE SIN', '1/5', 180, 38, 53, 'C'),
('VODKA', 'SMIRNOFF', '3/4', 20, 750, 1050, 'D'),
('VODKA', 'ESRISTOFF1111', '3/4', 15, 300, 1120, 'E'),
('VODKA', 'ERISTOFF', '1', 5, 1000, 1400, 'F'),
('COÑAC', 'LARIOS 2011', '3/4', 2, 2800, 3920, 'G'),
('COÑAC', 'TERRY 1900', '1', 12, 450, 630, 'H'),
('COÑAC', 'FUNDADOR', '1', 32, 520, 728, 'I'),
('COÑAC', '103', '1', 25, 540, 756, 'J'),
('WHISKEY', 'DYC', '1', 35, 800, 1120, 'K'),
('WHISKEY', 'DYC 10 años', '3/4', 12, 1500, 2100, 'L'),
('WHISKEY', 'J&B', '1', 18, 1650, 2310, 'M'),
('WHISKEY', 'JOHNNIE WALKER', '3/4', 15, 1650, 2310, 'N'),
('WHISKEY', 'CHIVAS REGAL', '3/4', 3, 3200, 4480, 'O'),
('RON', 'NEGRITAS', '1', 12, 625, 875, 'P'),
('RON', 'BACARDI', '1', 40, 750, 1050, 'Q'),
('RON', 'BACARDI DORADO', '1', 10, 800, 1120, 'R'),
('ANIS', 'CASTELLANA', '1', 8, 375, 525, 'S'),
('ANIS', 'LAS CADENAS', '1', 9, 420, 588, 'T'),
('ANIS', 'DEL MONO', '1', 12, 400, 560, 'U'),
('CAVA', 'RONDEL', '1', 22, 450, 630, 'V'),
('CAVA', 'CASTELLBLANCH', '1', 17, 510, 714, 'X'),
('CAVA', 'FREIXENET', '3/4', 15, 650, 910, 'Y'),
(NULL, 'lkjlk', NULL, NULL, NULL, NULL, NULL);