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
    $titulo = new Titulo('(2.1) Población Total','II. Aspectos Demográficos - (2.1) Población');
    ?>
    <table class="large-12">
        <thead>
        <tr>
            <th width="130" class="text-center">Grupo de Edad</th>
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
            <td>0-4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>5-9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>10-14</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>15-19</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>20-24</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>25-29</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>30-34</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>35-39</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>40-44</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>45-49</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>50-54</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>55-59</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th class="text-center">Total</th>
            <th class="text-center">000.000</th>
            <th class="text-center">50%</th>
            <th class="text-center">000.000</th>
            <th class="text-center">50%</th>
            <th class="text-center">H+M (000.000)</th>
            <th class="text-center">100%</th>
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



