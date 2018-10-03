<html>
<body>
<h3>EXAMPLE : Upload using URL</h3>
<?php
//$url = "blob:http://localhost/b8e43b99-5360-4a2b-b07b-52f1a92646a5";
$url = "http://theonlytutorials.com/wp-content/uploads/2014/05/blog-logo1.png";
$name = basename($url);
try {
   $files = file_get_contents($url);
    if ($files) {
        $stored_name = time() . $name;
        file_put_contents("upload/$stored_name", $files);
		//echo $files;
		echo "File Uploaded to upload folder";
    }
}catch (Exception $e){
}
?>
</body>
</html>