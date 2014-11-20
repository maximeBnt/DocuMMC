<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 20/11/2014
 * Time: 09:14
 */

class Utilisateurs extends CI_Controller{

    public function all(){
        $query = $this->doctrine->em->createQuery("SELECT u FROM Utilisateur u");
        $users = $query->getResult();
        $this->load->view('v_utilisateurs',array('utilisateurs'=>$users));
    }

} 