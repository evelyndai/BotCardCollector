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

    function get_trans($current_player) {
        $dataArray = array("token" => "hi");
        $CsvString = $this->botserver->php_post($dataArray, "/data/transactions");
        $Data = str_getcsv($CsvString, "\n"); //parse the rows
        $rows = [];
        $transaction = [];

        foreach($Data as $Row)
        {
            $rows[] = str_getcsv($Row, ",");
        }
        if (count($rows) > 1 )
        {
            foreach ($rows as $row)
            {
                if ($row[3] == strtolower($current_player) && $row[2] == "b06")
                {
                    $transaction[] = array("DateTime" => $row[1], "Player" => $row[3],
                            "Series" => $row[4],"Trans" => $row[5]);
                }
            }
        }

        return $transaction;
    }



}

// add an item to an order
//    function getTrans($player){
//        $query = $this->db->query('SELECT Player, DateTime, Series, Trans FROM transactions WHERE Player = "' . $player .'"');
//
//        return $query->result_array();
//    }
