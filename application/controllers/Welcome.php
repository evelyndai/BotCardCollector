<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'homepage';
		//Setting variables
		$current_player = $this->session->userdata('username');
		$total_cards = 0;
		//Grabbing info from database
		$series = $this->db->get('series')->result_array();
		$collection = $this->db->get('collections')->result_array();
		$players = $this->db->get('players')->result_array();
		//Setting up variables for later use
		$collection_info = array();
		$cards_left = 0;
		$total_cards = 0;
		$store_data = "";
		$series_data = "";
		$player_data = array();
		$player_store_data = "";
		//Manipulate raw data on series information to generate more data
		for($x = 0; $x < count($series); $x++){
			$series[$x]['Used'] = 0;
			$total_cards = $total_cards + $series[$x]['Frequency'];
		}
		$cards_left = $total_cards;
		//Setup players array to hold equity information
		for($x = 0; $x < count($players); $x++){
			$players[$x]['Equity'] = 0;
		}
		//Manipulate raw collection data to create player and series information
		foreach($collection as $record){
			$cards_left = $cards_left - 1;
			$coll_series = intval(substr($record['Piece'],0,2));
			$serieskey = array_search($coll_series,array_column($series,'Series'));
			$series[$serieskey]['Used'] = $series[$serieskey]['Used'] + 1;
			$playerkey = array_search($record['Player'],array_column($players,'Player'));
			$players[$playerkey]['Equity'] = $players[$playerkey]['Equity'] + $series[$serieskey]['Value'];
			if($record['Player'] == $current_player){
				if(empty($collection_info[$coll_series])){
					$collection_info[$coll_series] = 1;
				}
				else{
					$collection_info[$coll_series] = $collection_info[$coll_series] + 1;
				}
			}
		}
		//Create the information being viewed on the page
		$gamestatus_title = "Game Status";
		$playerstatus_title = "Player Status";
		$store_data = "There are " . $cards_left . "/" . $total_cards . " cards left in the store.<br/>";
		foreach($series as $record){
		 	$record_left = $record['Frequency'] - $record['Used'];
			$series_data .= "In the " . $record['Series'] . " Series there are " . $record_left . " cards left.<br/>";
			if(empty($collection_info[$record['Series']])){
				$collection_info[$record['Series']] = 0;
			}
			$player_store_data .= "You have bought " . $collection_info[$record['Series']] . " cards from the " . $record['Series'] . " Series.<br/>";
		}
		foreach($players as $record){
			$player_data[] = array('playerlink' => "portfolio/".$record['Player'], 'playername' => $record['Player'] , 'playerpeanuts' => $record['Peanuts'] , 'playerequity' => $record['Equity']);
		}
		//Set the information being viewed on the page
		$this->data['customCSS'] = '/asset/style/home.css';
		$this->data['gamestatus_title'] = $gamestatus_title;
		$this->data['playerstatus_title'] = $playerstatus_title;
		$this->data['gamestatus'] = $store_data . $series_data . $player_store_data;
		$this->data['playerstatus'] = $player_data;
		$this->render();
	}
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
