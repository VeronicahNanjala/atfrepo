





<?php if (!empty($_POST)):
    include 'dbconnect.php';
     $username = htmlspecialchars($_POST["name"]); 
     $password =  htmlspecialchars($_POST["password"]);

     //function to clean data
function clean($str) {
        $str = @trim($str);
        if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }

    //sanitize the post values
    $user = clean($username);
    $pass = clean($password);

    //create query
    $query = "SELECT * FROM admin WHERE username ='$user' AND password='$pass'";    //'".md5($pass)."'";  data encryption

    //store the result
    $result = mysql_query($query);
    if ($result) {
        if (mysql_num_rows($result) == 1) {
            //login is successful
            session_regenerate_id();
            $user = mysql_fetch_assoc($result);
            $_SESSION['SESS_MEMBER_ID'] = $user['id'];
            session_write_close();
            header("location: dash.php"); //redirect to home page
            exit();
        }
        else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                <strong>Login fialed!</strong> The username and password do not match. Please check and ry again.
            </div>";
        }
    }

    else {
        die("Query failed".mysql_error());
    }


 endif; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
