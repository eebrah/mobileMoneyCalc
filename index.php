<?php

if( substr_count( $_SERVER[ 'HTTP_ACCEPT_ENCODING' ], 'gzip' ) ) { ob_start( "ob_gzhandler" ); } else { ob_start(); }

$errors = Array(
	  "success!"
	, "the amount was smaller than the minimum allowed"
	, "the amount was larger than the maximum allowed"
);

function determineRates( $network = "safaricom", $amount = 0 ) {

	$returnValue = Array(
		  "onNetworkTransfer" => "N/A"
		, "offNetworkTransfer" => "N/A"
		, "registeredWithdrawal" => "N/A"
		, "unregisteredWithdrawal" => "N/A"
		, "ATMWithdrawal" => "N/A"
		, "err" => 0
	);

	$err = 0;

	if( is_numeric( $amount ) ) {

		switch( $network ) {

			case "safaricom" : {

				if( $amount < 10 ) {
					$err = 1;

				}

				if( $amount >= 10 ) {
					$onNetworkTransfer = 3;
					$offNetworkTransfer = "N/A";
					$registeredWithdrawal = "N/A";
					$unregisteredWithdrawal = "N/A";
					$ATMWithdrawal = "N/A";

				}

				if( $amount > 50 ) {
					$onNetworkTransfer = 5;
					$offNetworkTransfer = "N/A";
					$registeredWithdrawal = 10;

				}

				if( $amount > 101 ) {
					$onNetworkTransfer = 27;
					$offNetworkTransfer = 66;
					$registeredWithdrawal = 27;
					$unregisteredWithdrawal = 0;

				}

				if( $amount > 200 ) {
					$ATMWithdrawal = 33;

				}

				if( $amount > 501 ) {
					$onNetworkTransfer = 33;
					$offNetworkTransfer = 66;
					$registeredWithdrawal = 27;

				}

				if( $amount > 2501 ) {
					$offNetworkTransfer = 88;
					$registeredWithdrawal = 49;
					$ATMWithdrawal = 66;

				}

				if( $amount > 3501 ) {
					$offNetworkTransfer = 105;
					$registeredWithdrawal = 66;

				}

				if( $amount > 5001 ) {
					$onNetworkTransfer = 55;
					$offNetworkTransfer = 143;
					$registeredWithdrawal = 82;
					$ATMWithdrawal = 110;

				}

				if( $amount > 7501 ) {
					$offNetworkTransfer = 171;

				}

				if( $amount > 10001 ) {
					$offNetworkTransfer = 220;
					$registeredWithdrawal = 159;
					$ATMWithdrawal = 193;

				}

				if( $amount > 15001 ) {
					$offNetworkTransfer = 237;
					$registeredWithdrawal = 176;

				}

				if( $amount > 20001 ) {
					$onNetworkTransfer = 82;
					$offNetworkTransfer = 275;
					$registeredWithdrawal = 187;
					$ATMWithdrawal = "N/A";

				}

				if( $amount > 25001 ) {
					$onNetworkTransfer = 82;
					$offNetworkTransfer = 275;
					$registeredWithdrawal = 187;

				}

				if( $amount > 30001 ) {
					$onNetworkTransfer = 82;
					$offNetworkTransfer = 275;
					$registeredWithdrawal = 187;

				}

				if( $amount > 35001 ) {
					$offNetworkTransfer = "N/A";
					$registeredWithdrawal = 275;

				}

				if( $amount > 45001 ) {
					$onNetworkTransfer = 110;

				}

				if( $amount > 50001 ) {
					$registeredWithdrawal = 330;

				}

				if( $amount > 70000 ) {
					$err = 2;

				}

			}
			break;

			case "airtel" : {

				if( $amount < 50 ) {
					$err = 1;

				}

				if( $amount >= 50 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 15;
					$unregisteredWithdrawal = 0;

				}

				if( $amount > 100 ) {
					$registeredWithdrawal = 25;
					$unregisteredWithdrawal = 25;
					$ATMWithdrawal = 40;

				}

				if( $amount > 2500 ) {
					$registeredWithdrawal = 45;
					$unregisteredWithdrawal = 45;
					$ATMWithdrawal = 55;

				}

				if( $amount > 5000 ) {
					$registeredWithdrawal = 75;
					$unregisteredWithdrawal = 75;
					$ATMWithdrawal = 85;

				}

				if( $amount > 10000 ) {
					$registeredWithdrawal = 145;
					$unregisteredWithdrawal = 145;
					$ATMWithdrawal = 175;

				}

				if( $amount > 20000 ) {
					$registeredWithdrawal = 170;
					$unregisteredWithdrawal = 170;
					$ATMWithdrawal = "N/A";

				}

				if( $amount > 35000 ) {
					$registeredWithdrawal = 250;
					$unregisteredWithdrawal = "N/A";
					$offNetworkTransfer = "N/A";

				}

				if( $amount > 50000 ) {
					$registeredWithdrawal = 300;

				}

				if( $amount > 70000 ) {
					$onNetworkTransfer = "N/A";
					$registeredWithdrawal = "N/A";

				}

				if( $amount > 70000 ) {
					$err = 2;

				}

			}
			break;

			case "orange" : {

				if( $amount < 100 ) {
					$err = 1;

				}

				if( $amount >= 100 ) {
					$onNetworkTransfer = 30;
					$offNetworkTransfer = 70;
					$registeredWithdrawal = 25;
					$unregisteredWithdrawal = 0;
					$ATMWithdrawal = 40;

				}

				if( $amount > 2501 ) {
					$offNetworkTransfer = 90;
					$registeredWithdrawal = 45;
					$ATMWithdrawal = 60;

				}

				if( $amount > 5001 ) {
					$offNetworkTransfer = 155;
					$registeredWithdrawal = 75;
					$ATMWithdrawal = 100;

				}

				if( $amount > 10001 ) {
					$offNetworkTransfer = 305;
					$registeredWithdrawal = 145;
					$ATMWithdrawal = 175;

				}

				if( $amount > 20001 ) {
					$offNetworkTransfer = 355;
					$registeredWithdrawal = 170;

				}

				if( $amount > 35001 ) {
					$onNetworkTransfer = 40;
					$offNetworkTransfer = 390;
					$registeredWithdrawal = 195;

				}

				if( $amount > 40001 ) {
					$ATMWithdrawal = "N/A";

				}

				if( $amount > 50001 ) {
					$onNetworkTransfer = 50;
					$offNetworkTransfer = 450;
					$registeredWithdrawal = 225;

				}

				if($amount > 100000 ) {
					$err = 2;

				}

			}
			break;

			case "yu" : {

				if( $amount < 10 ) {
					$err = 1;

				}

				if( $amount > 10 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 5;
					$unregisteredWithdrawal = 5;
					$ATMWithdrawal = "N/A";

				}

				if( $amount > 100 ) {
					$ATMWithdrawal = 40;

				}

				if( $amount > 250 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 20;
					$unregisteredWithdrawal = 20;

				}

				if( $amount > 2501 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 40;
					$unregisteredWithdrawal = 40;
					$ATMWithdrawal = 60;

				}

				if( $amount > 5001 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 65;
					$unregisteredWithdrawal = 65;
					$ATMWithdrawal = 85;

				}

				if( $amount > 10001 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 120;
					$unregisteredWithdrawal = 120;
					$ATMWithdrawal = 150;

				}

				if( $amount > 20001 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 140;
					$unregisteredWithdrawal = 140;
					$ATMWithdrawal = 170;
				}

				if( $amount > 35001 ) {
					$onNetworkTransfer = 0;
					$offNetworkTransfer = 0;
					$registeredWithdrawal = 200;
					$unregisteredWithdrawal = 200;
					$ATMWithdrawal = "N/A";

				}

				if( $amount > 70000 ) {
					$err = 2;

				}

			}
			break;

		}

		if( $err == 0 ) {

			$returnValue [ "onNetworkTransfer" ] = $onNetworkTransfer;
			$returnValue [ "offNetworkTransfer" ] = $offNetworkTransfer;
			$returnValue [ "registeredWithdrawal" ] = $registeredWithdrawal;
			$returnValue [ "unregisteredWithdrawal" ] = $unregisteredWithdrawal;
			$returnValue [ "ATMWithdrawal" ] = $ATMWithdrawal;

		}

		$returnValue [ "err" ] = $err;

	}

	return $returnValue;
	
}


