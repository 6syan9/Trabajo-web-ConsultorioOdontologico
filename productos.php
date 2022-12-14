<?php
session_start();
?>

<?php include 'view/inicio.php';?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/EstiloSyP.css">
    <script src="JS/Funciones.js"></script>
</head>

<body>
    <br>
    <h1>Productos</h1>

    <div class="container">
        <div class="alert alert-success">
            Carrito de Compras...
            <a href="carrito.php" class="badge badge-success">Ver Carrito</a>
        </div>
    </div>

    <div class="contenedor">
        <section>
            <article><img src="img/Productos/colgate duraphat 5000 ppm fluor crema dental.jpg" alt="colgate duraphat 5000 ppm fluor crema dental">
                <p>Colgate duraphat 5000 ppm</p>
                <h3>S/50</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Colgate duraphat 5000 ppm">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="50">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/lacer clorhexidina gel dentbioad .jpg" alt="Lacer clorhexidina gel dentbioad">
                <p>Lacer clorhexidina gel dentbioad</p>
                <h3>S/20</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Lacer clorhexidina gel dentbioad">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="20">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/Crema Dental Totaldent Fluor.jpg" alt="Crema Dental Totaldent Fluor">
                <p>Crema dental totaldent fluor</p>
                <h3>S/9</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Crema dental totaldent fluor">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="9">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/Pack Cepillo Dental Totaldent Triple Acción Máxima Limpieza.jpg" alt="Pack Cepillo Dental Totaldent Triple Acción Máxima Limpieza">
                <p>Pack cepillo dental totaldent</p>
                <h3>S/11</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Pack cepillo dental totaldent">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="11">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/Cepillos Interproximales Interprox Plus Micro.jpg" alt="Cepillos Interproximales Interprox Plus Micro">
                <p>Cepillos interproximales Interprox</p>
                <h3>S/22</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Cepillos interproximales Interprox">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="22">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/Hilo Dental Essential Floss Oral-B Sabor Menta.jpg" alt="Hilo Dental Essential Floss Oral-B Sabor Menta">
                <p>Hilo dental essential floss Oral-B</p>
                <h3>S/10</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Hilo dental essential floss Oral-B">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="10">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/PROTEFIX ALMOHADILLA ADHESIVA MAXILAR INFERIOR.jpg" alt="Protefix almohadilla adhesiva maxilar inferior">
                <p>Protefix almohadilla adhesiva maxilar inferior</p>
                <h3>S/20</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Protefix almohadilla adhesiva maxilar inferior">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="20">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/Colutorio Vitis Orthodontic.jpg" alt="Colutorio Vitis Orthodontic">
                <p>Colutorio vitis orthodontic</p>
                <h3>S/30</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Colutorio vitis orthodontic">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="30">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
            <article><img src="img/Productos/Spray Bucal BUK-AL Green Mint.jpg" alt="Spray Bucal BUK-AL Green Mint">
                <p>Spray bucal BUK-AL green mint</p>
                <h3>S/10</h3>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="txtProducto" value="Spray bucal BUK-AL green mint">
                    <input type="number" name="cant" value="1" style="width:50px;">
                    <input type="hidden" name="txtPrecio" value="10">
                    <input type="submit" onclick="compras()" name="Añadir" value="Añadir">
                </form></article>
        </section>
    </div>
    
    <?php
        if(isset($_POST["Añadir"])){
            $producto = $_POST["txtProducto"];
            $cantidad = $_POST["cant"];
            $precio = $_POST["txtPrecio"];
            $subtotal= $cantidad*$precio;
            
            $_SESSION["carrito"][$producto]["cant"]=$cantidad;
            $_SESSION["carrito"][$producto]["precio"]=$precio;
            $_SESSION["carrito"][$producto]["subtotal"]=$subtotal;
            /*echo "Producto: ".$producto.", cantidad: ".$cantidad.", Precio: S/".$precio.", Total: S/".$total;*/
        }
    ?>
</body>

</html>