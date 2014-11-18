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
        $this->load->helper('url');
        echo "</br>";
        echo (site_url('test', 'page'));
        echo "</br>";
        echo(css_url('style'));
    }

    public function accueil(){
        $data=array();
        $data['nom']='SWAG';
        $data['prenom']='Maurice';
        $this->load->view('vaccueil',$data);
    }


} 