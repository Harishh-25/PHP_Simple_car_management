<?php
include "db.php";
$id = $
_
GET['id'];
$conn->query("DELETE FROM services WHERE id=$id");
header("Location: index.php");
?>
