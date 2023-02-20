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
}
