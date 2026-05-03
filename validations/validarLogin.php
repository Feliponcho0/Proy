
<?php
    require_once 'check.php';
    require_once 'conection.php';

    //require_rol('Admin');
    // obtener datos
    $nombre_usuario = $_POST['nombre_usuario'] ?? '';
    $contra = $_POST['password'] ?? '';

    echo $nombre_usuario, $contra;


    $query = "SELECT * FROM usuarios WHERE nombre_usuario = ? AND password = ?";
    $buscar = $connect->prepare($query);

    $buscar->bind_param("ss", $nombre_usuario, $contra);
    $buscar->execute();

    $resultado = $buscar->get_result();

    if ($resultado->num_rows > 0) {
        echo true; // sí existe
        header('Location: ../pages/dashboard.php');
    } else {
        echo false; // no existe
        header('Location: ../index.php?error=1');
    }
?>