<?php

$errors = '';
$myemail = 'D00251780@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['password'])  ||
   empty($_POST['email'])  ||
   empty($_POST['date_of_birth']) )
//    empty($_POST['location'])
//    empty($_POST['subscription']))
//    empty($_POST['phone'])
//    empty($_POST['Favourite Artist'])
//    empty($_POST['ratings'])
//    empty($_POST['terms of condition'])
{
    $errors = "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers = 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$date_of_birth = $_POST['date_of_birth'];
$location = $_POST['Location'];
$subscription = $_POST['subscription'];
$phone = $_POST['phone'];
$favourite_artist = $_POST['favourite_artist'];
$ratings = $_POST['ratings'];
$terms = $_POST['terms'];

if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    $errors = 'Please enter a valid name.';
}
if (strlen($password) < 8) {
    $errors= 'Your password must be at least 8 characters long.';
}
if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date_of_birth)) {
    $error = 'Please enter a valid date of birth in the format YYYY-MM-DD.';
} 
// else {
//        $dob_timestamp = strtotime($date_of_birth);
//     if ($dob_timestamp === false || $dob_timestamp > time()) {
//         $errors = 'Please enter a valid date of birth.';
//     }
// }
if (empty($location)) {
    $errors= 'Please select your country.';
} else {
    // Check if the selected country is valid
    $valid_countries = array('Ireland', 'Poland', 'Italy', 'France', 'Germany', 'Lithuania', 'Spain', 'Czech Republic','Denmark','Netherlands','Romania','Sweden','Luxemborg','Finland','Greece','Croatia','Hungary','Belgium','Austria','Slovakia','Estonia','Latvia','Malta');
    if (!in_array($location, $valid_countries)) {
        $errors = 'Please select a valid country.';
    }
}

$phone = preg_replace('/[^0-9]/', '', $phone);

if (strlen($phone) != 10) {
    $errors= 'Please enter a valid 10-digit phone number.';
}

if (!preg_match("/^[a-zA-Z ]+$/", $favourite_artist)) {
    $errors = 'Please enter a valid name.';
}

if (empty($terms)) {
    $errors = 'Please accept the terms and conditions.';
}
if (empty($subscription)) {
    $errors = 'Please select a plan.';
}
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email))
{
    $errors = "\n Error: Invalid email address";
}



if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Sign up form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Password: $Password Email: $email  \n Date of Birth: $date_of_birth  \n Location: $location   \n Phone: $phone  \n Favourite Artist: $favourite_artist \n Ratings: $ratings   \n Terms: $terms";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.html');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>