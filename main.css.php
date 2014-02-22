<?php

header( 'Content-type: text/css' );	// Output css

if( substr_count( $_SERVER[ 'HTTP_ACCEPT_ENCODING' ], 'gzip' ) ) { ob_start( "ob_gzhandler" ); } else { ob_start(); }	// If the client supports it, send gzipped data

$filename = "main.css";			// The file we are sending

$content = file_get_contents( $filename );

echo $content;

?>
