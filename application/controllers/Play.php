<?php

class Play extends CI_Controller {

    public function index(){
        $this->lode->modal('user_modal');
        $user = $this->user_modal->getUser();
        print_r($user->result());
    }
}