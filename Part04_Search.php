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
  <title>Search</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="fullcss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function set(){
		document.getElementById("text1").style.display="none";
		document.getElementById("text2").style.display="none";
  }
  function set1(){
		var extra=window.location.href.split("?");
		var test=extra[1].split("=");
		var data=test[1];
		if(data!=null){
			document.getElementById("rad1").checked=true;
			document.getElementById("text1").style.display="block";
			document.getElementById("text1").value=data;
			$(document).ready(function(){
				var working = false;
				$("#click").click();
			});
			var working=true;
		}
  }
  function display(){
	  var r1= document.getElementById("rad1");
	  var r2= document.getElementById("rad2");
	  if(r1.checked)
	  {
		  document.getElementById("text1").style.display="block";
		  document.getElementById("text2").style.display="none";
		  document.getElementById("text2").value="";
	  }
	  else if(r2.checked)
	  {
		  document.getElementById("text1").style.display="none";
		  document.getElementById("text2").style.display="block";
		  document.getElementById("text1").value="";
	  }
	  else
	  {
		  document.getElementById("text1").style.display="none";
		  document.getElementById("text2").style.display="none";
		  document.getElementById("text1").value="";
		  document.getElementById("text2").value="";
	  }
  }
  $(function() {
        $("#register").bind('submit',function() {
          var value=$('#text1').val();
		  var value1=$('#text2').val();
           $.post('Part04_Search.php',{value:value, value1:value1}, function(data){
             $("#navigate").html($(data).find("#navigate"));
			 $("div#navigate").removeClass("navigate1");
           });
           return false;
        });
      });
  </script>
 </head>
  <?php
  if(isset($_POST['title1']))
  {
 $code=$_POST['title1'];
 if($code!="")
 header("Location:Part04_Search.php?title=$code");
  }
 ?>
 <body onload="set(); set1();">
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
	<li><form class="navbar-form" method="post" action="Part04_Search.php">
        <div class="form-group">
		    <div class="navbar-text">Shantan Reddy Kothapalli</div>
            <input type="text" class="form-control" name="title1" id="search" placeholder="Search Paintings">
			<input type="submit" value="Search" id="submit" class="btn btn-primary">
        </div>
        </form></li>
	</ul>
	</div>
  </nav>
  <div class="container searchcon">
  <h1>Search Results</h1>
  <hr>
  <div class="alert alert-default alecolor">
  <form id="register" method="post" action="">
  <div class="form-group">
  <table class="searchtable">
  <tr><td><input type="radio" class="form-check-input" name="search" id="rad1" onclick="display();" required>&nbsp Filter By Title:</td></tr>
  <tr><td colspan="2"><input type="text" class="form-control full" name="first" id="text1"></td></tr>
  <tr><td><input type="radio" class="form-check-input" name="search" id="rad2" onclick="display();" required>&nbsp Filter By Description:</td></tr>
   <tr><td colspan="2"><input type="text" class="form-control full" name="first1" id="text2"></td></tr>
  <tr><td><input type="radio" class="form-check-input" name="search" onclick="display();" required>&nbsp No Filter (show all art works):</td></tr>
  </table>
  <button type="submit" class="btn btn-primary filter" id="click" name="search1">Filter</button>
  </div>
  </form>
  </div>
  <div id="navigate" class="navigate1">
   <?php
   $db=mysqli_connect("localhost","root","root","art");
   if(isset($_GET['title'])){
	  $title=$_GET['title'];
	  $query="select * from artworks where Title like '%$title%'";
	  $result=mysqli_query($db,$query);
	  if(mysqli_num_rows($result)==0){
			echo "No Match Found";
	  }
	  else{
	  while($row=mysqli_fetch_array($result)){
			$id=$row['ArtWorkID'];
		    echo '<div class="row fulldiv">';
			echo '<div class="col-md-3">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'"><img src="images/art/works/square-medium/'.$row['ImageFileName'].'.jpg" height="200" width="200"/></a>';
			echo '</div>';
			echo '<div class="col-md-3 seconddiv">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'">'.$row['Title'].'</a>'.'<br/>';
			echo $row['Description'].'<br/>';
			echo '</div>';
			echo '</div>';
		}
	  }
	  }
	  if($_POST['value']!=""){
	  $title=$_POST['value'];
	  $query="select * from artworks where Title like '%$title%'";
	  $result=mysqli_query($db,$query);
	  if(mysqli_num_rows($result)==0){
			 echo "No Match Found";
	  }
	  else{
	  while($row=mysqli_fetch_array($result)){
		    $id=$row['ArtWorkID'];
		    echo '<div class="row fulldiv">';
			echo '<div class="col-md-3">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'"><img src="images/art/works/square-medium/'.$row['ImageFileName'].'.jpg" height="200" width="200"/></a>';
			echo '</div>';
			echo '<div class="col-md-3 seconddiv">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'">'.$row['Title'].'</a>'.'<br/>';
			echo $row['Description'].'<br/>';
			echo '</div>';
			echo '</div>';
		}
	  }
	  }
	  else if($_POST['value1']!=""){
	  $title=$_POST['value1'];
	  $query="select * from artworks where Description like '%$title%'";
	  $result=mysqli_query($db,$query);
	  if(mysqli_num_rows($result)==0){
			echo "No Match Found";
	  }
	  else{
	  while($row=mysqli_fetch_array($result)){
			$id=$row['ArtWorkID'];
		    echo '<div class="row fulldiv">';
			echo '<div class="col-md-3">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'"><img src="images/art/works/square-medium/'.$row['ImageFileName'].'.jpg" height="200" width="200"/></a>';
			echo '</div>';
			echo '<div class="col-md-3 seconddiv">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'">'.$row['Title'].'</a>'.'<br/>';
			echo str_ireplace($title, "<span class='highlight'>$title</span>", $row['Description']).'<br/>';
			echo '</div>';
			echo '</div>';
		}
	  }
	  }
	  else{
	  $query="select * from artworks";
	  $result=mysqli_query($db,$query);
	  while($row=mysqli_fetch_array($result)){
			$id=$row['ArtWorkID'];
		    echo '<div class="row fulldiv">';
			echo '<div class="col-md-3">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'"><img src="images/art/works/square-medium/'.$row['ImageFileName'].'.jpg" height="200" width="200"/></a>';
			echo '</div>';
			echo '<div class="col-md-3 seconddiv">';
			echo '<a href="Part03_SingleWork.php?id='.$id.'">'.$row['Title'].'</a>'.'<br/>';
			echo $row['Description'].'<br/>';
			echo '</div>';
			echo '</div>';
		}
	  }
  ?>
  </div>
 </body>
</html>
