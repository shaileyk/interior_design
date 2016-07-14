<?php
//var_dump($_POST);
//die();
//if ($_SERVER["REQUEST_METHOD"] == "POST")
    //{
    // collect value of input field
  //      echo "welcome";
    
//}
// define variables and set to empty values
$usernameErr = $EmailErr = $passwordErr = $confirmErr = "";
$username = $Email = $password = $confirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
  }
if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
    if (empty($_POST["confirm"])) {
    $confirmErr = "Confirm password is required";
    }
    else {
    $confirm = test_input($_POST["confirm"]);
        if($password!=$confirm)
    {
        $confirmErr="passwords do not match";
    }
        
    }
    
    
    
    
}
        function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
 

    

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../css F/bootstrap.min.css" rel="stylesheet">
    <link href="../css F/style.css" rel="stylesheet">
      <link href="furniture.css" rel="stylesheet">
       <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">


  </head>
    <body>

        
        
        
        
        
        
        <div class="container">
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
						<li class="active">
							<a href="#">Home</a>
						</li>
                        <li> 
                            <a href="#">Buy</a>
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
            <div class="row main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                <h1 class="title">Register now</h1>
                <hr/>
                
                
                
                </div>
                
                
                </div>
               
               <!-- <p><span class="error">* required field.</span></p>-->
                <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                
                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label"><b>Your Name</b></label>
                        
                            <div class="cols-sm-10">
                                <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your name" />
                                   
                            </div>
                             <span class="error">* <?php echo $usernameErr;?></span>     
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label"><b>Your Email</b></label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria- hidden="true"></i></span>
                    <input type="text" class="form-control" name="Email" id="email" placeholder="Enter your Email"/>
                           
                        </div>
                         <span class="error">* <?php echo $EmailErr;?></span> 
                    </div>
                    
                
                
                </div>
            
            
            
            
            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label"><b>Password</b></label>
            <div class="cols-sm-10">
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password"/>
                
                
                </div>
             <span class="error">* <?php echo $passwordErr;?></span>
            </div>
        
        
        
        
        </div>
        <div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                                     
								</div>
                                <span class="error">* <?php echo $confirmErr;?></span>
                                
                                 <!--<div id="output">   //  //if ($password != $confirm) 
                                            //{
                                              //  echo("Passwords do not match! Try again");
                                                //exit;
                                      //  }  
                                </div>-->
							</div>
						</div>
            
    
    	<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" id="ajax">Register</button>
						</div>
						<div class="login1">
				            <a href="http://localhost:8080/login1.php">Login</a>
                            <!-- <a href="#" id="ajax">Login</a>-->
				         </div>
            	
                    
                </form>
                
            </div>
            
            <!--<div id="output">
                
                </div>-->
            
            
        </div>
        
         <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> 
    <script>
        
        
                     
             $('#ajax').on('click',function()
                    {
            $.ajax({
                
                url:"http://localhost:8080/register1.php"
            }).done(function(response){
            console.log(response);
            $('div#output').php(response);
        });
        });
        
        
        </script>-->     
        <?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $Email;
echo "<br>";
echo $password;
echo "<br>";
echo $confirm;
echo "<br>";
     
?>
		

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <style>
    body, html{
     height: 100%;
 	 background-repeat: round;
 	 background-image: url(awe.jpg);
 	 font-family: 'Oxygen', sans-serif;
}

     .main{
 	   margin-top: 70px;
}

    h1.title { 
	   font-size: 50px;
	   font-family: 'Passion One', cursive; 
	   font-weight: 400; 
        color: seagreen;
}
        
  hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}      
        
.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;
}
        
.login-button{
	margin-top: 5px;
    background-color: transparent;
    border:none;
}
        .login-button:hover{
	margin-top: 5px;
    background-color: transparent;
    border:none;
}

.login-register{
	font-size: 11px;
	text-align: center;
    
}
        
   .error
        {
            color: red;
        }
        
       .control-label
        {
            color: white;
        }
        
    .btn-primary
        {
            background-color: transparent;
            border: none;
        }
    .btn-block
        {
            background-color: transparent;
            border: none;
        }
        .btn-primary:hover
        {
            background-color: transparent;
            border: none;
            
        }
        .btn-lg
        {
            background-color: transparent;
            border: none;
        }
        .btn-lg:hover
        {
            background-color: transparent;
            border: none;
        }
        a
          {
              color: seagreen;
          }
    a:hover
          {
              color: #f5f4f5;
          }
        </style>
   
    
    
        
    </body>
            </html>
            