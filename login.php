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
 

 <div class="row">
  <div class="col-md-8 col-md-offset-1">

    <?php
include("connection.php");
include('session.php');
if (customerLoggedin()) {
  header("location: home.php");
}


if ($_POST) {
 $email = $_POST['email'];
 $password = $_POST['password'];

/*Select from database table customers where username and password matches the submitted details from login form*/
 $log="SELECT * FROM `customers` WHERE `email`='$email' AND `password`='$password' ";
 $re = mysqli_query($con, $log);
 if (mysqli_num_rows($re)==1) {
    $_SESSION['customer_email'] = $email;
    header("location: home.php");

 }else{
  echo "invalid login details";
 }
}

    ?>
    
        <form action="login.php" method="post">
              <select class="form-control" required>
                <option value="">------- -   Select User Category    ------------</option>
                <option value="Customer">Customer</option>
                <option value="Driver">Driver</option>
                <option value="Owner">Owner</option>
                <option value="Police">Police</option>
              </select>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
        <button type="submit" class="btn btn-default" style="  background-color: #6d4c41;
  padding-left: 15px; color:#ccc;" >Login</button>
      </form>
  
  </div>
</div> 

<div class="row">
<div class="col-md-8 col-md-offset-1">
 <a href="signup.php"><button type="button" class="btn btn-info">Create account</button></a> 
 </div>
</div>




</div>
</div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript"
     src="assets/js/bootstrap.js"></script>   
  </body>
</html>