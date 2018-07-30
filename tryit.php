
<!DOCTYPE html>
<html lang="en-US">
<head>

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
	  
<title>FlatHTML : PHP code analysis</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/w3css/4/w3.css">
<script src="http://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-3855518-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>

<script async="async" type="text/javascript" src="http://static.h-bid.com/w3schools.com/20180525/snhb-w3schools.min.js"></script>
<script type='text/javascript'>
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
gads.src = 'https://www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
var snhb = snhb || {}; snhb.queue = snhb.queue || [];
snhb.options = {
               logOutputEnabled : false,
               autoStartAuction: false,
               gdpr: {
                     mainGeo: "us",
                     reconsiderationAppealIntervalSeconds: 0
                     }
               };
               
// GPT slots
var gptAdSlots = [];
googletag.cmd.push(function() {
googletag.pubads().disableInitialLoad();               
googletag.pubads().enableSingleRequest();
  var leaderMapping = googletag.sizeMapping().
  // Mobile ad
  addSize([0, 0], [320, 50]). 
  // Vertical Tablet ad
  addSize([468, 0], [468, 60]). 
  // Horizontal Tablet
  addSize([728, 0], [728, 90]).
  // Desktop and bigger ad
  addSize([970, 0], [[728, 90], [970, 90]]).build();
  // addSize([970, 0], [728, 90]).build();
  gptAdSlots[0] = googletag.defineSlot('/16833175/TryitLeaderboard', [[728, 90], [970, 90]], 'div-gpt-ad-1428407818244-0').
  // gptAdSlots[0] = googletag.defineSlot('/16833175/TryitLeaderboard', [728, 90], 'div-gpt-ad-1428407818244-0').
  defineSizeMapping(leaderMapping).addService(googletag.pubads());
  googletag.pubads().setTargeting("content","try" + (function () {
    var folder = location.pathname;
    folder = folder.replace("/", "");
    folder = folder.substr(0, folder.indexOf("/"));
    return folder;
  })()
  );
  snhb.queue.push(function(){
    
    snhb.startAuction(["try_it_leaderboard"]);
    
  });
googletag.enableServices();
});
</script>
<script src="http://static.h-bid.com/gdpr/cmp.stub.js" type="text/javascript"></script>
<script>
if (window.addEventListener) {              
    window.addEventListener("resize", browserResize);
} else if (window.attachEvent) {                 
    window.attachEvent("onresize", browserResize);
}
var xbeforeResize = window.innerWidth;

function browserResize() {
    var afterResize = window.innerWidth;
    if ((xbeforeResize < (970) && afterResize >= (970)) || (xbeforeResize >= (970) && afterResize < (970)) ||
        (xbeforeResize < (728) && afterResize >= (728)) || (xbeforeResize >= (728) && afterResize < (728)) ||
        (xbeforeResize < (468) && afterResize >= (468)) ||(xbeforeResize >= (468) && afterResize < (468))) {
        xbeforeResize = afterResize;
        
        snhb.queue.push(function(){  snhb.startAuction(["try_it_leaderboard"]); });
         
    }
    if (window.screen.availWidth <= 768) {
      restack(window.innerHeight > window.innerWidth);
    }
    fixDragBtn();
    showFrameSize();    
}
</script>
<style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  color:#000000;
  margin:0px;
  font-size:100%;
}
.trytopnav {
  height:40px;
  overflow:hidden;
  min-width:380px;
  position:absolute;
  width:100%;
  top:99px;
}
.w3-bar-item:hover {
  color:#999999 !important;
}
a.w3schoolslink {
  padding:0 !important;
  display:inline !important;
}
a.w3schoolslink:hover,a.w3schoolslink:active {
  text-decoration:underline !important;
  background-color:transparent !important;
}
#dragbar{
  position:absolute;
  cursor: col-resize;
  z-index:3;
  padding:5px;
}
#shield {
  display:none;
  top:0;
  left:0;
  width:100%;
  position:absolute;
  height:100%;
  z-index:4;
}
#framesize span {
  font-family:Consolas, monospace;
}
#container {
  background-color:#f1f1f1;
  width:100%;
  overflow:auto;
  position:absolute;
  top:138px;
  bottom:0;
  height:auto;
}
#textareacontainer, #iframecontainer {
  float:left;
  height:100%;
  width:50%;
}
#textarea, #iframe {
  height:100%;
  width:100%;
  padding-bottom:10px;
  padding-top:1px;
}
#textarea {
  padding-left:10px;
  padding-right:5px;  
}
#iframe {
  padding-left:5px;
  padding-right:10px;  
}
#textareawrapper {
  width:100%;
  height:100%;
  background-color: #ffffff;
  position:relative;
  box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
