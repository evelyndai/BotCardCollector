<?php

/**
 * Data access wrapper for "orders" table.
 *
 * @author jim
 */
class Player extends main_Model2 {

    // constructor
    function __construct() {
        parent::__construct('players', 'Player');
    }

    // add an item to an order
    function getPlayer() {
        $query = $this->db->query('SELECT Player FROM players');

        return $query->result_array();
    }
    function getPeanuts($player) {
        $query = $this->db->query("SELECT Peanuts FROM players where Player = '" . $player . "'")->result_array();
        $peanuts = $query[0]["Peanuts"];
        return $peanuts;
    }

    function updatePeanut($peanuts, $player) {
        $query = $this->db->query("UPDATE Players SET Peanuts =" . $peanuts . " WHERE Player = '" . $player . "'");
        return $query;
    }
    function updatePassword($password, $player) {
        $query = $this->db->query("UPDATE Players SET Password =" . $password . " WHERE Player = '" . $player . "'");
        return $query;
    }
    function deletePlayer($player) {
        $query = $this->db->query("DELETE FROM Players WHERE Player = '" . $player . "'");
        return $query;
    }
    function updateRole($role, $player) {
        $query = $this->db->query("UPDATE Players SET Role ='" . $role . "' WHERE Player = '" . $player . "'");
        return $query;
    }
    function checkAdmin($player) {
         $this->db->select('player, role');
        $this->db->from('players');
        $this->db->where('player', $player);
        $this->db->where('role', 'admin');
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    function updateAvatar($avatar, $player) {
        $query = $this->db->query("UPDATE Players SET Avatar ='" . $avatar . "' WHERE Player = '" . $player . "'");
        return $query;
    }
//    function initPeanut($peanuts){
//        $query = $this->db->query("UPDATE Players SET Peanuts =" . $peanuts);
//        return $query;
//    }

}
