<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GameLearningThai_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'text'));
    }

    function conn()
    {
        return $this->load->database('pdo_db', TRUE);
    }

    public function get_student()
    {
        return $this->db->select("StudentNo, ISNULL(Titlename,'')+ ' ' + ISNULL(Firstname,'')+ ' ' + ISNULL(Lastname,'') AS FullName, ClassYear")
                        ->get('SPL_AC_Student');
    }

    public function get_Search($No)
    {
        return $this->db->select("StudentNo, ISNULL(Titlename,'')+ ' ' + ISNULL(Firstname,'')+ ' ' + ISNULL(Lastname,'') AS FullName, ClassYear")
                        ->where('StudentNo', $No)
                        ->get('SPL_AC_Student');
    }
}