<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_controller extends CI_Controller {

	function _construct(){
		parent::_construct();
		$this->load->helper('url');
		$this->load->model('productos_model');


	}

	public function index()
	{   
		$this->load->view('header');
		$this->load->view('view_inicio');
		$this->load->view('crear_ucc');
		$this->load->view('menu_lateral');
		$this->load->view('footer');
		
	}

	public function agregarproducto()
	{
		$this->load->view('view_productos');
	}

	public function moduloproducto()
	{   


		$this->load->model('productos_model');
		$data['productos'] = $this->productos_model->obtener_todos();
		$this->load->view('view_moduloproducto', $data);


		
	}
	 public function editar()
    {
        $id = $this->uri->segment(3);
     	$this->load->helper('url');
   	    $this->load->model('productos_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edita un producto';        
        $data['item'] = $this->productos_model->get_news_by_id($id);
        
        $this->form_validation->set_rules('NOMBRE', 'NOMBRE', 'required');
        $this->form_validation->set_rules('PRECIO', 'PRECIO', 'required');
 	

        if ($this->form_validation->run() === FALSE)
        {
    
            $this->load->view('view_editarproducto', $data);
         
 
        }
        else
        {
            $this->productos_model->obtener_todos();
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php');
        }
	}

	    public function eliminar($id){
	    	$this->load->model('productos_model');
           $id = $this->uri->segment(3);
     	  $this->load->helper('url');
          $item=$this->productos_model->delete_news($id);
          
          return('eliminado');
      

}
}