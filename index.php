<?php
	$address = "609 St. Charles Ave";
	$authors = array(
		'1870' => 'Charles Dickens' 
		'1863' => 'William Thackeray' 
		'1882' => 'Anthony Trollope'
		'1889' => 'Gerard Manley Hopkins'
		);
	
	foreach ($authors as $year => $author) {echo "$author died in $year.<br/>";}
	

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
<p><?php echo "$author died in $year."?></p>

</body>
</html>
