<?php 

class CamionetasC extends CI_Controller{


    public function showcamionetasadmin(){
        $this->load->model('CamionetasM');
        $data['camioneta'] = $this->CamionetasM->getcamionetaadmin();

        $this->load->view('Administrador/camioneta/vercamionetaadminV',$data);
    }

    public function detallecamionetaadmin($idcamioneta){
        $this->load->model('CamionetasM');
        $data['camioneta'] = $this->CamionetasM->detallecamionetaadmin($idcamioneta);

        $this->load->view('Administrador/camioneta/detallescamionetaadminV',$data); 

    }

    public function borrarcamionetaadmin($idcamioneta){
        $this->load->model('CamionetasM');
        $data['camioneta'] = $this->CamionetasM->deletecamionetaadmin($idcamioneta);

        if($this->CamionetasM->deletecamionetaadmin($idcamioneta)){
            redirect(base_url('index.php/CamionetasC/showcamionetasadmin'),'refresh');
        }

    }

    public function insertcamionetasadmin(){

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('modelo', 'modelo', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Administrador/camioneta/insertcamionetaadminV');

        } else {
            $this->AdmCamC->insertC();
            redirect(base_url('index.php/AdmCam/show'), 'refresh');
        }
    }
    

}
?>