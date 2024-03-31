<?php

$cnx=mysqli_connect('localhost','root','');
if(!$cnx){
    die('Cloud not connect :' .mysqli_error($cnx));
    }
    mysqli_select_db($cnx,'gestion_stock');

?>