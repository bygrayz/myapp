<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello World!</title>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
     $(document).ready(function(){
       $(".btn-slide").click(function(){ $("#panel").slideToggle("show");
         $(this).toggleClass("active"); return false;
       });
     });
  </script>
  <style type="text/css">
  
body {
	margin: 0 auto;
	padding: 0;
	width: 570px;
	font: 75%/120% Arial, Helvetica, sans-serif;
}
a:focus {
	outline: none;
}
#panel {
	background: #754c24;
	height: 200px;
	display: none;
}
.slide {
	margin: 0;
	padding: 0;
	border-top: solid 4px #422410;
	background-color: red;
}
.btn-slide {
	text-align: center;
	width: 144px;
	height: 31px;
	padding: 10px 10px 0 0;
	margin: 0 auto;
	display: block;
	font: bold 120%/100% Arial, Helvetica, sans-serif;
	color: #fff;
	text-decoration: none;
}
.active {
	background-position: right 12px;
}

  </style>
</head>
<body>
  <div id="panel" style="display:none;"></div>
  <p class="slide">
    <a class="btn-slide" href="#">Login</a>
  </p>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#msgid").html("Set text)))");
    });
  </script>

    <h1>Hello World!</h1>
<p>

<?php echo "It`s working!!"; ?>

</p>
<div id="msgid">
</div>

<div>
</div>

</body>
</html>
