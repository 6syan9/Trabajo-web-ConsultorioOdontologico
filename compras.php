<?php
    session_start();
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
                <div class="container">
                    <div class="alert alert-success">
                        <form action="infocompras.php" name="terminar" method="POST">
                            <legend>Datos</legend><br>
                            <center>
                            <table>
                                <tr>
                                    <td><label>DNI: </label></td>
                                    <td><input type="text" name="DNI"><br></td>
                                </tr>
                                <tr>
                                    <td><br><label>Dirección:</label></td>
                                    <td><br><input type="text" name="Direccion"></td>
                                </tr>
                                <tr>
                                    <td><br><label>Telefono: </label></td>
                                    <td><br><input type="text" name="Telefono"></td>
                                </tr>
                                <tr>
                                    <td><br><label>Correo Electronico: </label></td>
                                    <td><br><input type="email" name="Correo"></td>
                                </tr>
                                <tr>
                                    <td><br><center><input type="submit" name="Enviar" class="btn btn-success" value="Terminar Compra sin Login"></center></td>
                                </tr>
                            </table>
                            </center>  
                        </form>
                    </div>
                </div>
                <center>
                <?php echo '<br><a href="carrito.php" class="btn btn-warning">Editar</a> | <a href="compras.php?terminar=true" class="btn btn-success">Terminar Compra con Login</a> | <a href="compras.php?cancelar=true" class="btn btn-danger">Cancelar Compra</a>'; ?>
                </center>
            </div>
        </div>
    <?php } ?>
    <?php 
    include 'Conexiones/config.php'; 
    ?>

    <?php
    if(isset($_REQUEST["cancelar"])){
        session_destroy();
        header("location: carrito.php");
    }
    ?>
    <?php
        if(isset($_REQUEST['terminarconlog'])){
                
            /*$idusuario= $_SESSION['id'];
                falta implementar mejor el login*/ 

            $idusuario= '1';

            $sql="INSERT INTO tblventas(idusuario,Fecha,Total,estado) VALUES('$idusuario',NOW(),'$total','Pendiente')";
            mysqli_query($con,$sql);

            $sql="SELECT idventas FROM tblventas WHERE idusuario='$idusuario'";
            $idv= mysqli_query($con, $sql);
            
            foreach($_SESSION["carrito"] as $indice =>$arreglo) {
                /*$idventas= $idv;
                    falta implementar mejor el login*/
                $idventas= '1';
                $producto= $indice;
                $cantidad= $arreglo["cant"];
                $precio= $arreglo["precio"];
                $subtotal= $arreglo["subtotal"];

                $sql="INSERT INTO detallesventas(idventas,producto,cantidad,precio,subtotal) VALUES('$idventas','$producto','$cantidad','$precio','$subtotal')";
                mysqli_query($con,$sql);
            }
            
            echo "<script>alert('Su compra ha sido procesada')</script>";
            session_destroy();
            header("location: carrito.php");
            exit;
        }
    ?>
</body>

</html>