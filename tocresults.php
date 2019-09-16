<!doctype html>
<html lang="en>
  <head> 
   <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Rachel-Tech: TOC - Results</title>

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
    $title = $_POST['articletitle'];
    $lauthor = $_POST['authorLast'];
    $tag = $_POST['articletags']; 
  

  $beg = "SELECT * FROM articles";
  $mid = "title LIKE '%"; 
  $end = "%'";
  $statement = "";
  
try {
 
  $toc = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $toc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



  //if (!empty($tag)) {
   // $statement = $statement . $beg . " WHERE tags LIKE '%" . $tag . "%'";
  // } 
  // else {
  //  echo "Tag field is empty. Listing all articles in database.";
  //  $statement = $statement . $beg;
  // }

  if (!empty($lauthor)) {
    $statement = $statement . $beg . " WHERE author_last LIKE '%" . $lauthor . "%'";
  } else {
    echo "Author field is empty. List all articles in database.";
    $statement = $statement . $beg;
  } 
    
  //if (empty($title))  {
   // $statement = $statement . "Title variable is empty."; 
 // }else {
  //  $statement = $statement . $beg . $mid . $title . $end; 
 // }

  //$stmt = $toc->prepare("SELECT * FROM articles WHERE title LIKE '%:title%'");
  //$toc->bindParam(':title', $title);
  //$stmt->execute();

  $stmt = $toc->query($statement);

  while($row = $stmt->fetch()) {
    echo "<br><strong>Issue Number:</strong> " . $row['issue'] . "<br>";
    echo "<strong>Start Page: </strong>" . $row['page'] . "<br>";
    echo "<strong>Title:</strong> " . $row['title'] . "<br>";
    echo "<strong>Author:</strong> " . $row['author_first'] . " " . $row['author_last'] . "<br>";
    echo "<strong>Tags:</strong> " . $row['tags'] . "<br><br>";
  }

}

catch (PDOException $e)
  {
  echo $statement . "<br>" . $e->getMessage();
  }

$toc = null;

}

?>

 <?php include 'footer.php'; ?> 
 </div>
	
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->		
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
 	
  </body>
</html>
