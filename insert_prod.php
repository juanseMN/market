<?php
  include("database.php");

  $nombre=$_POST["nomprod"];
  $codigo=$_POST["codpro"];
  $cantidad=$_POST["cantprod"];
  $estado=$_POST["estprod"];

  $sql="INSERT INTO productos(nombre_prod,codigo_prod,cantidad,estado) VALUES ('$nombre','$codigo',$cantidad,$estado)";

  if ($conn->query($sql)===True) {
    //echo "producto resgistrado con exito <br>";
    //echo "<a href='index.php'>Regresar</a>";

    echo "<script language='javascript'>alert('::: producto registrado con exito :::')</script>";
    header ("refresh:0;url=index.php");
  }else {
    die("ERROR:".$conn->connect_error);

  }
?>
