<hmtl>
	<title>
	</title>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
		<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="http://localhost/insert/22-active.html" width="800" height="800" frameborder="0" style="border:0" allowfullscreen=""></iframe>');
        }
    });   
});
</script>
	<style type="text/css">
section {
	
	display: flex;
	justify-content: center;
	margin-top: 3%
}
.button {
	display: flex;
	justify-content: center;
	background-color: #285eac; /* Green */
 	border: none;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 22px;;
	border-radius: 4px

}
.butt {
	margin-top: 3%;
	display: flex;
	justify-content: center;
}
</style>

	</head>
	<body>
		

	<div class="butt">
		<button class="button" id="button">Active Yards</button>
	</div>
	
	<section>
		<div id="iframeHolder"></div>
	</section>
	</body>
</hmtl>

