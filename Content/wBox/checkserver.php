<?php

$ip = "192.186.136.237";
$port = "27025";

$sock = @fsockopen( $ip, $port, $num, $error, 2 );

if( !$sock ){

echo( "Offline");
}

if( $sock ){

echo( "Online" );
fclose($sock);

}

?>