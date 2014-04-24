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
    echo '<h3 class="small-8 columns">Nacimientos Vivos según Edad y Residencia Habitual de la Madre</h3>';
    echo '<h3 class="small-4 columns text-right"><small>Aspectos Demográficos</small></h3>';
    ?>
    <h6 class="text-center">Nacimientos Vivos según Edad y Residencia Habitual de la Madre</h6>
    <table class="large-12">
        <thead>
        <tr>
            <th width="50" class="text-center">nº</th>
            <th class="text-center">Municipios</th>
            <th class="text-center">&laquo; 15</th>
            <th class="text-center">15-19</th>
            <th class="text-center">20-24</th>
            <th class="text-center">25-29</th>
            <th class="text-center">30-34</th>
            <th class="text-center">35-39</th>
            <th class="text-center">40-44</th>
            <th class="text-center">45-49</th>
            <th class="text-center">50 y más</th>
            <th class="text-center">Total</th>
            <th class="text-center">%</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>1</td>
            <td>Nomb. Municipio 1</td>
            <td>00000</td>
            <td>00000</td>
            <td>00000</td>
            <td>00000</td>
            <td>00000</td>
            <td>00000</td>
            <td>00000</td>
            <td>00000</td>
            <td>00000</td>
            <td>0000000</td>
            <td>100 %</td>
        </tr>
        <tr>
            <td class="text-center">2</td>
            <td class="text-center">Nomb. Municipio 2</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">100 %</td>
        </tr>
        <tr>
            <td class="text-center">3</td>
            <td class="text-center">Nomb. Municipio 3</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">100 %</td>
        </tr>
        <tr>
            <td class="text-center">4</td>
            <td class="text-center">Nomb. Municipio 4</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">100 %</td>
        </tr>
        <tr>
            <td class="text-center">5</td>
            <td class="text-center">Nomb. Municipio 5</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">100 %</td>
        </tr>
        <tr>
            <td class="text-center">6</td>
            <td class="text-center">Nomb. Municipio 6</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">100 %</td>
        </tr>
        <tr>
            <td class="text-center">7</td>
            <td class="text-center">Nomb. Municipio 7</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">000.000</td>
            <td class="text-center">100 %</td>
        </tr>
        <tr>
            <th class="text-center">Edo.</th>
            <th class="text-center">Miranda</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">0.000.000</th>
            <th class="text-center">100 %</th>
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



