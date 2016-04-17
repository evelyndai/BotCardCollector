<?php

class admin extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'admin';
        $this->load->model('Gamestatus');
        $this->Gamestatus->update_gamestatus();

        $players = $this->Gamestatus->get_players();

        foreach ($players as $record) {
            $player_data[] = array('playername' => $record['Player'],
                'playerpeanuts' => $record['Peanuts'],
                'playerpassword' => $record['Password'],
                'playerrole' => $record['Role'],
                'playeravatar' => $record['Avatar']);

        }
        
        $this->data['playerinfo'] = $player_data;
        
        $this->render();
    }
    
    function changePassword(){
        $player = $this->user->checkUser($this->input->post('playername'));
        if(!is_null($player)){
            $playerName = $player[0]->player;
            $password = $this->input->post('playerpassword');
            
            $this->player->updatePassword($password, $playerName);
            redirect('admin', 'refresh');
        }
    }
    function deleteUser(){
        $player = $this->user->checkUser($this->input->post('playername'));
        if(!is_null($player)){
            $playerName = $player[0]->player;
            $this->player->deletePlayer($playerName);
            redirect('admin', 'refresh');
        }
    }
    function changeRole(){
        $player = $this->user->checkUser($this->input->post('playername'));
        if(!is_null($player)){
            $playerName = $player[0]->player;
            $role = $this->input->post('playerrole');
            
            $this->player->updateRole($role, $playerName);
            redirect('admin', 'refresh');
        }
    }

}
