<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function register_user()
    {
        //fucntion ini akan menginsertkan data user ke DB
        //siapkan data yang akan di masukan ke db
        $data = array(
                        'email'     => $this->input->post('email', TRUE),
                        'password'  => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
                        'status'    => 'AKTIF' 
        );

        if ($this->db->insert('users',$data)) {
            return true;
        } else {
            return false;
        }
    }
}


?>