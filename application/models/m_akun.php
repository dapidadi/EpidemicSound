  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 

class m_akun extends CI_Model{
      function regis($table, $data){
            $daftar = $this->db->insert($table,$data);
            if ($daftar) {
                  return true;
            } else {
                  return false;
            }
      }

/*
      public function editpass($table){
            $this->db->where('username', $username);
            $update = $this->db->update($table);

            if ($update){
                  return TRUE;
            }else{
                  return FALSE;
            };
      }
*/
      function update($table,$data,$id_user) {
            $query = $this->db->update("users",$data,$id_user);
             if ($query){
                  return TRUE;
            }else{
                  return FALSE;
            };
      }

      function edit_data($where,$table){
            return $this->db->get_where($table,$where);
      }


      function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
      }

}

?>