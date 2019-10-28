<?php

// PRIMERA APROXIMACI�N AL MODELO VISTA CONTROLADOR.
// Funciones auxiliars Ej- usuarioOK //usuarioOK - Invertir nombre para validar contrase�a.
include_once 'app/funciones.php';

if ( !isset($_REQUEST['orden']) ){
    include_once 'app/entrada.php';
}
else {
    switch ($_REQUEST['orden']){
        
        case "Entrar":
            // Chequear usuario
            if ( isset($_REQUEST['nombre']) && isset($_REQUEST['contrasena']) &&
            usuarioOK($_REQUEST['nombre'], $_REQUEST['contrasena'] )) {
                echo " Bienvenido <b>".$_REQUEST['nombre']."</b><br>";
                include_once  'app/comentario.html';
            }
            else {
                include_once 'app/entrada.php';
                echo " <br> Usuario no valido </br>";
            }
            break;
            
        case "Nueva opini�n":
            echo " Nueva opini�n <br>";
            include_once  'app/comentario.html';
            break;
        case "Detalles": // Mensaje y detalles
            echo "Detalles de su opini�n";
            include_once 'app/comentariorelleno.php';
            include_once 'app/detalles.php';
            break;
        case "Terminar": // Formulario inicial
            include_once 'app/entrada.php';
    }
    
}