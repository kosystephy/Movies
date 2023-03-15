

<?php
require_once('database.php');

// Get products
$query = $_GET['query'];
$queryProducts = 'SELECT * FROM products WHERE name LIKE '%{$query}%';
$statement = $db->prepare($queryProducts);
$statement->execute();
$movies  = $statement->fetchAll();
$statement->closeCursor();
?>








<form action="search.php" method="GET">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>


<?php foreach ($movies as $movie ):?>
  <div class="card">
     <img src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?> Poster">
     <p> Artiste</p>
     ?>