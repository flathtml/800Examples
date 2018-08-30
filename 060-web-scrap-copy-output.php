<!DOCTYPE html>
<html>
<title>Read the input XML file, process the input XML and copy the input XML file to an output XML file</title>
<head>
<!-- This code Reads the input XML file, processes the input XML and copies the input XML file to an output XML file-->
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!//http://www.w3schools.com/w3css/4/w3.css !>
      <link rel="stylesheet" href="references/w3.css"> 
      
	  <!//http://www.w3schools.com/lib/codemirror.css !>
      <link rel="stylesheet" href="references/codemirror.css">
	  
      <!//http://www.w3schools.com/lib/codemirror.js !>
	  <script src="references/codemirror.js"></script>
	  
	  <!//https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css !>
      <link rel="stylesheet" href="references/bootstrap.min.css">
   
      <!//https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js !>
	  <script src="references/bootstrap.min.js"></script>
	  
	  <!//https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js !>
	  <script src="references/jquery.min.js"></script>
	 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Playball|Righteous" rel="stylesheet">
<Style>
 .navbar .navbar-nav {
    display: inline-block;
    float: none;
}
 .navbar .navbar-collapse {
    text-align: left;
}
.makeup1 {
    font-weight: bold;
    color: #000000;
    border: 1px solid green;
}
 .makeup2 {
    border: 1px solid green;
}

 .footer {
    text-align: center;
}

 .padding {
    padding-left: 3%;
    padding-right: 3%;
    padding-top: 3%;
    padding-bottom: 3%;
    text-align: justify;
}
  
 .top {
    position: relative;
    background-color: #ffffff;
    height: 68px;
    padding-top: 20px;
    line-height: 50px;
    overflow: hidden;
    z-index: 1;
}
.w3-right {
    float: right!important}
.w3-wide {
    letter-spacing: 4px}
 .w3schools-logo {
    font-family: Righteous;
    text-decoration: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 37px;
    letter-spacing: 3px;
    color: #555555;
    display: block;
    position: absolute;
    top: 17px;
    padding-left: 2px;
}
.w3schools-logo .dotcom {
    color: #4CAF50;
}
.w3schools-logo:hover {
    color: #555555;
	text-decoration: none;
}

@media (max-width: 992px) {
    .top {
    height: 100px;
}
 .top .w3schools-logo {
    position: relative;
    top: 0;
    width: 100%;
    text-align: center;
    margin: auto;
}
 .toptext {
    width: 100%;
    text-align: center;
}
 }

@media screen and (max-width: 600px) {
    .top {
    height: 68px;
}
 .toptext {
    display: none;
}
 }
 
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
</head> 
<body class="w3-container">
<div class="container-fluid">
   <div class="top">
      <a class="w3schools-logo" href="index.html">FlatHTML<span class="dotcom">.com</span></a>
      <div class="w3-right  toptext w3-wide ">Responsive Web Development made easy</div>
   </div>
   
   <div>&nbsp;</div>
<div class="row">
	<div class="col-md-3">&nbsp; </div>
	<div  align="center" class="col-md-6 shadow p-4 mb-4 border border-primary" style="background-color:pink">
		<h2>Scrap the contents of Home Depot's 10-k report for getting its Financial statements and copy the output to another file</h2>
		<a href="https://www.sec.gov/Archives/edgar/data/354950/000035495018000019/hd_10k01282018.htm#s89A1997399A75C598341884EAF92ACC8"target=_blank">Input File : Home Depot 2017 10-K report</a> &nbsp;&nbsp;
		 <a href="060-output.html"target=_blank">Output File : 060-output.html</a> &nbsp;&nbsp;
</div>
	<div class="col-md-3">&nbsp; </div>      
</div>  
</body>
</html>
<?php
$html=file_get_contents("https://www.sec.gov/Archives/edgar/data/354950/000035495018000019/hd_10k01282018.htm#s89A1997399A75C598341884EAF92ACC8");
$the_start = explode('We believe that our audits provide a reasonable basis for our opinion',$html);
$the_end = explode('NOTES&#160;TO CONSOLIDATED FINANCIAL STATEMENTS',$the_start[1]);
echo $the_end[0];
$file = '060-output.html';
file_put_contents($file, $the_start[1]);
?>
 