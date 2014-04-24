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
    echo '<h3 class="small-8 columns">Población según Municipios</h3>';
    echo '<h3 class="small-4 columns text-right"><small>Aspectos Demográficos</small></h3>';
    $form = new Formulario('Estados');
    // form_I($method,$action,$name,$onsubmit,$atributo)
    $form->form_I('get','#','municipio','var validar();','data-abide="ajax"');
    $form->label('edo', 'Seleccione un Estado', 'required');
    $form->select('edo','');
    $form->form_F();
    ?>
    <h6 class="text-center">Población según Municipios</h6>
    <table class="large-12">
        <thead>
        <tr>
            <th width="50" class="text-center">nº</th>
            <th class="text-center">Municipios</th>
            <th class="text-center">Hombres</th>
            <th class="text-center">Mujeres</th>
            <th class="text-center">Total</th>
            <th class="text-center">%</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <td>1</td>
            <td>Maxime.</td>
            <td>Dolore.</td>
            <td>Repellendus.</td>
            <td>Tempora.</td>
            <td>Eaque.</td>
        </tr>
        <tr class="text-center">
            <td>2</td>
            <td>Eos!</td>
            <td>Officiis?</td>
            <td>Repudiandae?</td>
            <td>Asperiores.</td>
            <td>Culpa.</td>
        </tr>
        <tr class="text-center">
            <td>3</td>
            <td>Incidunt?</td>
            <td>Unde!</td>
            <td>Ut!</td>
            <td>Cumque.</td>
            <td>Aliquid.</td>
        </tr>
        <tr class="text-center">
            <td>4</td>
            <td>Blanditiis?</td>
            <td>Aliquid!</td>
            <td>Iure.</td>
            <td>Voluptates?</td>
            <td>Labore!</td>
        </tr>
        <tr class="text-center">
            <td>5</td>
            <td>Natus.</td>
            <td>Quam.</td>
            <td>Cumque.</td>
            <td>Molestiae!</td>
            <td>Illo?</td>
        </tr>
        <tr class="text-center">
            <td>6</td>
            <td>Molestiae!</td>
            <td>Incidunt!</td>
            <td>Ipsum.</td>
            <td>Quis?</td>
            <td>Magnam.</td>
        </tr>
        <tr class="text-center">
            <td>7</td>
            <td>Rerum.</td>
            <td>Itaque.</td>
            <td>Enim.</td>
            <td>Possimus.</td>
            <td>Quis.</td>
        </tr>
        <tr class="text-center">
            <td>8</td>
            <td>Aspernatur!</td>
            <td>Doloremque!</td>
            <td>A.</td>
            <td>Eligendi!</td>
            <td>Expedita.</td>
        </tr>
        <tr class="text-center">
            <td>9</td>
            <td>Dolores!</td>
            <td>Non.</td>
            <td>Fugiat.</td>
            <td>Exercitationem?</td>
            <td>Cum?</td>
        </tr>
        <tr>
            <th class="text-center"></th>
            <th class="text-center">Miranda</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">000.000</th>
            <th class="text-center">100 %</th>
        </tr>
        </tbody>
    </table>    
    <?php
    echo '</div>';
    // Fin del Formulario
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



