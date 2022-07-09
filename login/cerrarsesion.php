<!-- Parra Torres Jorge Isaac 
Luis Angel de la Mora Gonzalez-->
<?php
//  cerrar sesión
    session_start();
    session_destroy();
    header("location: login.html");
?>