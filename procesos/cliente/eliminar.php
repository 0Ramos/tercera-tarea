<?php
require_once '../../controlador/clienteControlador.php';
 $id_cli=$_POST['id_cli'];

 echo clienteControlador::eliminarDatos($id_cli);
?>