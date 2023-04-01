<?php

require 'conexion.php';




    // Verifica si los campos requeridos están vacíos
    if(empty($_POST['nombre']) || empty($_POST['apellido'])){
      echo "<script>alert('Por favor rellena todos los campos');
      location.href = 'index.html';
    </script>";
    
    }else{
  





$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];


$insertar = "INSERT INTO clientes (nombre, apellido) VALUES ('$nombre', '$apellido')";


$query = mysqli_query($connect, $insertar);

if($query){


    echo "<script> alert('Dato Ingresado Correctamente'); 
    location.href = 'index.html';
    </script>";
}else{

    echo "<script> alert ('Dato no ingresado'); 
    location.href = 'index.html';
    </script>";
}

    }
?>