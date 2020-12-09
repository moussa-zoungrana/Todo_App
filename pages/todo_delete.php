<?php require dirname( __DIR__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Todo.php'; ?>

<?php 

    if(isset($_GET['del_todo'])){
        $todo =new Todo();
        $todo->id=(int)$_GET['del_todo'];
        $todo->delete_todo();
        
    }
    header('location: ../index.php');


?>