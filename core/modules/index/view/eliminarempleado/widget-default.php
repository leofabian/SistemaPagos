<?php

$client = EmpData::getById($_GET["id"]);
$client->del();
Core::redir("./index.php?view=empleado");

?>

