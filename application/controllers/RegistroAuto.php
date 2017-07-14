<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroAuto extends CI_Controller {
	public function __construct()
		{

			parent::__construct();
$this->load->helper('file');
			$this->load->model('Marca_model', 'marca', TRUE);
			$this->load->model('Auto_model','auto',TRUE);
		}
	public function index()
	{

		$this->load->database();
		$this->load->helper('form');
$this->load->view('shared/navbar');
$this->load->view('Registro_auto');
		$data['marcas'] = $this->marca->obtenermarca();

		$this->load->view('marcamodelo',$data);
		//$modelos = $this->marca->obtenermodelo(1);

	}
	public function editarautos(){
		$this->load->helper('form');
		$this->load->view('shared/navbar');
		$data['autos']= $this->auto->listarautos();
$this->load->view('editar_autos',$data);

	}
	public function editar($id){
		$this->load->helper('file');
		$this->load->database();
		$data['autos']=$this->auto->listarautoswhere($id);
			$this->load->helper('form');
$this->load->view('shared/navbar');
$this->load->view('edicion_autos',$data);
echo $id;

	}
	public function autoeditado($id){
		$this->load->helper('form');
$this->load->database();
$this->auto->ediciondeauto($id);
redirect('/RegistroAuto/editar/'.$id, 'refresh');

	}
	public function verauto($id){
		$this->load->helper('file');
		$this->load->database();
$this->load->view('shared/navbar');
$data['auto']=$this->auto->listarautowhere($id);
$this->load->view('ver_auto',$data);


	}
	public function eliminarauto($id){
		$this->auto->eliminarauto($id);
redirect('/RegistroAuto/editarautos', 'refresh');


	}
	public function registrarauto()
	{

	//$country_id = $this->input->post('marcas_id');

$this->auto->registrarauto();

	}


}
