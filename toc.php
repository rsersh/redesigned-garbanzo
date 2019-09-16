<!doctype html>
<html lang="en>
  <head> 
   <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Rachel-Tech: TOC - Add Article</title>

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

     <nav role="navigation" class="navbar navbar-default">
        
        <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed"
           data-toggle="collapse" data-target="#collapsedNav">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
        </div>
       
        <div class="collapse navbar-collapse" id="collapsedNav">
         <ul class="nav nav-tabs nav-justified">
          <li role="presentation" class="active"><a href="#">Home</a></li>
          <li role="presentation"><a href="res.html">Resume</a></li>
          <li role="presentation"><a href="about.html">About</a></li>
          <li role="presentation"><a href="proj.html">Projects</a></li>
         </ul>
        </div>
      
     </nav>


 <div class="container-fluid">   
    
   <p>This simple app was created to help organize and manage a stash of magazines
       (hardcopies) that I own and wanted to make more useable (to me).
       The form takes information from an article and inputs it into a database so
       that it can be referenced in the future.</p>
    <p>The backend contains two tables - issues and articles - within a MySQL database.
     </p> 
     

   <h3>Add an Article</h3>

   <form class="form-horizontal" method="post" action="addform.php">
    <div class="form-group">
     <label for="issueNumber" class="col-sm-2 control-label" >Issue</label>
      <div class="col-sm-10">
       <input type="number" class="form-control" name="issueNumber" placeholder="Issue" min="1" max="300">
      </div>
    </div>
    <div class="form-group">
     <label for="articleTitle" class="col-sm-2 control-label">Article Title</label>
      <div class="col-sm-10">
       <input type="text" class="form-control" name="articletitle" placeholder="Title" required>
      </div>
    </div>
    <div class="form-group">
     <label for="startPage" class="col-sm-2 control-label">Article Start Page</label>
      <div class="col-sm-10">
       <input type="number" class="form-control" name="startPage" placeholder="Title" min="3" max="200" required>
      </div>
    </div>
    <div class="form-group">
     <label for="authorFirst" class="col-sm-2 control-label">Author - First Name:</label>
      <div class="col-sm-10">
       <input type="text" class="form-control" name="authorFirst" placeholder="Firstname">
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
      <button type="submit" class="btn btn-default">Add article</button>
     </div>
    </div>
   </form>

   
    <footer class="footer">
    <div class="container">
      <p>That's Some Rachel Work &#169; 2016</p>
    </div>
    </footer>

</div>
</body>
</html>
