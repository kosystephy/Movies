<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM artiste';
$statement = $db->prepare($queryProducts);
$statement->execute();
$movies  = $statement->fetchAll();
$statement->closeCursor();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
    <style>
      img
      {
        width:200px;
        height:300px;
      }
      </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="index.html">Site Title</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-1.php">Page 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-2.php">Page 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-3.php">Page 3</a>
              </li>
              <li>
                
</li>
            </ul>
          </span>
        </div>
      </div>
    </nav>

<main class="container">
  <div class="starter-template text-center">
    <div>
    <?php foreach ($movies as $movie):?>
  <div class="card">
     <img src="<?php echo  $movie['picture']; ?>" alt="<?php echo $movie['name']; ?> Picture">
    <div class="card-body">
      <h5 class="card-title"><?php echo  $movie['name']; ?></h5>
      <p class="card-text"><strong>Date of Birth:</strong> <?php echo  $movie['dob']; ?></p>
      <p class="card-text"><strong>Origin:</strong> <?php echo $movie['origin']; ?></p>
      <p class="card-text"><strong>Gender:</strong> <?php echo $movie['gender']; ?></p>
    
    </div>
  </div>
<?php endforeach; ?>
</div>
  </div>


</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
