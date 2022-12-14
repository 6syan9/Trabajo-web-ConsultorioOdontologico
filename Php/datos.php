<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="../css/EstiloC.css"></head>
<body>
    <table class="tabla1" align="center">
        <tr>
            <td>
                <fieldset>
                    <legend><b>INFORMACION ENVIADA</b></legend><br>
                    <?php
                        require_once 'funciones.php';
                        echo validar();
                    ?>
                </fieldset>          
            </td>
        </tr>
        <tr>
            <td align="center"><br>
                <a href="../contactenos.php" target="Principal"><input type="button" name="Volver" value="Volver"></a>
                <br><br>
            </td>
        </tr>
    </table>
</body>
</html>