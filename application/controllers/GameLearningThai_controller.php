<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GameLearningThai_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('GameLearningThai_model');
        $this->load->helper(array('form', 'url', 'text'));
    }

    public function index()
    {

        $this->data['view_file'] = 'Game_LearningThai/gamepage';
        $this->load->view(THEMES, $this->data);
    }

    public function Level()
    {

        $this->data['view_file'] = 'Game_LearningThai/level-thaigame';
        $this->load->view(THEMES, $this->data);
    }

    public function study()
    {
        $No = $this->input->post('No');

        $Search = $this->GameLearningThai_model->get_Search($No)->result();
        foreach ($Search as $row) {
            $this->data['StudentNo'] = $row->StudentNo;
            $this->data['FullName'] = $row->FullName;
            $this->data['ClassYear'] = $row->ClassYear;
        }

        $this->data['Student'] = $this->GameLearningThai_model->get_student()->result();

        $this->data['view_file'] = 'Game_LearningThai/enter-studyname';
        $this->load->view(THEMES, $this->data);
    }

    public function rules($ID)
    {
        $this->data['ID'] = $ID;
        $this->data['view_file'] = 'Game_LearningThai/rules-thaigame';
        $this->load->view(THEMES, $this->data);
    }
    
    public function Thaigame($ID)
    {
        $this->data['Level'] = $ID;
        $this->data['view_file'] = 'Game_LearningThai/thaigame';
        $this->load->view(THEMES, $this->data);
    }

    public function Score_summary()
    {
        
        $this->data['view_file'] = 'Game_LearningThai/score-summary';
        $this->load->view(THEMES, $this->data);
    }

    public function uploadfile()
    {
        $User_id = $this->session->userdata('LogUserID');
        $this->data["Book"] = $this->UploadEbooks_model->get_Book($User_id)->result();
        foreach($this->data["Book"] as $row){
            $ID = $row->ID;
        }
        $this->data["Bookid_file"] = $ID;
        $this->data["NameBook"] = $this->UploadEbooks_model->get_NameBook()->result();
        $this->data["Quiz"] = $this->UploadEbooks_model->get_Quiz($ID)->result();
        $this->data["EditQuiz"] = $this->UploadEbooks_model->get_EditQuiz($ID)->result();

        $this->data['view_file'] = 'uploadFile';
        $this->load->view(THEMES, $this->data);
    }
}