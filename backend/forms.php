<?php


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

include('database.php');

class Forms
{
    protected $database;

    protected $firstName;
    protected $lastName;
    protected $email;
    protected $mobile;
    protected $gender;
    protected $country;
    protected $subject;
    protected $message;
    protected $createdOn;



    public function __construct()
    {
        $this->database = new Database();
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }
}
