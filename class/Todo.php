<?php require __DIR__.DIRECTORY_SEPARATOR.'Database.php' ?>

<?php 

    class Todo extends Database{
               public $id;
               public $title;
               public $getPDO;

            public function __construct(string $title=null)
            {
                $this->title=$title;
                $this->getPDO=new Database('todolist');
            }

            public function ajout_todo()
            {
                $this->getPDO->insert("INSERT INTO todo (title) VALUES('$this->title')");  
            }

            public static function recup_todo()
            {
                $conn=new Database('todolist');
                return $conn->recup("SELECT * FROM todo ORDER BY date_time");
            }


            public function delete_todo(){
                
                $this->getPDO->delete("DELETE FROM todo WHERE id ={$this->id}");
            }
    }





?>