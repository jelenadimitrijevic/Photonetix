<?php

session_start();

function populateStorage() {
    $users = array(
                array(
                    'username' => 'admin',
                    'password' => 'test'
                ),
                array(
                    'username' => 'petar',
                    'password' => 'petar'
                )
            );
    file_put_contents('storage.dat',json_encode($users));
}

function getUsers() {
    return json_decode(file_get_contents('storage.dat'));
}

function isLogedIn() {
    if ($_SESSION['login']) {
        return true;
    }
    return false;
}

function logIn($username, $password) {
    $users = getUsers();
    foreach ($users as $user) {
        if (authorizeUsers($username, $password, $user)) {
            $_SESSION['user'] = $username;
            $_SESSION['login'] = true;
        }
    }
}

function authorizeUsers($username, $password, $user) {
    if ($user->username === $username && $user->password === $password) {
       return true;
    }

    return false;
}