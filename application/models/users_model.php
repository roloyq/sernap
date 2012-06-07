<?php
class Users_Model extends CI_Model{

    function username_check($username){
        /*$query = $this->db->query("SELECT * WHERE USUARIO==".$username);*/
        $this->db->where('usuario', $username);
        $query = $this->db->get('usuario');
        if($query->num_rows()>0){
            return false;
        }else{
            return true;
        }
    }

    function email_check($email){
        $this->db->where('email', $email);
        $query = $this->db->get('usuario');
        if($query->num_rows()>0){
            return false;
        }else{
            return true;
        }
    }

    function insert_user($name, $username, $email, $password, $activation_code){
        $data = array(
            'username'          =>  $username,
            'email'             =>  $email,
            'password'          =>  $password,
            'name'              =>  $name,
            'activation_code'   =>  $activation_code
        );
        return $this->db->insert('users',$data);
    }

    function confirm_registration($activation_code){
        $this->db->select('id');
        $this->db->where('activation_code', $activation_code);
        $query = $this->db->get('usuario');
        if($query->num_rows()>0){
            $data = array(
                'status'    => 1
            );
            $this->db->where('activation_code', $activation_code);
            return $this->db->update('users',$data);
        }else{
            return false;
        }
    }
    function login_rolo($email, $password)
    {
        //$this->db->where('email', $email);
        //$query = $this->db->get('usuario');
        $query = $this->db->query('SELECT * FROM usuario WHERE email="'.$email.'" AND password="'.$password.'"');
        if($query->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    function login_roy()
    {
       $email =  $this->email   = $_POST['a']; 
       $password = $this->password   = $_POST['roy']; 
         
        //$this->db->where('email', $email);
        //$query = $this->db->get('usuario');
        $query = $this->db->query('SELECT * FROM usuario WHERE email="'.$email.'" AND password="'.$password.'"');
        if($query->num_rows()>0){
            $this->Users->login();
        }else{
            $this->Users->login_rolo($email, $password);
        }
    }
}