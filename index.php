<?php
require_once("controller/controller.php");

try{
    if(isset($_GET['action'])){

    }
    else{
        home();
    }

}
catch(Exception $e){
    echo "Erreur :".$e->getMessage();
}