<?php
    error_reporting(0);
    session_start();
?>
<?php include 'view/inicio.php';?>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/EstiloLyR.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Ingresar</h3>
                </div>
                <div id="formularios" class="card-body">
                    <form action="login.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control" name="txtemail" placeholder="Email">					
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="txtpassword" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <?php echo'<input type="submit" name="ingre" value="Ingresar" class="btn float-right login_btn">' ?>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        No tienes cuenta?<a href="registrar.php">Registrar cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include 'Conexiones/config.php'; 
    ?>
        <?php
        if(isset($_POST["ingre"])){ ?>
            <?php $email= $_POST['txtemail']; ?>
            <?php $password= $_POST['txtpassword']; 
            
            $pass_fuerte= password_hash($password,PASSWORD_DEFAULT); ?>

            <?php $sql="SELECT * FROM usuarios WHERE email='$email' AND pass='$pass_fuerte'";
            $result= mysqli_query($con, $sql); ?>
            <?php
            /*if(mysqli_num_rows($result) > 0){
                header("location: carrito.php");
                exit;
            }else{
                echo "<script>alert('El usuario no existe verifique los datos')</script>";
            }*/
            $row=mysqli_num_rows($result);
            $va=mysqli_fetch_array($result);
            if($row){ ?>
                <?php $_SESSION['id']=$va['id']; ?>
                <?php $_SESSION['username']=$va['username']; ?>
                <?php echo "<script>alert('Ha iniciado seccion correctamente')</script>"; ?>
                <?php header("location: carrito.php"); ?>
            <?php }else{ ?>
                <?php echo "<script>alert('La contraseña o el email son incorrectos')</script>"; ?>
                <?php exit;
            }?>
        <?php
        }
        ?>
</body>
</html>