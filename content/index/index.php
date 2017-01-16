<?php
function index()
{
}
function changeLanguage()
{
	global $request;
	$_SESSION[TB_PREFIX.'dtLanguage']=$request['SITELANGUAGE'];
	redirect('./');
}
?>