#iframewrapper {
  width:100%;
  height:100%;
  -webkit-overflow-scrolling: touch;
  background-color: #ffffff;
  box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
#textareaCode {
  background-color: #ffffff;
  font-family: consolas,"courier new",monospace;
  font-size:15px;
  height:100%;
  width:100%;
  padding:8px;
  resize: none;
  border:none;
  line-height:normal;
  overflow:auto;
  word-wrap:break-word;
}
#iframeResult, #iframeSource {
  background-color: #ffffff;
  height:100%;
  width:100%;  
}
#textareacontainer.horizontal,#iframecontainer.horizontal{
  height:50%;
  float:none;
  width:100%;
}
#textarea.horizontal{
  height:100%;
  padding-left:10px;
  padding-right:10px;
}
#iframe.horizontal{
  height:100%;
  padding-right:10px;
  padding-bottom:10px;
  padding-left:10px;  
}
#container.horizontal{
  min-height:200px;
  margin-left:0;
}
#tryitLeaderboard {
  overflow:hidden;
  text-align:center;
  margin-top:5px;
  height:90px;
}
@media screen and (max-width: 727px) {
  .trytopnav {top:70px;}
  #container {top:108px;}
}
@media screen and (max-width: 467px) {
  .trytopnav {top:60px;}
  #container {top:98px;}
}
@media only screen and (max-device-width: 768px) {
  #iframewrapper {overflow: auto;}
  #container     {min-width:320px;}
  .stack         {display:none;}
  #tryhome       {display:block;}
}

