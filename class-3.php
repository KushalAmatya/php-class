<?php
class User
{
    public $username;
    protected $email;
    public $password;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
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


    public function __construct($username, $email, $password, $auth)
    {
        parent::__construct($username, $email, $password);
        $this->auth = $auth;
    }

    public function get_email()
    {
        return $this->email;
    }
}

$usr1 = new User('Kushal', 'xyz@gmail.com', '12345');
$usr1->login();
$usr1->set_email("xyz@gmail.com");
// echo $usr1->get_email();
echo "<br><br>";

$admin = new Admin('asdf', 'awe12', '122', 'ultra admin');
$admin->username = "Administrator";
$admin->login();
$admin->set_email("admin@gmail.com");
echo $admin->get_email();
echo "<br>";
