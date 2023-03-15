
<style>
@media (max-width: 768px) {
    body {
        font-size: 14px;
    
    }
    .card-body{
      background-color:#000000;
color:white;
    }
}



</style>

<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM artiste';
$statement = $db->prepare($queryProducts);
$statement->execute();
$movies  = $statement->fetchAll();
$statement->closeCursor();
?>






  <body>
  <?php include 'includes/header.php';?>
<main class="container" style="border-radius:80px;">
  <div class="starter-template text-center">
    <div>
    <?php foreach ($movies as $movie):?>
  <div class="card" style="background-color:#333333; ">
     <img src="<?php echo  $movie['picture']; ?>" alt="<?php echo $movie['name']; ?> Picture">
    <div class="card-body" style="color:#ff1a8c; background-color:black;">
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
<?php include 'includes/footer.php';?>
  </body>
</html>
