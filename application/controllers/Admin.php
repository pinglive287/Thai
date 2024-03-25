<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url', 'text','My_Helper'));
        if($this->session->set_userdata('is_Session')){
            redirect(site_url('Auth'));
            
        }
        checkAdmin($this->session->userdata('LogRole'));
    }

    public function index()
    {

        $this->data['UserData'] = $this->Admin_model->getUserData()->result();

        $this->data['view_file'] = 'Admin/Dashbord';
        $this->load->view(THEMES, $this->data);
    }

    public function Logout()
    {
        if ($this->session->userdata('is_Session')) {
            $this->session->unset_userdata('is_Session');
            $this->session->unset_userdata('LogID');
            $this->session->unset_userdata('LogName');
            $this->session->unset_userdata('LogRole');
        }
        redirect('Auth');
    }


    function getProduct()
    {
        $UserID = $this->input->post('UserID');
        if($UserID == null){
         $results = $this->Admin_model->get_data()->result();
        }else{
         $results = $this->Admin_model->getProductByID($UserID)->result();
        }
        
        $data = [];
        foreach ($results as $row) {
            $rowData = $row;
            if ($row->Image1 !== null) {
                $fileData = $row->Image1;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image1 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image2 !== null) {
                $fileData = $row->Image2;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image2 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image3 !== null) {
                $fileData = $row->Image3;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image3 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image4 !== null) {
                $fileData = $row->Image4;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image4 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image5 !== null) {
                $fileData = $row->Image5;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image5 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            $data[] = $rowData;
        }
        echo json_encode($data);

        
    }

    

    
}
?>