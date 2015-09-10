<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body onload="">
<form action="editor.php?arquivo=<?php echo $_GET['arquivo'] ?>" method="POST">
<textarea class="ckeditor" cols="120" id="editor1" name="editor1" rows="10">
	<?php
		
		
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
			ini_set("display_errors", 0 );
                
		if( $_POST['editor1'] &&  $_GET['arquivo']  )
		{			

			$arquivo = fopen( $_GET['arquivo'] , "w+");
			fwrite($arquivo,   $_POST['editor1']  );
		}

		if( $_GET['arquivo'] )
		{
			echo file_get_contents( $_GET['arquivo'] );
		}

	?>
	</textarea>		
	</form>
	<script type="text/javascript">
	window.onload = function(){

		CKEDITOR.on('instanceReady', function(){

				CKEDITOR.tools.callFunction(193);
		});
	}
	</script>
</body>
</html>