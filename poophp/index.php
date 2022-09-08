<?php
    spl_autoload_register('ClassLoader');
    function ClassLoader($className){
        $path = "classes/";
        $ext = ".php";
        $fullpath = $path . $className . $ext;

        include_once $fullpath;
    }

    $casaBeccar = new Casa('Alberdi 2820',7,"Torcuato", "Tigre",50);

    print_r($casaBeccar);

    echo $casaBeccar->adress

?>