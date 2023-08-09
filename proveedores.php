<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>PROVEEDORES</title>
    <style>
        table,tr,td{
            border: 1px solid pink;
            text-align:center;
            margin:auto;
            font-size:22px;
        }
        </style>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<?php
include 'navbar.php';
?>
<body>

<label for="exampleDataList" class="form-label"></label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
  
<style>.contenedor{
        background-color: #58D68D;
        text-align: center;
    }</style>

    <div class='contenedor'>
        <form action="" method="post">
        <h1>REGISTRAR PROVEEDOR</h1>
        <p>ID</p>
        <input type="number" value="<?php echo $vec [0] ?>
        "name id="">
        <p>NUM PROVEEDOR</p>
        <input type="number" value="<?php echo $vec [1] ?>
        "name id="">
        <p>NOMBRE PROV</p>
        <input type="text" value="<?php echo $vec [2] ?>
        "name id="">
        <p>APELLIDO PROV</p>
        <input type="text" vlue="<?php echo $vec [3] ?>
        "name id="">
        <p>COGIGO POSTAL</p>   
        <input type="number" value="<?php echo $vec [4] ?>
        "name id="">
        <p>DIRECCION</p>
        <input type="email" value="<?php echo $vec [5] ?>
        "name id="">
        <p>NUM TEL</p>
        <input type="number" value="<?php echo $vec [5] ?>
        "name id="">

    </form>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>
<script src="js/bootstrap.js"></script>
<?php
if (isset($_POST["enviar"])) {
    include ("conexion.php");
    $_IDENTIFICACION = $_POST["id"];
    echo '<br>';
    $_NUM_PROV = $_POST["numero"];
    echo '<br>';
    $_NOM_PROV = $_POST["nombre"];
    echo '<br>';
    $_APE_PROV = $_POST["apellido"];
    echo '<br>';
    $_COD_POSTAL = $_POST["codigo postal"];
    echo '<br>';
    $_DIRECCION = $_POST["direccion"];
    echo '<br>';
    $_NUM_TEL = $_POST["telefono"];


    echo $_IDENTIFICACION;
    echo '<br>';
    echo $_NUM_PROV;
    echo '<br>';
    echo $_NOM_PROV;
    echo '<br>';
    echo $_APE_PROV;
    echo '<br>';
    echo $_COD_POSTAL;
    echo '<br>';
    echo $_DIRECCION;
    echo '<br>';
    echo $_NUM_TEL;
    echo '<br>';

    $query="INSERT INTO
    proveedores(ID,Numero_Proveedores,Nombre,Apellidos,Codigo_Postal
    Direccion,Celular)
    VALUES('$_IDENTIFICACION','$_NUM_PROV','$_NOM_PROV','$_APE_PROV',
    '$_COD_POSTAL','$_DIRECCION','$_NUM_TEL')";
    $cons=mysqli_query($mysqli,$query);
    if($cons){
        echo'<br> su reistro fue enviado exitosamente a'.$_NUM_PROV;
        echo'<a href="proveedores.php">Volver al formulario</a>';
    }else{
        echo'Error de registro';
        echo'<a href="proveedores.php">Volver al formulario</a>';
    }
}else{
    //header('location:proveedores.php');  
    
}