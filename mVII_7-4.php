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
    $titulo = new Titulo('(7.4) Mortalidad Materna por municipios según grupo de causas. Estado XXXX. Año XXXX','VII. Cuadros Sobre Caracterización de Muertes Maternas');
    ?>
    <div class="row">
    <h6 class="text-center large-12 columns">Mortalidad Materna por municipios según grupo de causas. Estado XXXX. Año XXXX</h6>
    </div>
    <table class="large-12">
        <thead>
        <tr>
            <th class="text-center" rowspan="2">Municipio(s)</th>
            <th class="text-center" colspan="7">Causas (CIE-10)&sup1;</th>
            <th class="text-center" rowspan="2">Total</th>
        </tr>
        <tr>
            <th class="text-center">O00-O08</th>
            <th class="text-center">O10-O16</th>
            <th class="text-center">O20-O29</th>
            <th class="text-center">O30-048</th>
            <th class="text-center">O60-O75</th>
            <th class="text-center">O85-092</th>
            <th class="text-center">O95-O99</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>Nomb. de Municipio 1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr class="text-center">
            <td>Nomb. de Municipio 2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr class="text-center">
            <td>Nomb. de Municipio 3</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr class="text-center">
            <td>Nomb. de Municipio 4</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr class="text-center">
            <td>Nomb. de Municipio 5</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <th class="text-center" colspan="1">Total</th>
            <th class="text-center" colspan="8"></th>
        </tr>
        </tbody>
    </table>
    <p><strong>O00-O08:</strong> Embarazo terminado en aborto</p>
    <p><strong>010-O16:</strong> Edema, proteinuria y trastornos hipertensivos en el embarazo, parto y puerperio</p>
    <p><strong>O20-O29:</strong> Otros trastornos maternos relacionados principalmente con el embarazo</p>
    <p><strong>O30-048:</strong> Atención materna relacionada con el feto y la cavidad amniótica y con posibles problemas del parto</p>
    <p><strong>O60-O75:</strong> Complicaciones del trabajo del parto y del parto</p>
    <p><strong>O80-O84:</strong> Parto</p>
    <p><strong>O85-092:</strong> Complicaciones principalmente relacionadas con el puerperio</p>
    <p><strong>O95-O99:</strong> Otras afecciones obstétricas no clasificadas en otra parte</p>
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



