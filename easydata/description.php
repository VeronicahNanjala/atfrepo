 <!DOCTYPE html>
 <html lang="">
 	<head>
 	 	<!-- Required meta tags always come first --
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Title Page</title>

 		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

 	</head>
<?php
    include 'header.php';
    include 'dbconnect.php';

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    }
    else {
      header('location: index.php');
    }
    $category = "";
    $query = "SELECT * FROM researchdata WHERE id = $id";
        $result = mysqli_query($con, $query);
        foreach ($result as $row) {
          $category = $row['category'];
        }
?>

 	<body>
 <div class="row col-md-12">
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="img.jpg" alt="Image" width="400" style="height: 350px">
      <div class="caption">
        
        <p><a href=""<?php echo $row['link'];?>"" class="btn btn-success" role="button" download="<?php echo $row['title'];?>">Download</a> </p>
      </div>
    </div>
  </div>
  <div class="col-md-8">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Title</h3>
  </div>
  <div class="panel-body">
    <?php echo $row['title'];?>
  </div>
</div>
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Abstract</h3>
  </div>
  <div class="panel-body">
    <?php echo $row['abstract'];?>
  </div>
</div>

  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Author and citation</h3>
  </div>
  <div class="panel-body">
    <?php echo $row['author'];?>
  </div>
</div>

  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Publication date</h3>
  </div>
  <div class="panel-body">
    <?php echo $row['pdate'];?>
  </div>
</div>


</div>
<div class="alert alert-info col-md-12" role="alert"><h4>You might also be interested in</h4></div>
<?php
    $sql = "SELECT title, sdescription FROM researchdata WHERE category LIKE '$category'";
    //execute
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) >0) {
      foreach ($result as $row) {
        ?>

<div class="col-md-12">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $row['title'];?></h3>
  </div>
  <div class="panel-body">
    <?php echo $row['sdescription'];?>
  </div>
</div>
</div>
        <?php
      }
    }
?>
</div>
 
 		<!-- jQuery -->
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 		<!-- Bootstrap JavaScript -->
 		<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
 	</body>
 </html>