<?php

/**
 * Data access wrapper for "orders" table.
 *
 * @author jim
 */
class Transactions extends main_Model2 {

// constructor
    function __construct() {
        parent::__construct('transactions', 'DateTime', 'Player');
    }

    function getTrans() {

        $dataArray = array(
                "team" => "B06",
                "token" => "8d798b21a61aa0616d12050aedfdb64e",
                "player" => 'Evelyn');
            $method = $this->botserver->php_post($dataArray, "/data/certificates");
        echo $method;
        $rows = explode("\n", $method);

        $array = array();
        foreach ($rows as $row) {
            $array[] = str_getcsv($row);
        }
        return $array;
    }

}

// add an item to an order
//    function getTrans($player){
//        $query = $this->db->query('SELECT Player, DateTime, Series, Trans FROM transactions WHERE Player = "' . $player .'"');
//
//        return $query->result_array();
//    }
