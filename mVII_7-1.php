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
    $titulo = new Titulo('(7.1) Mortalidad Proporcional. Muertes Maternas','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Mortalidad Proporcional. Muertes Maternas</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center">Año</th>
            <th class="text-center">N° Muertes Totales</th>
            <th class="text-center">N° Muertes Maternas</th>
            <th class="text-center">% de Muertes Maternas</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Año 2009</td>
            <td>00.000</td>
            <td>00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Año 2010</td>
            <td>00.000</td>
            <td>00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Año 2011</td>
            <td>00.000</td>
            <td>00</td>
            <td>0,00 %</td>
        </tr>
        <tr>
            <th class="text-center">Total</th>
            <th class="text-center">00.000</th>
            <th class="text-center">00</th>
            <th class="text-center">0,00 %</th>
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



