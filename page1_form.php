<?php
session_start(); // Session starts here.
?><!DOCTYPE HTML>
<html>
 <head>
 <title>Colors Survey</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Colors survey</h2>
 <span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
 </span>
 <form action="page2_form.php" method="post">
 <label>Do you agree to take part in the test? Check <a href="/consent_form.html">consent form</a> and leave your e-mail (mandatory) if you agree:<span>*</span></label>
 <input name="email" type="email" placeholder="Ex-anderson@gmail.com" required>
 <label>Age :<span>*</span></label>
 <input name="age" type="text" placeholder="Between 18 and 24" required>
 <label>Gender :<span>*</span></label>
 <input type="radio" name="gender" value="male" required>Male
 <input type="radio" name="gender" value="female">Female<br>
 <label>Problems with vision :<span>*</span></label>
 <select name="qualification">
 <option value="">----Select----</options>
 <option value="none" value="">None </options>
 <option value="short" value="">Short-sightedness</options>
 <option value="long" value="">Long-sightedness </options>
 </select>
 <label>Ethnicity :<span>*</span></label>
 <input name="ethnicity" type="text" placeholder="Caucasian, Black, Asian, Latino, Afro-American or Indian?" required> 
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body>
</html>