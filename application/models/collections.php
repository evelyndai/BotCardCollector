<?php

class Collections extends main_Model {

    function __construct() {
        parent::__construct('collections', 'Token', 'Player', 'Piece', 'Datetime');
    }

    //get players card collection
    function get_cards($current_player) {
        $dataArray = array("token" => "hi");
        $CsvString = $this->botserver->php_post($dataArray, "/data/certificates");
        $Data = str_getcsv($CsvString, "\n"); //parse the rows
        $rows = [];
        $collection = [];

        foreach($Data as $Row)
        {
            $rows[] = str_getcsv($Row, ",");
        }
        if (count($rows) > 1 )
        {
            foreach ($rows as $row)
            {
                if ($row[3] == $current_player && $row[2] == "b06")
                {
                    $collection[] = array("piece" => $row[1], "certificate" => $row[0]);
                }
            }
        }
        
        return $collection;
    }

    //Sort cards based on type, return array of card type counts
    function sort_cards($collection) {
        //get list of all card types
        $card_list = $this->db->query('SELECT Card FROM botcards.cards')->result_array();
        $card_array = [];

        //build array of cards with counts set to 0
        foreach ($card_list as $card)
        {
            $card_array["card".$card['Card']] = 0;
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
