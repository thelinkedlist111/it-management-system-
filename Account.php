<?php
class Account {
    public $Name;
    public $Email;
    public $Password;
    private LoginStrategy $strategy;
    public function __construct(string $name, string $email, string $password) {
        $this->Name = $name;
        $this->Email = $email;
        $this->Password = $password;
    }
    public function Set_Strategy(LoginStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function PerformLogin($name, $email, $password) {
        if ($this->strategy->Login($name, $email, $password)) {
        if ($_SESSION['role'] === 'admin') {
            header("Location: ../View/AdminDash.php");
        } else {
            header("Location: ../View/UserDash.php");
        }
        exit;
    }
    return false;
    }
}