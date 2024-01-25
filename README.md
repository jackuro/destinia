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

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, tipoDeHabitacion)
VALUES ('Hotel Azul', 'Playa de Las Américas, Tenerife', 'hotel', 3, 2, 'habitación doble con vistas');

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, numeroDeApartamentosDisponibles)
VALUES ('Apartamentos Beach', 'Almeria, Almeria', 'apartamento', 2, 4, 10);

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, tipoDeHabitacion)
VALUES ('Hotel Riu Palace Tenerife', 'Playa de Las Américas, Tenerife', 'hotel', 5, 5, 'habitación familiar con vistas al mar');

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, numeroDeApartamentosDisponibles)
VALUES ('Apartamentos Sol Beach', 'Playa del Inglés, Gran Canaria', 'apartamento', 2, 4, 8);

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, tipoDeHabitacion)
VALUES ('Hotel Royal Garden Plaza', 'Playa de Palma, Mallorca', 'hotel', 4, 3, 'suite con jacuzzi');

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, numeroDeApartamentosDisponibles)
VALUES ('Apartamentos Mediterráneo Beach', 'Calpe, Alicante', 'apartamento', 4, 6, 12);

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, tipoDeHabitacion)
VALUES ('Hotel Occidental Lanzarote Princess', 'Playa Blanca, Lanzarote', 'hotel', 4, 4, 'habitación doble con vistas al jardín');

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, numeroDeApartamentosDisponibles)
VALUES ('Apartamentos Isla Bonita', 'Tías, Lanzarote', 'apartamento', 2, 6, 8);

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, tipoDeHabitacion)
VALUES ('Hotel Catalonia Gran Dominicus', 'Playa Bávaro, Punta Cana', 'hotel', 5, 5, 'habitación familiar con balcón privado');

INSERT INTO hospedajes (nombre, ubicacion, tipo, numeroDeEstrellas, capacidad, numeroDeApartamentosDisponibles)
VALUES ('Apartamentos Be Live Collection Canoa', 'Punta Cana, República Dominicana', 'apartamento', 3, 8, 10);




