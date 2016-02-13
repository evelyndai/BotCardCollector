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
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'welcome_message';	// this is the view we want shown
		$this->session->set_userdata('username','mike');
                $this->data['username'] = $this->session->userdata('username');

		$this->render();
	}
        
        
       

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */