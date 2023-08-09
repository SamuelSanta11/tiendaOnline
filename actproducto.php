<?php
include ('conexion.php');
$_doc

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTO</title>
</head>
<body>
<style>
    .contenedor{
        background-color: #58D68D;
        text-align: center;
    }

</style>
<div class='contenedor'>
    <form action="" method="post">
        <h1>REGISTRO DE PRODUCTO</h1>
        <P>ID</P>
        <input type="number" disabled value="<?php echo $vec [0]?>"
         name="id">
        <p>MARCA</p>
        <input type="text" value="<?php echo $vec [1]?>
        "name="marca">
        <p>TALLA</p>
        <input type="text" value="<?php echo $vec [2]?>
        "name="talla">
        <p>PRECIO</p>
        <input type="number" value="<?php echo $vec [3]?>
        "name="precio" >
        <p>INVENTARIO</p>
        <input type="text" value="<?php echo $vec [4]?>
        "name="inventario" >
        <input type="submit" name="enviar" >
    </form>
</div>
</body>
</html>
