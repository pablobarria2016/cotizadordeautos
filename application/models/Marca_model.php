<?php

class Marca_model extends CI_Model {

        public $marca_id;
        public $marca_nombre;

        public function __construct()
      	{
      		parent::__construct();
      	}
        public function obtenermarca()
  	{
  		$query = $this->db->get('marca');

  		return $query->result();
  	}


    public function get_province_query($Marca_id)
	{
		$query = $this->db->get_where('modelo', array('Marca_id' => $Marca_id));
		return $query->result();
	}

}
?>
