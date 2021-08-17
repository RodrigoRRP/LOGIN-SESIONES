<?php 

 session_start();

	if(isset($_SESSION['user']))
	{

	}
	else{
		header('Location:index.html');
	}


?>