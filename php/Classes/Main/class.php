<?php
/*
	Loads all the required classes for DealMe
*/
//Setting php session
session_start();
//Incase that it has never been set. won't throw an error now
if(!isset($_SESSION['login'])){
$_SESSION['login'] = "";
}

//Mongo-PHP method classes - local to kyle only atm - will need to fix later

require("m_Connection.class");
require("m_var.class");
require("m_FindOne.class");
require("m_Save.class");
require("m_Update.class");
require("m_Remove.class");
require("m_Find.class");

//Website interaction classes
require("m_UserAccount.class");
require("m_Email.class");//not tested
require("m_Verify.class");//not tested
require("m_Recovery.class");//not tested
require("m_Login.class");
require("m_Category.class");
//require("m_.class");

// email/password recovery(finish later;custom php page)
// m_Login _SESSION data needs to change. the whole array (incl. pass.) is in the _SESSION
//display of information[deals] (how do businesses want their information displayed)


require("m_closeConnection.php");
?>