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

		//initialize arrays for sorting cards by type
		$top_cards = [];
		$mid_cards = [];
		$bot_cards = [];

		//build arrays of card pieces and counts, seperated by top, middle and bottom
		if (count($card_count) > 0)
		{
			foreach ($card_count as $key => $value)
			{
				if (substr($key, -1) == "0")
				{
					$top_cards[$key] = $value;
				}
				else if (substr($key, -1) == "1")
				{
					$mid_cards[$key] = $value;
				}
				else if (substr($key, -1) == "2")
				{
					$bot_cards[$key] = $value;
				}
			}
		}

		$this->data['post'] = $this->botserver->get_token();

		// $dataArray = array("token" => "hi");
        // $this->data['post'] = $this->collections->php_post($dataArray, "/data/certificates");


		$this->data['topcards'] = $top_cards;
		$this->data['midcards'] = $mid_cards;
		$this->data['botcards'] = $bot_cards;

		$this->render();
	}
}
