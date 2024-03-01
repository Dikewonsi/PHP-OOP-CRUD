<?php
    require_once 'config.php';
    session_start();


    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);


        // Function to check if a username exists
        function doesUsernameExists($pdo, $username) {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM admin WHERE username = ?");
            $stmt->execute([$username]);
            $count = $stmt->fetchColumn();
            return $count > 0;
        }        


        //Calling this Function to see if the value of $count is > 0
        if (doesUsernameExists($pdo, $username))
        {            
            $_SESSION['message'] = 'User With Username Already Exists';
            header('Location: error.php');
            exit;            
        }

        //If count > 0 then proceed with creating new user
        $query = 'INSERT INTO admin (username, password) VALUES (:username, :password)';

        $stmt = $pdo->prepare($query);

        $params = [
            'username' => $username,
            'password' => $password
        ];

        $stmt->execute($params);

        $_SESSION['message'] = 'User Added Successfully';
        header('Location: success.php');
        exit;  
    }

    //LOGIN
    else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Function to check if the submitted username and password exists
        function doesUsernameAndPasswordExists($pdo, $username, $password) {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM admin WHERE username = ? AND password = ?");
            $stmt->execute([$username, $password]);
            $count = $stmt->fetchColumn();
            return $count > 0;
        }

        if (doesUsernameAndPasswordExists($pdo, $username, $password))
        {            
            $_SESSION['message'] = 'User With Username and Password Exists';
            header('Location: users.php');
            exit;            
        }
    }



?>