<?php
include_once('functions/library.php');
$html = new Html_5('Formulario');
$html->body_I();
$html->links('CSS','css/foundation.css');
$html->links('JS','js/modernizr.js');
// Formulario: Datos para Caracterización de Muertes Maternas
echo '<div class="row">';
    // Inicio del Menu Principal
    $menu = new Menu();
    $menu->menu_I(); // Imprime el inicio del menu
    
    // Domingo Ilarreta Ingresa Contenido aquí
    echo '<div class="large-12">';
    $titulo = new Titulo('(2.1.2) Otras Poblaciones','II. Aspectos Demográficos - (2.1) Población');
    ?>
    <h6 class="small-12">Población Urbana</h6>
    <table class="large-12">
        <thead>
        <tr>
            <th width="150" class="text-center">Población</th>
            <th class="text-center">Hombres</th>
            <th class="text-center">%</th>
            <th class="text-center">Mujeres</th>
            <th class="text-center">%</th>
            <th class="text-center">Total</th>
            <th class="text-center">%</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td class="text-center">Población Urbana</td>
            <td>000.000</td>
            <td>50%</td>
            <td>000.000</td>
            <td>50%</td>
            <td>H+M (000.000)</td>
            <td>100%</td>
        </tr>
        </tbody>
    </table>
    
    <h6 class="small-12">Población Rural</h6>
    <table class="large-12">
        <thead>
        <tr>
            <th width="150" class="text-center">Población</th>
            <th class="text-center">Hombres</th>
            <th class="text-center">%</th>
            <th class="text-center">Mujeres</th>
            <th class="text-center">%</th>
            <th class="text-center">Total</th>
            <th class="text-center">%</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td class="text-center">Población Rural</td>
            <td>000.000</td>
            <td>50%</td>
            <td>000.000</td>
            <td>50%</td>
            <td>H+M (000.000)</td>
            <td>100%</td>
        </tr>
        </tbody>
    </table>
    
    <h6 class="small-12">Población Indígena</h6>
    <table class="large-12">
        <thead>
        <tr>
            <th width="150" class="text-center">Población</th>
            <th class="text-center">Hombres</th>
            <th class="text-center">%</th>
            <th class="text-center">Mujeres</th>
            <th class="text-center">%</th>
            <th class="text-center">Total</th>
            <th class="text-center">%</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td class="text-center">Población Indígena</td>
            <td>000.000</td>
            <td>50%</td>
            <td>000.000</td>
            <td>50%</td>
            <td>H+M (000.000)</td>
            <td>100%</td>
        </tr>
        </tbody>
    </table>
    
    
    <?php
    echo '</div>';
    // Fin del Formulario
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



