<?php
include 'config.php';

$id = $_POST['id'];

$db->query('DELETE FROM user WHERE `id` = ' . $id);