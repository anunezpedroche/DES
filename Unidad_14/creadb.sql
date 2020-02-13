DROP DATABASE IF EXISTS TiendaCarrito;
FLUSH PRIVILEGES;
CREATE DATABASE TiendaCarrito;

CREATE USER IF NOT EXISTS adminTienda@localhost IDENTIFIED BY 'adminTienda'; /*la contraseña es el nombre*/
GRANT ALL PRIVILEGES ON TiendaCarrito.* TO 'adminTienda'@'localhost'; 
FLUSH PRIVILEGES;

USE TiendaCarrito;

CREATE TABLE productos (
 idProducto INT NOT NULL AUTO_INCREMENT,
 nombre VARCHAR(255) NOT NULL,
 precio  INT NOT NULL,
 imagen VARCHAR(255) NOT NULL,
 PRIMARY KEY (idProducto));

INSERT INTO productos VALUES (NULL, "Leffe",3,"leffe.jpg");
INSERT INTO productos VALUES (NULL, "Trappist",4,"trappist.jpg");
INSERT INTO productos VALUES (NULL, "San Miguel",1,"sanmiguel.jpg");