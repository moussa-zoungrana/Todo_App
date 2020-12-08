<?php 
require __DIR__.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Todo.php';


if(isset($_POST['submit']) && !empty($_POST['todo'])){
    $todo1= new Todo();
    $todo1->title=$_POST['todo'];
    $todo1->ajout_todo();
}


?>


<h1>Todo list</h1>
<form action="" method="post">

Entrez votre tache : <input type="text" name="todo" > 
<button type="submit" name="submit">Soumettre</button>

</form>


<?php  $result= Todo::affich_todo(); ?>

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