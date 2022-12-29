<?php
include("Profesor.php");
session_start();
if(isset($_GET["id"])){
    if($_SESSION["profesores"]){
        $id=$_GET["id"];
        $profesores=$_SESSION["profesores"];
        for ($i=0; i < count($profesores); $i++){
            $profesor=$profesores[$i];
            if($profesor->id==$id){
                unset($profesor[$i]);
                if ($profesor->id==$id){
                    unset($profesores[$i]);
                    $_SESSION["profesores"]=$profesores;
                    header("Location: ./");
                }

            }
        }
    }
}
else{}
