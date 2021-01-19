<?php
require_once("controller/controller.php");

try{
    if(isset($_GET['action'])){
        $action = htmlspecialchars($_GET['action']);
        if($action == "blog"){
            blog();
        }
        else if($action == "post"){
            post();
        }
    }
    else{
        home();
    }

}
catch(Exception $e){
    echo "Erreur :".$e->getMessage();
}