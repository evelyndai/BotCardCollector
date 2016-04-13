<?php

class Collections extends main_Model {

    function __construct() {
        parent::__construct('collections', 'Token', 'Player', 'Piece', 'Datetime');
    }

    //get players card collection
    function get_cards($current_player) {
        $collection = $this->db->get_where('collections', array('Player' => $current_player))->result_array();
        return $collection;
    }

    //Sort cards based on type, return array of card type counts
    function sort_cards($collection) {
        //get list of all card types
        $card_list = $this->db->query('SELECT DISTINCT(Piece) FROM botcards.collections')->result_array();
        $card_array = [];

        //build array of cards with counts set to 0
        foreach ($card_list as $card)
        {
            $card_array["card".$card['Piece']] = 0;
        }

        //add 1 to count for each card of a given type owned by the player
        if(!empty($collection))
        {
            foreach ($collection as $card)
            {
                $card_array["card".$card['Piece']] += 1;
            }
            return $card_array;
        }

    }

}
