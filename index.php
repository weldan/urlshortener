<?php
require 'config.php';

if (isset($_GET['id']) ) {
    
    $stmt = $db->prepare("select link from links where code = :code");
    $var = array(":code" => $_GET['id']);
    $stmt->execute($var);
    $result = $stmt->fetchAll();
    if ($stmt->rowCount() == 1) {
        header("Location: ".$result[0]['link']);
        exit;
    }else {
        echo "<h1>Invalid link!</h1>";
    }
}
?>