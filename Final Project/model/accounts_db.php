<?php

class AccountsDB{
    public static function validate_login($email, $password) {
        global $db;
        $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        if(count($user) > 0){
            $user = new Account($user['id'], $user['email'], $user['fname'], $user['lname'], $user['phoneNumber'],
                $user['birthday'], $user['password']);
            return $user;
        } else {
            return false;
        }

    }

    public static function submit_registration($email, $fname, $lname, $birthday, $password, $user){
        global $db;
        $query = 'INSERT INTO accounts
            (email, fname, lname, birthday, password)
           VALUE 
            (:email, :fname, :lname, :birthday, :password)';

        if(count($user) > 0){
            $user = new Account($user['id'], $user['email'], $user['fname'], $user['lname'], $user['phoneNumber'],
                $user['birthday'], $user['password']);
            return $user;
        } else {
            return false;
        }
    }
}


/*function validate_login($email, $password) {
    global $db;
    $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();

    if (count($user) > 0) {
        return $user['id'];
    } else {
        return false;
    }
}*/