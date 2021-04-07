<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function register()
    {
        //aturan validasi setiap input
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password1]');

        //set eror code
        $this->form_validation->set_error_delimiters('<small id="emailHelp" class="form-text text-danger">', '</small>');
        
        //menjalankan validasi form
        if ($this->form_validation->run() == FALSE)
                {
                        $data['title'] = 'CodeIgniter | Register';
                        $data['content'] = $this->load->view('blog/register', '', TRUE);
                        $this->load->view('template/blog', $data, FALSE);
                }
                else
                {
                        //ketika berhasil panggil function register_user di Auth_model.php 
                        if ($this->Auth_model->register_user()) {
                            //beri notifikasi sukses
                            $this->session->set_flashdata('notifikasi','Registrasi berhasil!');
                            //arahkan ke form register
                            redirect('auth/register','refresh');
                        }
                }
        
        
    }
}

?>