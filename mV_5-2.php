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
    $titulo = new Titulo('(5.2) Servicios de Obstetricia. Número por adscripción según municipio. Estado XXXX. Año XXXX','V. Datos sobre Respuesta Social a la Población Materna');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Servicios de Obstetricia. Número por adscripción según municipio. Estado XXXX. Año XXXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th width="250" class="text-center" colspan="">Municipio(s)</th>
            <th class="text-center" colspan="">MPPS</th>
            <th class="text-center" colspan="">IVSS</th>
            <th class="text-center" colspan="">MPPD</th>
            <th class="text-center" colspan="">PDVSA</th>
            <th class="text-center" colspan="">Gobernación</th>
            <th class="text-center" colspan="">CVG</th>
            <th class="text-center" colspan="">Alacadía</th>
            <th class="text-center" colspan="">Otros</th>
            <th class="text-center" colspan="">Total</th>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>        
        </tbody>
    </table> 
    <p><strong>MPPS:</strong> Ministerio del Poder Popular para la Salud</p>
    <p><strong>IVSS:</strong> Instituto Venezolano de los Seguros Sociales</p>
    <p><strong>MPPD:</strong> Ministerio del Poder Popular para la Defensa</p>
    <p><strong>PDVSA:</strong> Petróleos de Venezuela S.A</p>
    <p><strong>CVG:</strong> Corporación Venezolana de Guyana</p>
    <p><strong></strong></p>
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



