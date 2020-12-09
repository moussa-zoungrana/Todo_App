<?php require __DIR__.DIRECTORY_SEPARATOR.'Database.php' ?>

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

            public static function recup_todo()
            {
                $conn=new Database('todolist');
                return $conn->recup("SELECT * FROM todo ORDER BY date_time");
            }


            public function delete_todo(){
                $conn=new Database('todolist');
            $conn->delete("DELETE FROM todo WHERE id ={$this->id}");
            }
    }





?>