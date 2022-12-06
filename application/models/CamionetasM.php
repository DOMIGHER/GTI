<?php 
class CamionetasM extends CI_Model{

    function getcamionetaadmin(){
        $query = $this->db->get('camioneta');
        return $query->result();
    } 
  
    function detallecamionetaadmin($idcamioneta){
        $this->db->where('idcamioneta',$idcamioneta);
        $query = $this->db->get('camioneta');
        return $query->result();


    }

    function deletecamionetaadmin($idcamioneta){
        $this->db->where('idcamioneta',$idcamioneta);
        $this->db->delete('camioneta');
        return TRUE;

    }
    
}
?>