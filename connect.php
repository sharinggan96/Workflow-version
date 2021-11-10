<?php

$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$Brand = filter_input(INPUT_POST, 'Brand');
$Style = filter_input(INPUT_POST, 'Style');
$Size = filter_input(INPUT_POST, 'Size');
$Color = filter_input(INPUT_POST, 'Color');
$Gate = filter_input(INPUT_POST, 'Gate');
$Sections = filter_input(INPUT_POST, 'Sections');
$LineP = filter_input(INPUT_POST, 'LineP');
$EndP = filter_input(INPUT_POST, 'EndP');
$CornerP = filter_input(INPUT_POST, 'CornerP');
$GateQ = filter_input(INPUT_POST, 'GateQ');


if (!empty($Brand)){
if (!empty($Style)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "youtube";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO fence (firstname,lastname,email,phone,Brand,Style,Size,Color,Gate,Sections,LineP,EndP,CornerP,GateQ)
values ('$firstname','$lastname','$email','$phone','$Brand','$Style','$Size','$Color','$Gate','$Sections','$LineP','$EndP','$CornerP','$GateQ')";
if ($conn->query($sql)){
echo "";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}


?>
<htmL>
<head>
	<script src="pop.js"></script>
	<script>
		function validate(e){

		var f = e.currentTarget;

		var sections = document.getElementById("sections").value;

		var lines = document.getElementById("lines").value;

		var ends = document.getElementById("ends").value;

		var corner = document.getElementById("corner").value;

		var gates = document.getElementById("gates").value;

		
		var errors = [];



		if (!checkLength(sections,1,100)) {

			errors[errors.length] = "You must enter a section quantity.";

		}

		if (!checkLength(lines,1,100)) {

			errors[errors.length] = "You must enter a line post quantity.";

		}

		if (!checkLength(ends,1,100)) {

			errors[errors.length] = "You must enter a end post quantity.";

		}

		if (!checkLength(corner,1,50)) {

			errors[errors.length] = "You must enter a corner popst quantity.";

		}

		if (!checkLength(gates,1,50)) {

			errors[errors.length] = "You must enter a gate quantity.";

		}

		





		if (errors.length > 0) {

			reportErrors(errors);

			e.preventDefault();

		}



	}



	function reportErrors(errors){

		var msg = "There were some problems...\n";

		var numError;

		for (var i=0; i<errors.length; i++) {

			numError = i + 1;

			msg += "\n" + numError + ". " + errors[i];

		}

		alert(msg);

	}



	window.onload = function() {

	  	document.getElementById("quantsub").addEventListener("submit", function(e){

	    	validate(e);

	  	});



	  

	}

	</script>
	<style>
		body {
			background-image: linear-gradient(70deg, #686B73 0%, #BFD2FF 100%);
  			box-sizing: border-box;
		}
		.custr {
			display: flex;
	    	justify-content: center;
	    	background-image: linear-gradient(70deg, #686B73 0%, #082466 100%);
  			box-sizing: border-box;
  			border-radius: 7px;


	     }
	     tr {
	     	height:40px;

	     }
	    
	     .decisions {
	     	text-align: center;
	     	margin-bottom: -30px;
	     	padding: 7px;
	     	font-family: Helvetica;
	     	font-size: 15px;
	     	letter-spacing: .02em;
	     	color:#ffffff;
	     	
	     }
	     .quant {
	     	display: flex;
	    	justify-content: center;
	     }
	     .quanttitle {
	     	text-align: center;
	     }
	     .quanty {
	     	width:70px;
	     	position: relative;
	     	left:30%;

	     } 
	     .sub {
	     	display: flex;
	    	justify-content: center;
	    	margin-top: 30px;
	    	position: relative;
	    	left:10px;
	     }
	     .butsub {
	     	width:200px;
	     	height:45px;
	     	font-family:Impact;
	     	letter-spacing: .06em;
	     	font-size: 25px;
	     	border-radius: 5px;
	     	background-color: #D9D9D9

	     }
	     .butsub:hover {
	     	background-color:#285eac;
	     	color:#ffffff;
	     	transition-duration: 350ms;
	     }
	</style>
	</head>
<body>
	<div>

	</div>
	
	<div>
		<section class="custr">
			<table>
				<tr clas="cust">
					
<td> 
	 <h1 name="firstname" class="decisions"><?php $firstname = $_POST['firstname']; echo "$firstname";?></h1><br>
	 <h1 name="lastname" class="decisions"><?php $lastname = $_POST['lastname']; echo "$lastname";?></h1><br>
	 <h1 name="email" class="decisions"><?php $email = $_POST['email']; echo "$email";?></h1><br>
	 <h1 name="phone" class="decisions"><?php $phone = $_POST['phone']; echo "$phone";?></h1><br>
	 <h1 name="brand" class="decisions"><?php $Brand = $_POST['Brand']; echo "$Brand";?></h1><br>
     <h1 name="style" class="decisions"><?php $Style = $_POST['Style']; echo "$Style";?></h1><br>  
     <h1 name="size" class="decisions"><?php $Size = $_POST['Size']; echo "$Size"; ?> </h1> <br>
     <h1 name="color" class="decisions"><?php $Color = $_POST['Color']; echo "$Color"; ?> </h1><br>
     <h1 name="gates" class="decisions"><?php $Gate = $_POST['Gate']; echo "$Gate"; ?> </h1><br>
     <h1 name="sections" class="decisions"><?php $Email = $_POST['Email']; echo "$Email"; ?> </h1> 
     <h1 name="lines" class="decisions"><?php $Brand = $_POST['LineP']; echo "$LineP";?></h1><br>
     <h1 name="ends" class="decisions"><?php $Brand = $_POST['Endp']; echo "$EndP";?></h1><br>
     <h1 name="corners" class="decisions"><?php $Brand = $_POST['CornerP']; echo "$CornerP";?></h1><br>
     <h1 name="gateq" class="decisions"><?php $Brand = $_POST['GateQ']; echo "$GateQ";?></h1><br></td>


<tr>
</table>


</section>

</body>
</htmL>





 
