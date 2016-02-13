<?php

class Collections extends main_Model {

    function __construct() {
        parent::__construct('collections', 'Token', 'Player', 'Piece', 'Datetime');
    }

    function get_cards()
    {
        $current_player = 'Donald';
        $collection = $this->db->get_where('collections', array('Player'=>$current_player))->result_array();
        return $collection;
    }

    //Sort cards based on type, return array of card type counts
    function sort_cards($collection)
	{
        $card_array = array("elevena0" => 0, "elevena1" => 0, "elevena2" => 0,
    	 					"elevenb0" => 0, "elevenb1" => 0, "elevenb2" => 0,
    						"elevenc0" => 0, "elevenc1" => 0, "elevenc2" => 0);
		foreach ($collection as $card)
		{
			switch ($card['Piece'])
			{
				case "11a-0":
					$card_array["elevena0"] += 1;
					break;
				case "11a-1":
					$card_array["elevena1"] += 1;
					break;
				case "11a-2":
					$card_array["elevena2"] += 1;
					break;
				case "11b-0":
					$card_array["elevenb0"] += 1;
					break;
				case "11b-1":
					$card_array["elevenb1"] += 1;
					break;
				case "11b-2":
					$card_array["elevenb2"] += 1;
					break;
				case "11c-0":
					$card_array["elevenc0"] += 1;
					break;
				case "11c-1":
					$card_array["elevenc1"] += 1;
					break;
				case "11c-2":
					$card_array["elevenc2"] += 1;
					break;
				// case "13-0":
				// 	break;
				// case "13-1":
				// 	break;
				// case "13-2":
				// 	break;
				// case "26-0":
				// 	break;
				// case "26-1":
				// 	break;
				// case "26-2":
				// 	break;
			}
		}
	return $card_array;
	}
}