@font-face {
font-family: 'fontawesome';
src:url('../lib/fonts/fontawesome.eot?14663396');
src:url('../lib/fonts/fontawesome.eot?14663396#iefix') format('embedded-opentype'),
    url('../lib/fonts/fontawesome.woff?14663396') format('woff'),
    url('../lib/fonts/fontawesome.ttf?14663396') format('truetype'),
    url('../lib/fonts/fontawesome.svg?14663396#fontawesome') format('svg');
font-weight:normal;
font-style:normal;
}
.fa {
  display:inline-block;
  font:normal normal normal 14px/1 FontAwesome;
  font-size:inherit;
  text-rendering:auto;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
  transform:translate(0,0);
}
.fa-2x {
  font-size:2em;
}
.fa-home:before {content: '\e800'; }
.fa-rotate:before {content: '\e813'; }
.fa-save:before {content: '\e804'; }
#iframewrapper {
	
}
</style>
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
         letter-spacing: 2px}
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
         color: #2196F3!important;
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
         .center {
         text-align: center;
         font-weight: bold;
         background-color : yellow;
         border: 1px solid green;
         }
         div.ex1 {
         width:90%;
         margin: auto;
         background-color : yellow;
         border: 1px solid #73AD21;
         }
         div.ex2 {
         width:90%;
         margin: auto;
         color : red;
         }
         .footer {
         text-align: center;
         }
         * {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
         }
         body {
         color:#000000;
         margin:0px;
         font-size:100%;
         }
         .trytopnav {
         height:40px;
         overflow:hidden;
         min-width:380px;
         position:absolute;
         width:100%;
         top:99px;
         }
         .w3-bar .w3-bar-item:hover {
         color:#757575 !important;
         }
         a.w3schoolslink {
         padding:0 !important;
         display:inline !important;
         }
         a.w3schoolslink:hover,a.w3schoolslink:active {
         text-decoration:underline !important;
         background-color:transparent !important;
         }
         #dragbar{
         position:absolute;
         cursor: col-resize;
         z-index:3;
         padding:5px;
         }
         #shield {
         display:none;
         top:0;
         left:0;
         width:100%;
         position:absolute;
         height:100%;
         z-index:4;
         }
         #framesize span {
         font-family:Consolas, monospace;
         }
         #container {
         background-color:#f1f1f1;
         width:100%;
         overflow:auto;
         position:absolute;
         top:120px;
         bottom:0;
         height:auto;
         }
         #textareacontainer, #iframecontainer {
         float:left;
         height:100%;
         width:50%;
         }
         #textarea, #iframe {
         height:100%;
         width:100%;
         padding-bottom:10px;
         padding-top:1px;
         }
         #textarea {
         padding-left:10px;
         padding-right:5px;  
         }
         #iframe {
         padding-left:5px;
         padding-right:10px;  
         }
         #textareawrapper {
         width:100%;
         height:100%;
         background-color: #ffffff;
         position:relative;
         box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
         }
         #iframewrapper {
         width:100%;
         height:100%;
         -webkit-overflow-scrolling: touch;
         background-color: #ffffff;
         box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
         }
         #textareaCode {
         background-color: #ffffff;
         font-family: consolas,"courier new",monospace;
         font-size:15px;
         height:100%;
         width:100%;
         padding:8px;
         resize: none;
         border:none;
         line-height:normal;    
         }
         .CodeMirror.cm-s-default {
         line-height:normal;
         padding: 4px;
         height:100%;
         width:100%;
         }
         #iframeResult, #iframeSource {
         background-color: #ffffff;
         height:100%;
         width:100%;  
         }
         #stackV {background-color:#999999;}
         #stackV:hover {background-color:#BBBBBB !important;}
         #stackV.horizontal {background-color:transparent;}
         #stackV.horizontal:hover {background-color:#BBBBBB !important;}
         #stackH.horizontal {background-color:#999999;}
         #stackH.horizontal:hover {background-color:#999999 !important;}
         #textareacontainer.horizontal,#iframecontainer.horizontal{
         height:50%;
         float:none;
         width:100%;
         }
         #textarea.horizontal{
         height:100%;
         padding-left:10px;
         padding-right:10px;
         }
         #iframe.horizontal{
         height:100%;
         padding-right:10px;
         padding-bottom:10px;
         padding-left:10px;  
         }
         #container.horizontal{
         min-height:200px;
         margin-left:0;
         }
         #tryitLeaderboard {
         overflow:hidden;
         text-align:center;
         margin-top:5px;
         height:90px;
         }
         .w3-dropdown-content {width:350px}
         @media screen and (max-width: 992px) {
         .trytopnav {top:70px;}
         #container {top:160px;}
         }
         @media screen and (max-width: 600px) {
         .trytopnav {top:60px;}
         #container {top:120px;}
         .w3-dropdown-content {width:100%}
         }
         @media only screen and (max-device-width: 768px) {
         #iframewrapper {overflow: auto;}
         #container     {min-width:320px;}
         .stack         {display:none;}
         #tryhome       {display:block;}
         }
         @font-face {
         font-family: 'fontawesome';
         src:url('../lib/fonts/fontawesome.eot?14663396');
         src:url('../lib/fonts/fontawesome.eot?14663396#iefix') format('embedded-opentype'),
         url('../lib/fonts/fontawesome.woff?14663396') format('woff'),
         url('../lib/fonts/fontawesome.ttf?14663396') format('truetype'),
         url('../lib/fonts/fontawesome.svg?14663396#fontawesome') format('svg');
         font-weight:normal;
         font-style:normal;
         }
         .fa {
         display:inline-block;
         font:normal normal normal 14px/1 FontAwesome;
         font-size:inherit;
         text-rendering:auto;
         -webkit-font-smoothing:antialiased;
         -moz-osx-font-smoothing:grayscale;
         transform:translate(0,0);
         }
         .fa-2x {
         font-size:2em;
         }
         .fa-home:before {content: '\e800'; }
         .fa-save:before {content: '\e804'; }
         .fa-rotate:before {content: '\e813'; }
         .fa-menu:before { content: '\f0c9'; }
         .loader {
         border: 6px solid #f3f3f3; /* Light grey */
         border-top: 6px solid #3498db; /* Blue */
         border-radius: 50%;
         width: 60px;
         height: 60px;
         animation: spin 2s linear infinite;
         }
         #saveLoader {
         margin:20px;
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
         #iframewrapper {
         }
         #controlbar{
         padding-left:10px;
         padding-right:10px;
         }
      </style>
<!--[if lt IE 8]>
<style>
#textareacontainer, #iframecontainer {width:48%;}
#container {height:500px;}
#textarea, #iframe {width:90%;height:450px;}
#textareaCode, #iframeResult {height:450px;}
.stack {display:none;}
</style>
<![endif]-->
</head>
<body>
 <script src="references/header-tryit.js"></script>
	  
      <div id="controlbar">
         <div class="w3-light-grey" style="border-top:1px solid #f1f1f1;overflow:auto">
            <button class="w3-button w3-bar-item w3-blue w3-hover-white " onclick="restack(currentStack)">Change Orientation</button>
            <span class="w3-right w3-hide-small" style="padding:8px 0;display:block;float:right;"><span id="framesize"></span></span>
         </div>
      </div>
<div id="shield"></div>

