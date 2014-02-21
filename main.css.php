<?php

header( 'Content-type: text/css' );

if( substr_count( $_SERVER[ 'HTTP_ACCEPT_ENCODING' ], 'gzip' ) ) {
	ob_start( "ob_gzhandler" );

}
else {
	ob_start();

}

?>

* {
	padding: 0;
	margin: 0;

}

body {
	font-family: sans-serif;

}

div.body {
	padding: 0 0.5em;

}

table {
	border-collapse: collapse;

	border-top: 2px solid #999999;
	border-bottom: 2px solid #999999;

	width: 100%;

	margin: 1em 0;

}

td, th {

}

.safaricom table thead {
	background-color: green;
	color: white;

}

.airtel table thead {
	background-color: red;
	color: white;

}

.orange table thead {
	background-color: black;
	color: orange;

}

.yu table thead {
	background-color: black;
	color: green;

}

table thead th {
	border: 1px solid;

	padding: 0.5em 1em;

}

table tbody {}

table tbody td, table tbody th {
	padding: 0.4em 1em;

	text-align: right;

}

table tbody tr:nth-of-type( 2n ) {
	background-color: #DDDDDD;

}

table tbody tr:hover {
	background-color: yellow;

}

div.network {
	display: none;

}

div.network:target {
	display: block;

}

.nav {
	padding: 2em 0;
	min-width: 320px;

}

.nav li {
	display: inline;

}

.nav a {
	padding: 2em 1em 0.5em;

	text-decoration: none;
	font-weight: bold;

	color: white;

}

.nav .safaricom a {
	background-color: green;

}

.nav .airtel a {
	background-color: red;

}

.nav .orange a {
	background-color: black;
	color: orange;

}

.nav .yu a {
	background-color: black;
	color: green;

}

.mainColumn {

	width: 55%;
	min-width: 320px;

	float: left;

}

div.overlay {
	position: fixed;

	width: 100%;
	height: 100%;

	left: 0;
	top: 0;

	background-color: rgba( 0, 0, 0, 0.4 );

}

div.dialog {

}

div.dialog h1 {

	color: white;
	background-color: #122348;

	font-size: 1.2em;
	font-weight: bold;

	text-transform: lowercase;
	padding: 0.5em 4%;

}

	div.dialog h1.dialogHeader, div.dialogContent p {
		margin: 0;

	}

	div.dialogContent {
		padding: 1em 4%;

	}

	div.modal {
		margin: 12% auto;
		width: 35em;

		background-color: white;

	}

	div.dialog legend {
		color: white;
		background-color: black;

		padding: 0.5em 1em;

	}

	div.dialog div.row {
		padding: 0.5em 1em;

	}

	div.dialog div.row:nth-of-type( 2n ) {
		background-color: #e5e5ff;

	}

	div.dialog input, div.dialog select {
		width: 50%;

	}

	div.dialog label {
		float: left;
		width: 40%;

		text-align: right;

		padding: 0.3em 0.5em;

	}

	div.dialog .buttons {
		padding: 0.5em 1em;

	}

	div.dialog button {
		font-weight: bold;
		color: white;

		padding: 0.4em 1em;

		border: none;

		border-radius: 0.5em;

	}

	button[ type="reset" ] {
		background-color: red;

		float: left;

	}

	button[ type="submit" ] {
		background-color: green;

		float: right;
	}

div.mainColumn div.dialog {

	box-shadow: 0.5em 0.5em 1em #999999;

}

.sideColumn {

	width: 32%;
	min-width: 320px;

	float: right;


}

@media only screen and (max-device-width: 480px) {

	.sideColumn, .mainColumn {

		width: 100%;

		display: block;
		clear: both;

	}

	.nav {
		padding: 1em 0;

	}

}
