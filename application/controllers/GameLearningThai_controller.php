<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GameLearningThai_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
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
}