<!DOCTYPE html>
<html>
<body>
<?php
$productNum = $_POST["productNum"];
$name = $_POST["name"];
$category = $_POST["category"];
$content = $_POST["content"];
$newline = "\r\n";
$comma = ",";
 
$myFile2 = "091-file.txt";
$myFileLink2 = fopen($myFile2, 'a') or die("Can't open file.");
$newContents = $newline . $productNum .$comma. $name.$comma . $category.$comma . $content.$comma;
fwrite($myFileLink2, $newContents);
fclose($myFileLink2);
header('Location: 091-output-page.html');
?>
</body>
</html>