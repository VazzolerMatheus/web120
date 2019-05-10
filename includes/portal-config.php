<?php

/*
portal-config.php
Used to store all of our WEB120 configuration information
*/


//$_ is super global in php
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

echo THIS_PAGE;

die;
?>