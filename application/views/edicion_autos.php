</br>
</br>
</br>
<div class="container text-center">

<h1>Edición de auto</h1>

</div>
<hr>
</br>
<div  class="container text-center">
  <?php echo form_open('RegistroAuto/autoeditado/'.$this->uri->segment('3')); ?>
  <?php foreach($autos as $auto): ?>
<label><h3>Imagen de Auto</h3></label>
<hr>
<br>
<img  class="img-thumbnail rounded" width="400"
src="<?php echo $auto->image; ?>">
<br>
<label><h3>Precio de auto </h3></label>
  <input class="form-control" type='number' id='Precio' name='Precio' value=<?php echo $auto->Precio;?> required >

   <br>
   <label><h3>Litros de auto </h3></label>
     <input class="form-control"  type='number' id="Litros" name="Litros" value=<?php echo $auto->Litros;?> required >
</br>
<button class="btn" type="submit">Editar auto</button>
<?php endforeach;?>
<?php echo form_close();?>
</div>
</br>
