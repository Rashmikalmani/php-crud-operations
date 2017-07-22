<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class File extends CI_Controller {

    function __construct()

    {

        parent::__construct();

        $this->load->database();

        $this->load->model("user");

   

    }

    public function index()

    {

       $data['ResAre']=$this->user->loginvalidate();

          

         

            $this->load->view("login_page");


          


        

    }

}
?>