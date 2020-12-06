<?php 
require __DIR__.DIRECTORY_SEPARATOR.'Database'.DIRECTORY_SEPARATOR.'Database.php';

$conn=new Database('todolist');
$conn->connect();
$result=$conn->recup("SELECT * FROM todo");

?>
<pre>
<?php var_dump($result) ?>
</pre>