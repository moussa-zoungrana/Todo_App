<?php require dirname(__DIR__).DIRECTORY_SEPARATOR.'Database'.DIRECTORY_SEPARATOR.'Database.php' ?>

<?php 

    class Todo extends Database{
               public $id;
               public $title;

            public function __construct(string $title=null)
            {
                $this->title=$title;
            }

            public function ajout_todo()
            {
                $conn=new Database('todolist'); 
                $conn->insert("INSERT INTO todo (title) VALUES('$this->title')");  
            }

            public static function affich_todo()
            {
                $conn=new Database('todolist');
                return $conn->recup("SELECT * FROM todo");
            }



    }





?>