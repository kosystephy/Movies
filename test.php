<?php
$to = 'sebastian.gates@dkit.ie';
$subject = 'Test Email';
$from = 'paul.scollon@dkit.ie';
 
// Optional: To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Recommended: Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Now Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">It Works!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Now have a look at test.php in that script directory</p>';
$message .= '</body></html>';
 
// Sending email, output the result
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully. Please check your inbox....';
} else{
    echo 'Unable to send email. Please try again.';
}
?>




<?php include 'includes/header.php';?>
<head>
	<title>Sign Up</title>
<!-- define some style elements-->
<style>
	body
	{
	background-color:  white ;
	
	}
h1
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 26px;
    font-weight : bold;
	color: palevioletred;
	font-family:cursive;
}
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 20px; 
	color: palevioletred;
	margin-top: 10px;
    width: 150px;
    display: inline-block;
    vertical-align: top;
	text-align:left;
}
form{
	width: 35%;
   padding: 20px 80px 300px 50px;
   font-size: 17px;
	text-align:center;
	/* background-color: grey; */
	border-radius:150px;
	background-color: bisque;
	margin-top: 70px;
   margin-right: 165px;
   margin-left: 300px;
   margin-bottom: 100px;
	/* justify-content: center; */

}

</style>	

</head>	
</head>


<h1>Sign Up for more Info on upcoming movies</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Your Name:</label> <br>
<input type="text" name="name" placeholder="Enter your name"  required style="width: 200px; height:30px;">
</p>

<p>
	<label for='password'>Password:</label> <br>
	<input type="text" name="password" placeholder="Enter your password" required style="width: 200px; height:30px;">
	</p>
	<p>
		<label for='email'>Email:</label> <br>
		<input type="text" name="email" placeholder="Enter your email" required  style="width: 200px; height:30px;"> <br>
			</p>
	<p>
		<label for='date_of_birth'>Date of Birth:</label> <br>
		<input type="text" name="date_of_birth" placeholder="YYYY-MM-DD" required style="width: 200px; height:30px;">
		</p>
		<p>
			<label for='Location'>Location:</label> <br>
			<input type="text" name="Location"  placeholder="Enter your country"  style="width: 200px; height:30px;"> <br>
			</p>
	
	<p>
		<label for='genre'>Genre:</label> <br>
		<!-- <input type="text" name="email"> <br> -->
		<select name="genre" style="width: 200px; height:30px;">
			<option>Romance</option>
			<option>Action/Thriller</option>
			<option>Horror</option>
			<option>History</option>
			<option>Superhero</option>
		</select>
		</p>
		<p>
			<div class="form-check">
			<label for='subcription'>Subscription Preferences:</label> <br>
			<input  class="form-check-input" type="radio" name="subscription" value="premium"> <br>
			<label class="form-check-label" for='premium'>Premium:</label>
						<input  class="form-check-input" type="radio" name="subcription" value="standard"> <br>
			<label class="form-check-label" for='premium'>Standard:</label>
		</div>
		</p>
			<p>
	<label for='phone'>Phone:</label> <br>
	<input type="text" name="phone" placeholder="Enter your phone number" style="width: 200px; height:30px;"> <br>
	</p>
		<p>
			<label for='favourite_artist'>Favourite Artist:</label> <br>
			<input type="text" name="favourite_artist" placeholder="Enter the artist you wish to see" style="width: 200px; height:30px;"> <br>
			</p>
			<p>
				<label for='ratings'>Ratings:</label> <br>
				<input type="range" name="ratings"> <br>
				</p>
		


<p>
<label for='terms'>Terms of Conditions:</label> <br>
<input name="terms" type="checkbox"></input>
</p>
<input type="submit" value="Submit"><br>
</form>

<section class="ContactUs">

	<section class="contact_info">
		
		<section class="title">
		 <h1>CONTACT INFO</h1>
		</section>
		
		<section class="info">
			<p><span class="mail"></span> info.contact@gmail.com</p>
			<p><span class="mobile"></span> +1(353) 0830000009</p>
		</section>
		
	</section>

</main>
<script src="validation.js">

</script>
<?php include 'includes/footer.php';?>






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
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example"> -->
      <div class="container">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-1.php">Artiste</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-2.php">Favourites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-3.php">Contact Us</a>
              </li>
              <li>
                
</li>
            </ul>
          </span>
        </div>
      </div>
    </nav>