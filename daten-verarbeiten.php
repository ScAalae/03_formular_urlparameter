<?php
$bn = isset($_POST['bn']) ? (string) $_POST['bn'] : '';
$pw = isset($_POST['pw']) ? (string) $_POST['pw'] : '';

echo " " . $bn . " " . $pw;
?>