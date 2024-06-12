<?php

require_once "db-connection.php";

$selectedId = $_GET['id'];

if($conn)
{

$sqlQuery = "DELETE FROM users WHERE id=$selectedId";
$sqlQueryOutput = $conn->query($sqlQuery);

header("location: ../index.php");

}
?>