<?php

session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

/**
 * This file contains the function saveData()
 *
 * @author Adithya P N<adithya.pn@codilar.com>
 * @return void
 */
function saveData()
{
    $data = file_get_contents('data.json');
    $registrations = json_decode($data, true);

    if ($_POST != null) {
        $username = $_POST['username'];
        foreach ($registrations as $reg) {
            if ($reg['username'] == $username) {
                echo "<script>alert('Username already exists. Please choose a different username.')</script>";
                return;
            }
        }

        $registration = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'username' => $username,
            'password' => $_POST['password']
        );
        array_push($registrations, $registration);

        $data = json_encode($registrations, JSON_PRETTY_PRINT);

        file_put_contents('data.json', $data);
        $_SESSION['username'] = $_POST['name'];
        header("Location: /php_session/login.html");
    } else {
        echo 'Registration Failed';
    }
}

if (file_get_contents('data.json') == null) {
    file_put_contents('data.json', '[]');
}
saveData();
