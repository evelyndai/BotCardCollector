<?php

class Application extends CI_Controller {

	protected $data = array();	  // parameters for view components
	protected $id;				  // identifier for our content

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['title'] = 'BotCardCollector';	// our default title
		$this->errors = array();
		$this->data['pageTitle'] = 'welcome';   // our default page
                
	}

	/**
	 * Render this page
	 */
	function render()
	{
                
		$this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

                $this->data['username'] = $this->session->userdata('username');
                //$this->data['trade'] = $this->parser->parse('trading_activity',$this->data, true);
                //$this->data['holdings'] = $this->parser->parse('holding', $this->data, true);
                

		// finally, build the browser page!

            

		$this->data['data'] = &$this->data;

		$this->parser->parse('_master_template', $this->data);
                
	}

}
