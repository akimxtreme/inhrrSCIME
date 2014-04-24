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
    $titulo = new Titulo('(7.25) Muertes Maternas según Antecedentes Patológicos de Riesgo','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Muertes Maternas según Antecedentes Patológicos de Riesgo</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center">Antecedente Patológico de Riesgo</th>
            <th class="text-center">N°</th>
            <th class="text-center">Porcentaje (%)</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Hipertensión arterial</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Cardiopatía</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Diabetes</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>RN macrosómico</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Lupus</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Obesidad</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Desnutrición</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Anemia</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Tabaquismo</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Alcoholismo</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Drogadicción</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Infección VIH/SIDA</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Tumor maligno</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Cirugía</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>VDRL reactivo</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Otra enfermedad infecciosa</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Otro antecedente o condición de riesgo</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>Ninguno</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr class="text-center">
            <td>No Registrado</td>
            <td>0</td>
            <td>0,00 %</td>
        </tr>
        <tr>
            <th class="text-center">Total</th>
            <th class="text-center">0</th>
            <th class="text-center">100,00 %</th>
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



