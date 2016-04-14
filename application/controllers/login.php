<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Login extends Application {

    function __construct() {
        parent::__construct();
        $this->data['customCSS'] = '/asset/style/login.css';
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'login'; // this is the view we want shown


        $this->render();
    }

    function login() {
        $this->data['pagebody'] = 'login';
        $username = $this->input->post('username');
        $result = $this->user->login($username, $this->input->post('password'));
        
        if($result[0] == null){
            redirect('/', 'refresh');
        }else{
            $this->session->set_userdata('username', $result[0]->player);
            $this->data['username'] = $result[0]->player;
            redirect('/', 'refresh');
        }
        
        
    }

    function logout() {
        $this->data['pagebody'] = 'login';
        $this->session->set_userdata('username', '');
        redirect('/', 'refresh');
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
