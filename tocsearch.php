<!doctype html>
<html lang="en>
  <head> 
   <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Rachel-Tech: TOC - Search Articles</title>

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

<?php include 'navi.php'; ?>

 <div class="container-fluid">   
    
   <p>This simple app was created to help organize and manage a stash of magazines
       (hardcopies) that I own and wanted to make more useable (to me).
       The form takes information from an article and inputs it into a database so
       that it can be referenced in the future.</p>
    <p>The backend contains two tables - issues and articles - within a MySQL database.
     </p> 
     

   <h3>Search for an Article</h3>

   <form class="form-horizontal" method="post" action="tocresults.php">
    <div class="form-group">
     <label for="articleTitle" class="col-sm-2 control-label">Article Title (partial ok)</label>
      <div class="col-sm-10">
       <input type="text" class="form-control" name="articletitle" placeholder="Title">
      </div>
    </div>
    <div class="form-group">
     <label for="authorLast" class="col-sm-2 control-label">Author - Last Name:</label>
      <div class="col-sm-10">
       <input type="text" class="form-control" name="authorLast" placeholder="Lastname">
      </div>
    </div>
    <div class="form-group">
     <label for="tags" class="col-sm-2 control-label">Tags:</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" name="articletags">
     </div>
    </div>
    <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
      <button type="search" class="btn btn-default">Search</button>
     </div>
    </div>
   </form>
 
   <?php include 'footer.php' ?>
   
</div>
</body>
</html>
