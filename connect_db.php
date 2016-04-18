<?php
	$link =mysql_connect("localhost:3306","ligaevol_root","ligaevoluciona123");
	if($link){
		mysql_select_db("ligaevol_academ",$link);
	}
?>