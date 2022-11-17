<html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php
include "Conexión/conexion.php";

$eliminar = $_POST['id'];

$sentencia = $conexion -> query("DELETE FROM `productos` WHERE Id = $eliminar");



