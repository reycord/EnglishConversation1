<?php
class Registration extends My_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        if (isset($_POST['register'])){
            //Set validation field data
            $this->form_validation->set_rules('user_name', 'User Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('retype_password', 'Retype Password', 'required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('birth_date', 'Birth Date', 'required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|min_length[10]|max_length[11]');
            $this->form_validation->set_rules('address', 'Address', 'required');
            //Add data into table M_USER
            if ($this->form_validation->run() == TRUE){
                $data = array(
                    'user_name' => $_POST['user_name'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'birth_date' => $_POST['birth_date'],
                    'gender' => $_POST['gender'],
                    'phone_number' => $_POST['phone_number'],
                    'address' => $_POST['address'],
                    'admin_flag' => '0',
                    'del_fg' => '0'
                );

                $this->db->insert('m_user', $data);

                //Redirect to Login Page
                redirect('Authenticate/index', 'refresh');
            }
        }
        $this->load->view('Registration/index');
    }
}