<?php
$errors = array(); // array to hold validation errors
$data = array(); // array to pass back data
// validate the variables ======================================================
if (empty($_POST['name']))
$errors['name'] = 'Please enter your name.';
if (empty($_POST['email']))
$errors['email'] = 'Please enter a valid email address.';
if (empty($_POST['comments']))
$errors['comments'] = 'Message is required.';
// return a response ===========================================================
// response if there are errors
if ( ! empty($errors)) {
  // if there are items in our errors array, return those errors
  $data['success'] = false;
  $data['errors'] = $errors;
  $data['commentsError'] = 'Please check the fields in red';
} else {
  // if there are no errors, return a comments
  $data['success'] = true;
  $data['commentsSuccess'] = 'Thanks for reaching out. I will get back to you soon';
  // CHANGE THE TWO LINES BELOW
  $email_to = "carlos.esquer927@gmail.com";
  $email_subject = "comments submission";
  $name = $_POST['name']; // required
  $email_from = $_POST['email']; // required
  $comments = $_POST['message']; // required
  $email_comments = "Form details below.nn";
  $email_comments .= "Name: ".$name."n";
  $email_comments .= "Email: ".$email_from."n";
  $email_comments .= "Message: ".$message."n";
  $headers = 'From: '.$email_from."rn".
  'Reply-To: '.$email_from."rn" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_comments, $headers);
}
// return all our data to an AJAX call
echo json_encode($data);
