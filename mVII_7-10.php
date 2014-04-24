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
    $titulo = new Titulo('(7.10) Mortalidad Materna según edad, número, porcentaje y Razón*','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Mortalidad Materna según edad, número, porcentaje y Razón*</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center">Grupo de Edad</th>
            <th class="text-center">N°</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">Razón</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>10-14</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>15-19</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>20-24</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>25-29</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>30-34</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>35-39</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>40-44</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>45-49</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>50 años y más</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>No Registrada</td>
            <td>0</td>
            <td>0,00</td>
            <td>0,00 %</td>
        </tr>
        <tr>
            <th class="text-center">Total</th>
            <th class="text-center">0</th>
            <th class="text-center">0,00</th>
            <th class="text-center">0,00 %</th>
        </tr>
        <!--(tr.text-center>td{Texto}+td{0}+td{0,00}+td{0,00 %})*10-->
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



