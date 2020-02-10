<?php
/**
 * lib/header.php
 * header file for chatApp project 1.0
 */
include 'functions.php'
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4 cdn link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- jquery cdn link is moved to bottom of the chat.php page for optimal page loading -->
	<title>Chat App</title>
	<style>
		.chatbox {
			background-color: #DADADA;
			height: 325px;
		}
		#typebox{
			
		}
		#name {
			width: 100%;
			height: 100%;
		}
		#comment {
			width: 100%;
			height: 100%;
		}
		#submit-button{
			width: 100%;
		}
		.chatbox p {
			margin-left: 15px;
			margin-top: 5px;
		}
		body {
			margin-top: 15px;
		}
	</style>
</head>
<body>
	<h1 class="text-center text-danger">Chat App</h1>
	<h2 class="text-center">Where you can type whatever...</h2>
	<br>
