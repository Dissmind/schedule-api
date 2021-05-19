<?php




class Database {
    private $connect = null;


    public function getConnection() {


        $host = '127.0.0.1:3306';
        $user = 'root';
        $password = '';
        $db = 'schedule';

        $this->connect = mysqli_connect($host, $user, $password, $db)
            or die("Error : " . mysqli_error($this->connect));

        return $this->connect;
    }


    public function getQuery($query) {

        $result = mysqli_query($this->connect, $query);

        $data = [];

        if ($result) {
            $rows = mysqli_num_rows($result);

            for ($i = 0; $i < $rows; $i++) {
                $row = mysqli_fetch_row($result);

                $dataItem = ['id' => $row[0], 'name' => $row[1], 'year_at' => $row[2]];
                array_push($data, $dataItem);
            }
        }

        return $data;
    }


    public function closeConnection() {
        mysqli_close($this->connect);
    }
}


