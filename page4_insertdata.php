<!DOCTYPE HTML>
<html>
 <head>
 <title>Colors Survey</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Colors survey</h2>
 <?php
 session_start();
 if (isset($_POST['rezultatF'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['rezultatF'])){ 
 // Setting error for page 3.
 $_SESSION['error_page6'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page3_form.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 /*$connection = mysql_connect("localhost", "root", "");
 $db = mysql_select_db("phpmultipage", $connection); // Storing values in database.
 $query = mysql_query("insert into detail (name,email,contact,password,religion,nationality,gender,qualification,experience,address1,address2,city,pin,state) values('$name','$email','$contact','$password','$religion','$nationality','$gender','$qualification','$experience','$address1','$address2','$city','$pin','$state')", $connection);
 if ($query) {
 echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 } else {
 echo '<p><span>Form Submission Failed..!!</span></p>';
 } */
 $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'age' => $age,
   'gender' => $gender,
   'qualification' => $qualification,
   'ethnicity' => $ethnicity,
   'rezultatA' => $rezultatA,
   'rezultatB' => $rezultatB,
   'rezultatC' => $rezultatC,
   'rezultatD' => $rezultatD,
   'rezultatE' => $rezultatE,
   'rezultatF' => $rezultatF
  );
  fputcsv($file_open, $form_data);
 
 unset($_SESSION['post']); // Destroying session.
 }
  echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 ?>
 </div>
 </div>
 </body>
</html>
