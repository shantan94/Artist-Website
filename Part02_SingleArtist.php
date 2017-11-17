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
  <title>SingleArtist</title>
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
 $query="select * from artists where ArtistID=$id";
 ?>
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
  <div class="container">
  <div class="artist2">
  <h2>
  <?php
  $result=mysqli_query($db,$query);
   if(mysqli_num_rows($result)==0){
			 header('Location:Error.php');
	  }
   else{
   while($row=mysqli_fetch_array($result)){
   echo $row['FirstName'].' '.$row['LastName'];
    }
   }
  ?>
  </h2>
  <div class="image">
  <div class="row">
  <div class="col-md-3">
  <?php
  $result=mysqli_query($db,$query);
  while($row=mysqli_fetch_array($result)){
   echo '<img src="images/art/artists/medium/'.$row['ArtistID'].'.jpg" class="thumbnail img-responsive">';
    }
  ?>
   </div>
   <div class="col-md-3">
   <div class="des">
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['Details'];
    }
   ?>
   <div class="des1">
   <button type="button" class="btn btn-default">
   <i class="glyphicon glyphicon-heart blue"></i>
   <span class="textcolor">Add to Favorites List</span>
   </button>
   </div>
   <div class="panel panel-default despanel">
   <table class="table table-bordered">
   <thead>
   <tr><th class="active" colspan="2"><h4>Artist Details</h4></th></tr>
   </thead>
   <tbody>
   <tr><td class="intd"><span class="infont">Date:</span>
   <td>
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['YearOfBirth'].' - '.$row['YearOfDeath'];
   }
   ?>
   </td>
   </td></tr>
   <tr><td class="intd"><span class="infont">Nationality:</span>
   <td>
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo $row['Nationality'];
   }
   ?>
   </td>
   </td></tr>
   <tr><td class="intd"><span class="infont">More Info:</span>
   <td>
   <?php
   $result=mysqli_query($db,$query);
   while($row=mysqli_fetch_array($result)){
   echo '<a href='.$row['ArtistLink'].'>'.$row['ArtistLink'].'</a>';
   }
   ?>
   </td>
   </td></tr>
   </tbody>
   </table>
   </div>
   </div>
	</div>
  </div>
  <div>
  <?php
  $result=mysqli_query($db,$query);
  while($row=mysqli_fetch_array($result)){
   echo '<h4>'.'Art by '.$row['FirstName'].' '.$row['LastName'].'</h4>';
  }
  ?>
  <div class="container panelmode">
  <div class="row">
  <?php
  $query1="select * from ArtWorks where ArtistID=$id";
  $result1=mysqli_query($db,$query1);
  while($row=mysqli_fetch_array($result1)){
   $id1=$row['ArtWorkID'];
   echo '<div class="col-md-3 move1">';
   echo '<div class="panel panel-default truepanel">';
   echo '<a href="Part03_SingleWork.php?id='.$id1.'">';
   echo '<img src="images/art/works/square-thumbs/'.$row['ImageFileName'].'.jpg" class="thumbnail center-block artimg" height="120" width="120">';
   echo '</a>';
   echo '<a href="Part03_SingleWork.php?id='.$id1.'">'.'<span class="textin">'.$row['Title'].', '.$row['YearOfWork'].'</span>'.'</a>'.'<br/>';
   echo '<div class="center-block">';
   echo '<a href="Part03_SingleWork.php?id='.$id1.'"><button type="button" class="btn btn-primary btn-xs inbutton"><i class="glyphicon glyphicon-info-sign"></i> View</button></a>';
   echo '<button type="button" class="btn btn-success btn-xs inbutton"><i class="glyphicon glyphicon glyphicon-gift"></i> Wish</button>';
   echo '<button type="button" class="btn btn-info btn-xs inbutton"><i class="glyphicon glyphicon glyphicon-shopping-cart"></i> Cart</button>';
   echo '</div>';
   echo '</div>';
   echo '</div>';
  }
  ?>
  </div>
  </div>
  </div>
  </div>
 </body>
</html>
