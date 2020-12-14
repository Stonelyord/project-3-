<?php

require('model/database.php');
require('model/accounts_db.php');
require('model/questions_db.php');

session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
}

switch ($action) {
    case 'show_login': {
        if($_SESSION['userId']){
            header('Location: .?action=display_users');
        } else{
            include('views/login.php');
        }
        break;
    }

    case 'validate_login': {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        if ($email == NULL || $password == NULL) {
            $error = 'Email and Password are required';
            include('errors/error.php');
        } else {
            $userId = validate_login($email, $password);
            if ($userId !== false) {
                $_SESSION['user'] = $userId;
                header("Location: .?action=display_users");
            } else {
                $error = 'Invalid Login';
                include('errors/error.php');
            }
        }
        break;
    }

    case 'display_users': {
        $userId = $_SESSION['userId'];
        if ($userId == NULL) {
            $error = 'User Id unavailable';
            include('errors/error.php');
        } else {
            $questions = get_questions_by_ownerId($userId);
            include('views/display_questions.php');
        }
        break;
    }

    case 'logout'; {
        session_destroy();
        $_SESSION = array();

        $name = session_name();
        $expire = strtotime('-1 year');

        $params = session_get_cookie_params();

        setcookie($name, '', $expire, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

        header('Location: .');
        break;
    }

    default: {
        $error = 'Unknown Action';
        include('errors/error.php');
    }
}