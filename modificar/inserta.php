<?php $ID = $_POST["ID"]; $consulta="SELECT ID , Nombre, Telefono, Direccion, Deudas FROM deudas where ID='$ID'"; $mysqli = mysqli_connect("localhost", "root","", "elecktra"); $res=$mysqli->query($consulta); while($fila=$res->fetch_assoc()){ $Nombre=$fila["Nombre"]; $Telefono=$fila["Telefono"]; $Direccion=$fila["Direccion"]; $Deudas=$fila["Deudas"]; } $mysqli->close(); ?>