<?php
	$address = "609 St. Charles Ave";
	$authors = array('Charles Dickens died in 1870','William Thackeray died in 1863','Anthony Trollope died in 1882','Gerard Manley Hopkins died in 1889');
 	
?>


<html>
<head>
	<title>Example 1</title> 
	<style type="text/css"> 
	h1 {font-size: 1.8em;}



	</style>
</head>
<body>
<h1>My Website</h1>


<p><?php echo $address; ?></p>
<p><?php echo($authors[0]); ?></p>
<p><?php echo($authors[1]); ?></p>
<p><?php echo($authors[2]); ?></p>
<p><?php echo($authors[3]); ?></p>

</body>
</html>
