<?php

class Collections extends main_Model {

    function __construct() {
        parent::__construct('collections', 'Token', 'Player', 'Piece', 'Datetime');
    }

    //get players card collection
    function get_cards($current_player) {
        $collection = $this->db->get_where('collections', array('Player' => $current_player))->result_array();
        return $collection;

        $dataArray = array("token" => "hi");
        // $collectionstring = $this->collections->php_post($dataArray, "/data/certificates");
        // $collections= explode("\n", $collectionstring);
        // $url = "http://ken-botcards.azurewebsites.net/data/certificates";
        //
        // $res = [];
        // if (($handle = fopen ( $url, "r" )) !== FALSE) {
        //     $keys = fgetcsv ( $handle, 4096, "," );
        //     while ( ($data = fgetcsv ( $handle, 4096, "," )) !== FALSE ) {
        //         $res[] = array_combine($keys, $data);
        //     }
        //     fclose($handle);
        // }
        // var_dump($res);
        //
        // print_r($res); die();
        // $collection = [];
        // foreach ($collections as $card)
        // {
        //     if ($card['player'] == $current_player && $card['broker'] == 'B06')
        //     {
        //         array_push($collection, $card['piece']);
        //     }
        // }
    }

    function php_post($data, $url_route)
    {
        $url = "http://ken-botcards.azurewebsites.net".$url_route;
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        // if ($result === FALSE) { /* Handle error */ }

//        print_r($result);
//        die();
        return $result;
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
                $card_array["card".$card] += 1;
            }
            return $card_array;
        }

    }

}
