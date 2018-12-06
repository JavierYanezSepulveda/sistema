<?php
class Usuarios_model extends CI_Model { 
   public function __construct() {
     $this->load->database();
     $this->load->library('session');
      parent::__construct();

   }

      public function obtener_todos(){
      $this->load->database('CSA');	
      $this->db->select('*');
      $this->db->from('USUARIO');
      $this->db->join('PERFIL', 'PERFIL.ID_PERFIL = USUARIO.ID_PERFIL');
      $this->db->order_by('RUT', 'asc');
      $consulta = $this->db->get();
     
      return $consulta->result_array();
   }

 public function obtener_perfiles(){
      $this->load->database('SCA');
      $this->db->select('*');
      $this->db->from('PERFIL');
      $this->db->order_by('ROL', 'asc');
      $result = $this->db->get();
        // $query = $this->db->get('INSUMO');
      return  $result->result_array();
    }

    public function delete_news($id)
    {
        $this->db->where('RUT', $id);
        return $this->db->delete('USUARIO');
    }

     public function detalles($id)
    {
        if ($id === 0)
        {
            $query = $this->db->get('USUARIO');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('USUARIO', array('RUT' => $id));

        if ($query->num_rows() > 0 && $query->num_rows() == 1 && $query->num_rows() < 2 )
         {
        return $query->row_array();
         }
}

    public function add()
    {
     
  
    $data = array(
        'RUT'   => $this->input->post('RUT'),
        'NOMBRE'   => $this->input->post('NOMBRE'),
        'APELLIDOS'   => $this->input->post('APELLIDOS'),
        'CARGO'   => $this->input->post('CARGO'),
        'ID_PERFIL'   => $this->input->post('selectPerfil'),
        'CLAVE'   => $this->input->post('CLAVE')
    
    );
    return $this->db->insert('USUARIO', $data);
}


    function update($id, $nombre,$precio)
    {
        $this->db->where('ID_PRODUCTO', $id);
        $this->db->set('NOMBRE', $nombre);
        $this->db->set('PRECIO_V', $precio);
        return $this->db->update('USUARIO');

    }


    public function getUser($Rut)
    {
      $this->load->database('CSA');
       $query = $this->db->get_where('USUARIO', array('RUT' => $Rut)); 
     // $result =$this->db->query("SELECT * FROM USUARIO WHERE RUT = '".$Rut ."'LIMIT 1");
       if ($query->num_rows() > 0)
         {
        return $query->row();
         }
         else 
          return null; 
}


}