<?php
/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/BotAssembly.php
 *
 * ------------------------------------------------------------------------
 */
class BotAssembly extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'bot_assembly';	// this is the view we want shown


		$this->render();
	}




}
