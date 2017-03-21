<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>easydata</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
    include 'header.php';
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Welcome to easyDATA!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <form action="search.php" method="get" accept-charset="utf-8">
                <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                    <input type="text" name="search" required class="form-control input-lg" placeholder="Search titles, authors and categories for...">
                    <span class="input-group-btn">
                       <input class="btn btn-success btn-large" type="submit" style="height: 46px" value="Search entire repository" />
                    </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </form>
            
        </header>

        <hr>
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
        <?php
        include 'dbconnect.php';

        $query = "SELECT id, title, sdescription, link FROM researchdata ORDER BY id LIMIT 4";
        $result = mysqli_query($con, $query);

        foreach ($result as $row) {
            $id = $row['id'];
        ?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><?php echo $row['title'];?></h3>
                        <p><?php echo $row['sdescription'];?></p>
                        <p>
                            <a href="<?php echo "description.php?id=$id";?>" class="btn btn-primary">View details</a> 

                            <a href="<?php echo $row['link'];?>" class="btn btn-success" download="<?php echo $row['title'];?>">Download now</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; easyDATA <?php ECHO DATE('Y')?></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <script>
    </script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="gettext.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
