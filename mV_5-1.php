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
    $titulo = new Titulo('(5.1) Establecimientos de Salud según tipo, cifras absolutas por municipio. Estado XXXX. Año XXXX','V. Datos sobre Respuesta Social a la Población Materna');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Establecimientos de Salud según tipo, cifras absolutas por municipio. Estado XXXX. Año XXXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center" colspan="1">.</th>
            <th class="text-center" colspan="6">Ambulatorios</th>
            <th class="text-center" colspan="5">Hospitales</th>
            <th class="text-center" colspan="1">.</th>
        </tr>
        <tr>
            <th width="250" class="text-center">Municipio(s)</th>
            
            <th class="text-center">Rural I</th>
            <th class="text-center">Rural II</th>
            <th class="text-center">Urbano I</th>
            <th class="text-center">Urbano II</th>
            <th class="text-center">Urbano III</th>
            <th class="text-center">Total</th>
            
            <th class="text-center">I</th>
            <th class="text-center">II</th>
            <th class="text-center">III</th>
            <th class="text-center">IV</th>
            <th class="text-center">Total</th>
            <th class="text-center">Maternidades</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Nomb. Municipio I</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>lorem</td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio II</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>lorem</td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio III</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>lorem</td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio IV</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>00</td>
            <td>lorem</td>
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



