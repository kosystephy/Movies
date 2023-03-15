
<?php
require_once('database.php');

// Get products

$queryProducts = 'SELECT * FROM movie';
$statement = $db->prepare($queryProducts);
$statement->execute();
$movies  = $statement->fetchAll();
$statement->closeCursor();

?>



   
<?php include 'includes/header.php';?>
<main class="container" >
  <div class="starter-template text-center"  >
    <div >
     <?php foreach ($movies as $movie):?>
       <div class="card-group" >
      <div class="card" style="background-color:#333333;color:#ff1a8c;  ">
     <img src="<?php echo $movie['poster']; ?>"  alt=" <?php echo $movie['title']?> Poster">
    <div class="card-body" style="color:#ff1a8c; background-color:black;">
      <h5 class="card-title"> <?php $movie['title'] ?></h5>
      <p class="card-text"><strong>Producer:</strong>  <?php echo $movie['producer'] ?> </p>
      <p class="card-text"><strong>Release Date:</strong> <?php echo $movie['release_date'] ?></p>
      <p class="card-text"><strong>Type:</strong> <?php $movie['type'] ?> </p>
      <p class="card-text"><strong>Genre:</strong><?php $movie['genre'] ?></p>
      <p class="card-text"><strong>Duration:</strong><?php $movie['duration'];?></p>
    </div>
  </div>
    </div> 
    <?php endforeach; ?> 
</div>
  </div>


</main><!-- /.container -->
    

<?php include 'includes/footer.php';?>

  </body>
</html>

