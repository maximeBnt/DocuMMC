<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 18/11/2014
 * Time: 15:42
 */

class test extends CI_Controller{
    public function index(){
        echo "it works";
    }

    public function accueil(){
        $data=array();
        $data['nom']='SWAG';
        $data['prenom']='Maurice';
        $this->load->view('vaccueil',$data);
    }


    public function testCollection(){
        $this->collection->add("1 chaîne");
        $this->collection->add("2 chaînes");
        foreach ($this->collection->getItems() as $value)
            echo($value."<br>");

        //$this->session->set_userdata('utilisateur', $user);

        //$aUser= $this->session->userdata('utilisateur');
        //echo($aUser->getNom());

    }


} 