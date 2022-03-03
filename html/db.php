<?php 

session_start();

$mysql_hostname = 'host.docker.internal';
$mysql_username = 'oneslife';
$mysql_password = 'semin';
$mysql_database = 'test';
$mysql_port = '52000';
$mysql_charset = 'UTF8';

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);

if($conn->conn_errno){
    echo '[연결실패..] : '.$connect->connect_error.'';
} else {
    echo 'gggg';
}

?>
