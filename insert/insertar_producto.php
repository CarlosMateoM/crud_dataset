
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php
include("../conexion.php");
$con=conectar();

//$id_product=$_POST['idP'];
$id_det=$_POST['idD'];
$nombre=$_POST['nom'];
$talla=$_POST['tal'];
$numero=$_POST['num'];
$observacion=$_POST['obs'];



//echo $codigo_mun_." ".$nombre_." ".$habitantes_." ".$codigo_dpto_;






$sql2 = "SELECT id_detalles FROM detalles_factura, factura WHERE factura.id_factura = detalles_factura.id_factura";
echo $sql2;

$query=mysqli_query($con,$sql2);

    
$sql="INSERT INTO productos (nombre, talla, numero, observacion,id_detalles) VALUES('$nombre','$talla','$numero','$observacion','$id_det')";
$query= mysqli_query($con,$sql);

    if($query){
        //Header("Location: departamento.php");
        header("Location:".$_SERVER['HTTP_REFERER']);  
              }
    else 
        {
        echo '<div class="container">
        <div class="row">
        <div class="col-md-3  col-sm-6 col-xs-12">';
        echo '<div class="alert alert-warning" role="alert"> Error en el Ingreso del registro </div>';
        echo '<th><input type="button" value="Página anterior" onClick="history.go(-1);"></th>';
        echo '</div>
        </div>
        </div>';        
        }

       

?>
</body>
</html>
