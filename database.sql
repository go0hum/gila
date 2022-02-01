CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `api_key` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `api_key` (`api_key`)
);


CREATE TABLE `cars` (
  `idcars` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `llantas` int(11) NOT NULL,
  `potencia` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `tipo` int(4) NOT NULL,
  PRIMARY KEY (`idcars`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
);
