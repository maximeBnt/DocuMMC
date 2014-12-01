<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 20/11/2014
 * Time: 09:14
 */

class CUtilisateur extends CI_Controller{

    public function add(){
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('v_utilisateur _add');
        }
        else
        {
            $this->submit_add($_POST["username"]);
        }
    }

    public function submit_add($name){
        $user = new CUtilisateur();
        $user->setNom($name);
        $this->doctrine->em->persist($user);
        $this->doctrine->em->flush();
    }

    public function all(){
        $query = $this->doctrine->em->createQuery("SELECT u FROM Utilisateur u");
        $users = $query->getResult();
        $this->load->view('v_utilisateurs',array('Utilisateur'=>$users));
        echo 'zizi';
    }

}
