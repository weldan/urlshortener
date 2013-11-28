<?php
require '../config.php';

if ($_POST) {

    if (!isset($_POST['code']) || empty($_POST['code'])) {
        $code = substr(sha1(rand()), 0, 5);
    }else {
        $code = $_POST['code'];
    }
    
    if (!isset($_POST['link']) || empty($_POST['link']) ) {
        header("Location: ../submit.php");
        exit;
    }
		if(strpos($URL, "http://") !== false) {
			$link = $_POST['link'];
    }else {
			$link = "http://".$_POST['link'];
		}

    $stmt = $db->prepare("insert into links(code,link) values(:code, :link)");
    $vars = array(
        ":code" => $code,
        ":link" => $link
    );
    $stmt->execute($vars);
    
    echo "<h1>Short link: <a href='http://weldan.kd.io/link/".$code."'>http://weldan.kd.io/link/".$code."</a> </h2>";

}

?>
