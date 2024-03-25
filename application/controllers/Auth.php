<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Auth_model');
        $this->load->helper(array('form', 'url', 'text'));
    }

    public function index()
    {
        $this->data['view_file'] = 'Auth/signin';
        $this->load->view(THEMES, $this->data);
    }

    public function Register()
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
  
        $data = array(
            'Firstname' => $firstname,
            'Lastname' => $lastname,
            'Username' => $username,
            'Password' => $password,
            'Role' => 'user',
            'CreatedAt' => date("Y-m-d H:i:s"),
            'UpdatedAt' => date("Y-m-d H:i:s")
        );

        $result = $this->Auth_model->Register($data);
        if ($result == TRUE) {
            echo 'Success';
        } else {
            echo 'Error';
        }
    }

    public function Login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $checkUser = $this->Auth_model->checkUser($username, $password);
        if ($checkUser == false) {
            echo '1';
        } else {
            foreach ($checkUser->result() as $row) {
                $this->session->set_userdata('LogID', $row->ID);
                $this->session->set_userdata('LogName', $row->Firstname.' '.$row->Lastname);
                $this->session->set_userdata('LogRole', $row->Role);
                $this->session->set_userdata('is_Session', true);
                $this->session->set_flashdata('msg_success', 'Login Successful!');
                if($row->Role == 'user'){
                    echo 'user';
                }else if($row->Role == 'admin'){
                    echo 'admin';
                }
            } 
        }
    }

}
