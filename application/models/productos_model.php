<?php
class Productos_model extends CI_Model { 
   public function __construct() {
     $this->load->database();

      parent::__construct();

   }

      public function obtener_todos(){
      $this->load->database('CSA');	
      $this->db->select('*');
      $this->db->from('PRODUCTO');
      $this->db->join('INSUMO', 'INSUMO.ID_INSUMO = PRODUCTO.ID_INSUMO');
      $this->db->join('SUCURSAL', 'SUCURSAL.ID_SUCURSAL = PRODUCTO.ID_SUCURSAL');
      $this->db->order_by('ID_PRODUCTO', 'asc');
      $consulta = $this->db->get();
     
      return $consulta->result_array();
   }


    public function delete_news($id)
    {
        $this->db->where('ID_PRODUCTO', $id);
        return $this->db->delete('PRODUCTO');
    }

     public function detalles($id)
    {
        if ($id === 0)
        {
            $query = $this->db->get('PRODUCTO');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('PRODUCTO', array('ID_PRODUCTO' => $id));

        if ($query->num_rows() > 0 && $query->num_rows() == 1 && $query->num_rows() < 2 )
         {
          
        return $query->row_array();
         }
}

    public function add()
    {
     
  
    $data = array(
        'NOMBRE'   => $this->input->post('NOMBRE'),
        'PRECIO_V'   => $this->input->post('PRECIO_V'),
        'ID_INSUMO'   => $this->input->post('selectInsumo'),
        'ID_SUCURSAL'   => $this->input->post('selectSucursal'),
        'ESTADO'   => $this->input->post('selectEstado')
    


    );
    return $this->db->insert('PRODUCTO', $data);
}

 public function obtener_sucursal(){
      $this->load->database('SCA');
      $this->db->select('*');
      $this->db->from('SUCURSAL');
      $this->db->order_by('NOMBRE_S', 'asc');
      $result = $this->db->get();
        // $query = $this->db->get('INSUMO');
      return  $result->result_array();
    }
 public function obtener_insumo(){
      $this->load->database('SCA');
      $this->db->select('*');
      $this->db->from('INSUMO');
      $this->db->order_by('NOMBRE_I', 'asc');
      $result = $this->db->get();
        // $query = $this->db->get('INSUMO');
      return  $result->result_array();
    }



    function update($id, $nombre,$precio)
    {
        $this->db->where('ID_PRODUCTO', $id);
        $this->db->set('NOMBRE', $nombre);
        $this->db->set('PRECIO_V', $precio);
         $this->db->set('ESTADO', $estado);
        return $this->db->update('PRODUCTO');
    }

}