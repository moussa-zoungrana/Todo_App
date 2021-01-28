<?php 

    class Database {

        protected $servername;
        protected $dbname;
        protected $username;
        protected $password;
        protected $pdo;


        public function __construct( $dbname,$servername="localhost",$username="root",$password="Passroot@2021")
        {
           $this->servername=$servername; 
           $this->dbname=$dbname;
           $this->username=$username;
           $this->password=$password;
        }

       
        public function connect()
        {
                $dns= "mysql:host=$this->servername;dbname=$this->dbname;charset=utf8";
                $this->pdo=new PDO($dns,$this->username,$this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

        }

        public function insert($statement)
        {
            if(!isset($this->pdo)){
                $this->connect();
            }
            $this->pdo->exec($statement); 
            $this->pdo=null;
        }

        public function recup($statement)
        {
            if(!isset($this->pdo)){
                $this->connect();
            }
            $req=$this->pdo->query($statement);
            $result=$req->fetchAll(PDO::FETCH_OBJ);
            $this->pdo=null;
            return $result;

        }

        
        public function delete($statement)
        {
            if(!isset($this->pdo)){
                $this->connect();
            }
            $this->pdo->exec($statement); 
            $this->pdo=null;
        }




    }







?>