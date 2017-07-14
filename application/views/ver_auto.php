
<br>
<br>
<br>

<?php
foreach($auto as $au):

?>
 <div class="container text-center ">
<h3>Imagén de auto</h3>
<hr>
<img  width="600px"
class="card-img-top img-thumbnail rounded " src="<?php echo $au->image?>" alt="Card image cap"  >

<h3>Precio de auto</h3>
 $<?php
  echo $au->Precio;?>
<br>
<h3>Modelo de auto</h3>
  <?php

  echo $au->Modelo_nombre;?>
  <br>
  <h3>Nombre de Marca</h3>
  <?php
  echo $au->Marca_nombre;
  ?>
  <h3>Descripción de auto</h3>
  <?php
  echo $au->descr;
?>

<?php endforeach;?>
<?php


echo "este es ver auto";

?>
</div>
<br>
