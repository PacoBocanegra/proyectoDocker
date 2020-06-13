-- Creacion BD
-- CREATE DATABASE prueba;
USE prueba;

-- Creación del usuario para acceder a la BD.
-- CREATE USER 'prueba'@'localhost' IDENTIFIED BY 'prueba';

-- GRANT ALL PRIVILEGES ON prueba.* TO 'prueba'@'localhost';
-- FLUSH PRIVILEGES;

-- Creación de tablas

CREATE TABLE USUARIO
(
    DNI       VARCHAR (9) NOT NULL,
    Nombre    VARCHAR (20) NOT NULL,
    Apellidos VARCHAR (50) NOT NULL,
    Email     VARCHAR (100) NOT NULL,
    Password  VARCHAR (50) NOT NULL,
    Admin     VARCHAR (1),
    CONSTRAINT PK_USUARIO PRIMARY KEY (DNI)
);

-- Inserts --

-- Tabla Usuarios --
INSERT INTO USUARIO (DNI, Nombre, Apellidos, Email, Password, Admin)
VALUES ('99999999A', 'Paco', 'Bocanegra', 'admin@mediacines.com', 'admin', 'X');
INSERT INTO USUARIO (DNI, Nombre, Apellidos, Email, Password)
VALUES ('11111111Z', 'Eddy', 'Gonzalez', 'david@gmail.com', 'eddy');
INSERT INTO USUARIO (DNI, Nombre, Apellidos, Email, Password)
VALUES ('88888888B', 'Paula', 'Sánchez', 'paula@gmail.com', 'paula');
