<?php

$user = 'root';
$pass = 'root';
$output = 'dump.sql';

$jesus = "mysql --password=$pass --user=$user registro < $output";

system ($jesus, $errors);

header ('location:index.php');

// $restore_file  = "dump.sql";
// $server_name   = "localhost:8888";
// $username      = "root";
// $password      = "root";
// $database_name = "registro";
//
// $cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $restore_file";
// exec($cmd);



 ?>
