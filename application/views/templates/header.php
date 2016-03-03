<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	
	<script type="text/javascript" src="application/js/scripts.js" ></script>
	<script type="text/javascript" src="application/js/facebook_script.js" >

	
	$(document).ready(function(){
    	FB.getLoginStatus(function(response) {
    	statusChangeCallback(response);
		});
	});


	</script>
