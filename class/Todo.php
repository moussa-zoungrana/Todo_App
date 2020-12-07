<?php require dirname(__DIR__).DIRECTORY_SEPARATOR.'Database'.DIRECTORY_SEPARATOR.'Database.php' ?>

<?php 

    class Todo extends Database{
               public $title;

            public function __construct(string $title)
            {
                $this->title=$title;
            }

            public function ajout_todo()
            {
                return $this->insert("INSERT INTO todo (title) VALUES ($this->title)");
            }

            public function affich_todo()
            {
              return  $this->recup("SELECT * FROM todo");
            }



    }





?>