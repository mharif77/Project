<?php
require_once("dbconfig.php");
$id = $_GET['id'];

$result = $db->query("DELETE FROM user WHERE id = '$id'");


if ($result) {
    header("location:user_list.php");
}
?>