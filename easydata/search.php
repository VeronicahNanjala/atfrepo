<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->

</head>

<?php
    include 'header.php';
    include 'dbconnect.php';

    if (isset($_GET['search'])) {
      $searchTerm = $_GET['search'];
      $searchTerm = "%".$searchTerm."%";
    }
    else {
      //header('location: index.php');
    }
    $resultItem = "";
    $sql = "SELECT * FROM researchdata WHERE title LIKE '$searchTerm' OR sdescription LIKE '$searchTerm' OR abstract LIKE '$searchTerm' OR author LIKE '$searchTerm'";
        $result = mysqli_query($con, $sql);
        foreach ($result as $row) {
          $resultItem = $row['category'];
        }
?>
<body>

<?php
    include 'header.php';
?>
<div style="margin-left: 20px; margin-top: 80px">
<div class="alert alert-info col-md-12" role="alert">You might also be interested in</div>
<?php
 foreach ($result as $row) {
 	

?>
<div class="media" style="margin-top: -20px">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="img.jpg" alt="Hello" height="100" width="100">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php echo $row['title']; ?></h4>
    <?php echo $row['sdescription']; ?>
  </div>
</div>
<hr>
<?php
 }
 ?>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>