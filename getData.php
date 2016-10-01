<?php
    require_once 'connection.php';
    $db = connect();
    $sql = "SELECT * from plot ORDER BY cost";
    $result = $db->query($sql);
    $list = array();
    while ($row = $result->fetch((PDO::FETCH_ASSOC)))
    {
	$list[] = $row;
    }
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($list, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
