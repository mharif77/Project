<?php
require_once("dbconfig.php");
$id = $_GET['id'];

$result = $db->query("DELETE FROM branches WHERE id = '$id'");


if ($result) {
    header("location:branch_list.php");
}
?>