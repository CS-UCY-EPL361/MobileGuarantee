<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class infoCtrl extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->model('info_model');
     }
    public function index() {
        $this->load->view('acountInfo');
    }
    
     public function information(){
        
//        $this->load->library('session');
//        $connect = mysqli_connect("localhost", "root", "", "micropro");
//        $output = array();
//        $data=$this->session->userdata('username');
//
//         $query = "SELECT username, email, telNumber, address FROM user WHERE username='$data' 
//         UNION SELECT username, email, telNumber, address FROM corporation WHERE username='$data'";
//        $result = mysqli_query($connect, $query);
//        if (mysqli_num_rows($result) > 0) {
//            while ($row = mysqli_fetch_array($result)) {
//                $output[] = $row;
//            }
//            echo json_encode($output);
//        }
         
         $output=$this->info_model->get_user_info();
        echo json_encode($output);
    }
}