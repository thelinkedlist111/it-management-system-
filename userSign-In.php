<?php
require_once 'LoginStrategy.php';
require_once 'config.php';

if (!interface_exists('LoginStrategy')) {
    die("LoginStrategy interface not loaded.");
}

class User_Login implements LoginStrategy {
    public function Login($name, $email, $password): bool {
        global $link;
        $sql = "SELECT * FROM users WHERE email = ? AND role = 'user'";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);
            if ($user && $user['password'] === $password) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['role'] = 'user';
                $_SESSION['name'] = $user['username'];
                return true;
            }
        }
        return false;
    }
}
