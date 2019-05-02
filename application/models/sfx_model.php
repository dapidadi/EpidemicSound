<?php defined('BASEPATH') OR exit('No direct script access allowed');

class sfx_model extends CI_Model
{
    function tampil_data(){
         $query = $this->db->select("*")
                 ->from('dbnya')
                 ->get();
        return $query->result();
    }
}
?> 
