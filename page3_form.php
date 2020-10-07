<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['rezultatE'])){
 if (empty($_POST['rezultatE'])){ 
 $_SESSION['error_page5'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page2_form_5.php"); // Redirecting to second page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page6'])) {
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
 if (!empty($_SESSION['error_page6'])) {
 echo $_SESSION['error_page6'];
 unset($_SESSION['error_page6']);
 }
 ?>
 </span>
 <div id="simple-list" class="row">
			<div id="example1" class="list-group col">
				<div class="list-group-item"><div id="imageNo1fff00" class = "listitemClass6"> 
            <img src="img/zestaw6/1fff00.png" alt=""> 1fff00
        </div> </div>
				<div class="list-group-item"><div id="imageNo92ff00" class = "listitemClass6"> 
            <img src="img/zestaw6/92ff00.png" alt=""> 92ff00
        </div></div>
				<div class="list-group-item"> <div id="imageNo5eff00" class = "listitemClass6"> 
            <img src="img/zestaw6/5eff00.png" alt=""> 5eff00
        </div></div>
				<div class="list-group-item"><div id="imageNo00ff92" class = "listitemClass6"> 
            <img src="img/zestaw6/00ff92.png" alt=""> 00ff92
        </div></div>
				<div class="list-group-item"><div id="imageNoc3ff00" class = "listitemClass6"> 
            <img src="img/zestaw6/c3ff00.png" alt=""> c3ff00
        </div></div>
				<div class="list-group-item"><div id="imageNof0ff00" class = "listitemClass6"> 
            <img src="img/zestaw6/f0ff00.png" alt=""> f0ff00
        </div> </div>
			</div></div>
 <form action="page4_insertdata.php" method="post">
 <label>Type the order here:<span>*</span></label>
 <input name="rezultatF" id="rezultatF" type="text" placeholder="00ffc0, 00ffcb etc..." >
 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Submit" />
 </form>
 <script src="./Sortable.js"></script>

	<script type="text/javascript" src="st/prettify/prettify.js"></script>
	<script type="text/javascript" src="st/prettify/run_prettify.js"></script>

	<script src="st/app.js"></script>
 </div> 
 </div>
 </body>
</html>