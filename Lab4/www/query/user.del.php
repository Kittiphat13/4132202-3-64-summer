<?php
require_once('conDB.php');

$name = $_POST['name'];

$sql = "DELETE FROM tb_user WHERE `name`='$name' ";

try {
    $mysqli->query($sql);
} catch (Exception $e) {
    echo $e->getMessage();
}