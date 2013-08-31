<?php 

//empty
//isset
//is_null

if (empty($name))
{
	
	echo (empty($name).'empty<br>');
}
if(isset($name))
{	
	echo (isset($name).'isset<br>');	
}
$name="panli";
if (is_string($name))
	echo $name.'<br>';

//substr,strstr,replacestr
echo chr(97).'<br>';
//math

//function
//date,time

date_default_timezone_set($timezone_identifier)

