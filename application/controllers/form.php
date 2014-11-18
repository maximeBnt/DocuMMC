<?php
class Form extends CI_Controller {

    function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Nom d\'utilisateur', 'trim|required|min_length[5]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|matches[passconf]|md5');
        $this->form_validation->set_rules('passconf', 'Confirmation', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }

    public function username_check($str)
    {
        if ($str == 'test')
        {
            $this->form_validation->set_message('username_check', 'Le champ %s ne peut pas être égal à "test"');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

} 