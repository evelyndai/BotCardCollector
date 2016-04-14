<?php

class Gamestatus extends main_Model{

  //Setting variables
  protected $series;
  protected $collection;
  protected $players;

  //GameStatus Constructor
  function _construct(){
    parent::_construct('collections', 'series', 'players');
  }

  function get_players(){
    return $this->players = $this->db->get('players')->result_array();
  }

  function get_series(){
    return $this->series = $this->db->get('series')->result_array();
  }

  function get_collection(){
    return $this->collection = $this->db->get('collections')->result_array();
  }
}
?>