<a href="javascript:void(0)" id="dragbar"></a>
<div id="container">
  <div id="textareacontainer">
    <div id="textarea">
      <div id="textareawrapper">
        <div id="textareaCode"></div>
       </div>
    </div>
  </div>
  <div id="iframecontainer">
    <div id="iframe">
      <div id="iframewrapper">
        <iframe id="iframeResult" frameborder="0" src="046-getcd.html"></iframe>
      </div>
    </div>
  </div>
</div>


<script type="text/template" id="myHTML">
1	&lt;html&gt;
2	&lt;head&gt;
3	&lt;style&gt;
4	table {
5	    width: 100%;
6	    border-collapse: collapse;
7	}
8	
9	table, td, th {
10	    border: 1px solid black;
11	    padding: 5px;
12	}
13	
14	th {text-align: left;}
15	&lt;/style&gt;
16	
17	&lt;script&gt;
18	function showCD(str) {
19	  if (str=="") {
20	    document.getElementById("txtHint").innerHTML="";
21	    return;
22	  } 
23	  if (window.XMLHttpRequest) {
24	    // code for IE7+, Firefox, Chrome, Opera, Safari
25	    xmlhttp=new XMLHttpRequest();
26	  } else {  // code for IE6, IE5
27	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
28	  }
29	  xmlhttp.onreadystatechange=function() {
30	    if (this.readyState==4 && this.status==200) {
31	      document.getElementById("txtHint").innerHTML=this.responseText;
32	    }
33	  }
34	  xmlhttp.open("GET","046-getcd.php?q="+str,true);
35	  xmlhttp.send();
36	}
37	&lt;/script&gt;
38	&lt;/head&gt;
39	&lt;body&gt;
40	
41	&lt;form&gt;
42	Select a CD:
43	&lt;select name="cds" onchange="showCD(this.value)"&gt;
44	&lt;option value=""&gt;Select a CD:&lt;/option&gt;
45	&lt;option value="Bob Dylan"&gt;Bob Dylan&lt;/option&gt;
46	&lt;option value="Bee Gees"&gt;Bee Gees&lt;/option&gt;
47	&lt;option value="Cat Stevens"&gt;Cat Stevens&lt;/option&gt;
48	&lt;/select&gt;
49	&lt;/form&gt;
50	&lt;div id="txtHint"&gt;&lt;b&gt;CD info will be listed here...&lt;/b&gt;&lt;/div&gt;
51	
52	&lt;/body&gt;
53	&lt;/html&gt;


</script>

