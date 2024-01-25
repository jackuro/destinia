database configuration:

CREATE DATABASE destinia;

CREATE TABLE hospedajes (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  ubicacion varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  tipo varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  numeroDeEstrellas int(11) DEFAULT NULL,
  tipoDeHabitacion varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  numeroDeApartamentosDisponibles int(11) DEFAULT NULL,
  capacidad int(11) DEFAULT NULL,
  PRIMARY KEY (id)
);



