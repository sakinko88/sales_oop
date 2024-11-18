<?php

require 'Database.php';

class User extends Database
{

    public function register($request)
    {
        $fname  = $request['first_name'];
        $lname  = $request['last_name'];
        $urname  = $request['username'];
        $pass   = $request['password'];
        // create a hashed password
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Users(first_name, last_name, username, password) VALUES ('$fname', '$lname', '$urname', '$hashed_password')";

        if ($this->conn->query($sql)) {
            header('location:../views/Login.php');
        } else {
            die('Error: ' . $this->conn->error);
        }
    }

    public function login($request){
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM Users WHERE username = 'username'";

        if($result = $this->conn->query($sql)){
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])){
                session_start();

                $_SESSION['full_name'] = $user['first_name']." ".$user['last_name'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_id'] = $user['id'];

                header('location:../views/Dashboard.php');
            } else {
                die("ERROR: credentials do not match". $this->conn->error);
            } 
        } else {
            die("ERROR: credentials do not match". $this->conn->error);
        }
    }
  }