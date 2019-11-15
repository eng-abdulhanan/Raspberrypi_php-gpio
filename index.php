<html>
  <head>
    <title><?php echo exec('hostname'); ?></title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">

		function check(){
			$.get( "gpio_read.php", function( data ) {
				  $( "#result" ).html( data );
				  
				});
		}
		
	</script>
	<script type="text/javascript">
	<!--
		setInterval( "check()" ,1000);
	//-->
	</script>
    
    
  </head>
  <body>

  <div id="result"></div>

  </body>
</html>