<?php
class Registration extends My_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        if (isset($_POST['register'])){
            //Add data into table M_USER
            if ($this->form_validation->run() == TRUE){
                $data = array(
                    'user_name' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'admin_flag' => '0',
                    'del_fg' => '0'
                );

                $this->db->insert('m_user', $data);

                //Redirect to Login Page
                redirect('authenticate', 'refresh');
            }
        }
        $this->load->view('registration');
    }
}