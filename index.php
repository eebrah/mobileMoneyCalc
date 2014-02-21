<?php

if( substr_count( $_SERVER[ 'HTTP_ACCEPT_ENCODING' ], 'gzip' ) ) {
	ob_start( "ob_gzhandler" );

}
else {
	ob_start();

}

?><!DOCTYPE html>
<?php

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

?>
<html>
	<head>
		<title>mobile money tarrif calculator</title>
		<meta name="viewport" content="width=device-width" />
		<link type="text/css"
		      rel="stylesheet"
		      href="main.css.php">
	</head>
	<body onload="init();">
		<div class="wrapper">
			<div class="body">
				<div class="nav">
					<ul>
						<li class="safaricom">
							<a href="#safaricom">safcom</a>
						</li>
						<li class="airtel">
							<a href="#airtel">airtel</a>
						</li>
						<li class="orange">
							<a href="#orange">orange</a>
						</li>
						<li class="yu">
							<a href="#yu">yu</a>
						</li>
					</ul>
				</div>
				<div class="sideColumn">
					<div class="dialog">
						<form action="?"
						      id="calculator">
							<fieldset class="info">
								<legend>transaction details</legend>
								<div class="row">
									<label for="network">network/service</label>
									<select name="network">
										<option value="safaricom">Safaricom's MPesa</option>
										<option value="airtel">Airtel Money</option>
										<option value="orange">Orange Money</option>
										<option value="yu">Yu Cash</option>
									</select>
								</div>
								<div class="row">
									<label for="amount">amount</label>
									<input type="number"
										   name="amount"
										   placeholder="amount to transact" <?php
if( isset( $_REQUEST[ "amount" ] ) ) {
	echo '
										   value="' . $_REQUEST[ "amount" ] . '"';
}
?>
										   required="required" />
								</div>
							</fieldset>
							<fieldset class="buttons">
								<button type="reset">reset</button>
								<button type="submit">submit</button>
							</fieldset>
						</form>
					</div>
					<div>
