<?php
    
    $nombre = $_POST['nombre'];

        if(empty($nombre)){
            require('nombre_vacio.php');
        }if($nombre == "Deni" || $nombre == "Isabel" || $nombre == "Isabel Deni" || $nombre == "Deni Talavera" || $nombre == "Isabel Deni Talavera Vazquez" || $nombre == "deni" || $nombre == "isabel" || $nombre == "isabel deni" || $nombre == "deni talavera" || $nombre == "isabel deni talavera vazquez"){
            require('carta.php');
        }
?>