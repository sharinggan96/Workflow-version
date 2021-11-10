<html>
<head>
	<title>Carl's Fencing</title>
	<script src="pop.js"></script>
	<script>
            function validate(e){

        var f = e.currentTarget;

        var firstname = document.getElementById("firstname").value;

        var lastname = document.getElementById("lastname").value;

        var email = document.getElementById("email").value;

        var phone = document.getElementById("phone").value;

        var Gates = document.getElementById("Gate").value;

		    var Brand = document.getElementById("Brand").value;

        var Style = document.getElementById("Style").value;

        var Size = document.getElementById("Size").value;

        var Color = document.getElementById("Color").value;

        var Gates = document.getElementById("Gate").value;

        var Sections = document.getElementById("Sections").value;

        var LineP = document.getElementById("LineP").value;

        var EndP = document.getElementById("EndP").value;

        var CornerP = document.getElementById("CornerP").value;

        var GateQ = document.getElementById("GateQ").value;


        
        var errors = [];

         if (!checkLength(firstname,1,50)) {

            errors[errors.length] = "You must enter your first name.";
            

        }
         if (!checkLength(lastname,1,50)) {

            errors[errors.length] = "You must enter your last name.";
            

        }
         if (!checkLength(email,1,50)) {

            errors[errors.length] = "You must enter your email.";
            

        }
         if (!checkLength(phone,1,50)) {

            errors[errors.length] = "You must enter your phone number.";
            

        }

        if (!checkLength(Brand,1,100)) {

            errors[errors.length] = "You must select a brand.";

        }

        if (!checkLength(Style,1,100)) {

            errors[errors.length] = "You must select a style.";

        }

        if (!checkLength(Size,1,100)) {

            errors[errors.length] = "You must select a size.";

        }

        if (!checkLength(Color,1,50)) {

            errors[errors.length] = "You must select a color.";

        }

        if (!checkLength(Gate,1,50)) {

            errors[errors.length] = "You must select a gate.";


        }
        if (!checkLength(Sections,1,50)) {

            errors[errors.length] = "You must enter a quantity for sections.";
            

        }
         if (!checkLength(LineP,1,50)) {

            errors[errors.length] = "You must enter a quantity for line posts.";
            

        }
         if (!checkLength(EndP,1,50)) {

            errors[errors.length] = "You must enter a quantity for end posts.";
            

        }
         if (!checkLength(CornerP,1,50)) {

            errors[errors.length] = "You must enter a quantity for corner posts.";
            

        }
         if (!checkLength(GateQ,1,50)) {

            errors[errors.length] = "You must enter a quantity for gates.";
            

        }


        if (errors.length > 0) {

            reportErrors(errors);

            e.preventDefault();

        }



    }



    function reportErrors(errors){

        var msg = "You forgot to fill some things out!!\n";

        var numError;

        for (var i=0; i<errors.length; i++) {

            numError = i + 1;

            msg += "\n" + numError + ". " + errors[i];

        }

        alert(msg);

    }



    window.onload = function() {

        document.getElementById("custchoose").addEventListener("submit", function(e){

            validate(e);

        });



      

    }
        </script>
	<style>
		.cinfo  {
			margin-top:8px;
			float:right;
		}
		p {
			position: relative;
			right:10px;	
			margin:-2px;
			font-size: 15px;
			color:white;
		}
    .ctitle {
      position: relative;
      left:10px;
    }
    .ctitle1 {
      position: relative;
      left:17px;
    }
		header {
			background-color:#285eac;
			width:100%;
		}
		.carlsimg {
			width:100px;
		}
		img {
			width:85px;
			height:7%;
		}
		.enterinfo {
			margin:10px;
			height:30px;
		 	position: relative;
            display: block;
            border-radius: 5px;
            width: 240px;
            height:30px;
            font-size: 20px;
            color:white;
            background-color:#285eac; 
            margin: 0 auto;
            text-align: center;
		}
		
		
		
		h4 {
			margin:2px;
		}
		
		@media only screen and ( max-width:420px ) { 
			p {
			position: relative;
			right:10px;	
			margin:-1px;
			font-size: 15px;
			color:white;
		}
		img {
			width:85px;
			height:16%;
		}


		}
		.decisions {
            position: relative;
            display: block;
            border-radius: 5px;
            width: 240px;
            height:30px;
            font-size: 20px;
            color:white;
            background-color:#285eac; 
            margin: 0 auto;
            text-align: center;
            
      		}
      		
      		
      		::placeholder {
      			color:white;
            font-size:12px
      		}
      	.cust {
      		display: flex;
          justify-content: center;
      	}
         .fence {
         	margin-top: 45px;
         	margin-bottom: -10px;
          display: flex;
          justify-content: center;

         }
         .quantity {
 			margin-top: 40px;
            display: flex;
            justify-content: center;}

          .button {
  			display: inline-flex;
  			height: 40px;
  			width: 150px;
  			border: 2px solid #285eac;
  			margin: 20px 20px 20px 20px;
  			color: #BFC0C0;
  			text-transform: uppercase;
  			text-decoration: none;
  			font-size: 1em;
  			letter-spacing: 1.5px;
  			align-items: center;
 			  justify-content: center;
  			overflow: hidden;
  			
		}

		a {
  			color: black;
  			text-decoration: none;
  			letter-spacing: 1px;

		}
		#button-2 {
  			position: relative;
  			left:31px;
  			overflow: hidden;
  			cursor: pointer;
  			text-align: center;
  			justify-content: center;

		}

		#button-2 a {
  			position: relative;
  			transition: all .35s ease-Out;
		}

		#slide {
 			width: 100%;
  			height: 100%;
  			left: -200px;
  			background: #285eac;
  			position: absolute;
  			transition: all .35s ease-Out;
  			bottom: 0;
		}
      #slide1 {
      width: 100%;
        height: 100%;
        left: -200px;
        background: #285eac;
        position: absolute;
        transition: all 1.3s ease-Out;
        bottom: 0;
    }

		#button-2:hover #slide {
  			left: 0;
		}

		#button-2:hover a {
  			color: #ffffff;
  			font-size:.8em;
        font-weight:bold;
		}
		#button-3 {
  			position: relative;
  			left:26px;
  			overflow: hidden;
  			cursor: pointer;
  			text-align: center;
  			justify-content: center;

		}

		#button-3 a {
  			position: relative;
  			transition: all .35s ease-Out;
		}

		#button-3:hover #slide {
  			left: 0;
		}

		#button-3:hover a {
  			color: #ffffff;
  			font-size:.8em;
  			font-weight:bold;

		}

    #button-3:hover a {
        color: #ffffff;
        font-size:.8em;
        font-weight:bold;
    }
    #button-4 {
        position: relative;
        left:22px;
        overflow: hidden;
        cursor: pointer;
        text-align: center;
        justify-content: center;

    }

    #button-4 a {
        position: relative;
        transition: all .35s ease-Out;
    }


    #button-4:hover #slide1 {
        left: 0;
    }

    #button-4:hover a {
        color: #ffffff;
        font-size:.8em;
        font-weight:bold;

    }
    .final {
        border:none;
        display: inline-flex;
        height: 40px;
        width: 150px;
        color:black;
        margin: 20px 20px 20px 20px;
        text-transform: uppercase;
        text-decoration: none;
        font-size: 1em;
        letter-spacing: 1.5px;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        
      }
      


	
		  
		
	</style>

	</head>
	<body>
		<header>
			
			<img src="https://s3.amazonaws.com/homebaseimages/1014/d825cb00-19d1-4f03-837e-10100c5d6ed6/28ecf206-45c6-4e67-ae9f-fba506632b8cCarls.png" alt="Italian Trulli">
			
			<div class="cinfo">
			<p>1579 U.S. 9 Toms River, NJ 08755</p>
			<p>732-505-1749</p>
			<p>carljr@bycarls.com</p>
			</div>
		</header>
		<form method="post" action="connect.php" id="custchoose">
		<section  class="cust">
			
			<div><h3>Enter Your Contact Information</h3>
				<input class="enterinfo" type="text" name="firstname" id="firstname" placeholder="First Name"><br>
				<input class="enterinfo" type="text" name="lastname" id="lastname" placeholder="Last Name"><br>
				<input class="enterinfo" type="text" name="email" id="email" placeholder="Email"><br>
				<input class="enterinfo" type="text" name="phone" id="phone" placeholder="Phone Number">

				 	<div class="button" id="button-2">
    				<div id="slide"></div>
    				<a href="#fencetype">Let's Go!</a>
  					</div>
				
			</div>
			
		</section>

			<section class="fence">

			<div class="hiddendiv" id="fencetype"><h3 class="ctitle">Choose Your Type Of Fence</h3>
				<select class="decisions"  name="Brand" id="Brand"><option class="brand" value="" disabled selected hidden>Choose Brand</option>
					<option>Dogwood</option>
					<option>Juniper</option>
					<option>Chestnut</option>
					<option>Greenbrier</option>
					<option>Dogwood</option></select><br>
				<select class="decisions" name="Style" id="Style"><option value="" disabled selected hidden>Choose Style</option>
					<option>Haven</option>
					<option>Home</option>
					<option>Harbor</option>
				</select><br>

				<select  class="decisions" name="Size" id="Size"><option value="" disabled selected hidden>Choose Size</option>
					<option>3H x 8W</option>
					<option>4H x 8H</option>
					<option>5H x 8H</option>
					<option>6H x 8H</option></select><br>

				<select  class="decisions" name="Color" id="Color"><option value="" disabled selected hidden>Choose Color</option>
					<option>White</option>
					<option>Sand</option>
					<option>Wicker</option>
					<option>Khaki</option></select><br>

				<select  class="decisions" name="Gate" id="Gate"><option value="" disabled selected hidden>Choose Gate</option>
					<option>Four Foot Single Straight</option>
					<option>Four Foot Single Arched</option>
					<option>Five Foot Single Straight</option>
					<option>FIve Foot Single Arched</option>
					<option>Eight Foot Double Drive</option>
					<option>Ten Foot Double Drive</option>
					</select>

					<div class="button" id="button-3">
    				<div id="slide"></div>
    				<a href="#fencequant">Let's Go!</a>
  					</div>
					</div>
		</section>

		<section class="quantity">
			<div class="hiddendiv2" id="fencequant"><h3 class="ctitle1">Enter Correct Quanitites</h3>
				<input class="decisions" type="text" name="Sections" id="Sections" placeholder="Sections"><br>
				<input class="decisions" type="text" name="LineP" id="LineP" placeholder="End Posts"><br>
				<input class="decisions" type="text" name="EndP" id="EndP" placeholder="End Posts"><br>
				<input class="decisions" type="text" name="CornerP" id="CornerP" placeholder="Corner Posts"><br>
				<input class="decisions" type="text" name="GateQ" id="GateQ" placeholder="Gates"><br>

       

    


      <div class="button" id="button-4">
      <button class="final" type="submit">

      <div id="slide1"></div>Complete
    </button>
        
      </div>
  </div>
		</section>
   
  
    
      
 			

</form>

	</body>
</html>