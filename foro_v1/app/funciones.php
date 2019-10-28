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
    
    $numero= strlen($_REQUEST["comentario"]);
    return $numero;
    
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


function Npalabras() {
    
    
    $texto=$_REQUEST["comentario"];
    $palabraRepetida=$texto[0];
    $mayor=0;
    
    for($x=0;$x<longitud();$x++){
        
        if($x==0){
        $mayor=mb_substr_count($texto,$texto[$x]);
        $palabraRepetida=$texto[$x];
        
        }
        else{
            if($mayor<mb_substr_count($texto,$texto[$x])){
                $mayor=mb_substr_count($texto,$texto[$x]);
                $palabraRepetida=$texto[$x];
            }
        }
        
        //echo $texto[$x],":",mb_substr_count($texto,$texto[$x]),"  <br>";
       
        }
       
        //echo "Palabra repetida :",$palabraRepetida,"<br>";
        return $palabraRepetida;
}
