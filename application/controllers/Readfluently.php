<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Readfluently extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'text'));
    }

    public function index()
    {

        $this->data['view_file'] = 'readfluently';
        $this->load->view(THEMES, $this->data);
    }
}