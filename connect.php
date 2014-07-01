<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $datasource = 'mysql:host=localhost;dbname=test_ajax';
    $username ='root';
    $password ='';

    try{
        $con = new PDO($datasource, $username, $password);

    }

    catch(PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }

?>
