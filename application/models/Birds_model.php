<?php
//birds_model.php (Array of Objects)
class Birds_model extends CI_Model{
  function get_bird($q){
    $this->db->select('*');
    $this->db->like('nome', $q);
    $query = $this->db->get('cliente');
    if($query->num_rows() > 0){
      foreach ($query->result() as $row){
        $new_row['label']=htmlentities(stripslashes($row->nome));
        $new_row['value']=htmlentities(stripslashes($row->cpf));
        $row_set[] = $new_row; //build an array
      }
      echo json_encode($row_set); //format the array into json data
    }
  }
}