<?php

header( 'Content-type: text/javascript' );

if( substr_count( $_SERVER[ 'HTTP_ACCEPT_ENCODING' ], 'gzip' ) ) { ob_start( "ob_gzhandler" ); } else { ob_start(); }

$filename = "main.js";

$content = file_get_contents( $filename );

echo $content;

?>
