<!--    CONEXION BD   -->
<?php
    $con = new mysqli("bookshop", "root", "", "biblioteca");

    if (!($con))    echo "conexion ha fallado.";
?>