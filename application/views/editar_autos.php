</br>
</br>
</br>
<div class="container text-center"><h1>Editar Auto</h1></div>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>Precio</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($autos as $auto): ?>
    <tr>
      <th scope="row"><?php echo "$".$auto->Precio?></th>
      <td><?php echo $auto->Marca_nombre;?></td>
      <td><?php echo $auto->Modelo_nombre;?></td>
      <td><a class="btn btn-outline-success"
      href="<?php echo base_url()?>RegistroAuto/editar/<?php echo $auto->Auto_id ;?>">Editar</>

<a class="btn btn-outline-danger"
href="<?php echo base_url()?>RegistroAuto/eliminarauto/<?php echo $auto->Auto_id ;?>">Eliminar</>
      </td>
    </tr>
    <?php endforeach;?>

  </tbody>
</table>
</div>
