<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['rezultatB'])){
 if (empty($_POST['rezultatB'])){ 
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

				<div class="list-group-item"><div id="imageNo4aff00" class = "listitemClass3"> 
            <img src="img/zestaw3/4aff00.png" alt=""> 4aff00
        </div></div>
				<div class="list-group-item"><div id="imageNoe4ff00" class = "listitemClass3"> 
            <img src="img/zestaw3/56ff00.png" alt=""> 56ff00
        </div></div>
				<div class="list-group-item"><div id="imageNo77ff00" class = "listitemClass3"> 
            <img src="img/zestaw3/77ff00.png" alt=""> 77ff00
        </div></div>
				<div class="list-group-item"><div id="imageNo61ff00" class = "listitemClass3"> 
            <img src="img/zestaw3/61ff00.png" alt=""> 61ff00
        </div></div>
				<div class="list-group-item"><div id="imageNo6cff00" class = "listitemClass3"> 
            <img src="img/zestaw3/6cff00.png" alt=""> 6cff00
        </div></div>
				<div class="list-group-item"><div id="imageNo3eff00" class = "listitemClass3"> 
            <img src="img/zestaw3/3eff00.png" alt=""> 3eff00
        </div> </div>
			
</div></div>
 <form action="page2_form_4.php" method="post">
 <label>Type the order here:<span>*</span></label>
 <input name="rezultatC" id="rezultatC" type="text" placeholder="00ffc0, 00ffcb etc..." >
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
