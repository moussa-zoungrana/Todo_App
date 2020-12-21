<?php 
require __DIR__.DIRECTORY_SEPARATOR.'Database.php';

$conn=new Database('');
$conn->connect();
$conn->insert
("CREATE DATABASE todolist
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
USE todolist ;  
CREATE TABLE todo(
    id INT(250) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title TEXT NOT NULL,
    date_time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    checked TINYINT(1) NOT NULL DEFAULT 0)
    ENGINE=INNODB
  
");

?>



