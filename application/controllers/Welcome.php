<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Marca_model', 'marca', TRUE);
			$this->load->model('Auto_model','auto',TRUE);
			$this->load->helper('url');
			$this->load->database();
		}
	public function index()
	{
		$this->load->view('shared/navbar');
		$this->load->helper('file');


//$data['marcas'] = $this->marca->obtenermarca();

$data['autos']= $this->auto->listarautos();
		$this->load->view('welcome_message',$data);

		//$modelos = $this->marca->obtenermodelo(1);

	}

	public function obtenermodelo()
{
	$country_id = $this->input->post('marcas_id');
	$marcas = $this->marca->get_province_query($country_id);
	if(count($marcas)>0)
	{
		$pro_select_box = '';
		$pro_select_box .= '<option value="">Seleccionar modelo</option>';
		foreach ($marcas as $marca) {
			$pro_select_box .='<option value="'.$marca->Modelo_id.'">'.$marca->Modelo_nombre.'</option>';
		}
		echo json_encode($pro_select_box);
	}
}
}
