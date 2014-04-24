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
    $titulo = new Titulo('(7.46) Muertes Maternas según Tipo de Demora','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Muertes Maternas según Tipo de Demora</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center">Tipo de demora</th>
            <th class="text-center">SI</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">NO</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">No Registrado</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">Total</th>
            <th class="text-center">Porcentaje (%)</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Demora 1</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>00</td>
            <td>0,00 %</td>
        </tr> 
        <tr class="text-center">
            <td>Demora 2</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Demora 3</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>0</td>
            <td>0,00 %</td>
            <td>00</td>
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



