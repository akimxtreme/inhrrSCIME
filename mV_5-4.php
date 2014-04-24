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
    $titulo = new Titulo('(5.4) Establecimientos de Barrio Adentro, según tipo. Número según municipio. Estado XXXX. Año XXXX','V. Datos sobre Respuesta Social a la Población Materna');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Unidades de Cuidados intensivos. Número por adscripción según municipio. Estado XXXX. Año XXXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th width="250" class="text-center" colspan="">Municipio(s)</th>
            <th class="text-center" colspan="">Consultorios Populares</th>
            <th class="text-center" colspan="">Clínicas Populares</th>
            <th class="text-center" colspan="">CDI</th>
            <th class="text-center" colspan="">SRI</th>
            <th class="text-center" colspan="">CAT</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Nomb. Municipio 1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio 2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio 3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio 4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio 5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td>Nomb. Municipio 6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table> 
    <p><strong>CDI:</strong> Centro de Diagnóstico Integral</p>
    <p><strong>SRI:</strong> Salas de Rehabilitación Integral</p>
    <p><strong>CAT:</strong> Centros de Alta Tecnología</p>
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



