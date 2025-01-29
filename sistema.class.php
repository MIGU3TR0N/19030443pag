<?php 
include ('config.class.php');
class Sistema{
    var $con;
    function conexion(){
        $this->con = new PDO(SGDB.':host ='.DBHOST.';dbname='.DBNAME.';port='.DBPORT, DBUSER, DBPASS);
        return $this->con;
    }
    function alert($tipo, $mensaje){
        include ('views/alert.php');  
    }
    function getRol($correo){
        $this->conexion();
        $data=[];
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $sql = 'select r.rol from usuario_rol 
                    join public.rol r on usuario_rol.id_rol = r.id_rol 
                    join public.usuario u on usuario_rol.id_usuario = u.id_usuario 
                    where u.correo = :correo';
            $roles = $this->con->prepare($sql);
            $roles->bindParam(':correo', $correo, PDO::PARAM_STR);
            $roles->execute();
            $data = $roles->fetchAll(PDO::FETCH_ASSOC);
            $roles=[];
            foreach ($data as $rol){
                array_push($roles, $rol['rol']);
            }
            $data=$roles;
        }
        return $data;
    }
    function getPrivilegio($correo){
        $this->conexion();
        $data=[];
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $sql = 'select p.permiso as permisos from usuario_rol 
                    join public.rol r on usuario_rol.id_rol = r.id_rol 
                    join public.usuario u on usuario_rol.id_usuario = u.id_usuario 
                    join rol_permiso rp on r.id_rol = rp.id_rol 
                    join permiso p on p.id_permiso = rp.id_permiso 
                    where u.correo = :correo';
            $permisos = $this->con->prepare($sql);
            $permisos->bindParam(':correo', $correo, PDO::PARAM_STR);
            $permisos->execute();
            $data = $permisos->fetchAll(PDO::FETCH_ASSOC);
            $privilegios=[];
            foreach ($data as $privilegio){
                array_push($privilegios, $privilegio['permisos']);
            }
            $data=$privilegios;
        }
        return $data;
    }
    function login($correo, $contrasenna){
        $contrasenna = md5($contrasenna);
        $acceso = false;
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $this->conexion();
            $sql = 'select * from usuario where correo = :correo and contrasenna = :contrasenna';
            $existe = $this->con->prepare($sql);
            $existe->bindParam(':correo', $correo, PDO::PARAM_STR);
            $existe->bindParam(':contrasenna', $contrasenna, PDO::PARAM_STR);
            $existe->execute();
            $resultado=$existe->fetchAll(PDO::FETCH_ASSOC);
            if (isset($resultado[0])){
                $acceso = true;
                $_SESSION['correo']=$correo;
                $_SESSION['validado'] = $acceso;
                $roles = $this->getRol($correo);
                $privilegios = $this->getPrivilegio($correo);
                $_SESSION['roles']=$roles;
                $_SESSION['privilegios']=$privilegios;
                return $acceso;
            }
        }
        $_SESSION['validado'] = false;
        return $acceso;
    }
    function checkRol($rol){
        if(isset($_SESSION['roles'])){
            $roles = $_SESSION['roles'];
            if (!in_array($rol, $roles)){
                $mensaje='Error usted no tiene el rol adecuado';
                $tipo="danger";
                require_once('admin/views/header.php');
                $this->alert($tipo,$mensaje);
                die();
            }
        }
        else{
            $mensaje='Error requiere iniciar session';
            $tipo="danger";
            require_once('admin/views/header.php');
            $this->alert($tipo,$mensaje);
            die();
        }
    }
    function logout(){
        unset($_SESSION);
        session_destroy();
        $mensaje='Gracias por utilizar el sistema, se ha cerrado la sesion <a href="login.php">presione aqui para volver a entrar</a>';
        $tipo='info';
        require_once('admin/views/header.php');
        require_once ('views/alert.php');
    }

    function readAll(){
        $result=[];
        $this->conexion();
        $consulta='select * from servicios';
        $sql = $this->con->prepare($consulta);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
}
?>