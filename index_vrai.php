<?php 
require __DIR__.DIRECTORY_SEPARATOR.'Database'.DIRECTORY_SEPARATOR.'Database.php';
//require __DIR__.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Todo.php';

//$conn=new Database('todolist');
//$todo1= new Todo("4e tache");
//$todo1->ajout_todo();
//$result=$conn->recup("SELECT * FROM todo");
$conn=new Database('todolist'); 
$title =null;
?>
<?php if(isset($_POST['submit']) && !empty($_POST['todo'])) : ?>

<?php 
    
    $title=$_POST['todo'];
    
    $conn->insert("INSERT INTO todo (title) VALUES('$title')");  
?>  
<?php endif; ?>



<h1>Todo list</h1>
<form action="" method="post">

Entrez votre tache : <input type="text" name="todo" > 
<button type="submit" name="submit">Soumettre</button>

</form>


<?php  $result=$conn->recup("SELECT * FROM todo");  ?>

<?php foreach($result as $post):?>

<table>
<tr>
<td><?= $post->title ?></td>
<td><?= $post->date_time ?></td>


</tr>

</table>



<?php endforeach ?>

 
<pre>
<?//php var_dump($result) ?>
<?//php var_dump($conn) ?>
</pre>



<style>
table,td{
    border: 2px solid;
}

</style>