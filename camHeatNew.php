<?php

$points = $_POST['pts'];
$uid = $_POST['uid'];
$sql = "CALL cameraHeatCreatNew('$uid', '$points')";

$result = $mysqli->prepare($sql);
$result->execute();
$result->close();

?>
