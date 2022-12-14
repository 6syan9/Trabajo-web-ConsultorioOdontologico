<?php

    session_start();

    /*$total=0;

    if(isset ($_SESSION["carrito"])){
        echo "<h2>COMPRAS:</h2>";
        foreach($_SESSION["carrito"] as $indice =>$arreglo){
            echo "<hr>Producto: <strong>".$indice. "</strong><br>";
            $total+=$arreglo["subtotal"];
            foreach($arreglo as $key=>$value){
                echo $key.": ".$value."<br>";
            }
            echo "<a href='carrito.php?elim=$indice'>Eliminar Item</a>";
        }
        echo "<h3>El total de la compra actual es de S/".$total."</h3>";
        echo '<br><br><a href="productos.php">Regresar</a> | <a href="carrito.php?vaciar=true">Vaciar carrito</a>';

    }else{
        echo "<script>alert('El carrito esta vacio');</script>";
        ?>
        <a href="productos.php">Regresar</a>
        <?php
    }
    if(isset($_REQUEST["vaciar"])){
        session_destroy();
        header("location: carrito.php");
    }
    if(isset($_REQUEST["elim"])){
        $producto=$_REQUEST["elim"];
        unset($_SESSION["carrito"][$producto]);
        echo "<script>alert('Se elimino el producto: $producto');</script>";
        header("location: carrito.php");  
    }*/
?>
<?php include 'view/inicio.php';?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/EstiloCarrito.css">
</head>
<body>
    <?php
    if(isset ($_SESSION["carrito"])){
    ?>
        <div class="columns">
            <div class="column" style="padding: 2%;">
                <h2 class="titulo">Mi carrito de compras</h2><br>
                <table class="table table-light table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Subtotal</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach($_SESSION["carrito"] as $indice =>$arreglo) {
                            $total += $arreglo["subtotal"];
                        ?>
                            <tr>
                                <td><?php echo $indice ?></td>
                                <td><?php echo $arreglo["cant"] ?></td>
                                <td>S/<?php echo number_format($arreglo["precio"], 2) ?></td>
                                <td>S/<?php echo $arreglo["subtotal"] ?></td>
                                <td><?php echo "<a href='carrito.php?elim=$indice'><button type='button' class='btn btn-danger'>Elimina</button></a>";?></td>
                            <?php } ?>
                            </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="is-size-4 has-text-right"><strong>Total</strong></td>
                            <td colspan="2" class="is-size-4">
                                S/<?php echo number_format($total, 2) ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <center>
                <?php echo '<br><a href="productos.php" class="btn btn-warning">Regresar</a> | <a href="carrito.php?vaciar=true" class="btn btn-primary">Vaciar carrito</a> | <a href="compras.php" class="btn btn-success btn-large">Realizar Compra</a> | <a href="login.php" class="btn btn-info">Login</a>'; ?>
                </center>
            </div>
        </div>
    <?php } else { ?>
        <section class="hero hero-info">
            <div class="hero-body">
                <div class="container"><br><br>
                    <h1 class="titulo">
                        Todavía no hay productos
                    </h1><br>
                    <h2 class="subtitulo">
                        Visita productos para agregar productos a tu carrito
                    </h2><br>
                    <a href="productos.php" class="btn btn-warning">Ver Productos</a>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php
    include "Php/funcarrito.php";
    ?>
</body>

</html>