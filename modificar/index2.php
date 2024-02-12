<?php $ID = $_POST["ID"]; $consulta="SELECT ID , Nombre, Telefono, Direccion, Deudas FROM deudas where ID='$ID'"; $mysqli = mysqli_connect("localhost", "root","", "elecktra"); $res=$mysqli->query($consulta); while($fila=$res->fetch_assoc()){ $Nombre=$fila["Nombre"]; $Telefono=$fila["Telefono"]; $Direccion=$fila["Direccion"]; $Deudas=$fila["Deudas"]; } $mysqli->close(); ?>

<html>
<head>
<title>Labs</title>
</head>
<body bgcolor="pink">
<form action="modi.php" method="post">
            <h1>ACTUALIZACIÓN</h1>
            <span><font color="pink">ACTUALIZA TU INFORMACION.</font></span> 
            <input type="text" name="ID" value="<?php echo $ID ?>" placeholder="ID"> 
            <input type="text" name="Nombre" value="<?php echo $Nombre ?>" placeholder="Nombre">
            <input type="text" name="Direccion" value="<?php echo $Telefono ?>" placeholder="Direccion">
            <input type="text" name="Telefono" value="<?php echo $Direccion ?>" placeholder="Telefono">
            <input type="text" name="Deudas" value="<?php echo $Deudas ?>" placeholder="Deudas">
            <button>IR A ACTUALIZAR</button>
        </form>
        </body>
        </html>