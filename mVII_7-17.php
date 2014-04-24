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
    $titulo = new Titulo('(7.17) Muertes Maternas según Condiciones de Vida','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Muertes Maternas según Condiciones de Vida</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th width="250" class="text-center" rowspan="2">Condición de Vida</th>
            <th class="text-center" colspan="2">SI</th>
            <th class="text-center" colspan="2">NO</th>
            <th class="text-center" colspan="2">No Registrada</th>
            <th class="text-center" colspan="2">Total</th>
        </tr>
        <tr>
            <th class="text-center">N°</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">N°</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">N°</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">N°</th>
            <th class="text-center">Porcentaje (%)</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td class="text-justify">Hacinamiento</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Agua intradomiciliaria</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Disposición de excretas</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Condición económica que dificulta traslado para buscar atención médica</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Condiciones de vialidad (vías y transporte) en la zona de residencia dificultan el traslado oportuno</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Embarazo no deseado</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Violencia familiar</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Otros</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <!--
            (tr.text-center>td{Texto}+td{0}+td{0,00}+td{0,00 %})*10
            (tr>th.text-center{Texto}+th.text-center{0}+th.text-center{0,00})
        -->
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



