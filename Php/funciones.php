<?php

function validar(){
    $Nombre= $_POST['Nombre'];
    $Apellido= $_POST['Apellido'];
    $DNI= $_POST['DNI'];
    $Correo= $_POST['Correo'];
    $EstadoCivil= $_POST['EstadoCivil'];
    $TipoMensaje= $_POST['TipoMensaje'];
    $Asunto= $_POST['Asunto'];
    $Mensaje= $_POST['Mensaje'];

    if ($Nombre=='' || $Apellido=='' || $DNI=='' || $Correo=='' || $EstadoCivil=='' || $TipoMensaje=='' || $Asunto=='' || $Mensaje==''){
    echo "<h2>No se enviaron datos</h2>";
    echo "<h2>Llena todos los campos</h2>";
    }else{
        echo mostrardatos();
    }
}

function mostrardatos(){
    echo "<b>NOMBRE:</b> ";
    echo $_POST['Nombre'];
    echo "<br><br>";

    echo "<b>APELLIDOS:</b> ";
    echo $_POST['Apellido'];
    echo "<br><br>";

    echo "<b>DNI:</b> ";
    echo $_POST['DNI'];
    echo "<br><br>";

    echo "<b>CORREO ELECTRONICO:</b> ";
    echo $_POST['Correo'];
    echo "<br><br>";

    echo "<b>ESTADO CIVIL:</b> ";
    echo $_POST['EstadoCivil'];
    echo "<br><br>";

    echo "<b>TIPO DE MENSAJE:</b> ";
    echo $_POST['TipoMensaje'];
    echo "<br><br>";

    echo "<b>ASUNTO:</b> ";
    echo $_POST['Asunto'];
    echo "<br><br>"; 

    echo "<b>MENSAJE:</b> ";
    echo $_POST['Mensaje'];
    echo "<br><br>";                   
}

?>