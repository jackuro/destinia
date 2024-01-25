<?php

require_once('Hotel.php');
require_once('Apartamento.php');

// Obtener la búsqueda del formulario
$busqueda = $_POST['busqueda'];

// Comprobar si la búsqueda tiene al menos 3 letras
if (strlen($busqueda) < 3) {
    // La búsqueda es demasiado corta
    echo 'La búsqueda debe tener al menos 3 letras.<br>';
    echo '<button type="button" onclick="window.location.href=\'index.html\'">Volver a buscar</button>';
    return;
}

// Configurar la ruta al archivo db.ini
$db_ini_path = 'db.ini';

// Leer los datos del archivo db.ini
$db_config = parse_ini_file($db_ini_path);

// Conectarse a la base de datos
$db = new mysqli($db_config['host'], $db_config['username'], $db_config['password'], $db_config['database']);

// Si la conexión falla, mostrar un error
if ($db->connect_error) {
    die('Error connecting to database: ' . $db->connect_error);
}

// Crear la consulta SQL
$sql = "SELECT * FROM hospedajes WHERE nombre LIKE '%$busqueda%' OR ubicacion LIKE '%$busqueda%' ORDER BY nombre";

// Ejecutar la consulta
$resultado = $db->query($sql);

// Comprobar si la consulta devolvió resultados
if ($resultado->num_rows == 0) {
    // No se encontraron resultados
    echo 'No se encontraron resultados para la búsqueda "' . $busqueda . '"<br>.';
    echo '<button type="button" onclick="window.location.href=\'index.html\'">Volver a buscar</button>';
    return;
}

echo '<ul>';

// Recorrer los resultados
while ($fila = $resultado->fetch_assoc()) {
    // Obtener el tipo de hospedaje
    $tipo = $fila['tipo'];

    // Crear un objeto de la clase correspondiente
    if ($tipo == 'hotel') {
        $hospedaje = new Hotel($fila['nombre'], $fila['ubicacion'], $fila['numeroDeEstrellas'], $fila['capacidad'], $fila['tipoDeHabitacion']);
    } else {
        $hospedaje = new Apartamento($fila['nombre'], $fila['ubicacion'], $fila['numeroDeApartamentosDisponibles'], $fila['capacidad']);
    }

    // Añadir los datos a la lista
    echo '<li>';
    echo $hospedaje->getNombre() . ' - ' . $tipo . ' - ' . $hospedaje->getUbicacion();
    if ($tipo == 'hotel') {
        echo ' - Estrellas: ' . $hospedaje->getNumeroDeEstrellas() . ' - Tipo de habitaciòn: ' . $hospedaje->getTipoDeHabitacion();

    } else {
        echo ' - Apartamentos disponibles: ' . $hospedaje->getNumeroDeApartamentosDisponibles();
    }
    echo ' - Capacidad: ' . $hospedaje->getCapacidad();
    echo '</li>';
}

echo '</ul>';

// Cerrar la conexión a la base de datos
$db->close();

echo '<button type="button" onclick="window.location.href=\'index.html\'">Volver a buscar</button>';


?>