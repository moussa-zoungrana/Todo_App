<?php 

    class Database {

        private $servername;
        private $dbname;
        private $username;
        private $password;


        public function __construct( $dbname,$username="root",$password="passroot",$servername="localhost")
        {
           $this->servername=$servername; 
           $this->dbname=$dbname;
           $this->username=$username;
           $this->password=$password;
        }

        public function connect()
        {
            try {

                $dns= "mysql:host=$this->servername;dbname=$this->dbname";
                $conn=new PDO($dns,$this->username,$this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                echo "connected susses!";
        
            } catch (PDOException $e) {
                echo "failed connected!"."<br>".$e->getMessage();
            }

        }






    }







?>