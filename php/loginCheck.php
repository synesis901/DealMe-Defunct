<?php
/*
	Log In Check
	An included file
*/
//include($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");
if(m_Login::check() == "false"){Header("Location: /");}
?>