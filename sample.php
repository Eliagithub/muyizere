<?php
require("connection.php");
if(isset($_GET["sub"])){
    echo "insert is data";
   echo $Name =$_GET["txtName"];
   echo $phone =$_GET["txtpone"];
    echo $Email =$_GET["txtEmail"];
   echo $password=$_GET["pswd1"];
   echo $comfpasword =$_GET["pswd2"];


   $query= "INSERT INTO user(username,usermobile,useremail,useradress,confadress)
   VALUE ('$Name','$Phone','$Email','$password','$comfpasword')";
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
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="contact.css">
</head>

<body>
       
        <h1 class="lead">Sign Up Here</h1>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="contact.php">
    
    <p>
      <label for="Name">Your Name: </label> <br>
      <input type="text" class="form-control" name="txtName" id="txtName" placeholder=" write Name" value="" required>
      <span id = "message2" style="color:red"> </span> <br><br>
	  <div class="invalid-feedback">
                  
                </div>
    </p>
    </p>
    <p>
      <label for="email">Your Email:</label> <br>
      <input type="email"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="Email" value="" required>
      <span id = "message2" style="color:red"> </span> <br><br>
    </p>
    <p>
      <label for="phone">Your Phone:</label> <br>
      <input type="number"  class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="" required>
    </p>
    <p>
      <label for="Passward">Enter Your Passward: </label> <br>
      <input type="password" class="form-control" name="pswd1" id="pswd1" placeholder="passward" value="" required>
    </p>
    <p>
      <label for="Passward">Confirm your Passward: </label> <br>
      <input type="password" class="form-control" name="pswd2" id="pswd2" placeholder="passward" value="" required>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="SignUp"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>
<script src="cont.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>


