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
                    <h3>Registrarse</h3>
                </div>
                <div id="formularios" class="card-body">
                    <form action="registrar.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Usuario">					
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="email" placeholder="Email">					
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                        <?php echo '<input type="submit" name="regis" value="Registrar" class="btn float-right login_btn">' ?>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Ya tienes cuenta?<a href="login.php">Logueate</a>
                    </div>
			    </div>
            </div>
        </div>
    </div>
    <?php 
    include 'Conexiones/config.php'; 
    ?>
    <?php
        if(isset($_SESSION["username"])){?>
           <?php header("location: carrito.php");
        }
        if(isset($_POST["regis"])){?>
            <?php $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $pass_fuerte= password_hash($password,PASSWORD_DEFAULT);

            $sql="SELECT * FROM usuarios WHERE email='$email'";
            $result= mysqli_query($con, $sql);
            
            $row=mysqli_num_rows($result);
            if($row){?>
                <?php $va=mysqli_fetch_array($result);
                    if($va['email']== $email){?>
                    <?php echo "<script>alert('El correo ya se ha registrado anteriormente')</script>"; 
                }?>
                <?php }else{ ?>
                <?php $sql="INSERT INTO usuarios(username,email,pass) VALUES('$username','$email','$pass_fuerte')";
                $va= mysqli_query($con,$sql);?>
                <?php echo "<script>alert('Usuario Registrado Exitosamente')</script>";?>
                <?php
                $username="";
                $email="";
                $_POST['password']="";
            } ?>
            <?php
            /*if(!$result->num_row > 0){
    
                $sql="INSERT INTO usuarios(username,email,pass) VALUES('$username','$email','$password')";
                $result=mysqli_query($con,$sql);
                echo "<script>alert('Usuario Registrado Exitosamente')";

                $username="";
                $email="";
                $_POST['password']="";
            }else{
                echo "<script>alert('El correo ya existe')</script>";
            }*/
        }
    ?>
</body>
</html>