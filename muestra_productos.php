<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="eliminar.js"></script>
<?php


#Importamos nuestra conexión a la base de datos
include 'Conexión/conexion.php';




$consulta=$conexion->query("SELECT * FROM `productos`");
?>
  <?php




  while ($row=$consulta->fetch_array()) {
    ?>
     
    <tr>
    <td><?php echo $row['Id']; ?>
   
    <td><?php echo $row['Nombre']; ?>
    
    <td><?php echo $row['Descripcion']; ?>
    
    <td><?php echo $row['Precio']; ?>
    <th><a onclick="alerta_eliminar(<?php echo $row['Id'];?>)" >Eliminar</a></th></td> 
 
    


 
    
    </tr>
   
    
    <?php

 }

?>

