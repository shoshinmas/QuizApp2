<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['rezultatC'])){
 if (empty($_POST['rezultatC'])){ 
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page2_form.php"); // Redirecting to second page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page4'])) {
 header("location: page1_form.php");// Redirecting to first page.
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
			<div id="example1" class="list-group col">
				<div class="list-group-item"><div id="imageNo36ff00" class = "listitemClass4"> 
            <img src="img/zestaw4/36ff00.png" alt=""> 36ff00
        </div>  </div>
				<div class="list-group-item"><div id="imageNo00ff92" class = "listitemClass4"> 
            <img src="img/zestaw4/00ff92.png" alt=""> 00ff92
        </div>  </div>
				<div class="list-group-item"><div id="imageNo00ff54" class = "listitemClass4"> 
            <img src="img/zestaw4/00ff54.png" alt=""> 00ff54
        </div> </div>
				<div class="list-group-item"><div id="imageNo00ff00" class = "listitemClass4"> 
            <img src="img/zestaw4/00ff00.png" alt=""> 00ff00
        </div> </div>
				<div class="list-group-item"> <div id="imageNo1fff00" class = "listitemClass4"> 
            <img src="img/zestaw4/1fff00.png" alt=""> 1fff00
        </div></div>
				<div class="list-group-item"><div id="imageNo00ffcb" class = "listitemClass4"> 
            <img src="img/zestaw4/00ffcb.png" alt=""> 00ffcb
        </div></div>
			</div>
</div>
 <form action="page2_form_5.php" method="post">
 <label>Type the order here:<span>*</span></label>
 <input name="rezultatD" id="rezultatD" type="text" placeholder="00ffc0, 00ffcb etc..." >
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
