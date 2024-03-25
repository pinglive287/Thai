<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    function checkUser($username, $password)
    {
        $query = $this->db->get_where('Member', array('Username' => $username));
        $result = $query->row();
        if (password_verify($password, $result->Password)) {
            return $query;
        }else {
            return false;
        }
    }

    function checkAdmin($username, $password)
    {
        $query = $this->db->get_where('Admin', array('Username' => $username));
        $result = $query->row();
        if (password_verify($password, $result->Password)) {
            return $query;
        }else {
            return false;
        }
    }

    function Register($data)
    {
        if ($this->db->insert('Member', $data)) {
            return true;
        } else {
            return false;
        }
    }

    
}