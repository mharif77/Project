<?php
require_once("dbconfig.php");
$id = $_GET['id'];

$result = $db->query("DELETE FROM parcels WHERE id = '$id'");


if ($result) {
    header("location:parcels _list.php");
}
?>