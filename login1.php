
<?php
//var_dump($_POST);
//die();
//if ($_SERVER["REQUEST_METHOD"] == "POST")
    //{
    // collect value of input field
  //      echo "welcome";
    
//}
// define variables and set to empty values
$passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /*if (empty($_POST["email"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["email"]);
  }*/
  
  /*if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
  }*/
if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
    /*if (empty($_POST["confirm"])) {
    $confirmErr = "Confirm password is required";
  } else {
    $confirm = test_input($_POST["confirm"]);
        
    }*/
    
}
        function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
 

    

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login page!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      
       <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">


  </head>
    <body>
        
<div class="container">
    <div class="container-fluid">
	<div class="row">
        <!--logo -->
		<div class="col-md-12">
			<!--<img alt="" src="">-->
            <!--logo ends-->
            <!--1st navigation bar-->
		<!--	<ul class="nav nav-pills">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">sign up</a>
				</li>
				<!--<li class="disabled">
					<a href="#">Messages</a>
				</li>
				<li class="dropdown pull-right">
					 <a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Action</a>
						</li>
						<li>
							<a href="#">Another action</a>
						</li>
						<li>
							<a href="#">Something else here</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">Separated link</a>
						</li>
					</ul>
				</li>-->
			<!--</ul>-->
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand mtitle" href="#">Interior Design!</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav subt">
						<li>
							<a href="furniture.html">Home</a>
						</li>
                        <li> 
                            <a href="index_buy.html">Buy</a>
                        </li>
						<!--<li>
							<a href="#">Link</a>
						</li>-->
						<li class="dropdown">
							 <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sell<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Know the person</a>
								</li>
								<li>
									<a href="#">your Information</a>
								</li>
								<!--<li>
									<a href="#">Something else here</a>
								</li>-->
								<li class="divider">
								</li>
								<li>
									<a href="#">Queries</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">More information</a>
                                </li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input class="form-control" type="text">
						</div> 
						<button class="btn btn-primary" type="submit">
							&#128269
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="contactus.html">Contact us</a>
						</li>
                        <li>
                            <a href="http://localhost:8080/register1.php">Sign Up</a>
                        </li>
						<!--<li class="dropdown">
							 <a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>-->
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
				
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" name="username" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
				
            </div>
            <div class="wrap">
                <p class="form-title">
                    LOGIN</p>
                <form class="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="text" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                    <span class="error">* <?php echo $passwordErr;?></span>
                    <input type="submit" value="Login"  class="btn btn-success btn-sm" href="furniture.html"\>
					
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="http://localhost:8080/forgot_password.php" class="forgot-pass">Forgot Password</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
   
</div>

<style>
    
    body
{
    background: url('../bed22.jpg') fixed;
    background-size: cover;
    padding: 0;
    margin: 0;
}

.wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99;
}

p.form-title
{
    font-family: 'Open Sans' , sans-serif;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;
}

form
{
    width: 250px;
    margin: 0 auto;
}

form.login input[type="text"], form.login input[type="password"]
{
    width: 100%;
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #FFFFFF;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #FFFFFF;
    outline: 0;
}

form.login input[type="submit"]
{
    width: 100%;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 16px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
}

form.login input[type="submit"]:hover
{
    transition: background-color 0.5s ease;
}

form.login .remember-forgot
{
    float: left;
    width: 100%;
    margin: 10px 0 0 0;
}
form.login .forgot-pass-content
{
    min-height: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
}
form.login label, form.login a
{
    font-size: 12px;
    font-weight: 400;
    color: #FFFFFF;
}

form.login a
{
    transition: color 0.5s ease;
}

form.login a:hover
{
    color: #2ecc71;
}

.pr-wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    display: none;
}

.show-pass-reset
{
    display: block !important;
}

.pass-reset
{
    margin: 0 auto;
    width: 250px;
    position: relative;
    margin-top: 22%;
    z-index: 999;
    background: #FFFFFF;
    padding: 20px 15px;
}

.pass-reset label
{
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 15px;
}

.pass-reset input[type="email"]
{
    width: 100%;
    margin: 5px 0 0 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #000000;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #000000;
    outline: 0;
}

.pass-reset input[type="submit"]
{
    width: 100%;
    border: 0;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 10px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
}

.pass-reset input[type="submit"]:hover
{
    transition: background-color 0.5s ease;
}

.navbar-inverse
    {
        background-color: transparent;
        border:none;
       
    }
 .navbar-default
    {
        color: black;
    }
   .navbar
    {
        color: black;
    }
    
    
    
    </style>
	<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";

        
?>
    </body>
</html>