<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function _construct(){
		parent::_construct();
		$this->load->helper('url','form','session');
		//$this->load->model('productos_model');


	}

	public function index()
	{   
		//$this->load->view('header');
		//$this->load->view('view_inicio');
		//$this->load->view('crear_ucc');
		//$this->load->view('menu_lateral');
		//$this->load->view('footer');


        $Rut= $this->input->post('rut');
        $Contraseña= $this->input->post('contraseña');


        $this->load->model('usuarios_model');
        $fila= $this->usuarios_model->getUser($Rut);
        var_dump($fila);
       	if ($fila != null) {
       		if ($fila->CLAVE ==$Contraseña) {
       			$data = array(
			     'rut' => $Rut,
			      'id' => $fila->RUT,
			       'login' => true
              );
       			$this->session->set_userdata($data);
       		
       		}else {
       			header("Location:" .base_url());

       		}
       		
       	}else {

       			header("Location:" .base_url());

       	}

      }

      public function logout (){


      	$this->session->sess_destroy();

      	header("Location:" .base_url());
      }

	   
}