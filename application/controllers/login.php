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

	function __construct()
	{
		parent::__construct();
                $this->data['customCSS'] = '/asset/style/login.css';
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'login';	// this is the view we want shown
		$this->session->set_userdata('username','Donald');
                $this->data['username'] = $this->session->userdata('username');

		$this->render();
	}
        
        function login()
        {
                $this->data['pagebody'] = 'homepage';
                $this->session->set_userdata('username',  $this->input->post('username'));
                
                $this->render();
        }



}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
