<?php
// Verifica si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los valores del formulario
    $ID = $_POST["ID"];
    $Nombre = $_POST["Nombre"];
    $Direccion = $_POST["Direccion"];
    $Telefono = $_POST["Telefono"];
    $Deudas = $_POST["Deudas"];
    
    // Conecta a la base de datos 
    $mysqli = new mysqli("localhost", "root", "", "elecktra");
    
    // Verifica si hay errores de conexión
    if ($mysqli->connect_errno) {
        echo "Error al conectar con la base de datos: " . $mysqli->connect_error;
    } else {
        // Ejecuta la consulta de actualización
        $consulta = "UPDATE deudas SET Nombre='$Nombre', Direccion='$Direccion', Telefono='$Telefono', Deudas='$Deudas' WHERE ID='$ID'";
        
        if ($mysqli->query($consulta)) {
            echo "Información actualizada correctamente.";
        } else {
            echo "Error al actualizar la información: " . $mysqli->error;
        }
        
        // Cierra la conexión
        $mysqli->close();
    }
} else {
    echo "No se han recibido datos del formulario.";
}
?>