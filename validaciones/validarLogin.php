<?php
    session_start();

    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';
    $users = [
        'admin' => ['pass' => 'admin', 'rol' => 'Admin'],
        //'cliente' => ['pass' => 'cliente', 'rol' => 'Cliente'],
    ];

    if(isset($users[$usuario]) && $users[$usuario]['pass'] == $password){
        $_SESSION['usuario'] = $users[$usuario];
        $_SESSION['rol'] = $users[$usuario]['rol'];

        if($users[$usuario]['rol'] == 'Admin'){
            header('Location: ../pages/dashboard.html');
            exit;
        }
        // Si no es Admin, redirige a algún lado (ej. dashboard de cliente)
        header('Location: ../login.php');
        exit;
    } else {
        header('Location: ../login.php?error=1');
        exit;
    }
?>