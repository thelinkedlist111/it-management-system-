<?php
session_start();
require_once '../Model/Account.php';
require_once '../Model/AdminSign-In.php';
require_once '../Model/userSign-In.php';

if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $account = new Account($name, $email, $password);

    // First, try Admin login
    $strategy = new Admin_Login();
    $account->Set_Strategy($strategy);

    if ($account->PerformLogin($name, $email, $password)) {
        $_SESSION['role'] = 'admin';
        $_SESSION['username'] = $name;
        header("Location: ../View/AdminDash.php");
        exit();
    } else {
        // Then, try User login
        $strategy = new User_Login();
        $account->Set_Strategy($strategy);

        if ($account->PerformLogin($name, $email, $password)) {
            $_SESSION['role'] = 'user';
            $_SESSION['username'] = $name;
            header("Location: ../View/UserDash.php");
            exit();
        } else {
            echo '<p style="color:red; text-align:center;">Invalid username, email, or password.</p>';
        }
    }
}
?>
