
<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT movie.poster,movie.title,artiste.picture,artiste.name FROM movie join artiste ON movie.movieID=artiste.movieID';
$statement = $db->prepare($queryProducts);
$statement->execute();
$movies  = $statement->fetchAll();
$statement->closeCursor();
?>

<style>
@media (max-width: 768px) {
    body {
        font-size: 14px;
    }
}
</style>
  <body>
  <?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <div>
    <?php foreach ($movies as $movie ):?>
  <div class="card" style="background-color:#333333;">
     <img src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?> Poster">
     <h5 class="card-title"  style="color:#ff1a8c;"><?php echo $movie['title']; ?></h5>
     <p style="color:#ff1a8c;"> Starring</p>
     <div class="card-body" style="color:#ff1a8c; background-color:black;">
     <img src="<?php echo $movie['picture']; ?>" alt="<?php echo $artist['name']; ?> Picture">
   
    
      
      <h5 class="card-title"><?php echo $movie['name']; ?></h5>
     </div>
  </div>
<?php endforeach; ?>
</div>
  </div>


</main><!-- /.container -->
<?php include 'includes/footer.php';?>
  </body>
</html>
