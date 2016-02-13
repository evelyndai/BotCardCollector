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
        $loggedUser = "Donald";
        $transaction = $this->Transactions->getTrans($loggedUser);
        $trans = array();

            foreach ($transaction as $record) {
                $trans[] = $record;
            }

        // and pass these on to the view
        $this->data['transactions'] = $trans;
        //$this->data['debug'] = print_r($query->result_array(), true); 
        
        $card_count = $this->collections->get_cards($loggedUser);
	$card_counts = $this->collections->sort_cards($card_count);
        $this->data['cards'] = $card_counts;
        $this->render();
    }
    
    function getPort(){
        $this->data['pagebody'] = 'portfolio'; // this is the view we want shown
        $player = $this->uri->segment(2);
        $transaction = $this->Transactions->getTrans($player);
        $trans = array();

            foreach ($transaction as $record) {
                $trans[] = $record;
            }

        $card_count = $this->collections->get_cards($player);
	$card_counts = $this->collections->sort_cards($card_count);
        
        
        // and pass these on to the view
        $this->data['transactions'] = $trans;
        $this->data['cards'] = $card_counts;
        $this->render();
    }

}

/* End of file Portfolio.php */
/* Location: application/controllers/Portfolio.php */