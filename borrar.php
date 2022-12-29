<?php
include("Profesor.php");
session_start();
if(isset($_GET["id"])){
    if($_SESSION["profesores"]){
        $id=$_GET["id"];
        $profesores=$_SESSION["profesores"];
       foreach ($profesores as $i => $profesor) {             
            if($profesor->id==$id){
                unset($profesores[$i]);
                $_SESSION["profesores"]=$profesores;
                header("Location: ./");
            }
        }
    }
    else{
        header("Location: ./");
    }
}else{
    header("Location: ./");
}


/*probando*/