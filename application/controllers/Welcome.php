<?php
/**
 * Feature 4: Elayne Boosler's quote page - shucks() method
 * Author: Yi(Evelyn) Dai 
 * Date: Jan 28, 2016
 * -----------------------------------
 */

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

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

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */