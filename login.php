<?php
require_once ('sistema.class.php');
$app = new Sistema;
$accion=(isset($_GET['accion'])) ? $_GET['accion'] : null;
switch ($accion){
    case 'login':
        $correo = $_POST['data']['correo'];
        $contrsenna = $_POST['data']['contrasenna'];
        if ($app->login($correo,$contrsenna)){
            $mensaje='Bienvenido al sistema';
            $tipo='success';
            $app->checkRol('Administrador');
            require_once('./index.php');
        }else{
            $mensaje='Correo o contraseña equivocado <a href="login.php">[Presione aqui para volver a intentar]</a>';
            $tipo='danger';
            require_once('header.php');
            $app->alert($tipo,$mensaje);
        }
        break;
    case 'logout':
        $app->logout();
        break;
    default:
        include('signin.php');
}
include_once('footer.php');
?>