function removeElement( node ) {
    node.parentNode.removeChild( node );

}

function determineRates( network = "safaricom", amount = 0 ) {

	returnValue = Array();

	returnValue[ "onNetworkTransfer" ] = "N/A";
	returnValue[ "offNetworkTransfer" ] = "N/A";
	returnValue[ "registeredWithdrawal" ] = "N/A";
	returnValue[ "unregisteredWithdrawal" ] = "N/A";
	returnValue[ "ATMWithdrawal" ] = "N/A" ;
	returnValue[ "err" ] = 0;

	err = 0;

	if( 1 ) {

		switch( network ) {

			case "safaricom" : {

				if( amount < 10 ) {
					err = 1;

				}

				if( amount >= 10 ) {
					onNetworkTransfer = 3;
					offNetworkTransfer = "N/A";
					registeredWithdrawal = "N/A";
					unregisteredWithdrawal = "N/A";

				}

				if( amount > 50 ) {
					onNetworkTransfer = 5;
					offNetworkTransfer = "N/A";
					registeredWithdrawal = 10;

				}

				if( amount > 101 ) {
					onNetworkTransfer = 27;
					offNetworkTransfer = 66;
					registeredWithdrawal = 27;
					unregisteredWithdrawal = 0;

				}

				if( amount > 200 ) {
					ATMWithdrawal = 33;

				}

				if( amount > 501 ) {
					onNetworkTransfer = 33;
					offNetworkTransfer = 66;
					registeredWithdrawal = 27;

				}

				if( amount > 2501 ) {
					offNetworkTransfer = 88;
					registeredWithdrawal = 49;
					ATMWithdrawal = 66;

				}

				if( amount > 3501 ) {
					offNetworkTransfer = 105;
					registeredWithdrawal = 66;

				}

				if( amount > 5001 ) {
					onNetworkTransfer = 55;
					offNetworkTransfer = 143;
					registeredWithdrawal = 82;
					ATMWithdrawal = 110;

				}

				if( amount > 7501 ) {
					offNetworkTransfer = 171;

				}

				if( amount > 10001 ) {
					offNetworkTransfer = 220;
					registeredWithdrawal = 159;
					ATMWithdrawal = 193;

				}

				if( amount > 15001 ) {
					offNetworkTransfer = 237;
					registeredWithdrawal = 176;

				}

				if( amount > 20001 ) {
					onNetworkTransfer = 82;
					offNetworkTransfer = 275;
					registeredWithdrawal = 187;
					ATMWithdrawal = "N/A";

				}

				if( amount > 25001 ) {
					onNetworkTransfer = 82;
					offNetworkTransfer = 275;
					registeredWithdrawal = 187;

				}

				if( amount > 30001 ) {
					onNetworkTransfer = 82;
					offNetworkTransfer = 275;
					registeredWithdrawal = 187;

				}

				if( amount > 35001 ) {
					offNetworkTransfer = "N/A";
					registeredWithdrawal = 275;

				}

				if( amount > 45001 ) {
					onNetworkTransfer = 110;

				}

				if( amount > 50001 ) {
					registeredWithdrawal = 330;

				}

				if( amount > 70000 ) {
					err = 2;

				}

			}
			break;

			case "airtel" : {

				if( amount < 50 ) {
					err = 1;

				}

				if( amount >= 50 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 15;
					unregisteredWithdrawal = 0;

				}

				if( amount > 100 ) {
					registeredWithdrawal = 25;
					unregisteredWithdrawal = 25;
					ATMWithdrawal = 40;

				}

				if( amount > 2500 ) {
					registeredWithdrawal = 45;
					unregisteredWithdrawal = 45;
					ATMWithdrawal = 55;

				}

				if( amount > 5000 ) {
					registeredWithdrawal = 75;
					unregisteredWithdrawal = 75;
					ATMWithdrawal = 85;

				}

				if( amount > 10000 ) {
					registeredWithdrawal = 145;
					unregisteredWithdrawal = 145;
					ATMWithdrawal = 175;

				}

				if( amount > 20000 ) {
					registeredWithdrawal = 170;
					unregisteredWithdrawal = 170;
					ATMWithdrawal = "N/A";

				}

				if( amount > 35000 ) {
					registeredWithdrawal = 250;
					unregisteredWithdrawal = "N/A";
					offNetworkTransfer = "N/A";

				}

				if( amount > 50000 ) {
					registeredWithdrawal = 300;

				}

				if( amount > 70000 ) {
					onNetworkTransfer = "N/A";
					registeredWithdrawal = "N/A";

				}

				if( amount > 70000 ) {
					err = 2;

				}

			}
			break;

			case "orange" : {

				if( amount < 100 ) {
					err = 1;

				}

				if( amount >= 100 ) {
					onNetworkTransfer = 30;
					offNetworkTransfer = 70;
					registeredWithdrawal = 25;
					unregisteredWithdrawal = 0;
					ATMWithdrawal = 40;

				}

				if( amount > 2501 ) {
					offNetworkTransfer = 90;
					registeredWithdrawal = 45;
					ATMWithdrawal = 60;

				}

				if( amount > 5001 ) {
					offNetworkTransfer = 155;
					registeredWithdrawal = 75;
					ATMWithdrawal = 100;

				}

				if( amount > 10001 ) {
					offNetworkTransfer = 305;
					registeredWithdrawal = 145;
					ATMWithdrawal = 175;

				}

				if( amount > 20001 ) {
					offNetworkTransfer = 355;
					registeredWithdrawal = 170;

				}

				if( amount > 35001 ) {
					onNetworkTransfer = 40;
					offNetworkTransfer = 390;
					registeredWithdrawal = 195;

				}

				if( amount > 40001 ) {
					ATMWithdrawal = "N/A";

				}

				if( amount > 50001 ) {
					onNetworkTransfer = 50;
					offNetworkTransfer = 450;
					registeredWithdrawal = 225;

				}

				if(amount > 100000 ) {
					err = 2;

				}

			}
			break;

			case "yu" : {

				if( amount < 10 ) {
					err = 1;

				}

				if( amount > 10 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 5;
					unregisteredWithdrawal = 5;

				}

				if( amount > 100 ) {
					ATMWithdrawal = 40;

				}

				if( amount > 250 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 20;
					unregisteredWithdrawal = 20;

				}

				if( amount > 2501 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 40;
					unregisteredWithdrawal = 40;
					ATMWithdrawal = 60;

				}

				if( amount > 5001 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 65;
					unregisteredWithdrawal = 65;
					ATMWithdrawal = 85;

				}

				if( amount > 10001 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 120;
					unregisteredWithdrawal = 120;
					ATMWithdrawal = 150;

				}

				if( amount > 20001 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 140;
					unregisteredWithdrawal = 140;
					ATMWithdrawal = 170;
				}

				if( amount > 35001 ) {
					onNetworkTransfer = 0;
					offNetworkTransfer = 0;
					registeredWithdrawal = 200;
					unregisteredWithdrawal = 200;
					ATMWithdrawal = "N/A";

				}

				if( amount > 70000 ) {
					err = 2;

				}

			}
			break;

		}

		if( err == 0 ) {

			returnValue [ "onNetworkTransfer" ] = onNetworkTransfer;
			returnValue [ "offNetworkTransfer" ] = offNetworkTransfer;
			returnValue [ "registeredWithdrawal" ] = registeredWithdrawal;
			returnValue [ "unregisteredWithdrawal" ] = unregisteredWithdrawal;
			returnValue [ "ATMWithdrawal" ] = ATMWithdrawal;

		}

		returnValue [ "err" ] = err;

	}

	return returnValue;

}

