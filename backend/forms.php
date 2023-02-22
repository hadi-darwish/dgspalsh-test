<?php
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
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function getMobile()
    {
        return $this->mobile;
    }


    public function getGender()
    {
        return $this->gender;
    }


    public function getCountry()
    {
        return $this->country;
    }


    public function getSubject()
    {
        return $this->subject;
    }


    public function getMessage()
    {
        return $this->message;
    }


    public function getCreatedOn()
    {
        return $this->createdOn;
    }
    public function saveForm()
    {
        $connection = $this->database->connect();


        $queryText =
            "INSERT INTO `forms` (
                `first_name`,
                `last_name`,
                `email`,
                `mobile`,
                `gender`,
                `country`,
                `subject`,
                `message`,
                `created_on`
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $query = $connection->prepare($queryText);
        $query->bind_param(
            'sssssssss',
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->mobile,
            $this->gender,
            $this->country,
            $this->subject,
            $this->message,
            $this->createdOn
        );
        $query->execute();
        $response["success"] = true;
        echo json_encode($response);
    }
}
