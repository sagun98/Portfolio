<?php
include("connection.php");
  

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
  <div class="sidenav" id="sidenav">
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
    <div class="header" id="header">
      <ul>
        <li>
          <a>My Portfolio</a>
        </li>
      </ul>
    </div>


        <div class="View" id="view">
      
          <br>
         <div class="box">
             <br><br>
            <h2>View List </h2>
            
          
        <?php     
        $sql = "SELECT fname, lname, email FROM CONTACTS" ; 	
        $stmt= $db->prepare($sql);
        $stmt-> execute();
        $stmt-> bind_result($first, $last, $email);
        echo "<table class='table table-hover'>
                <tr>
                    <th> First Name</th>
                    <th> Last Name</th>
                    <th> Email</th>
                </tr>";
       	while ($stmt->fetch()){
       	    echo "
       	  
       	        <tr>
       	            <td>$first</td>
       	            <td>$last</td>
       	            <td>$email</td>
       	        </tr>
            ";
       	}
       	echo "</table>";
       	?>
       	
        <a href="contact.php" id="back"><button type="submit" class="btn btn-danger">Back</button> </a>
        <button type="button" class="btn btn-primary" id="print" onclick="myFunction()">Print</button>

<script>
function myFunction() {
    window.print();
}
</script>
        </div>
        
    
    </div>



  </div>
  <div class="footer">
    <p class="footer-text">Portfolio &copy Sagun </p>
  </div>

</body>

</html>