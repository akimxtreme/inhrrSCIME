<?php
include_once('functions/library.php');
$html = new Html_5('Formulario');
$html->body_I();
$html->links('CSS','css/foundation.css');
$html->links('JS','js/modernizr.js');
echo '<div class="row">';
    // Inicio del Menu Principal
    $menu = new Menu();
    $menu->menu_I(); // Imprime el inicio del menu
    // Domingo Ilarreta Ingresa Contenido aquí
    echo '<div class="large-12">';
    $titulo = new Titulo('(5.6) Establecimientos asistenciales según tipo de Centros Obstétricos de Emergencia. Estado XXXX. Año XXXX','V. Datos sobre Respuesta Social a la Población Materna');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Establecimientos asistenciales según tipo de Centros Obstétricos de Emergencia. Estado XXXX. Año XXXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th colspan="1"></th>
            <th class="text-center" colspan="2">Centros Obstétricos de Emergencia (COE)</th>
        </tr>
        <tr>
            <th width="250" class="text-center" colspan="">Establecimiento(s)</th>
            <th class="text-center" colspan="">Básico</th>
            <th class="text-center" colspan="">Integral</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Establ. 01</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Establ. 02</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Establ. 03</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Establ. 04</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Establ. 05</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th class="text-center" colspan="1">Total</th>
            <th colspan="2"></th>
        </tr>
        </tbody>
    </table>
    <?php
    echo '</div>';
    $menu->menu_F(); // Imprime el fin del menu 
echo '</div>';
$html->links('JS','js/foundation/foundation.js');
$html->links('JS','js/foundation/foundation.abide.js');
$html->links('JS','js/jquery.js');
$html->links('JS','js/foundation.min.js');
echo '<script>
      $(document).foundation();
    </script>';
$html->body_F();

?>



