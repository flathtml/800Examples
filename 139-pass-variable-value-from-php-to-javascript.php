<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>  
 <body>
   <h3>Example - Demonstrate how PHP passes variable value to JavaScript</h3>
 <p id="intput">This is outside PHP</p>  
 <p id="output"></p>
<div id="dom-target" style="display: none;">
    <?php 
        $output = "This is in PHP"; //Again, do some operation, get the output.
        echo htmlspecialchars($output); /* You have to escape because the result
                                           will not be valid HTML otherwise. */
    ?>
</div>
<script>
    var div = document.getElementById("dom-target");
    var myData = div.textContent;
	document.getElementById("output").innerHTML = myData;
</script>
 
 </body>
</html>