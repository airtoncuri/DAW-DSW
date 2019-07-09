<?php
	session_start();
	unset($_SESSION['id_user']);
 
	if(session_destroy())
	{
		header("Location: ?pagina=login");
	}
?>