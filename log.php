<?php
require("connection.php");
if(isset($_GET["sub"])){
    echo "insert is data";
   echo $Name =$_GET["txtName"];
   echo $phone =$_GET["txtpone"];
    echo $Email =$_GET["txtEmail"];
   echo $password=$_GET["pswd1"];
   


   $query= "INSERT INTO user(username,usermobile,useremail,useradress,password)
   VALUE ('$Name','$Phone','$Email','$password',)";
    echo $query;
   $result=mysqli_query($con,$query);
   if($result){
    echo "Done";
}

}
if(isset($_request["ret"])){
    echo 
    
$query= "INSERT INTO user(username,usermobile,useremail,confadress)
VALUE ('$Names','$Phone','$Email','$password','$comfpasword')";
 echo $query;
$result=mysqli_query($con,$query);
if($result){
    echo "submitted<br>";
    $query ="SELECT *FROM User";
        }
    }

else{ 
    echo "something is wrong".mysqli_error($con);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="desgn.css" />
</head>
<body>
  <marquee behavior="right" direction="left-light"><img src="disgen.jpg" height="100" width="190"></marquee>
  <header>
    <div class="link">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div>
  </header>
<body>
       
        <h1 class="lead">Sign Up Here</h1>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="contact.php">
    
    <p>
      <label for="Name">Your first Name: </label> <br>
      <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" value="" required>
      <span id = "message2" style="color:red"> </span> <br><br>
	  <div class="invalid-feedback">
                  
                </div>
    </p>
    <p>
      <label for="Name">Your second Name: </label> <br>
      <input type="text" class="form-control" name="sname" id="txtName" placeholder="Name" value="" required>
      <span id = "message2" style="color:red"> </span> <br><br>
	  <div class="invalid-feedback">
                  
                </div>
    </p>
    <p>
      <label for="email">Your Email:</label> <br>
      <input type="email"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="Email" value="" required>
      <span id = "message2" style="color:red"> </span> <br><br>
    </p>
    <p>
      <label for="phone">Your Phone:</label> <br>
      <input type="text"  class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="" required>
    </p>
    <p>
      <label for="Passward">Enter Your Passward: </label> <br>
      <input type="password" class="form-control" name="pswd1" id="pswd1" placeholder="passward" value="" required>
    </p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="SignUp"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>
<script src="cont.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<footer>
  <div class="row">
    <div class="col-3">
      <img src="disgen.jpg" alt="">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur adipisci soluta id numquam, ad incidunt culpa reiciendis, quidem necessitatibus consectetur, blanditiis consequuntur voluptatem officiis porro quas quod laborum! Voluptas, recusandae.</p>
    </div>
    <div class="col-3">
      <h3><u>Links: </u></h3>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div>
    <div class="col-3">
      <h3><u>Social Media</u></h3>
      <a href="http://www.facebook.com"><i class="icon-facebook-sign"></i></a>
      <a href="http://www.twittercom"><i class="icon-twitter" ></i></a>
      <a href="http://www.youtube.com"><i class="icon-youtube-sign" ></i></a>
      <a href="http://www.linkedin.com"><i class="icon-linkedin" ></i></a>
      <a href="http://mail.google.com/mail/u/0/#inbox"><i class="icon-google-plus" ></i></a>
    </div>
  </div><hr>
  <div class="copyright">
    <p>Copyright 2022. All right reserved. </p>
  </div>
</footer>
</body>
</html>
</body>
</html>


