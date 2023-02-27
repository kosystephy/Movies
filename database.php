<?php
    $dsn = 'mysql:host=localhost;dbname=movies';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }


//     $added= exec("ALTER TABLE guitar_shop ADD YearOfProd int(11) NOT NULL");
    
//     $added= exec("ALTER TABLE guitar_shop ADD Color VARCHAR(50) NOT NULL");

// if($added !== FALSE)
// {
//    echo("The column has been added.");
// }else{
//    echo("The column has not been added.");
// }

?>