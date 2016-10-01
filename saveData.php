<?php
    require_once 'connection.php';
    $db = connect();
    $cost = $_POST['cost'];
    $sales = $_POST['sales'];
    $id = $_POST['id'];
    $sql = "UPDATE plot set cost=:cost, sales=:sales WHERE id=:id";
    $sql_prepare = $db->prepare($sql);
    $sql_prepare->execute(array(':cost'=> $cost, ':sales'=>$sales,':id'=>$id));

    //header('Content-type: application/json; charset=utf-8');
    echo json_encode("success", JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
