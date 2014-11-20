<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 20/11/2014
 * Time: 11:42
 */

class JavaTest extends \CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->library('jsUtils');
    }

    function index(){
        $this->jsutils->getAndBindTo("#div","click","javaTest/ajaxGet","#response");
        $this->jsutils->external();
        $this->jsutils->compile();
        $this->load->view('test');
    }

    function ajaxGet(){
        echo "Exemple de get sur click";
    }

} 