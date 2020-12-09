<?php require dirname( __DIR__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Todo.php'; ?>

<?php  $result= Todo::recup_todo(); ?>

<?php foreach($result as $post):?>

<table>
<tr>
<td><?= $post->title ?></td>
<td><?= $post->date_time ?></td>
<td><a href="pages/todo_delete.php?del_todo=<?=$post->id?>">X</a></td>
</tr>
</table>

<?php endforeach ?>


<style>
table,td{
    border: 2px solid #6D6A69  ;
}


</style>