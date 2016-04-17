<?php

class Application extends CI_Controller {

    protected $data = array();   // parameters for view components
    protected $id;      // identifier for our content
    
    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'BotCardCollector'; // our default title
        $this->errors = array();
        $this->data['pageTitle'] = 'welcome';   // our default page
        $this->session->userdata['username'];
        print_r($this->config->item('menu_choice'));
       
    }

    /**
     * Render this page
     */
    function render() {
//        $cred = $this->session->userdata['username'];
//        if ($cred !== '') {
//            $this->data['username'] = $this->session->userdata['username'];
//            $this->data['logincred'] = $this->parser->parse('_signout', $this->data, true);
//        } else {
//            $this->data['logincred'] = $this->parser->parse('_signin', $this->data, true);
//        }
        if( $this->session->userdata['username'] == ''){
             $this->data['logincred'] = $this->parser->parse('_signin', $this->data, true);
             
             
        }else{
            $this->data['username'] = $this->session->userdata['username'];
       
            if($this->player->checkAdmin($this->data['username'])){
                $this->data['adminLink'] = anchor('/admin', 'ADMIN');
            }else{
                $this->data['adminLink'] = '';
            }
            
            $this->data['logincred'] = $this->parser->parse('_signout', $this->data, true);
            
            
        }
        
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);

        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        
        // finally, build the browser page!
        $this->data['username'] = $this->session->userdata['username'];

        $this->data['data'] = &$this->data;

        $this->parser->parse('_master_template', $this->data);
    }

}
