<?php

class BotAssembly extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'bot_assembly';
		$this->botserver->get_token();

		//Get cards owned by a user
		$card_count = $this->collections->get_cards($this->session->userdata('username'));

		//get counts of individual card pieces
		$card_count = $this->collections->sort_cards($card_count);

		//initialize arrays for sorting cards by type
		$top_cards = [];
		$mid_cards = [];
		$bot_cards = [];

		//Handle Selling of cards
		if (!is_null($this->input->post('buyCards')))
		{
			$team = 'b06';
			$token = $this->session->userdata('token');
			$player = $this->session->userdata('username');
			$top = $_POST['TopPieces'];
			$middle = $_POST['MiddlePieces'];
			$bottom = $_POST['BottomPieces'];

			$dataArray = array("team" => $team, "token" => $token, "player" => $player, "top" => $top, "middle" => $middle, "bottom" => $bottom);
		    $handle = $this->botserver->php_post($dataArray, "/sell");

			// print_r($_POST['TopPieces']); die();
		}

		//build arrays of card pieces and counts, seperated by top, middle and bottom
		if (count($card_count) > 0)
		{
			foreach ($card_count as $key => $value)
			{
				if (substr($value['card'], -1) == "0")
				{
					$top_cards[$key] = $value;
				}
				else if (substr($value['card'], -1) == "1")
				{
					$mid_cards[$key] = $value;
				}
				else if (substr($value['card'], -1) == "2")
				{
					$bot_cards[$key] = $value;
				}
			}
		}

		$this->data['topcards'] = $top_cards;
		$this->data['midcards'] = $mid_cards;
		$this->data['botcards'] = $bot_cards;

		$this->render();
	}
}
