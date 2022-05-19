<?php
    include('config.php');
    
    class Database extends mysqli {
        private $user = DBUSER;
        private $pass = DBPWD;
        private $dbName = DBNAME;
        private $dbHost = DBHOST;

        public function __construct() {
            parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
            if (mysqli_connect_error()) {
                exit('Connect Error (' . mysqli_connect_errno() . ') '
                        . mysqli_connect_error());
            }
            parent::set_charset('utf8_bin');

        }

        public function get_results($query) 
        {
            $results = [];
            $result = $this->query($query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    array_push($results, $row);
                }
                return $results;
            } else
                return null;
        }
    }
