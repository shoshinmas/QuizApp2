<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['rezultatA'])){
 if (empty($_POST['rezultatA'])){ 
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page2_form.php"); // Redirecting to second page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page3'])) {
 header("location: page2_form.php");// Redirecting to first page.
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
if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
}
?>
 </span>
<label>Order these colours in order ( hues ( vibrant colour ) nothing added )</label>
<div id="simple-list" class="row">
			<div id="example1" class="list-group col">

				<div class="list-group-item"><div id="imageNod8ff00" class = "listitemClass2"> 
            <img src="img/zestaw2/d8ff00.png" alt=""> d8ff00
        </div> </div>
				<div class="list-group-item"> <div id="imageNoe4ff00" class = "listitemClass2"> 
            <img src="img/zestaw2/e4ff00.png" alt=""> e4ff00
        </div></div>
				<div class="list-group-item"><div id="imageNod2ff00" class = "listitemClass2"> 
            <img src="img/zestaw2/d2ff00.png" alt=""> d2ff00
        </div></div>
				<div class="list-group-item"><div id="imageNof0ff00" class = "listitemClass2"> 
            <img src="img/zestaw2/f0ff00.png" alt=""> f0ff00
        </div> </div>
				<div class="list-group-item"><div id="imageNoeafff00" class = "listitemClass2"> 
            <img src="img/zestaw2/eaff00.png" alt=""> eaff00
        </div></div>
				<div class="list-group-item"><div id="imageNodeff00" class = "listitemClass2"> 
            <img src="img/zestaw2/deff00.png" alt=""> deff00
        </div>
		</div>
			</div>
</div>
 <form action="page2_form_3.php" method="post">
 <label>Type the order here:<span>*</span></label>
 <input name="rezultatB" id="rezultatB" type="text" placeholder="00ffc0, 00ffcb etc..." >
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