function disappear( event ) {

	var table = event.target
	                 .getElementsByTagName( "table" )[ 0 ];
	removeElement( table );

	var p = event.target
	             .getElementsByTagName( "p" )[ 0 ];
	removeElement( p );

	event.target.setAttribute( "style", "display: none;" );

}

function calcEstimate( event ) {

	event.preventDefault();

	var rates = determineRates( event.target.network.value, parseInt( event.target.amount.value ) );

	var overlay = document.getElementById( "overlay" );

	var modalDialog = document.getElementById( "dialog" );
	var dialogContent = modalDialog.getElementsByTagName( "div" )[ 0 ];

	var p = document.createElement( "p" );
	p.innerHTML = "The estimated cost of transacting <b>" + event.target.amount.value + "</b> on <b>" + event.target.network.value + "</b> is " ; // + event.target.numberOfPages.value + " page paper, due in less than " + ( event.target.urgency.value < 100 ? event.target.urgency.value : Math.floor( event.target.urgency.value / 24 ) ) + " " + ( event.target.urgency.value > 100 ? "days" : "hrs" ) + " is $" + ( event.target.numberOfPages.value * 5 );

	dialogContent.appendChild( p );

	table = document.getElementById( "results" )

	table.setAttribute( "style", "display: block;" );

	table_rows = table.getElementsByTagName( "tbody" )[ 0 ]
					  .getElementsByTagName( "tr" );

	table_rows[ 0 ].getElementsByTagName( "td" )[ 0 ]
	               .innerHTML = rates[ "onNetworkTransfer" ];

	table_rows[ 1 ].getElementsByTagName( "td" )[ 0 ]
	               .innerHTML = rates[ "offNetworkTransfer" ];

	table_rows[ 2 ].getElementsByTagName( "td" )[ 0 ]
	               .innerHTML = rates[ "registeredWithdrawal" ];

	table_rows[ 3 ].getElementsByTagName( "td" )[ 0 ]
	               .innerHTML = rates[ "unregisteredWithdrawal" ];

	table_rows[ 4 ].getElementsByTagName( "td" )[ 0 ]
	               .innerHTML = rates[ "ATMWithdrawal" ];

	dialogContent.appendChild( table.cloneNode() );

	// Show it
	overlay.setAttribute( "style", "display: block;" );


}


function init() {

	var overlay = document.getElementById( "overlay" );
	overlay.addEventListener( "click", disappear, true );

	var calculator = document.getElementById( "calculator" );
	calculator.addEventListener( "submit", calcEstimate, true );

}
