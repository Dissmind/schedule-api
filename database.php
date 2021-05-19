<?php




class Database
{
    private $connect = null;


    public function getConnection() {


        $host = '127.0.0.1:3306';
        $user = 'root';
        $password = '';
        $db = 'schedule';

        $this->connect = mysqli_connect($host, $user, $password, $db)
            or die("Error : " . mysqli_error($this->connect));
    }


    public function closeConnection() {
        mysqli_close($this->connect);
    }
}


