<?php

class Auto_model extends CI_Model {
public $Precio;
public $Marca_id;
public $Litros;
public $Modelo_id;
  public function __construct()
{
parent::__construct();
}

public function listarautoswhere($id){
  $this->db->select('image,Auto_id,Modelo_nombre,Litros,Marca_nombre,Precio');
  $this->db->from('auto');
  $this->db->join('marca', 'auto.Marca_id = marca.Marca_id');
  $this->db->join('modelo as modelos', 'auto.Modelo_id = modelos.Modelo_id', 'INNER');
  $this->db->where('Auto_id', $id);
  $query = $this->db->get();
  return $query->result();
}

public function ediciondeauto($id){

  $data = array(
          'Precio' => $_POST['Precio'],
          'Litros'  => $_POST['Litros']
  );


$this->db->where('Auto_id',$id)->update('auto', $data);


}

public function listarautowhere($id){

  $this->db->select('image,Auto_id,Modelo_nombre,Litros,Marca_nombre,Precio,descr');
  $this->db->from('auto');
  $this->db->join('marca', 'auto.Marca_id = marca.Marca_id');
  $this->db->join('modelo as modelos', 'auto.Modelo_id = modelos.Modelo_id', 'INNER');
$this->db->where('Auto_id',$id);
  $query = $this->db->get();

  return $query->result();
}

public function listarautos(){

  $this->db->select('image,Auto_id,Modelo_nombre,Litros,Marca_nombre,Precio');
  $this->db->from('auto');
  $this->db->join('marca', 'auto.Marca_id = marca.Marca_id');
  $this->db->join('modelo as modelos', 'auto.Modelo_id = modelos.Modelo_id', 'INNER');

  $query = $this->db->get();

  return $query->result();
}


public function eliminarauto($id){
  $this->db->where('Auto_id', $id);
  $this->db->delete('auto');


}
public function registrarauto(){


  if(is_array($_FILES)) {
  if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
  $sourcePath = $_FILES['userImage']['tmp_name'];
  $targetPath = "images/".$_FILES['userImage']['name'];
  $url=base_url().$targetPath;
  if(move_uploaded_file($sourcePath,$targetPath)) {
    $data = array(
            'Precio'=> $_POST['Precio'],
            'Litros' => $_POST['Litros'],
            'Marca_id' => $_POST['marcas'],
            'Modelo_id'=>$_POST['modelos'],
            'image'=>$url,
            'descr'=>$_POST['desc']

    );
    $this->db->insert('auto', $data);
  ?>
  <img class="image-preview" src="<?php echo base_url().$targetPath; ?>" class="upload-preview" />
  <?php
  }
  }
  }



}


}



?>
