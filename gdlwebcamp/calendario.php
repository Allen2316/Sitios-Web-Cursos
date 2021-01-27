<?php include_once "includes/templates/header.php" ?>

<section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>
    <?php    
    try {
        require_once("includes/funciones/bd_conexion.php");
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos e ";
        $sql .= " INNER JOIN categoria_evento ce ";
        $sql .= " ON e.id_cat_evento = ce.id_categoria ";
        $sql .= " INNER JOIN invitados i ";
        $sql .= " ON e.id_inv = i.invitado_id ";
        $sql .= " ORDER BY evento_id";
        mysqli_set_charset($conn, 'utf8');
        $resultado = $conn->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>

    <div class="calendario">
        <?php
        $calendario = array();
        while ($eventos =  $resultado->fetch_assoc()) {

            //obtiene la fecha del elemento
            $fecha = $eventos["fecha_evento"];

            $evento = array(
                "titulo" => $eventos["nombre_evento"],
                "fecha" => $eventos["fecha_evento"],
                "hora" => $eventos["hora_evento"],
                "categoria" => $eventos["cat_evento"],
                "invitado" => $eventos["nombre_invitado"] . " " . $eventos["apellido_invitado"]
            );

            $calendario[$fecha][] = $evento;

        ?>
        <?php } //while de fetch_assoc 
        ?>

        <?php
        //imprime todos los eventos
        foreach ($calendario as $dia => $lista_eventos) { ?>
            <h3>
                <i class="fa fa-calendar"></i>                
                <?php 
                //Unix-mac
                setlocale(LC_TIME, "es_ES.UTF-8");
                //wiwndows
                setlocale(LC_TIME, "spanish.UTF-8");                
                echo strftime("%A, %d de %B del %Y", strtotime($dia)) ?>
            </h3>
        <?php  } ?>


        <pre>
            <?php var_dump($calendario) ?>
        </pre>
    </div>

    <?php $conn->close() ?>
</section>

<?php include_once "includes/templates/footer.php" ?>