if( isset( $_REQUEST[ "network" ] ) && isset( $_REQUEST[ "amount" ] ) ) {

	$costs = determineRates( $_REQUEST[ "network" ], $_REQUEST[ "amount" ] );

	if( $costs[ "err" ] == 0 ) {

		echo '
					<p>The costs of transacting ' . $_REQUEST[ "amount" ] . ' on ' . $_REQUEST[ "network" ] . ' are :</p>
					<table id="results">
						<tbody>
							<tr>
								<th>send to registered user</th>
								<td>' . $costs[ "onNetworkTransfer" ] . '</td>
							</tr>
							<tr>
								<th>send to unregistered user</th>
								<td>' . $costs[ "offNetworkTransfer" ] . '</td>
							</tr>
							<tr>
								<th>agent withdrawal( registered )</th>
								<td>' . $costs[ "registeredWithdrawal" ] . '</td>
							</tr>
							<tr>
								<th>agent withdrawal( unregistered )</th>
								<td>' . $costs[ "unregisteredWithdrawal" ] . '</td>
							</tr>
							<tr>
								<th>ATM withdrawal</th>
								<td>' . $costs[ "ATMWithdrawal" ] . '</td>
							</tr>
						</tbody>
					</table>';

	}
	else {

		echo '
					<p>error: ' . $errors[ $costs[ "err" ] ] . '</p>';

	}

}
else {

	echo '
					<table id="results"
					       style="display: none;">
						<tbody>
							<tr>
								<th>send to registered user</th>
								<td></td>
							</tr>
							<tr>
								<th>send to unregistered user</th>
								<td></td>
							</tr>
							<tr>
								<th>agent withdrawal( registered )</th>
								<td></td>
							</tr>
							<tr>
								<th>agent withdrawal( unregistered )</th>
								<td></td>
							</tr>
							<tr>
								<th>ATM withdrawal</th>
								<td></td>
							</tr>
						</tbody>
					</table>';

}

?>
