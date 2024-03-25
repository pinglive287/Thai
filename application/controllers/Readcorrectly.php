<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Readcorrectly extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'text'));
    }

    public function index()
    {

        $this->data['view_file'] = 'readcorrect';
        $this->load->view(THEMES, $this->data);
    }

    public function Exam($ID)
    {
        $this->data['ID'] = $ID;

        $this->data['view_file'] = 'exam';
        $this->load->view(THEMES, $this->data);
    }
}