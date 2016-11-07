<?php
$mysqli = mysqli_connect("localhost", "taylor", "b^CGDQ6wRD8s", "taylor");
if ($mysqli->connect_errno)
{
	die;
}

$GLOBALS['mysqli'] = $mysqli;

function getCount() {
	$res = $GLOBALS['mysqli']->query("SELECT * FROM `chucktesta`");
	if($res->num_rows > 0) {
		return $res->num_rows;
	}
	else {
		return 0;
	}
}

function insertDood() {
	$ip = $GLOBALS['mysqli']->real_escape_string($_SERVER['REMOTE_ADDR']);
	$res = $GLOBALS['mysqli']->query("SELECT * FROM `chucktesta` WHERE `ip`='$ip'");
	if($res->num_rows > 0) return;
	$GLOBALS['mysqli']->query("INSERT INTO `chucktesta` VALUES('', '$ip', '".time()."')");
}