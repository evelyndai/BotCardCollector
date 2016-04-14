<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Registration extends Application {

    function __construct() {
        parent::__construct();
        $this->data['customCSS'] = '/asset/style/login.css';
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'registration'; // this is the view we want shown


        $this->render();
    }

    function register(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->user->checkUser($username);
        if($result[0] != null){
            
        }else{
            $data = array(
                'player' => $username,
                'Peanuts' => '100',
                'Password' => $password,
                'Role' => 'user',
                'Avatar' => '',
            );
            $this->user->insertUser($data);
        }
        redirect('/', 'refresh');
//        if($result[0] == null){
//            redirect('/', 'refresh');
//        }else{
//            $this->session->set_userdata('username', $result[0]->player);
//            $this->data['username'] = $result[0]->player;
//            redirect('/', 'refresh');
//        }
        
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
