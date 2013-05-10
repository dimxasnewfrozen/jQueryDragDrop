<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Test drag/drop</title>

<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
<!--<link rel="stylesheet" href="development-bundle/themes/ui-lightness/jquery-ui-1.8.23.custom.css" type="text/css" media="all"/>-->

<script type="text/javascript">

$(document).ready(function(){

		$("#next").click(function () {
			$('.my_table tr').each(function(v) {
				$(this).append("<td>" + v + "</td>");
			 });	
		});
		
		$("#down").click(function () {
			var columns = $('.my_table td').length / $('.my_table tr').length;
			$('.my_table tr').append("<tr>");
			
			for(i=1; i<=columns; i++) {
				$('.my_table').append("<td>TEST</td>");
			}
		});
});

</script>


</head>
<body>

	<input type='button' id="next" value=">>" />
	<input type='button' id="down" value="Down" />
	<table border='1' class='my_table'>

		<?php
		
		for($i=0; $i<5; $i++) {
			
			echo "<tr>";
			
			for($j=0; $j<5; $j++) {
				echo "<td style='padding:15px;'>" . $j . "</td>";
			}

			echo "</tr>";
			
		}
		?>
		
		
	</table>



</body>

</html>