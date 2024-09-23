<?php

define("HOST", "localhost");
define("USR", "root");
define("PASS", "");
define("DATABASE", "cms_db");

$db = new mysqli();

@$db->connect(HOST, USR, PASS);

@$db->select_db(DATABASE);

if ($db->connect_errno) {


    echo $db->connect_error;
    exit();
}
echo $db->error;
?>