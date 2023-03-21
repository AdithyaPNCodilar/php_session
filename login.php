<?php

session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

/**
 * This file contains the function logIn()
 *
 * @author Adithya P N<adithya.pn@codilar.com>
 * @return void
 */
function logIn()
{
    $data = file_get_contents('data.json');
    $registrations = json_decode($data, true);

    if ($_POST != null) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Check if username and password are correct
        foreach ($registrations as $registration) {
            if ($registration['username'] == $username && $registration['password'] == $password) {
                // Store login information in session variables
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $registration['email'];
                $_SESSION['phone'] = $registration['phone'];
                // Redirect user to home page
                header("Location: /php_session/home.php");
                exit();
            }
        }

        // Login failed
        header("Location: /php_session/login.html");
    } else {
        header("Location: /php_session/login.html");
    }
}

if (file_get_contents('data.json') == null) {
    file_put_contents('data.json', '[]');
}

logIn();
