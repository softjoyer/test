
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$ArrayAh=array("吃饭","睡觉","羽毛球");
$Ah=array();

if(!empty($_POST["subOK"]))
{
	//$Ah=empty($_POST["chkAh"])?array():$_POST["chkAh"];		
	$Ah=$_REQUEST["chkAh"];
}
echo '<pre>';
var_dump($_POST);

?>

<form  name="frmTest" method="post" action=''>
<p>爱好：
<?php 
 
    foreach ($ArrayAh as $key=>$value)
    {
    	$checked=in_array($key, $Ah)?'checked':'';
		echo ("<input type='checkbox' name='chkAh[]' value=$key $checked>$value");
	}
  
?>

<input type="submit" name="subOK" value="提交" />
</p>
</form>