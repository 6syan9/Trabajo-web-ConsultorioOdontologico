<?php
include 'view/inicio.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/EstiloSyP.css">
<script src="JS/Funciones.js"></script>
</head>

<body>
    <br><br>
    <h1>Servicios</h1>

    <div class="consulta">
        <input type="button" onclick="consulta()" name="consulta" value="Separar Cita">
    </div>

    <div class="contenedor">
        <section>
            <article><img src="img/Servicios/Examen Dental.jpg" alt="Examen Dental" title="Examen Dental" data-toggle="popover" data-trigger="hover" data-content="Revisión de los dientes y las encías. La mayoría de los niños y los adultos se deben hacer un examen dental cada seis meses. Estos exámenes son importantes para la salud bucal. Los problemas de salud bucal pueden volverse serios y dolorosos si no se tratan a tiempo.">
                <p>Examen Dental</p>
            </article>
            <article> <img src="img/Servicios/Destartraje.jpg" alt="Destartraje" title="Destartraje" data-toggle="popover" data-trigger="hover" data-content="Técnica de limpieza bucal especial que debe ser realizada por un profesional. Consiste en remover los cálculos de las superficies dentales, es decir, la placa bacteriana y el sarro acumulados en los dientes cercana a las encías.">
                <p>Destartraje</p>
            </article>
            <article><img src="img/Servicios/Profilaxis.jpg" alt="Profilaxis" title="Profilaxis" data-toggle="popover" data-trigger="hover" data-content="Acciones destinadas a prevenir ciertas afecciones dentobucales. Entre dichas afecciones, las más frecuentes son las caries, que afectan a los dientes, y la gingivitis y periodontitis, que afectan a las encías.">
                <p>Profilaxis</p>
            </article>
            <article><img src="img/Servicios/Aplicacion de fluor.jpg" alt="Aplicación de Fluor Gel" title="Aplicación de Fluor Gel" data-toggle="popover" data-trigger="hover" data-content="Suele ser aplicado por un profesional dental, o se aplica por sí mismo bajo supervisión (dependiendo de la edad del niño), de una vez al año a varias veces al año. El gel se suele colocar en una bandeja que el niño o joven debe mantener en la boca y morder durante unos cuatro minutos.">
                <p>Aplicación de Fluor Gel</p>
            </article>
            <article><img src="img/Servicios/Aplicacion de barniz.png" alt="Aplicación de Barniz" title="Aplicación de Barniz" data-toggle="popover" data-trigger="hover" data-content="El barniz de flúor se pinta con un pequeño pincel/escobilla en la superficie y a los lados de cada diente.  Es pegajoso pero se endurece cuando entra en contacto con la saliva. Su niño podría sentir el barniz endurecido en los dientes con su lengua, pero no podrá quitárselo con ella.">
                <p>Aplicación de Barniz</p>
            </article>
            <article><img src="img/Servicios/Aplicacion de sellantes.jpg" alt="Aplicación de sellantes" title="Aplicación de sellantes" data-toggle="popover" data-trigger="hover" data-content="Los selladores dentales son un recubrimiento delgado de resina que los dentistas aplican a los surcos de las superficies de las piezas dentales traseras, los molares y premolares. Los selladores se aplican para ayudar a evitar la caries.">
                <p>Aplicación de Sellantes</p>
            </article>
            <article><img src="img/Servicios/Endodoncia.jpg" alt="Endodoncia" title="Endodoncia" data-toggle="popover" data-trigger="hover" data-content="La endodoncia es un procedimiento que tiene como finalidad preservar las piezas dentales dañadas, evitando así su pérdida. Para ello, se extrae la pulpa dental y la cavidad resultante, se rellena y sella con material inerte y biocompatible.">
                <p>Endodoncia</p>
            </article>
            <article><img src="img/Servicios/Curacion y Restauración Dental.jpg" alt="Curación y Restauración Dental" title="Curación y Restauración Dental" data-toggle="popover" data-trigger="hover" data-content="Es un modo de reparar un diente dañado por caries y devolverle su función y forma normal. Cuando el dentista realiza una obturación o restauración, primero retira el material cariado, limpia la zona afectada, luego rellena la cavidad con un material de restauración.">
                <p>Curación y Restauración Dental</p>
            </article>
            <article><img src="img/Servicios/Curacion con Resinas Fotocurables.jpg" alt="Curación con Resinas Fotocurables" title="Curación con Resinas Fotocurables" data-toggle="popover" data-trigger="hover" data-content="La resina dental es el tratamiento que se utiliza para tratar lesiones pequeñas y reconstruir dientes no tan dañados. La resina es un material de restauración sintético que se adhiere perfectamente al esmalte del diente y presenta una gama de colores que iguala el tono y la translucidez del diente a restaurar.">
                <p>Curación con Resinas Fotocurables</p>
            </article>
            <article><img src="img/Servicios/Protesis Fija.jpg" alt="Protesis Fija" title="Protesis Fija" data-toggle="popover" data-trigger="hover" data-content="Las prótesis fijas se utilizan para suplir la pérdida de dientes, proporcionándole al paciente una pieza dental fija con la que podrá masticar y hablar de forma normal, haciendo las mismas funciones que un diente normal.">
                <p>Protesis Fija</p>
            </article>
            <article><img src="img/Servicios/Protesis Removible.jpg" alt="Protesis Removible" title="Protesis Removible" data-toggle="popover" data-trigger="hover" data-content="Como su nombre indica, las prótesis removibles son aquellas que podemos quitar y poner cuando sea necesario. Pueden ser parciales, si falta algún diente, o completas, si falta la arcada entera.">
                <p>Protesis Removible</p>
            </article>
            <article><img src="img/Servicios/Protesis Total.jpg" alt="Protesis Total" title="Protesis Total" data-toggle="popover" data-trigger="hover" data-content="Las prótesis dentales totales o completas son dispositivos extraibles que pueden usarse para reemplazar los dientes que faltan. Los dientes de la prótesis están hechos de porcelana o acrílico y se unen mediante una base de acrílico.">
                <p>Protesis Total</p>
            </article>
        </section>
    </div>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
</body>

</html>