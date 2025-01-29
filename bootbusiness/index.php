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
    case 'products':
        include('all_products.php');
        break;
    case 'contact_us':
        include('contact_us.php');
        break;
    case 'all_services':
        $servicios = $app->readAll();
        include('all_services.php');
        break;
    case 'faq':
        include('faq.php');
        break;
    case 'leadership':
        include('leadership.php');
        break;
    case 'patnership':
        include('patnership.php');
        break;
    case 'events':
        include('events.php');
        break;
    case 'our_works':
        include('our_works.php');
        break;
    case 'product':
        include('product.php');
        break;
    case 'ignup':
        include('ignup.php');
        break;
    case 'signin':
        include('signin.php');
        break;
    case 'blog':
        include('blog.php');
        break;
    case 'news':
        include('news.php');
        break;
    case 'post':
        include('post.php');
        break;
    case 'service':
        include('service.php');
        break;
    default:
        include('initial.php');
}
?>