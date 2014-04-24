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
    $titulo = new Titulo('(7.8) Causas de Muertes No Maternas','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Causas de Muertes No Maternas</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center">Causas de muertes</th>
            <th class="text-center">N°</th>
            <th class="text-center">Porcentaje (%)</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td class="text-justify">Accidentes de transporte (V01-V99)</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Ahogamiento y sumersión accidentales (W65-W74)</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Envenenamiento (X64)</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Ahorcamiento (X70)</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Agresión con disparo de armas de fuego (X95)</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr>
            <th class="text-center">Total</th>
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


