<!--
Full Name: Shantan Reddy Kothapalli
First Name: Shantan
Middle Name: Reddy
LastName: Kothapalli

Project 3: Database Driven Webpages
Due Date: November 20th 2016
-->
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>AboutUs</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="fullcss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 <nav class="navbar navbar-inverse">
  <div class="navbar-header">
  <div class="navbar-brand">Assign 1</div>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
  <li class="active"><a href="default.php">Home</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="Part01_ArtistsDataList.php">Artist Data List (Part 1)</a></li>
          <li><a href="Part02_SingleArtist.php?id=19">Single Artist (Part 2)</a></li>
          <li><a href="Part03_SingleWork.php?id=394">Single Work (Part 3)</a></li>
          <li><a href="Part04_Search.php">Search (Part 4)</a></li>
        </ul>
      </li>
	</ul>
	<ul class="nav navbar-nav navbar-right shift">
	<li><form class="navbar-form" id="register" method="post" action="Part04_Search.php">
        <div class="form-group">
		    <div class="navbar-text">Shantan Reddy Kothapalli</div>
            <input type="text" class="form-control" name="title1" id="search" placeholder="Search Paintings">
			<input type="submit" value="Search" id="submit" class="btn btn-primary">
        </div>
        </form></li>
	</ul>
	</div>
  </nav>	
  <div class="jumbotron">
  <div class="container contain">
  <div class="row">
  <h1>Welcome to Assignment #3</h1>
  <h4>This is the third assignment for Shantan Reddy Kothapalli for COMP 5335 dated: 11/15/2016</h4>
  </div>
  </div>
  </div>
 </body>
</html>
