<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class AvatarUpload extends Application {

    function __construct() {
        parent::__construct();
        $this->data['customCSS'] = '/asset/style/login.css';
        $this->data['errorMsg'] = '';
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'avatarUpload'; // this is the view we want shown


        $this->render();
    }

    function uploading() {
        $config['upload_path'] = './asset/images/avatar/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2048000;
        $config['max_width'] = 150;
        $config['max_height'] = 150;
        $config['file_name'] = $this->session->userdata['username'];
        $this->load->library('upload', $config);
//        $this->load->initialize($config);
       //$this->data['errorMsg'] = $this->upload->do_upload('avatarUpload');
        if (!$this->upload->do_upload('avatarUpload')) {
            $this->data['errorMsg'] = $this->upload->display_errors();
            $this->index();
        } else {
            
            $this->player->updateAvatar($this->upload->data()['file_name'], $this->session->userdata['username']);
           //$this->user->insertAvatar($this->session->userdata['username'], $this->upload->data()['file_name']);
            redirect('/', 'refresh');
        }
        
    }

}
