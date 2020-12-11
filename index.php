<?php require __DIR__.DIRECTORY_SEPARATOR.'elements'.DIRECTORY_SEPARATOR.'header.php' ?>
<?php //require __DIR__.DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR.'todo_save.php' ?>


<h1>Todo list</h1>
<div class="shearch">
<form action="pages/todo_save.php" method="post">

Enter your task : <input type="text" name="todo" > 

<button type="submit" name="submit">Add task</button>

</form><br>
</div>
<?php require __DIR__.DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR.'todo_print.php' ?>


<?php require __DIR__.DIRECTORY_SEPARATOR.'elements'.DIRECTORY_SEPARATOR.'footer.php' ?>