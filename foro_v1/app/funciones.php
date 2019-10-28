<?php

function usuarioOK($nombre, $contrasena) {
    
    $longitud=strlen($nombre)-1;
    $correcto=0;
    
    for($x=0;$x<=$longitud;$x++){
        if($contrasena[$longitud-$x]==$nombre[$x]){
            
            $correcto++;
            
        }
        
    }
    
    
    if($correcto==strlen($nombre)){
        return true;
    }
    
    
    return false;
    
}