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
    $titulo = new Titulo('(5.13) Cobertura de control pre y post natal. Estado XXX. Año XXX','V. Datos sobre Respuesta Social a la Población Materna');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Cobertura de control pre y post natal. Estado XXX. Año XXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center" rowspan="2">Municipio(s)</th>
            <th class="text-center" colspan="2">Control Prenatal</th>
            <th class="text-center" rowspan="2">Control post natal (Cobertura)</th>
        </tr>
        <tr>
            <th class="text-center">Cobertura</th>
            <th class="text-center">Concentración</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Nomb. de Municipio 1</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. de Municipio 2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. de Municipio 3</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. de Municipio 4</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th class="text-left">Total</th>
            <th class="text-center" colspan="3"></th>
        </tr>
        <tr>
            <th class="text-left">Total Año 2099</th>
            <th class="text-center" colspan="3"></th>
        </tr>
        <tr>
            <th class="text-left">Total Año 2010</th>
            <th class="text-center" colspan="3"></th>
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



