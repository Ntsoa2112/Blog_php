<?php
class Connect_bdd{
    protected function dbconnect(){
        $bdd = new PDO('mysql:host=localhost;dbname=blog','root','root') or die('not connect');
        return $bdd;
    }
}