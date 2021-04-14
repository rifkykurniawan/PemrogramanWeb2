<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        //cek session setiap kali mengakses halaman member
        if (!$this->session->userdata('email')) {
            redirect('auth/login','refresh');
            
        }
    }
    

    public function index()
    {
        echo "Selamat Datang ". $this->session->userdata('email');
        echo "<br>";
        echo anchor('auth/logout', 'Log Out');
        echo "<br>";
    }

}

/* End of file Controllername.php */
