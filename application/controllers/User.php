<?php

class User extends CI_Controller
{
    public function __construct()
    {
           parent::__construct();
           $this->load->model('user_model');
           $this->load->model('user_type_model');
    }
    public function index()
    {
        $this->load->model('user_model');
        $users = $this->user_model->getUser();
        $data = array(
            'users' => $users
        );
        $this->load->view('layout/header');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }
    public function Show($userID = "")
    {
        $user = $this->user_model->getuserBy($userID);
        $data = array(
            'user' => $user->row()
        );
        $this->load->view('layout/header');
        $this->load->view('user/show', $data);
        $this->load->view('layout/footer');
    }
    public function profile()
    {
        echo 'Your login';
    }

    public function addUser()
    {
        $user_types = $this->user_type_model->getUserType();
        $data = [
            'user_types' => $user_types
        ];
        $this->load->view('layout/header');
        $this->load->view('user/add_user', $data);
        $this->load->view('layout/footer');
    }
    public function edit($userID)
    {
        $user = $this->user_model->getuserBy($userID);
        $data = array(
            'user' => $user->row()
        );
        $this->load->view('layout/header');
        $this->load->view('user/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update($userID = "")
    {
        $data = $this->input->post(); 
        $result = $this->user_model->update($userID, $data);
        if($result){
            redirect('/user');
        }else{
            echo "Has error";
        }   
    }
    public function create()
    {
        $data = $this->input->post();
        $this->load->model('user_model');
        $result = $this->user_model->insertUser($data);
        if($result){
            redirect('/user');
        }else{
            echo "Has error";
        } 
    }
    public function delete($userID)
    {
        $data = $this->input->post();
        $this->load->model('user_model');
        $result = $this->user_model->delete($userID);
        if($result){
            redirect('/user');
        }else{
            echo "Has error";   
      }
    }
}