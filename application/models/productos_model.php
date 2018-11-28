<?php
class Productos_model extends CI_Model { 
   public function __construct() {
     $this->load->database();

      parent::__construct();

   }

      public function obtener_todos(){
      $this->load->database('CSA');	
      $this->db->select('ID, NOMBRE, PRECIO');
      $this->db->from('PRODUCTOS');
      $this->db->order_by('ID', 'asc');
      $consulta = $this->db->get();
     
      return $consulta->result_array();
   }

   
    
    public function delete_news($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('PRODUCTOS');
    }

     public function detalle($id)
    {
        if ($id === 0)
        {
            $query = $this->db->get('PRODUCTOS');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('PRODUCTOS', array('ID' => $id));
        return $query->row_array();
    }


    public function add()
    {
    $data = array(
        'NOMBRE'   => $this->input->post('NOMBRE'),
        'PRECIO'   => $this->input->post('PRECIO'),
        'ID'   => $this->input->post('ID')


    );
    return $this->db->insert('PRODUCTOS', $data);
}


    function update($id, $nombre,$precio)
    {
        $this->db->where('ID', $id);
        $this->db->set('NOMBRE', $nombre);
        $this->db->set('PRECIO', $precio);
        return $this->db->update('PRODUCTOS');
    }

}