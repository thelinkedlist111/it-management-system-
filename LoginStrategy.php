<?php
interface LoginStrategy {
    public function Login($name, $email, $password): bool;
}
