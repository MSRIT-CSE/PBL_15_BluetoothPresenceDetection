<?php
echo "bzamhzkjahkzajhjaz";
$nameToBluetoothIDFile = fopen("./nameToBluetoothID.txt","r");
if($nameToBluetoothIDFile)
{
	while(($line=fgets($nameToBluetoothIDFile)) !== false)
	{
		$nameToBluetoothIDArray = preg_split("/[\s]+/", $line);
		$bluetoothIDToNameDict[$nameToBluetoothIDArray[1]] = $nameToBluetoothIDArray[0];
	}
}
fclose($nameToBluetoothIDFile);


$dataFromPiFile =  fopen("data.txt","r");
if($dataFromPiFile)
{
	while(($line=fgets($dataFromPiFile)) !== false)
	{
		$dataArray = explode("--", $line);
		print_r($dataArray);
		$timestamp = $dataArray[0];
		$bluetoothIDList = json_decode($dataArray[1],true);
		echo $timestamp."<br />";
		foreach ($bluetoothIDList as $bID) {
			if(array_key_exists($bID, $bluetoothIDToNameDict))
			{
				echo $bluetoothIDToNameDict[$bID]."<br />";
			}
		}
	}
}

?>