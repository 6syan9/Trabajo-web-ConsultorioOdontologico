<?php
if(isset($_REQUEST["vaciar"])){
    session_destroy();
    header("location: carrito.php");
}
if(isset($_REQUEST["elim"])){
    $producto=$_REQUEST["elim"];
    unset($_SESSION["carrito"][$producto]);
    header("location: carrito.php");  
}
?>