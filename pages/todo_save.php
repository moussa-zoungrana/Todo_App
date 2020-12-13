<?php 
require dirname( __DIR__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Todo.php';


if(isset($_POST['submit']) && !empty($_POST['todo'])){
    $todo= new Todo();
    $todo->title=htmlspecialchars( $_POST['todo']);
    $todo->ajout_todo();
}

header('location: ../index.php');


