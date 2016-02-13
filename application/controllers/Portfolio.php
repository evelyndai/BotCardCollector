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

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'portfolio'; // this is the view we want shown
        //$name = 'Donald';
//        $transaction = $this->transactions->some('Player', $name);
       // $query = $this->db->query('SELECT Player, DateTime, Series, Trans FROM transactions WHERE Player = "Donald"');
        $transaction = $this->Transactions->getTrans("'George'");
        $trans = array();

            foreach ($transaction as $record) {
                $trans[] = $record;
            }

        // and pass these on to the view
        $this->data['transactions'] = $trans;
        //$this->data['debug'] = print_r($query->result_array(), true);
        
        $this->render();
    }

}

/* End of file Portfolio.php */
/* Location: application/controllers/Portfolio.php */