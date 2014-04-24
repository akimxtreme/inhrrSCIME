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
    $titulo = new Titulo('(7.7) Mortalidad Materna según  causas de muerte indirecta. Número, porcentaje y Razón*','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Mortalidad Materna según  causas de muerte indirecta. Número, porcentaje y Razón*</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center">Complicación directa que concluye en la muerte</th>
            <th class="text-center">Número</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">Razón</th>
            <th class="text-center">Número 6 Otras</th>
            <th class="text-center">Porcentaje (%)</th>
            <th class="text-center">Número 5 Accidente Anestésico</th>
            <th class="text-center">Porcentaje (%)</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td class="text-justify">Enfermedades maternas infecciosas y parasitarias clasificables en otra parte pero que complican el embarazo el parto y el puerperio </td>
            <td>0</td>
            <td>00,00 %</td>
            <td>00,00</td>
            <td>0</td>
            <td>00,00 %</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Enfermedades de la sangre y de los órganos hematopoyéticos y ciertos trastornos que afectan el sistema inmunitario cuando complican el embarazo el parto y el puerperio </td>
            <td>0</td>
            <td>00,00 %</td>
            <td>00,00</td>
            <td>0</td>
            <td>00,00 %</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Enfermedades del sistema circulatorio que  complican el embarazo el parto y el puerperio </td>
            <td>0</td>
            <td>00,00 %</td>
            <td>00,00</td>
            <td>0</td>
            <td>00,00 %</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Enfermedades del sistema respiratorio que  complican el embarazo el parto y el puerperio </td>
            <td>0</td>
            <td>00,00 %</td>
            <td>00,00</td>
            <td>0</td>
            <td>00,00 %</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Enfermedades_ del sistema digestivo que complican el embarazo el parto y el puerperio </td>
            <td>0</td>
            <td>00,00 %</td>
            <td>00,00</td>
            <td>0</td>
            <td>00,00 %</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr class="text-center">
            <td class="text-justify">Otras enfermedades especificadas y afecciones  que  complican el embarazo el parto y el puerperio</td>
            <td>0</td>
            <td>00,00 %</td>
            <td>00,00</td>
            <td>0</td>
            <td>00,00 %</td>
            <td>0</td>
            <td>00,00 %</td>
        </tr>
        <tr>
            <th class="text-center">Total</th>
            <th class="text-center">0</th>
            <th class="text-center">100,00 %</th>
            <th class="text-center">00,00</th>
            <th class="text-center">0</th>
            <th class="text-center">00,00 %</th>
            <th class="text-center">0</th>
            <th class="text-center">00,00 %</th>
        </tr>
        </tbody>
    </table>
    <p><strong>*</strong> Razón por 100.000 nacidos vivos</p>
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



