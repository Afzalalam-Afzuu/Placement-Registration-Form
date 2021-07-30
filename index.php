<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pin = $_POST['pin'];
	$college = $_POST['college'];
	$skills = $_POST['skills'];
	$qualification = $_POST['qualification'];
	$experience = $_POST['experience'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`form` (`name`, `age`, `email`, `mobile`, `address`, `city`, `state`, `pin`, `college`, `skills`, `qualification`, `experience`, `desc`, `dt`) VALUES ('$name', '$age', '$email', '$mobile', '$address',  '$city',  '$state',  '$pin',  '$college',  '$skills',  '$qualification',  '$experience',  '$desc',   current_timestamp());";
    
    // INSERT INTO `trip`.`form` (`name`, `age`, `email`, `mobile`, `address`, `city`, `state`, `pin`, `college`, `skills`, `qualification`, `experience`, `desc`, `dt`) VALUES ('1', 'Afzal Alam', '20', 'this@this.com', '7488207433', 'patna bihar india (803201)', 'patna', 'bihar', '803201', 'MMH Univercity patna bihar', 'Html Css Js Php Java React Native React Js ', 'Garaduation', 'internship', 'Hello I am Afzal And i Am a Web Devloper', CURRENT_TIMESTAMP);

    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to the Afzal Technology Ltd.</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->

</head>
<body>
	<!--header-->
	<div class="agile-header">
		<h1>Afzal Technology Ltd.</h1>
		<p><span style="color: #31e06f; font-weight: bold;">Address:</span><br> Jethuli, P. O. - Kachchi Dargah, Fatuha Patna Bihar 803201 <br><br> Mobile No : 1234567890</p>
	</div>
	<!--//header-->
      
	<!-- echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the Afzal Technology Ltd.</p>"; -->

	<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the Afzal Technology Ltd.</p>";
        }
    ?>


	<!--main-->
	<div class="agileits-main">
		<div class="wrap">
		<form action="index1.php" method="post">
			<br>
			<p style="text-align: center; color: rgb(255, 253, 253); font-size: 20px; letter-spacing: 2px; padding-bottom: 50px;">Niks Technology Ltd. <br> Placement Registration Form</p>
			<br>
			<ul>
				<li class="text">name  :  </li>
				<li><input name="name" type="text" required></li>
			</ul>
			<ul>
				<li class="text">age :  </li>
				<li><input name="age" type="text" required></li>
			</ul>
			<ul>
				<li class="text">email  :  </li>
				<li><input name="email" type="text" required></li>
			</ul>
			<ul>
				<li class="text">mobile no  :  </li>
				<li><input name="mobile" type="text" required></li>
			</ul>	
			<ul>
				<li class="text">address  :  </li>
				<li><input name="address" type="text" required></li>
			</ul>
			<ul>
				<li class="text">city  :  </li>
				<li><input name="city" type="text" required></li>
			</ul>
			<ul>
				<li class="text">state  :  </li>
				<li><input name="state" type="text" required></li>
			</ul>
			<ul>
				<li class="text">pin/code  :  </li>
				<li><input name="pin" type="text" required></li>
			</ul>
			<ul>
				<li class="text">college :  </li>
				<li><input name="college" type="text" required></li>
			</ul>
			<!-- <ul>
				<li class="text">Upload Resume :  </li>
				<li><input name="file" type="file" required></li>
			</ul> -->
			<ul>
				<li class="text">skills  :  </li>
				<li><input name="skills" type="text" required></li>
			</ul>
			<ul>
				<li class="text">qualification  :  </li>
				<li><input name="qualification" type="text" required></li>
			</ul>
			<ul>
				<li class="text">experience  :  </li>
				<li><input name="experience" type="text" required></li>
			</ul>
			<ul>
				<li class="text">inquiry  :  </li>
				<li><textarea name="desc"></textarea></li>
			</ul>
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" value="submit">
				<input type="reset" value="reset">
			</div>
			</form>
		</div>	
	</div>
<!--//main-->
<!--footer-->
<div class="footer-w3">
	<!-- <p>Enter Footer</p> -->
</div>
<!--//footer-->
</body>
</html>