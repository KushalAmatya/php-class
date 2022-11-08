<?php
class User
{
    public $username = 'Kushal';
    protected $email = 'kushalamatya413@gmail.com';
    public $password = '12345678';

    // public function get_email()
    // {
    //     return $this->email;
    // }

    public function set_email($email)
    {
        $this->email = $email;
    }
    public function login()
    {
        echo "You have been sucessfully logged in Mr. " . $this->username . "<br>";
    }
}

class Admin extends User
{
    public $auth = "super admin";

    public function get_email()
    {
        return $this->email;
    }
}

$usr1 = new User;
$usr1->login();
$usr1->set_email("xyz@gmail.com");
// echo $usr1->get_email();
echo "<br><br>";

$admin = new Admin;
$admin->username = "Administrator";
$admin->login();
$admin->set_email("admin@gmail.com");
echo $admin->get_email();
echo "<br>";
