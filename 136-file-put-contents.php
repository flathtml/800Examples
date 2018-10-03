<?php
$content = $_POST["content"];
echo file_put_contents("136-output.txt",$content);
?>