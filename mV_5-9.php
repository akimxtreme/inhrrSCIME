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
    $titulo = new Titulo('(5.9) Indicadores de rendimiento y productividad. Servicios de obstetricia de hospitales y maternidades. Estado XXXX. Año XXXX','V. Datos sobre Respuesta Social a la Población Materna');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Indicadores de rendimiento y productividad. Servicios de obstetricia de hospitales y maternidades. Estado XXXX. Año XXXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center" colspan="">Hospitales y Maternidades</th>
            <th class="text-center" colspan="">Promedio de Estancia</th>
            <th class="text-center" colspan="">Porcentaje de Ocupación</th>
            <th class="text-center" colspan="">Índice de Rendimiento</th>
            <th class="text-center" colspan="">Intervalo de Sustitución</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="text-center">
            <td></td>
            <td></td>
            <td></td>
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



