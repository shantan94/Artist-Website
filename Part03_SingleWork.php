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
  <title>Single Work</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="fullcss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 <?php
 $db=mysqli_connect("localhost","root","root","art");
 $id=$_GET['id'];
 if($id==null)
 header('Location:Error.php');
 else
 $query="select * from artworks join artists on artworks.ArtistID=artists.ArtistID and ArtWorkID=$id";
 ?>
  <nav class="navbar navbar-inverse navwid">
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
   <div class="container">
  <div class="artist2">
  <?php
  $result=mysqli_query($db,$query);
   if(mysqli_num_rows($result)==0){
			 header('Location:Error.php');
	  }
   else{
   while($row=mysqli_fetch_array($result)){
   $id1=$row['ArtistID'];
   echo '<h2>'.$row['Title'].'</h2>';
   echo '<h6>By '.'<a href="Part02_SingleArtist.php?id='.$id1.'">'.$row['FirstName'].' '.$row['LastName'].'</h6>';
    }
   }
  ?>
  <div class="image">
  <div class="row">
  <div class="col-md-3">
  <a href="#" data-toggle="modal" data-target="#myModal">
  <?php
  $result=mysqli_query($db,$query);
  while($row=mysqli_fetch_array($result)){
   echo '<img src="images/art/works/medium/'.$row['ImageFileName'].'.jpg" class="thumbnail img-responsive">';
    }
   ?>
   </a>
   </div>
   <div class="col-md-3">
   <div class="des">
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['Description'];
    }
   ?>
   <div class="des1">
   <div class="innerdes1">
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   $msrp=$row['MSRP'];
   echo '<h4>$'.number_format($msrp,2).'</h4>';
    }
   ?>
   </div>
   <div class="btn-group">
   <button type="button" class="btn btn-default">
   <i class="glyphicon glyphicon-gift blue"></i>
   <span class="textcolor">Add to Wish List</span>
   </button>
   <button type="button" class="btn btn-default">
   <i class="glyphicon glyphicon-shopping-cart blue"></i>
   <span class="textcolor">Add to Shopping Cart</span>
   </button>
   </div>
   </div>
   <div class="panel panel-default despanel">
   <table class="table table-bordered">
   <thead>
   <tr><th class="active" colspan="2"><h4>Product Details</h4></th></tr>
   </thead>
   <tbody>
   <tr><td class="intd"><span class="infont">Date:</span>
   <td>
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['YearOfWork'];
   }
   ?>
   </td>
   </td></tr>
   <tr><td class="intd"><span class="infont">Medium:</span>
   <td>
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['Medium'];
   }
   ?>
   </td>
   </td></tr>
   <tr><td class="intd"><span class="infont">Dimensions:</span>
   <td>
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['Width'].'cm x '.$row['Height'].'cm';
   }
   ?>
   </td>
   </td></tr>
   <tr><td class="intd"><span class="infont">Home:</span>
   <td>
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['OriginalHome'];
   }
   ?>
   </td>
   </td></tr>
   </td></tr>
   <tr><td class="intd"><span class="infont">Genres:</span>
   <td>
   <?php
   $query1="select * from artworks aw join artworkgenres ag on aw.ArtWorkID=ag.ArtWorkID join genres g on ag.GenreID=g.GenreID and aw.ArtWorkID=$id";
   $result1=mysqli_query($db,$query1);
   while($row=mysqli_fetch_array($result1)){
   echo '<a href="#">'.$row['GenreName'].'</a><br/>';
   }
   ?>
   </td>
   </td></tr>
   <tr><td class="intd"><span class="infont">Subjects:</span>
   <td>
   <?php
   $query2="select * from artworks aw join artworksubjects asu on aw.ArtWorkID=asu.ArtWorkID join subjects s on asu.SubjectID=s.SubjectID and aw.ArtWorkID=$id";
   $result2=mysqli_query($db,$query2);
   while($row=mysqli_fetch_array($result2)){
   echo '<a href="#">'.$row['SubjectName'].'</a><br/>';
   }
   ?>
   </td>
   </td></tr>
   </tbody>
   </table>
   </div>
   </div>
	</div>
	<div class="col-md-3 infopan">
	<div class="panel panel-info">
	<table class="table sales">
	<div class="panel-heading">Sales</div>
	<tbody>
	<tr><td></td></tr>
	<?php
	$query3="select * from artworks aw join orderdetails od on aw.ArtWorkID=od.ArtWorkID join orders o on od.OrderID=o.OrderID and aw.ArtWorkID=$id";
    $result3=mysqli_query($db,$query3);
    while($row=mysqli_fetch_array($result3)){
	$date=explode(" ",$row['DateCreated']);
	$truedate=explode("-",$date[0]);
	if(substr($truedate[1],-1)!='0')
    echo '<tr><td><a href="#" class="ina">'.substr($truedate[1],-1).'/'.$truedate[2].'/'.substr($truedate[0],2).'</a></td></tr>';
	else
	echo '<tr><td><a href="#" class="ina">'.$truedate[1].'/'.$truedate[2].'/'.substr($truedate[0],2).'</a></td></tr>';
	}
	?>
	<tr><td></td></tr>
	</tbody>
	</table>
	</div>
	</div>
  </div>
  <div>
   <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">x</button>
  <h5 class="modal-title">
  <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['Title'].' ('.$row['YearOfWork'].') by '.$row['FirstName'].' '.$row['LastName'];
   }
  ?>
  </h5>
  </div>
   <div class="modal-body">
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo '<img src="images/art/works/medium/'.$row['ImageFileName'].'.jpg" class="thumbnail" height="350" width="350">';
   }
   ?>
   </div>
   <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
	</div>
   </div>
   </div>
 </body>
</html>
