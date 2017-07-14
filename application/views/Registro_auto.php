
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "<?php echo base_url() ?>RegistroAuto/registrarauto",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
alert(data);
$("#targetLayer").html(data);
		    },
		  	error: function()
	    	{
	    	}
	   });
	}));
});
</script>
</br>
</br>
<div class='container text-center animated fadeIn'><h1>Ingresar Auto</h1></div><hr>
<div class='container text-center'>
  <form id="uploadForm" action="<?php echo base_url() ?>RegistroAuto/registrarauto" method="post">
  <div id="targetLayer">No Image</div>
  <div id="uploadFormLayer">
  <input name="userImage" type="file" class="inputFile form-control" /><br/>
  <div class="form-group ">
    <label for="Litros">Litros</label>

    <?php  echo form_input(['name' => 'Litros', 'id' => 'Litros', 'class' => 'form-control','type'=>'number','required' => 'required']); ?>


  </div>

  <div class="form-group ">
    <label for="Precio">Precio</label>

    <?php  echo form_input(['name' => 'Precio', 'id' => 'Precio', 'class' => 'form-control','type'=>'number','required' => 'required']); ?>


  </div>

	<div class="form-group ">
<label for="desc">Descripción</label>
	<?php

	$data = array(
				 'name'        => 'desc',
				 'id'          => 'desc',
				 'value'       => set_value('vc_desc'),
				 'rows'        => '2',
				 'cols'        => '100',
				 'style'       => 'width:100%',
				 'class'       => 'form-control'
		 );

		 echo form_textarea($data);
	 ?>
	</div>
