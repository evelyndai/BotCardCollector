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
            if ($peanuts >= 20) {
//                $token = $this->botserver->get_token();
//                while ($token == null) {
//                    
//                }
//                echo $token;
                $dataArray = array(
                    "team" => "B06",
                    "token" => "d15298e2c0ee0599b81f4ae2ce05ad12",
                    "player" => $user);
                $method = $this->botserver->php_post($dataArray, "/buy");
                $this->data['status'] = $method;
                if ($this->getCardToken($method) != null) {
                    $this->updatePeanuts($peanuts, $user);
                }
            }
        } else {
            $this->data['status'] = "you don't have enough peanuts!";
        }



        //Pass these on to the view
        $this->render();
    }

    function getCardToken($xml) {
        $elm = new SimpleXMLElement($xml);
        $token = $elm->certificate->token;
        return $token;
    }

    function updatePeanuts($peanuts, $player) {
        $peanuts = $peanuts - 20;
        $this->player->updatePeanut($peanuts, $player);
        $this->data['peanuts'] = $peanuts;
    }

}

/* End of file Portfolio.php */
/* Location: application/controllers/Portfolio.php */
