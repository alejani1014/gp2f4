<html>
<head>
	<title>ADREÇA IP</title>
</head>
	<body>
		<p><u>ADREÇA IP</u></p>		
		<?php
			require_once(__DIR__ . '/vendor/autoload.php');
			if ($_GET["op1"] =="") {
				$operand1 = 0;
			}
			else{
				$operand1 = $_GET["op1"]; 
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
			#
		$sub = new IPv4\SubnetCalculator($operand1, $operand2);

	    $ipAddress = $sub->getIPAddress();        
		echo "L'adreça IP és $ipAddress/".$operand2."<br><br>";

		$network = $sub->getNetworkPortion();        
		echo "El network és $network<br><br>";

		$broadcastAddress = $sub->getBroadcastAddress();
		echo "El broadcast és $broadcastAddress<br><br>";

		$addressableHostRange = $sub->getAddressableHostRange();
		echo "Els rangs són ".$addressableHostRange[0]."/".$operand2." fins a ".$addressableHostRange[1]."/".$operand2."<br><br>";
		
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>
