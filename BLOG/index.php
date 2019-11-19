<!DOCTYPE html>
<html lang="fr">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- bootstrap CSS -->
    <!--
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
-->
   <!-- custom CSS -->
    <link href="app/assets/css/style.css" rel="stylesheet" />
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Mon blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
	<li class="nav-item"><a class="nav-link" href="#"></a></li>
	<li class="nav-item"><a class="nav-link" href="#"></a></li>
	<li class="nav-item"><a class="nav-link" href="#"></a></li>
	<li class="nav-item"><a class="nav-link" href="#"></a></li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Article <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
     
    </ul>
    
  </div>
</nav>

  <br><br>  
 
<!-- our app will be injected here -->
<div class="container">
<div id="app">


</div>
</div>
 
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<!-- bootstrap JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
<!-- bootbox for confirm pop up -->
<script src="app/assets/js/bootbox.min.js"></script>
<script src="app/assets/js/notify.js"></script>
<script src="app/assets/js/notify.min.js"></script>
 
<!-- app js script -->
<script src="app/app.js"></script>
 
<!-- articles scripts -->
<script src="app/articles/read_articles.js"></script>
<script src="app/articles/create_articles.js"></script>
<script src="app/articles/read_one_articles.js"></script>
<script src="app/articles/update_articles.js"></script>
<script src="app/articles/delete_articles.js"></script>
 
</body>
</html>