<?php

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
					</div>
				</div>
				<div class="mainColumn">
					<div class="network safaricom"
						 id="safaricom">
						<table>
							<thead>
								<tr>
									<th rowspan="2">min</th>
									<th rowspan="2">max</th>
									<th colspan="2">sending</th>
									<th colspan="3">withdrawal</th>
								</tr>
								<tr>
									<th>reg</th>
									<th>unreg</th>
									<th>reg</th>
									<th>unreg</th>
									<th>atm</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>10</td>
									<td>49</td>
									<td>3</td>
									<td>N/A</td>
									<td>N/A</td>
									<td>N/A</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>50</td>
									<td>100</td>
									<td>5</td>
									<td>N/A</td>
									<td>10</td>
									<td>N/A</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>101</td>
									<td>200</td>
									<td>27</td>
									<td>66</td>
									<td>27</td>
									<td>0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>201</td>
									<td>500</td>
									<td>27</td>
									<td>66</td>
									<td>27</td>
									<td>0</td>
									<td>33</td>
								</tr>
								<tr>
									<td>501</td>
									<td>2,500</td>
									<td>33</td>
									<td>66</td>
									<td>27</td>
									<td>0</td>
									<td>33</td>
								</tr>
								<tr>
									<td>2,501</td>
									<td>3,500</td>
									<td>33</td>
									<td>88</td>
									<td>49</td>
									<td>0</td>
									<td>66</td>
								</tr>
								<tr>
									<td>3,501</td>
									<td>5,000</td>
									<td>33</td>
									<td>105</td>
									<td>66</td>
									<td>0</td>
									<td>66</td>
								</tr>
								<tr>
									<td>5,001</td>
									<td>7,500</td>
									<td>55</td>
									<td>143</td>
									<td>82</td>
									<td>0</td>
									<td>110</td>
								</tr>
								<tr>
									<td>7,501</td>
									<td>10,000</td>
									<td>55</td>
									<td>171</td>
									<td>110</td>
									<td>0</td>
									<td>110</td>
								</tr>
								<tr>
									<td>10,001</td>
									<td>15,000</td>
									<td>55</td>
									<td>220</td>
									<td>159</td>
									<td>0</td>
									<td>193</td>
								</tr>
								<tr>
									<td>15,001</td>
									<td>20,000</td>
									<td>55</td>
									<td>237</td>
									<td>176</td>
									<td>0</td>
									<td>193</td>
								</tr>
								<tr>
									<td>20,001</td>
									<td>35,000</td>
									<td>82</td>
									<td>275</td>
									<td>187</td>
									<td>0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>35,001</td>
									<td>45,000</td>
									<td>82</td>
									<td>N/A</td>
									<td>275</td>
									<td>0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>45,001</td>
									<td>50,000</td>
									<td>110</td>
									<td>N/A</td>
									<td>275</td>
									<td>0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>50,001</td>
									<td>70,000</td>
									<td>110</td>
									<td>N/A</td>
									<td>330</td>
									<td>0</td>
									<td>N/A</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="network airtel"
					     id="airtel">
						<table>
							<thead>
								<tr>
									<th rowspan="2">min</th>
									<th rowspan="2">max</th>
									<th colspan="2">sending</th>
									<th colspan="3">withdrawal</th>
								</tr>
								<tr>
									<th>reg</th>
									<th>unreg</th>
									<th>reg</th>
									<th>unreg</th>
									<th>atm</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>50</td>
									<td>100</td>
									<td>0</td>
									<td>0</td>
									<td>15</td>
									<td>15</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>101</td>
									<td>2500</td>
									<td>0</td>
									<td>0</td>
									<td>25</td>
									<td>25</td>
									<td>40</td>
								</tr>
								<tr>
									<td>2,501</td>
									<td>5000</td>
									<td>0</td>
									<td>0</td>
									<td>45</td>
									<td>45</td>
									<td>55</td>
								</tr>
								<tr>
									<td>5,001</td>
									<td>10,000</td>
									<td>0</td>
									<td>0</td>
									<td>75</td>
									<td>75</td>
									<td>85</td>
								</tr>
								<tr>
									<td>10,001</td>
									<td>20,000</td>
									<td>0</td>
									<td>0</td>
									<td>145</td>
									<td>145</td>
									<td>175</td>
								</tr>
								<tr>
									<td>20,001</td>
									<td>35,000</td>
									<td>0</td>
									<td>0</td>
									<td>170</td>
									<td>170</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>35,001</td>
									<td>50,000</td>
									<td>0</td>
									<td>N/A</td>
									<td>250</td>
									<td>N/A</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>50,001</td>
									<td>70,000</td>
									<td>0</td>
									<td>N/A</td>
									<td>300</td>
									<td>N/A</td>
									<td>N/A</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="network orange"
					     id="orange">
						<table>
							<thead>
								<tr>
									<th rowspan="2">min</th>
									<th rowspan="2">max</th>
									<th colspan="2">sending</th>
									<th colspan="3">withdrawal</th>
								</tr>
								<tr>
									<th>reg</th>
									<th>unreg</th>
									<th>reg</th>
									<th>unreg</th>
									<th>atm</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>100</td>
									<td>2500</td>
									<td>30</td>
									<td>70</td>
									<td>25</td>
									<td>0</td>
									<td>40</td>
								</tr>
								<tr>
									<td>2,501</td>
									<td>5,000</td>
									<td>30</td>
									<td>90</td>
									<td>45</td>
									<td>0</td>
									<td>60</td>
								</tr>
								<tr>
									<td>5,001</td>
									<td>10,000</td>
									<td>30</td>
									<td>155</td>
									<td>75</td>
									<td>0</td>
									<td>100</td>
								</tr>
								<tr>
									<td>10,001</td>
									<td>20,000</td>
									<td>30</td>
									<td>305</td>
									<td>145</td>
									<td>0</td>
									<td>100</td>
								</tr>
								<tr>
									<td>20,001</td>
									<td>35,000</td>
									<td>30</td>
									<td>355</td>
									<td>170</td>
									<td>0</td>
									<td>100</td>
								</tr>
								<tr>
									<td>35,001</td>
									<td>40,000</td>
									<td>40</td>
									<td>390</td>
									<td>195</td>
									<td>0</td>
									<td>100</td>
								</tr>
								<tr>
									<td>40,001</td>
									<td>50,000</td>
									<td>40</td>
									<td>390</td>
									<td>195</td>
									<td>0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>50,001</td>
									<td>100,000</td>
									<td>50</td>
									<td>450</td>
									<td>225</td>
									<td>0</td>
									<td>N/A</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="network yu"
					     id="yu">
						<table>
							<thead>
								<tr>
									<th rowspan="2">min</th>
									<th rowspan="2">max</th>
									<th colspan="2">sending</th>
									<th colspan="3">withdrawal</th>
								</tr>
								<tr>
									<th>reg</th>
									<th>unreg</th>
									<th>reg</th>
									<th>unreg</th>
									<th>atm</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>10</td>
									<td>250</td>
									<td>0</td>
									<td>0</td>
									<td>5</td>
									<td>5</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>251</td>
									<td>2500</td>
									<td>0</td>
									<td>0</td>
									<td>20</td>
									<td>20</td>
									<td>40</td>
								</tr>
								<tr>
									<td>2501</td>
									<td>5000</td>
									<td>0</td>
									<td>0</td>
									<td>40</td>
									<td>40</td>
									<td>60</td>
								</tr>
								<tr>
									<td>5001</td>
									<td>10000</td>
									<td>0</td>
									<td>0</td>
									<td>65</td>
									<td>65</td>
									<td>85</td>
								</tr>
								<tr>
									<td>10001</td>
									<td>20000</td>
									<td>0</td>
									<td>0</td>
									<td>120</td>
									<td>120</td>
									<td>150</td>
								</tr>
								<tr>
									<td>20001</td>
									<td>35000</td>
									<td>0</td>
									<td>0</td>
									<td>140</td>
									<td>140</td>
									<td>170</td>
								</tr>
								<tr>
									<td>35001</td>
									<td>70000</td>
									<td>0</td>
									<td>0</td>
									<td>200</td>
									<td>200</td>
									<td>N/A</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="overlay"
		     id="overlay"
		     style="display: none;" >
		     <div class="dialog modal"
		          id="dialog">
				<h1>message</h1>
				<div style="padding: 1em 4%;">
				</div>
				<div style="text-align: center; background-color: rgba( 18, 35, 72, 0.3 );">
					<p style="padding: 0.4em;"> [ click anywhere outside this modal dialog box to close it ] </p>
				</div>
			</div>
		</div>
		<script type="text/javascript"
		        src="main.js.php">
		</script>
	</body>
</html>
