<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Todo.php'; ?>

<?php $result = Todo::recup_todo(); ?>

<div class="table">
    <table>
        <tr>
    <th>Task</th>
    <th>Date</th>
    <!-- <th>Action</th> -->
        </tr>
        <?php foreach ($result as $post) : ?>
            <tr>
                <div class="title">
                    <td><?= $post->title ?></td>
                </div>
                <td><?= $post->date_time ?></td>
              <td id="lien"><a href="pages/todo_delete.php?del_todo=<?= $post->id ?>"><strong>X</strong> </a></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

