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
        $data['title'] = 'Codeigniter | Dashboard';
        $data['user_email'] = $this->session->userdata('email');
        $this->load->view('template/dashboard', $data, FALSE);
        
    }

}

/* End of file Controllername.php */
