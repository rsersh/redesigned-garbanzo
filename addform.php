<!doctype html>
<html lang="en>
  <head> 
   <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Rachel-Tech</title>

	<!-- Bootstrap -->    
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/rt-style.css" rel="stylesheet">

	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
 <?php include 'navi.php' ?> 
 
 <div class="container-fluid" style="margin-bottom: 15px;">
   <div class="row" id="outer-border">


<?php
  require_once 'login.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $issue = $_POST['issueNumber'];
    $title = $_POST['articletitle'];
    $page = $_POST['startPage'];
    $fauthor = $_POST['authorFirst'];
    $lauthor = $_POST['authorLast'];
    $tags = $_POST['articletags']; 

  $beg = "INSERT INTO articles (issue, title, page, author_last, author_first, tags) VALUES ('";
  $mid = "','";
  $end = "');";

  $statement = $beg . $issue . $mid . $title . $mid . $page . $mid . $lauthor . $mid . $fauthor . $mid . $tags . $end;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // use exec() because no results are returned
  $conn->exec($statement);
  echo "New article added successfully.<br>";
  
  echo "Issue Number: " . $issue . "<br>";
  echo "Article Title: " . $title . "<br>";
  echo "Start Page: " . $page. "<br>";
  echo "Author Name: " . $fauthor . " " . $lauthor . "<br>";
  echo "Tags: " . $tags. "<br>";
  }
catch (PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }

$conn = null;



  }



?>

 <?php include 'footer.php' ?> 
 </div>
	
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->		
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
 	
  </body>
</html>
