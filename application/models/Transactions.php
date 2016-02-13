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

    // add an item to an order
    function getTrans($player){
        $query = $this->db->query('SELECT Player, DateTime, Series, Trans FROM transactions WHERE Player =' . $player);
       // $this->db->select("Player, DateTime, Series, Trans");
       // $this->db->from("botcards");
        return $query->result_array();
    }


}
