<?php require_once dirname( __DIR__).DIRECTORY_SEPARATOR.'Database'.DIRECTORY_SEPARATOR.'Database.php' ?>

<?php 

    class Todo extends Database{

               private $id;
               private $title;
              // private $getPDO;

            public function __construct(string $title=null)
            {
                $this->title=$title;
               parent::__construct($dbname="todolist",$servername="localhost",$username="root",$password="passroot");
              
            }

            //Getters

            public function getTitle()
            {
                return $this->title;
            }
            public function getId(){
                return $this->id;
            }

            //Setters

            public function setTitle($title) :void
            {
                $this->title=$title;
            }

            public function setId($id) :void
            {
                $this->id=$id;
            }


            public function ajout_todo()
            {
                $this->insert("INSERT INTO todo (title) VALUES('$this->title')");  
            }

            public static function recup_todo()
            {
                $conn=new Database('todolist');
                return $conn->recup("SELECT * FROM todo ORDER BY date_time");
            }


            public function delete_todo(){
                
                $this->delete("DELETE FROM todo WHERE id ={$this->id}");
            }
    }





?>
 <?php 
    function path()
    {
        echo '../CSS/index.css';
    }
    
    ?>