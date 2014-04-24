<?php
include_once('functions/library.php');
$html = new Html_5('Formulario');
$html->body_I();
$html->links('CSS','css/foundation.css');
$html->links('JS','js/modernizr.js');
// Formulario: Datos para Caracterización de Muertes Maternas
echo '<br>';
echo '<div class="row callout radius">';
    echo '<h1 class="text-center"><a href="#">Sistema Controlador de Indicadores de Mortalidad por Enfermedades</a></h1>';
    echo '<hr>';
    // Inicio del Menu Principal
    $menu = new Menu();
    
    
    // Domingo Ilarreta Ingresa Contenido aquí
    echo '<div class="large-8 columns">';
?>
<ul class="example-orbit" data-orbit>
  <li>
    <img src="images/Vuze.jpg" alt="Imagen 1" />
    <div class="orbit-caption">
      Sistema Controlador de Indicadores de Mortalidad por Enfermedades
    </div>
  </li>
  <li>
    <img src="images/img2.jpg" alt="Imagen 2" />
    <div class="orbit-caption">
      Sistema Controlador de Indicadores de Mortalidad por Enfermedades
    </div>
  </li>
  <li>
    <img src="images/img3.jpg" alt="Imagen 3" />
    <div class="orbit-caption">
      Sistema Controlador de Indicadores de Mortalidad por Enfermedades
    </div>
  </li>
</ul>
<?php
    echo '</div>';
    echo '<div class="large-4 columns">';
?>
    <dl class="accordion" data-accordion>
  <dd>
    <a href="#panel1">Crear una cuenta</a>
    <div id="panel1" class="content">
        <?php
      $crear = new Formulario('Crear una Cuenta en SCIME');
      //form_I($method,$action,$name,$onsubmit,$atributo)
      $crear->form_I('post','#','crear','return validar();','data-abide');
          
      echo '<div class="large-12">';
      //label($for, $title, $atributo);
      $crear->label('correo', 'Correo Electrónico', '');
      //input($name,$type,$placeholder,$atributo);
      $crear->input('correo','email','Ingrese un Correo Válido','pattern="email" required');
      echo '</div>';
      echo '<div class="large-12">';
      $crear->label('login', 'Nombre de Usuario', '');
      $crear->input('login','text','Ingrese Nombre de Usuario','required');
      echo '</div>';
      echo '<div class="large-12 password-field">';
      $crear->label('pass', 'Contraseña', '');
      $crear->input('pass','password','Ingrese su Contraseña','pattern="password" required id="pass"');
      echo '</div>';
      echo '<div class="large-12 password-confirmation-field">';
      $crear->label('pass-rep', 'Contraseña', '');
      $crear->input('pass-rep','password','Repita su Contraseña','required pattern="password" data-equalto="pass"');
      echo '</div>';
      
      echo '<button class="button small tiny" type="submit">Registrar</button>';
      
      $crear->form_F();
      
      ?>
    </div>
  </dd>
  <dd>
    <a href="#panel2">Acceder</a>
    <div id="panel2" class="content active">
      <?php
      $acceder = new Formulario('Acceso SCIME');
      //form_I($method,$action,$name,$onsubmit,$atributo)
      $acceder->form_I('post','mVI.php','acceder','','data-abide novalidate="novalidate"');
      
      echo '<div class="large-12">';
      //label($for, $title, $atributo);
      $acceder->label('login', 'Correo ó Nombre de Usuario', '');
      //input($name,$type,$placeholder,$atributo);
      $acceder->input('login','text','Ingrese Correo ó Usuario','required');
      echo '</div>';
      
      echo '<div class="large-12">';
      $acceder->label('pass', 'Contraseña', '');
      $acceder->input('pass','password','Ingrese su contraseña','required');
      echo '</div>';
      
      echo '<button class="button small tiny" type="submit">Acceder</button>';
      
      $acceder->form_F();    
      ?>
    </div>
  </dd>
  <dd>
    <a href="#panel3">¿Olvidó su contraseña?</a>
    <div id="panel3" class="content">
      <?php
      $acceder = new Formulario('Recuperar Contraseña');
      //form_I($method,$action,$name,$onsubmit,$atributo)
      $acceder->form_I('post','#','recuperar','','data-abide novalidate="novalidate"');
      
      echo '<div class="large-12">';
      //label($for, $title, $atributo);
      $acceder->label('correo', 'Correo Electrónico', '');
      //input($name,$type,$placeholder,$atributo);
      $acceder->input('correo','email','Ingrese el Correo Electrónico','pattern="email" required');
      echo '</div>';
      
      echo '<button class="button success tiny" type="submit">Enviar Contraseña al Correo</button>';
      
      $acceder->form_F();    
      ?>
    </div>
  </dd>
</dl>
<?php
    echo '</div>';
    
    echo '<hr>';
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



