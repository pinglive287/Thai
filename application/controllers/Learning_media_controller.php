<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Learning_media_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'text'));
    }

    public function index()
    {

        $this->data['view_file'] = 'Learning/learning-media';
        $this->load->view(THEMES, $this->data);
    }

    public function media()
    {

        $this->data['view_file'] = 'Learning/media';
        $this->load->view(THEMES, $this->data);
    }

    public function suggestions()
    {

        $this->data['view_file'] = 'Learning/suggestions';
        $this->load->view(THEMES, $this->data);
    }

    public function explanation()
    {

        $this->data['view_file'] = 'Learning/explanation';
        $this->load->view(THEMES, $this->data);
    }

    public function Choose()
    {

        $this->data['view_file'] = 'Learning/choose';
        $this->load->view(THEMES, $this->data);
    }
}
