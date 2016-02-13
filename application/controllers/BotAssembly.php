<?php

class BotAssembly extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'bot_assembly';
		//Get cards owned by a user
		$card_count = $this->collections->get_cards($this->session->userdata('username'));
		//get counts of individual card pieces
		$card_count = $this->collections->sort_cards($card_count);

		//build array of top card pieces and counts
		$top_cards = array('Eleven-A' => $card_count['elevena0'],
						   'Eleven-B' => $card_count['elevenb0'],
					   	   'Eleven-C' => $card_count['elevenc0']);

	   //build array of middle card pieces and counts
	    $mid_cards = array('Eleven-A' => $card_count['elevena1'],
   						   'Eleven-B' => $card_count['elevenb1'],
   					   	   'Eleven-C' => $card_count['elevenc1']);

	    $bot_cards = array('Eleven-A' => $card_count['elevena2'],
   						   'Eleven-B' => $card_count['elevenb2'],
   					   	   'Eleven-C' => $card_count['elevenc2']);

	   //build array of middle card pieces and counts
		$this->data['topcards'] = $top_cards;
		$this->data['midcards'] = $mid_cards;
		$this->data['botcards'] = $bot_cards;

		$this->render();
	}
}
