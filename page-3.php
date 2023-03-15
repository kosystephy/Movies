









<?php include 'includes/header.php';?>
<head>
<Style>
  form
  {
  /* background-color:white; */
    margin left:700px;
    margin right:300px;
    border-radius:40px;
    text-align:center;
	background-color:#00000;
  }
</Style>
</head>
<main class="container">
  <div class="starter-template text-center ">
  <h1  style="color:#ff1a8c;">Sign Up</h1>
  <p class="lead">Sign Up to recieve latest news on Movies</p>
  </div>
  
<form class="row g-3" method="POST" name="contactform" action="contact-form-handler.php"  enctype="multipart/form-data"  style="color:#ff1a8c; background-color:black;"> 

<div class="col-md-6">
<p>
<span style="color:white;">*</span><label for='name'class="form-label"> Name:</label><br>
<input type="text" name="name" id="name" class="form-control" placeholder="Kosy" aria-label=" name" required ">
</p>
</div>

<div class="col-md-6">
<p>
<span style="color:white;">*</span><label for='email'class="form-label">Email Address:</label><br>
<input type="text"  name="email" id="email" placeholder="abc@yahoo.com"  class="form-control" required "> 
</p>
</div>
<div class="col-md-6">
<p>
<span style="color:white;">*</span><label for='password'class="form-label">Password:</label><br>
<input type="text" name="password" id="password" placeholder=""  class="form-control" required "> 
</p>
</div>
<div class="col-md-6">
<p>
<span style="color:white;">*</span><label for="phone"class="form-label">Phone:</label></span>
<input type="tel" name="phone" id="phone" placeholder="1234567890" class="form-control"  required "><br>
</p>
</div>

<div class="col-12">
<label for="Location" class="form-label">Country:</label>
<input type="text" class="form-control" name="Location" placeholder="Select an EU country">
</div>

<div class="col-12">
<label for="favourite_artist" class="form-label">Favourite Artist:</label>
<input type="text" class="form-control" name="favourite_artist" placeholder="enter an artist you wish to see often">
</div>

<div class="col-md-6">
<p>
<span style="color:white;">*</span><label for="date_of_birth" class="form-label">Birthdate:</label><br>
<input type="date" class="form-control" name="date_of_birth"  id="date_of_birth" placeholder="YYYY-MM-DD" required "><br>
</p>
</div>



<div class="col-md-6">
<p>
<span style="color:white;">*</span><label for="genre" class="form-label">Genre:</label><br>
<select name="genre" id="genre"class="form-select" aria-label="Default select example" required ">
<option value="genre">Romance</option>
<option value="genre">Action/Thriller</option>
<option value="genre">Horror</option>
<option value="genre">History</option>
<option value="genre">Superhero</option>
</select>
</p>
</div>

<div class="col-md-6">
<!-- <fieldset class="col mb-6"> -->
<span style="color:white;">*</span><label for="subscription" >Subscription Preferences::</label><br>
<div class="input-group">
<div class="input-group-text">
<input type="radio"  class="form-check-input mt-0" name="subscription" id="subscription" value="premium" aria-label="Radio button for following text input" required>
</div>
<label for="premium"  class="form-control" aria-label="Text input with radio button">Premium</label>
</div>

<div class="input-group" >
<div  class="input-group-text">
<input type="radio"  class="form-check-input mt-0" name="subscription" id="subscription" value="standard" aria-label="Radio button for following text input"required>
</div>
<label for="standard"  class="form-control" aria-label="Text input with radio button"">Standard</label><br>
</div>
</div>


<div class="col-md-6">
    <label for="ratings" class="form-label">Rate Us</label><br>
    <input type="range" id="ratings" class="form-range" name="ratings" min="0" max="10000" step="1000" value="5000">
</div>
    <div class="col-md-6" style=" margin-top:50px">
    <!-- <span class="border" style="padding: 5px 90% 5px 5px; " id="tuition_budget_value">$5000</span> -->
</div>
  

<div class="input-group mb-2">
<div class="input-group-text">
<input class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input" id="terms" name="terms" value="yes">
</div>
<label for="updates" class="form-control" aria-label="Text input with checkbox">Get Updates</label>
<!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
</div>

<div class="col-12">
<input type="submit" value="Submit" class="btn btn-primary"><br>
</div>

</form>
</main><!-- /.container -->

<?php include 'includes/footer.php';?>