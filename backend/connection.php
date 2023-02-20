<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

class DataBaseConnection
{
    protected $host = "localhost";
    protected $db_user = "root";
    protected $db_pass = "4423";
    protected $db_name = "dgsplashdb";

    public function connect()
    {
        $connection = new mysqli($this->host, $this->db_user, $this->db_pass, $this->db_name);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
}
