<?php

class BotAssembly extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'bot_assembly';
		$card_count = $this->collections->get_cards();
		$card_count = $this->collections->sort_cards($card_count);

		$top_cards = array('elevena' => $card_count['elevena0'],
						   'elevenb' => $card_count['elevenb0'],
					   	   'elevenc' => $card_count['elevenc0']);

	    $mid_cards = array('elevena' => $card_count['elevena1'],
   						   'elevenb' => $card_count['elevenb1'],
   					   	   'elevenc' => $card_count['elevenc1']);

	    $bot_cards = array('elevena' => $card_count['elevena2'],
   						   'elevenb' => $card_count['elevenb2'],
   					   	   'elevenc' => $card_count['elevenc2']);


		$this->data['topcards'] = $top_cards;
		$this->data['midcards'] = $mid_cards;
		$this->data['botcards'] = $bot_cards;

		// $this->load->view('bot_assembly',);
		// $this->data['debug'] = print_r($card_count, true);
		$this->render();
	}
}
