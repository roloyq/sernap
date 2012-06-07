<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sernap extends CI_Controller{

    function __construct() {
        parent::__construct();
    }

    function index(){
        $data['main_content'] = 'index';
        $data['title'] = 'Sernap';
        $this->load->view('sernap',$data); 
    }
    function verificar_login(){
        $email = $_POST['login'];
        $password = $_POST['password'];
        //$this->db->where('email', $email,'password',$password);
        ///$query = $this->db->get('usuario');
        $query = $this->db->query('SELECT * FROM usuario WHERE email="'.$email.'" and password="'.$password.'"');
        if($query->num_rows()>0){
           // print_r($_POST);
            $row = $query->row_array(); 
            if($row['tipo'] == 1){
//                echo 'error1111111111111';
                $this->roy();
            }  elseif ($row['tipo'] == 2) {
                echo 'error222222222222222';
            }  elseif ($row['tipo'] == 3) {
                echo 'error33333333333333';
//                $this->rolo($email, $row['id']);
//                $segments = array('sernap', 'rolo');
//                http://example.com/index.php/news/local/123
//                redirect($segments);
            }  else{
                echo 'errorsssssssssssss';
            }
            
        }else{
            $this->index();
        }
    }
    
    
    
    function rolo($email,$id){
        $data['main_content'] = 'index';
        $data['title']  = 'Sernap';
        $data['email']  = $email;
        $data['id']     = $id;
        $this->load->view('template/templates',$data);  
    }
    
    function roy(){
        $data['main_content'] = 'index';
        $data['title'] = 'Sernap';
        $this->load->view('template/templates1',$data);  
    }
}
