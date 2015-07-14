<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/class/MysqliDb.php');

$mysqli = new mysqli("localhost","prodzphq_vonzuha","TQaWEHxtk","prodzphq_vonzuhause24");

$db = new MysqliDb ($mysqli);

?>