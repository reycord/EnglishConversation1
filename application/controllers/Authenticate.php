<?php
class Authenticate extends My_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        if (isset($_POST['signin'])){
            //Set validation field data
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

            if ($this->form_validation->run() == TRUE){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $del_fg = '0';

                //Check user in database
                $this->db->select('user_name, email, admin_flag');
                $this->db->from("m_user");
                $this->db->where(array("email" => $email, "password" => $password, "del_fg" => $del_fg));

                $query = $this->db->get();

                $user = $query->row();

                $count = $query->result();
                //If user exists
                if (count($count) > 0){
                    //Set session variables
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['user_name'] = $user->user_name;
                    $_SESSION['admin_flag'] = $user->admin_flag;
                    
                    $this->session->set_flashdata('success','');
                    //Redirect to Home Page
                    redirect('index', 'refresh');
                }
                else{
                    $_SESSION['user_logged'] = FALSE;
                    $this->session->set_flashdata('error', 'No such account exists in database!');
                }
            }
        }
        $this->load->view('Authenticate/index');
    }
}