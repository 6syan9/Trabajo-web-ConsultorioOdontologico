<?php
    session_start();
?>
<?php include 'view/inicio.php';?>
    <link rel="stylesheet" href="css/EstiloSyP.css">
</head>
<body>
    <?php
                $dni=$_POST['DNI'];
                $Direccion=$_POST['Direccion'];
                $Telefono=$_POST['Telefono'];
                $Correo=$_POST['Correo'];

                $sql="INSERT INTO ventasnotlog(DNI,Direccion,Telefono,Correo,Fecha,Total,estado) VALUES('$dni','$Direccion','$Telefono','$Correo',NOW(),'$total','Pendiente')";
                mysqli_query($con,$sql);

                $sql="SELECT * FROM ventasnotlog WHERE DNI='$dni' AND Total='$total'";
                $idv= mysqli_query($con, $sql);
                
                foreach($_SESSION["carrito"] as $indice =>$arreglo) {
                    $idventas= $idv["idventas"];
                    $producto= $indice;
                    $cantidad= $arreglo["cant"];
                    $precio= $arreglo["precio"];
                    $subtotal= $arreglo["subtotal"];

                    $sql="INSERT INTO detventasnotlog(idventas,producto,cantidad,precio,subtotal) VALUES('$idventas','$producto','$cantidad','$precio','$subtotal')";
                    mysqli_query($con,$sql);
                }
        ?>
    <div class="contenedor">
        <h1>Info de la compra</h1>
        <?php

            $sql="SELECT * FROM ventasnotlog WHERE DNI='$dni' AND Total='$total'";
            $respuesta=mysqli_query($con,$sql);

            $dni=$respuesta['DNI'];
            $Direccion=$respuesta['Direccion'];
            $Telefono=$respuesta['Telefono'];
            $Correo=$respuesta['Correo'];
            $Fecha=$respuesta['Fecha'];
            $Total=$respuesta['Total'];
            $estado=$respuesta['estado'];

            echo "DNI: $dni";
            echo "Direccion: $Direccion";
            echo "Telefono: $Telefono";
            echo "Correo: $Correo";
            echo "Fecha: $Fecha";
            echo "Total: $Total";
            echo "estado: $estado";

        ?>
    </div>

</body>
</html>