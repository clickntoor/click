<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>clickntoor|Hassle free trips at your finger trips </title>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Latest compiled and minified JavaScript -->
		 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,300,400italic,400,600italic,600,700italic,700,800italic,800" rel="stylesheet" type="text/css">

		<link rel="short cut" href="/ico/favicon.ico">
		{{stylesheet_link_tag()}}
		{{javascript_include_tag()}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".navbar-toggle").click(function(){ 
          $("#botlist").toggle(500);});
         });
    </script>

</head>
<body>
	
	<hr id="top">

<div class="page1">

	<div class="col-xs-1"></div>
	<a href="#"  id="logo_anchor" ">{{HTML::image('assets/logobot.png','logo', array('id'=>'logo'))}}</a>
  <ul class="list-inline" id="nav-top">
    <li><a href="#">LOGIN</a></li>
    <li><a href="#">SIGN UP</a></li>
    <li><a href="#">JOIN OUR TEAM</a></li>
  </ul>  

<div class="col-xs-12"><h2>Discover great places to hang around Bangalore </h2></div>

<form class="form-inline">
       
        <a href="#"><div class="input-group">
          <input type="text" class="form-control input-lg" placeholder="Search...">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-search"></span>
          </div>
        </div></a>
       
</form>

</div>
<div id="page2">
  <p id="signup">Sign up to unlock Clickntoor</p>
  {{HTML::image('assets/img1.png','logo', array('id'=>'follow'))}} <span id="travellers">follow travellers around the globe</span>
</div>

<div id="botlogo">
<a href="#">{{HTML::image('assets/logobot.png','logo', array('id'=>'footlogo'))}}</a>
</div>
<hr id="bottom">
<footer>

  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
     <a href="#gobottom"><button type="button" class="navbar-toggle btn btn-success" data-toggle="collapse" data-target="#botlist">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button></a>
    </div>

  
      
 <div class="collapse navbar-collapse" id="botlist">
  <ul class="list-inline">
    <li><a href="#">About us</a></li>
    <li><a href="#">join our Team</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Business</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Advertise</a></li>
    <li><a href="#">Partner</a></li>
    <li><a href="#">Invest</a></li>
    <li><a href="#">Privacy</a></li>
    <li><a href="#">Sitemap</a></li>
    <li><a href="#">Policies</a></li>
    <li><a href="#">Add your College</a></li>
  </div>
  </ul>  
  <div id="gobottom></div>
</div>
</nav>




 
</footer>

</body>
</html>