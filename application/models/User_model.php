<?php

class User_model extends CI_Model {

    public function getUser(){
        $query = "SELECT * FROM users";
        $users = $this->db->query($query);
        return $users;
    }
    public function insertUser($data)
   {
       $fullname = $data['fullname'];
       $email = $data['email'];
       $age = $data['age'];
       $username = $data['username'];
       $password = $data['password'];
       $pic = $data['pic'];
       $query = "INSERT INTO users (username, password, pic, fullname, email, age) VALUES ('$username', '$password','$pic','$fullname', '$email', '$age')";
       return $this->db->query($query);
   }
    public function getUserBy($userID)
    {
        $query = "SELECT * FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);  
    }
    public function update($userID, $data)
   {
       $fullname = $data['fullname'];
       $email = $data['email'];
       $age = $data['age'];
       $username = $data['username'];
       $password = $data['password'];
       $pic = '';
       $query = "UPDATE users SET username ='$username', password = '$password', pic = '$pic', fullname = '$fullname', email = '$email', age = '$age' WHERE user_id = '$userID'";
       return $this->db->query($query);
   }

    public function delete($userID)
    {
        $query = "DELETE FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);
     
    }

    // Auth
    public function checkLogin($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
       return $this->db->query($query);
    }
} 