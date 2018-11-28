<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_controller extends CI_Controller {

	function _construct(){
		parent::_construct();
		$this->load->helper('url','form');
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

	

	public function moduloproducto()
	{   


		$this->load->model('productos_model');
		$data['productos'] = $this->productos_model->obtener_todos();
		$this->load->view('view_moduloproducto', $data);


		
	}
	

       


		//funciona
	    public function eliminar($id){
	    	$this->load->model('productos_model');
           $id = $this->uri->segment(3);
     	  $this->load->helper('url');
          $item=$this->productos_model->delete_news($id);
          
          return('eliminado');
      

}

public function detalle(){
	    	$this->load->model('productos_model');
           $id = $this->uri->segment(3);
     	  $this->load->helper('url');
     	  $data['item']=$this->productos_model->detalle($id);
         $this->load->view('view_detalle', $data);
      

}

public function add()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('NOMBRE', 'NOMBRE', 'required');
    $this->form_validation->set_rules('PRECIO', 'PRECIO', 'required');
    $this->form_validation->set_rules('ID', 'ID', 'required');
    if ($this->form_validation->run() === FALSE)
    {
        
        $this->load->view('add');   

    }
    else
    {	
    	 $this->load->model('productos_model');
        $this->productos_model->add();
        $data['productos'] = $this->productos_model->obtener_todos();
		$this->load->view('view_moduloproducto', $data);

    
    }
}


 public function edit()
    {
     		
            $this->load->helper('form');
            $this->load->model('productos_model');
            // Obtenemos el id de la editorial a editar
            $id = $this->input->get('ID');
            $data['item']  = $this->productos_model->detalle($id);
            $nombre = $this->input->post('NOMBRE');
            $data['NOMBRE'] = $nombre;

            $precio = $this->input->post('PRECIO');
            $data['PRECIO'] = $precio;
     
     			
                $this->load->view('view_editarproducto', $data);
         
                $this->load->library('form_validation');
                $this->form_validation->set_rules('NOMBRE', 'Nombre', 'required');
                $this->form_validation->set_rules('PRECIO', 'Precio', 'required');
                if ($this->form_validation->run() === FALSE)
                {
                
                 $this->load->view('view_editarproducto');
              

                }
                else
                {
                    $id = $this->input->post('ID');
                    $this->productos_model->update($id, $nombre,$precio);
		            $this->load->view('view_sucess');
                }
            }
    
}