<?php


/**
 * Portfolio page. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Portfolio.php
 *
 * ------------------------------------------------------------------------
 */
class Portfolio extends Application {

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
		

		$this->render();
	}
        
        
       

}

/* End of file Portfolio.php */
/* Location: application/controllers/Portfolio.php */