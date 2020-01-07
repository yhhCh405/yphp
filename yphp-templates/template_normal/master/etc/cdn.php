<?php 
	function getCdn(String $path_to_index){
		echo '
<meta charset="utf-8">
<meta author="Ye Htet Hein">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!--locals-->
<link rel="stylesheet" href="'.$path_to_index.'master/css/styles.css">
<script src="'.$path_to_index.'master/script/main.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"> 

<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat|Thasadith&display=swap" rel="stylesheet"> 
<!-- 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->

';
	}
 ?>