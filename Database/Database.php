<?php 

    class Database {

        private $servername;
        private $dbname;
        private $username;
        private $password;
        private $pdo;


        public function __construct( $dbname,$username="root",$password="passroot",$servername="localhost")
        {
           $this->servername=$servername; 
           $this->dbname=$dbname;
           $this->username=$username;
           $this->password=$password;
        }

        public function connect()
        {
                $dns= "mysql:host=$this->servername;dbname=$this->dbname";
                $this->pdo=new PDO($dns,$this->username,$this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

        }

        public function insert($statement)
        {
            if(!isset($this->pdo)){
                $this->connect();
            }
            $this->pdo->exec($statement); 
        }

        public function recup($statement)
        {
            if(!isset($this->pdo)){
                $this->connect();
            }
            $req=$this->pdo->query($statement);
            $result=$req->fetchAll(PDO::FETCH_OBJ);
            return $result;

        }




    }







?>