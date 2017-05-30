<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vehicle Management</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/js/bootstrap.min.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  </head>

  <body>
<nav class="navbar navbar-default">
<div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span><img src="assets/icons/Taxi.png"></a></span> Taxi
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home </a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>

<div class="row">
<div class="container">
 
<H1>REGISTER HERE</H1>

<?php
include("connection.php");
include('session.php');
if (customerLoggedin()) {
  header("location: home.php");
}

if ($_POST) {
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
if (!empty($fname)&& !empty($lname) && !empty($email) && !empty($password) && !empty($cpassword)) {/*check whether fields are empty*/
        /*string holding query to post to the database*/
           $query ="INSERT INTO `customers`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'$fname','$lname','$email','$password')";
           /*run sql query*/
           if (mysqli_query($con, $query)) {
             echo '<div class="alert alert-success" role="alert">Congratulations you are a member,you can now login.</div>';
           }else{
            echo '<div class="alert alert-danger" role="alert">Something went wrong while registering. Try again!!!</div>'.mysqli_error();
           }
}else{
  echo '<div class="alert alert-danger" role="alert">fill in the empty fields!!!</div>';
}


}
?>
 
<form action="signup.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="firstname">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" name="lname" class="form-control" id="exampleInputEmail1" placeholder="lastname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
  </div>    
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="confirmpassword">
  </div>  

  <div class="checkbox">
    <label>
      <input type="checkbox"> Log me in automatically
    </label>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>




</div>
</div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript"
     src="assets/js/bootstrap.js"></script>   
  </body>
</html>