<script>
var currentStack=true;
if ((window.screen.availWidth <= 768 && window.innerHeight > window.innerWidth) || "" == " horizontal") {restack(true);}
function restack(horizontal) {
    var tc, ic, t, i, c, f, sv, sh, d, height, flt, width;
    tc = document.getElementById("textareacontainer");
    ic = document.getElementById("iframecontainer");
    t = document.getElementById("textarea");
    i = document.getElementById("iframe");
    c = document.getElementById("container");    
    tc.className = tc.className.replace("horizontal", "");
    ic.className = ic.className.replace("horizontal", "");        
    t.className = t.className.replace("horizontal", "");        
    i.className = i.className.replace("horizontal", "");        
    c.className = c.className.replace("horizontal", "");                        
    stack = "";
    if (horizontal) {
        tc.className = tc.className + " horizontal";
        ic.className = ic.className + " horizontal";        
        t.className = t.className + " horizontal";        
        i.className = i.className + " horizontal";                
        c.className = c.className + " horizontal";                
        stack = " horizontal";
        document.getElementById("textareacontainer").style.height = "50%";
        document.getElementById("iframecontainer").style.height = "50%";
        document.getElementById("textareacontainer").style.width = "100%";
        document.getElementById("iframecontainer").style.width = "100%";
        currentStack=false;
    } else {
        document.getElementById("textareacontainer").style.height = "100%";
        document.getElementById("iframecontainer").style.height = "100%";
        document.getElementById("textareacontainer").style.width = "50%";
        document.getElementById("iframecontainer").style.width = "50%";
        currentStack=true;        
    }
    fixDragBtn();
    showFrameSize();
}
function showFrameSize() {
  var t;
  var width, height;
  width = Number(w3_getStyleValue(document.getElementById("iframeResult"), "width").replace("px", "")).toFixed();
  height = Number(w3_getStyleValue(document.getElementById("iframeResult"), "height").replace("px", "")).toFixed();
  document.getElementById("framesize").innerHTML = "Result Size: <span>" + width + " x " + height + "</span>";
}
var dragging = false;
var stack;
function fixDragBtn() {
  var textareawidth, leftpadding, dragleft, containertop, buttonwidth
  var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
  if (stack != " horizontal") {
    document.getElementById("dragbar").style.width = "5px";    
    textareasize = Number(w3_getStyleValue(document.getElementById("textareawrapper"), "width").replace("px", ""));
    leftpadding = Number(w3_getStyleValue(document.getElementById("textarea"), "padding-left").replace("px", ""));
    buttonwidth = Number(w3_getStyleValue(document.getElementById("dragbar"), "width").replace("px", ""));
    textareaheight = w3_getStyleValue(document.getElementById("textareawrapper"), "height");
    dragleft = textareasize + leftpadding + (leftpadding / 2) - (buttonwidth / 2);
    document.getElementById("dragbar").style.top = containertop + "px";
    document.getElementById("dragbar").style.left = dragleft + "px";
    document.getElementById("dragbar").style.height = textareaheight;
    document.getElementById("dragbar").style.cursor = "col-resize";
    
  } else {
    document.getElementById("dragbar").style.height = "5px";
    if (window.getComputedStyle) {
        textareawidth = window.getComputedStyle(document.getElementById("textareawrapper"),null).getPropertyValue("height");
        textareaheight = window.getComputedStyle(document.getElementById("textareawrapper"),null).getPropertyValue("width");
        leftpadding = window.getComputedStyle(document.getElementById("textarea"),null).getPropertyValue("padding-top");
        buttonwidth = window.getComputedStyle(document.getElementById("dragbar"),null).getPropertyValue("height");
    } else {
        dragleft = document.getElementById("textareawrapper").currentStyle["width"];
    }
    textareawidth = Number(textareawidth.replace("px", ""));
    leftpadding = Number(leftpadding .replace("px", ""));
    buttonwidth = Number(buttonwidth .replace("px", ""));
    dragleft = containertop + textareawidth + leftpadding + (leftpadding / 2);
    document.getElementById("dragbar").style.top = dragleft + "px";
    document.getElementById("dragbar").style.left = "5px";
    document.getElementById("dragbar").style.width = textareaheight;
    document.getElementById("dragbar").style.cursor = "row-resize";        
  }
}
function dragstart(e) {
  e.preventDefault();
  dragging = true;
  var main = document.getElementById("iframecontainer");
}
function dragmove(e) {
  if (dragging) 
  {
    document.getElementById("shield").style.display = "block";        
    if (stack != " horizontal") {
      var percentage = (e.pageX / window.innerWidth) * 100;
      if (percentage > 5 && percentage < 98) {
        var mainPercentage = 100-percentage;
        document.getElementById("textareacontainer").style.width = percentage + "%";
        document.getElementById("iframecontainer").style.width = mainPercentage + "%";
        fixDragBtn();
      }
    } else {
      var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
      var percentage = ((e.pageY - containertop + 20) / (window.innerHeight - containertop + 20)) * 100;
      if (percentage > 5 && percentage < 98) {
        var mainPercentage = 100-percentage;
        document.getElementById("textareacontainer").style.height = percentage + "%";
        document.getElementById("iframecontainer").style.height = mainPercentage + "%";
        fixDragBtn();
      }
    }
    showFrameSize();    
  }
}
function dragend() {
  document.getElementById("shield").style.display = "none";
  dragging = false;
  if (window.editor) {
    window.editor.refresh();
  }  
}
if (window.addEventListener) {              
  document.getElementById("dragbar").addEventListener("mousedown", function(e) {dragstart(e);});
  document.getElementById("dragbar").addEventListener("touchstart", function(e) {dragstart(e);});
  window.addEventListener("mousemove", function(e) {dragmove(e);});
  window.addEventListener("touchmove", function(e) {dragmove(e);});
  window.addEventListener("mouseup", dragend);
  window.addEventListener("touchend", dragend);
  window.addEventListener("load", fixDragBtn);
  window.addEventListener("load", showFrameSize);
}
function colorcoding() {
    var text = document.getElementById("myHTML").innerHTML;
    //text = text.replace(/&/g, "&amp;");
    text = text.replace(/\t/g, "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");   
    text = text.replace(/  /g, " &nbsp;");  
    //text = text.replace(/</g, "&lt;");
    //text = text.replace(/>/g, "&gt;");
    text = text.replace(/(?:\r\n|\r|\n)/g, '<br>');
    text = text.replace(/<br> /g, "<br>&nbsp;");  
    text = w3CodeColorize(text);
    document.getElementById("textareaCode").innerHTML = text;
}
colorcoding();
function w3_getStyleValue(elmnt,style) {
    if (window.getComputedStyle) {
        return window.getComputedStyle(elmnt,null).getPropertyValue(style);
    } else {
        return elmnt.currentStyle[style];
    }
}
</script>
</body>
</html>