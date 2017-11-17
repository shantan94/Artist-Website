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
  <title>Home Page</title>
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
  <h4>This is the third assignment for Shantan Reddy Kothapalli for COMP 5335</h4>
  </div>
  </div>
  </div>
  <div class="container move">
  <div class="row">
  <div class="col-md-2 hello">
  <font size="4"><i class="glyphicon glyphicon-info-sign hi"></i><span> About us</span></font><br/><br/>
  <span class="id">What this is about and other stuff</span><br/>
  <div class="id1"><a href="AboutUs.php"><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-paperclip"></i> Visit Page</button></a></div>
  </div>
  <div class="col-md-2 hello">
  <font size="4"><i class="glyphicon glyphicon-th-list hi"></i><span> Artist List</span></font><br/><br/>
  <span class="id">Displays a list of artist names as links<span><br/>
  <div class="id1"><a href="Part01_ArtistsDataList.php"><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-paperclip"></i> Visit Page</button></a></div>
  </div>
  <div class="col-md-2 hello">
  <font size="4"><i class="glyphicon glyphicon-user hi"></i><span> Single Artist</span></font><br/><br/>
  <span class="id">Displays information for a single artist</span><br/>
  <div class="id1"><a href="Part02_SingleArtist.php?id=19"><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-paperclip"></i> Visit Page</button></a></div>
  </div>
  <div class="col-md-2 hello">
  <font size="4"><i class="glyphicon glyphicon-picture hi"></i><span> Single Work</span></font><br/><br/>
  <span class="id">Displays information for single work</span><br/>
  <div class="id1"><a href="Part03_SingleWork.php?id=394"><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-paperclip"></i> Visit Page</button></a></div>
  </div>
  <div class="col-md-2 hello">
  <font size="4"><i class="glyphicon glyphicon-search hi"></i><span> Search</span></font><br/><br/>
  <span class="id">Performs search on ArtWorks tables</span><br/>
  <div class="id1"><a href="Part04_Search.php"><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-paperclip"></i> Visit Page</button></a></div>
  </div>
  </div>
  </div>
 </body>
</html>
