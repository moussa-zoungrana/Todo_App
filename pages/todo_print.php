<?php// require __DIR__.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Todo.php'; ?>

<?php  $result= Todo::affich_todo(); ?>

<?php foreach($result as $post):?>

<table>
<tr>
<td><?= $post->title ?></td>
<td><?= $post->date_time ?></td>
</tr>
</table>

<?php endforeach ?>


<style>
table,td{
    border: 2px solid;
}

</style>