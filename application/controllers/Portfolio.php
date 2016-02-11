<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Portfolio extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        //$this->data['pagebody'] = '_portfolio';	// this is the view we want shown
        // build the list of authors, to pass on to our view
//		$source = $this->quotes->all();
//		$authors = array();
//		foreach ($source as $record)
//		{
//			$authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
//		}
//		$this->data['authors'] = $authors;

        $this->data['pagebody'] = '_portfolio';
        $this->readExcel();
        //$this->load->library('csvreader');
        //$result = $this->csvreader->parse_file('./asset/Transactions.csv');//path to csv file             
        //$data['csvData'] =  $result;
        //$csvData = array();     
//                $DateTime= array_column($result, 'DateTime');
//                $this->data = array_merge($this->data, $source);
//                $this->data['DateTime'] = $DateTime;
//                $this->data['Player'] = $result[''];
//                $this->data['Series'] = $result['Series'];
//                $this->data['Trans'] = $result['Trans'];
        $this->render();
    }

    function readExcel() {
        $this->load->library('csvreader');
        $result = $this->csvreader->parse_file('./asset/Transactions.csv'); //path to csv file

        $data['csvData'] = $result;
        $this->load->view('TestView', $data);
        
    }

    

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */