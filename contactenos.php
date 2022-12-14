<?php include 'view/inicio.php';?>

    <link rel="stylesheet" href="css/EstiloC.css">
    <script src="JS/Funciones.js"></script>
</head>
<body>
    <table class="tabla1" align="center">
        <tr>
            <td>
                <form name="formulario" action="Php/datos.php" method="post">
                    <fieldset>
                        <legend>Información General</legend><br>
                        <table>
                            <tr>
                                <td><label>Nombre:</label></td>
                                <td><input type="text" name="Nombre"><br></td>
                            </tr>
                            <tr>
                                <td><br><label>Apellido:</label></td>
                                <td><br><input type="text" name="Apellido"></td>
                            </tr>
                            <tr>
                                <td><br><label>DNI: </label></td>
                                <td><br><input type="text" name="DNI"></td>
                            </tr>
                            <tr>
                                <td><br><label>Correo Electronico</label></td>
                                <td><br><input type="email" name="Correo"></td>
                            </tr>
                            <tr>
                                <td><br><label>Estado Civil:</label></td>
                                <td><br><select name="EstadoCivil">
                                    <option value="Casado">Casado</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Viudo">Viudo</option>
                                    <option value="Divorciado">Divorciado</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td><br><label>Tipo de Mensaje:</label></td>
                                <td><br><input type="radio" name="TipoMensaje" value="Consulta">Consulta <br>
                                <input type="radio" name="TipoMensaje" value="Solicitud">Solicitud <br>
                                <input type="radio" name="TipoMensaje" value="Reclamo">Reclamo</td>
                            </tr>
                            <tr>
                                <td><br><label>Asunto:</label></td>
                                <td><br><input type="text" name="Asunto"></td>
                            </tr>
                            <tr>
                                <td><br><label>Mensaje:</label></td>
                                <td><br><textarea name="Mensaje" cols="20" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td><br><center><input type="button" onclick="borrar()" name="Limpiar" value="Borrar"></center></td>
                                <td><br><center><input type="submit" name="Enviar" value="Enviar"></center></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>