<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GameLearningThai_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'text'));
    }

    public function index()
    {

        $this->data['view_file'] = 'Game_LearningThai/gamepage';
        $this->load->view(THEMES, $this->data);
    }

    public function Thaigame($ID)
    {
        $this->data['Level'] = $ID;
        $this->data['view_file'] = 'Game_LearningThai/thaigame';
        $this->load->view(THEMES, $this->data);
    }
}