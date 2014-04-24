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
    $titulo = new Titulo('(5.8) Camas Hospitalarias Obstétricas y de Cuidados intensivos. Hospitales y Maternidades. Estado XXXX. Año XXXX','V. Datos sobre Respuesta Social a la Población Materna');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Camas Hospitalarias Obstétricas y de Cuidados intensivos. Hospitales y Maternidades. Estado XXXX. Año XXXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th colspan="1"></th>
            <th class="text-center" colspan="2">Camas Hospitalarias</th>
        </tr>
        <tr>
            <th width="250" class="text-center" colspan="">Hospitales y Maternidades</th>
            <th class="text-center" colspan="">Obstétricas</th>
            <th class="text-center" colspan="">Cuidados intensivos</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Hosp. 001</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Hosp. 002</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Hosp. 003</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Hosp. 004</td>
            <td></td>
            <td></td>
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



