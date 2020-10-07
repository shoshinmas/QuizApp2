<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['email'])){
 if (empty($_POST['email'])
 || empty($_POST['age'])
 || empty($_POST['gender'])
  || empty($_POST['qualification'])){ 
 // Setting error message
 $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page1_form.php"); // Redirecting to first page 
 } else {
 // Sanitizing email field to remove unwanted characters.
 $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
 // After sanitization Validation is performed.
 if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 
 }
 } else {
 $_SESSION['error'] = "Invalid Email Address";
 header("location: page1_form.php");//redirecting to first page
 }
 }
} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: page1_form.php");//redirecting to first page
 }
}
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>Colors Survey</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Colors survey</h2><hr/>
 <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>
<label>Order these colours in order ( hues ( vibrant colour ) nothing added )</label>
<div id="simple-list" class="row">
			<div id="example1" class="list-group col just-sortable">
			
				<div class="list-group-item"><div id="imageNo00ffc0" class = "listitemClass"> 
            <img src="img/zestaw1/00ffc0.png" alt=""> 00ffc0
        </div> </div>
				<div class="list-group-item"><div id="imageNo00ffcb" class = "listitemClass"> 
            <img src="img/zestaw1/00ffcb.png" alt=""> 00ffcb
        </div></div>
				<div class="list-group-item"> <div id="imageNo00ffa9" class = "listitemClass"> 
            <img src="img/zestaw1/00ffa9.png" alt=""> 00ffa9
        </div></div>
				<div class="list-group-item"><div id="imageNo00ff9e" class = "listitemClass"> 
            <img src="img/zestaw1/00ff9e.png" alt=""> 00ff9e
        </div> </div>
				<div class="list-group-item"> <div id="imageNo00ff92" class = "listitemClass"> 
            <img src="img/zestaw1/00ff92.png" alt=""> 00ff92
        </div></div>
				<div class="list-group-item"><div id="imageNo00ffb5" class = "listitemClass"> 
            <img src="img/zestaw1/00ffb5.png" alt=""> 00ffb5
        </div>
		</div>
			</div>
</div>
 <form action="page2_form_2.php" method="post">
 <label>Type the order here:<span>*</span></label>
 <input name="rezultatA" id="rezultatA" type="text" placeholder="00ffc0, 00ffcb etc..." >
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 <script src="./Sortable.js"></script>

	<script type="text/javascript" src="st/prettify/prettify.js"></script>
	<script type="text/javascript" src="st/prettify/run_prettify.js"></script>

	<script src="st/app.js"></script>
 </div>
 </div>
 </body>
</html>
