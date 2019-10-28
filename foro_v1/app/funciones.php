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

function longitud() {
    
    $texto= strlen($_REQUEST["comentario"]);
    return $texto;
    
}

function palabras() {
   /* $contador=0;
    $texto= $_REQUEST["comentario"];
    for($x=0;$x<longitud();$x++){
        echo $texto[$x];
        if($texto[$x]="a"){
            $contador++;
            
        }
    }
    return $contador;*/
    return str_word_count($_REQUEST["comentario"]);
}
