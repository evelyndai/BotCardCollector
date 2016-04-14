<?php

/**
 * Portfolio page. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Portfolio.php
 * By Evelyn Dai
 * ------------------------------------------------------------------------
 */
class Portfolio extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index($user = null) {
        $this->data['pagebody'] = 'portfolio'; // this is the view we want shown

        if ($user == null) {
            $user = $this->session->userdata('username');
        }


        //Trading Activities
        $transaction = $this->Transactions->getTrans();
        $trans = array();

        foreach ($transaction as $record) {
            $trans[] = $record;
        }
        $this->data['transactions'] = $trans;


        //Holdings
        $card_count = $this->collections->get_cards($user);
        $card_counts = $this->collections->sort_cards($card_count);

        foreach ($card_counts as $key => $value) {
            $this->data[$key] = $value;
        }




        //Dropdown select player
        $players = $this->player->getPlayer();
        $peanuts = $this->player->getPeanuts($user);
        $p = array();
        foreach ($players as $player) {
            $p[$player['Player']] = $player['Player'];
        }
        //Parse selected player to the url and redirect it
        $js = 'id="players" onChange="select_player(this);"';
        $this->data['players'] = form_dropdown('players', $p, $user, $js);
        $this->data['peanuts'] = $peanuts;


        //Buy Button
       
        if (!is_null($this->input->post('buyCards'))) {
            $dataArray = array(
                "team" => "B06",
                "token" => "8accb54d65c8757c83fa568d168c5d48",
                "player" => 'Evelyn');
            $method = $this->botserver->php_post($dataArray, "/buy");
            $this->data['status'] = $method;
            $peanuts = $peanuts - 20;


            $elm = new SimpleXMLElement($method);
            foreach ($elm->xpath('//certificate') as $certificate) {
                echo $certificate->token;
            }
        }

        function putCollection($xml) {
            $elm = new SimpleXMLElement($xml);
            foreach ($elm->certificate->token as $token) {
                echo $token;
            }
        }

        //Pass these on to the view
        $this->render();
    }

}

/* End of file Portfolio.php */
/* Location: application/controllers/Portfolio.php */
