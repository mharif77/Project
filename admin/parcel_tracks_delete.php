<?php
require_once("dbconfig.php");
$id = $_GET['id'];

$result = $db->query("DELETE FROM parcel_tracks WHERE id = '$id'");


if ($result) {
    header("location:parcel_tracks _list.php");
}
?>