<?php
    if(isset($_SERVER['PATH_INFO'])){
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $file = 'views' . $_SERVER['PATH_INFO'] . '.php';
            include($file);  //Return file to AJAX request
        }
        else{
            header("Location: " . '/');  //Redirect to index
        }
    }
    else{
        require_once('views/index.php');  //Index View
    }
?>
