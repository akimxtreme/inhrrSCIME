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
    $titulo = new Titulo('(7.50) Matriz de Productos Cruzados sobre Presencia de Alto Riesgo en Muertes Maternas','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Matriz de Productos Cruzados sobre Presencia de Alto Riesgo en Muertes Maternas</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center">Situación</th>
            <th class="text-center">ARS(A)</th>
            <th class="text-center">ARB(B)</th>
            <th class="text-center">ARM(C)</th>
            <th class="text-center">CT(D)</th>
            <th class="text-center">HABR(E)</th>
            <th class="text-center">AcD(F)</th>
            <th class="text-center">ATO(G)</th>
            <th class="text-center">RRHH L(H)</th>
            <th class="text-center">IN(I)</th>
            <th class="text-center">DM(J)</th>
            <th class="text-center">Total de Muertes con el Factor</th>
            <th class="text-center">% de Muertes con Presencia del Factor</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>A</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>B</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>C</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>D</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>E</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>F</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>G</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>H</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>I</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>J</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
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



