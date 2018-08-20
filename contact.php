<?php
include("connection.php");

if (isset($_POST)){
  if(isset($_POST['submit'])){
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$email= $_POST['email'];

	$insert= $db->prepare("INSERT INTO CONTACTS(fname,lname,email) VALUES (?,?,?)");
	$insert->bind_param ('sss', $fname,$lname,$email);

	if($insert->execute())
	  {
		  echo "<div class='alert alert-success'>
        <strong>Success!</strong> You are now in the contact list.
      </div>";
	}
}
}
?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/script.js"></script>
</head>

<body>
  <div class="sidenav">
    <div id="myCarousel" class="carousel slide pic" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="img/1.png" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="img/2.png" alt="Chicago" style="width:100%;">
        </div>
      </div>
    </div>
    <a href="index.html">About Me</a>
    <a href="index.html">Education</a>
    <a href="index.html">Accomplishment</a>
    <a href="index.html">Skills</a>
    <a href="index.html">Goals</a>
    <a href="contact.php">Contact Me</a>
    <a href="index.html">RSS Feeds</a>
  </div>



  <!-- Page content -->
  <div class="main">
    <div class="header">
      <ul>
        <li>
          <a>My Portfolio</a>
        </li>
      </ul>
    </div>


        <div class="contact" id="contact">
          <h2>Contact Me </h2>
          <br>
         <div class="box">
       <form method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
          </div>

          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
          </div>

          <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </form>

                <a href="view.php"><button type="submit" class="btn btn-success">View Contacts</button> </a>
        </div>


    </div>



  </div>
  <div class="footer" id="footer">
    <p class="footer-text">Portfolio &copy Sagun </p>
  </div>

</body>

</html>
