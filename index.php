<?php
// File: index.php
// Author: makingbrowsergames.com
// Basic Tutorial
 
require_once('includes/header.php');
 
must_login();


$templateVariables["display"] = "index.tpl";
require_once("includes/footer.php");