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
		$current_player = $this->session->userdata('username');
		$this->load->model('Gamestatus');
		$this->Gamestatus->update_gamestatus();
		$gamestatus_title = "Game Status";
    $playerstatus_title = "Player Status";
		$transactions_title = "Recent Transactions";
		$total_cards = 0;
		$cards_left = 0;
	  $store_data = "";
	  $series_data = "";
	  $player_data = array();
	  $player_store_data = "";

		$players = $this->Gamestatus->get_players();
		$series = $this->Gamestatus->get_series();
		$collection = $this->Gamestatus->get_collection();
		$cards_left = $this->Gamestatus->get_cards_left();
		$total_cards = $this->Gamestatus->get_total_cards();
		$collection_info = $this->Gamestatus->get_collection_info();
		$transactions = $this->Gamestatus->get_transactions();

		//Create the information being viewed on the page
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
		$counter = 0;
		if($transactions != null){
			foreach($transactions as $record){
				$counter++;
				if($counter > 5){
					break;
				}
				$transaction_data[] = array('playerlink' => "portfolio/".$record[3], 'playername' => $record[3], 'action' => $record[5], 'transaction_series' => $record[4]);
			}
		}
		else{
			$transaction_data[] = array('playerlink' => "portfolio", 'playername' => "No active players", 'action' => "No actions", 'transaction_series' => 'x');
		}


		//Set the information being viewed on the page
		$this->data['customCSS'] = '/asset/style/home.css';
		$this->data['gamestatus_title'] = $gamestatus_title;
		$this->data['playerstatus_title'] = $playerstatus_title;
		$this->data['transactions_title'] = $transactions_title;
		$this->data['gamestatus'] = $store_data . $series_data . $player_store_data;
		$this->data['playerstatus'] = $player_data;
		$this->data['transactions'] = $transaction_data;
		$this->data['gamestatus_state'] = 'Round #'.$this->botserver->get_round().' - '.$this->botserver->get_state();
		$this->render();
	}
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
?>
