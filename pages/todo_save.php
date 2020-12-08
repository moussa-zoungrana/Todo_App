<?php 
require dirname( __DIR__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Todo.php';


if(isset($_POST['submit']) && !empty($_POST['todo'])){
    $todo1= new Todo();
    $todo1->title=$_POST['todo'];
    $todo1->ajout_todo();
}


