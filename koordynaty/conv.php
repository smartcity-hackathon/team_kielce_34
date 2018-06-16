<?php
// Use a PSR-4 autoloader for the `proj4php` root namespace.
include("vendor/autoload.php");

use proj4php\Proj4php;
use proj4php\Proj;
use proj4php\Point;

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$i=($_GET['ID']) ? $_GET['ID'] : 0;
$conn = new mysqli('192.168.1.129', 'api_php', 'wheretogoZSI13', 'api_php');
$sql = "SELECT * FROM `places_sp`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    // output data of each row
    while($row = $result->fetch_assoc()) {
        $row2 = $result->fetch_assoc();


        //echo $row['KoordynatyX'].' '.$row['KoordynatyY'].'<br>';
		$proj4 = new Proj4php();

		$projL93    = new Proj('EPSG:3120', $proj4);
		$projWGS84  = new Proj('EPSG:4326', $proj4);

		$pointSrc = new Point($row['list_json_geometry_coordinates'], $row2['list_json_geometry_coordinates'], $projL93);
		$string = $row['list_NAZWA'].' - '.$pointSrc->toShortString();
		$pointDest = $proj4->transform($projWGS84, $pointSrc);

		$base = $pointDest->toShortString();
		$base = explode(" ", $base);

		if($base[1] < 49) {
			$proj5 = new Proj4php();
			$projL93    = new Proj('EPSG:2178', $proj5);
			$projWGS84  = new Proj('EPSG:4326', $proj5);

			$pointSrc = new Point($row['list_json_geometry_coordinates'], $row2['list_json_geometry_coordinates'], $projL93);
			$pointDest = $proj5->transform($projWGS84, $pointSrc);
			$base = $pointDest->toShortString();
			$base = explode(" ", $base);
			//echo '<Font color="red">';
		} else {
			//echo '<font color="green">';
		}

		$string = $string . ' -> ' . $base[1] .' '. $base[0] .'<br>';
		//echo $i.'. ' . $string.'</font>';
		//$conn->query("UPDATE `atrakcje` SET `KoordynatyX` = '".$base[1]."', `KoordynatyY` = '".$base[0]."' WHERE `ID` = '".$row['ID']."'");
    }

}
$conn->close();
//$b = $i+1;
//echo '<a href="conv.php?ID='.$b.'">DALEJ</a>';


while($i < 5) {
	$proj4 = new Proj4php();

	$projL93    = new Proj('EPSG:3120', $proj4);
	$projWGS84  = new Proj('EPSG:4326', $proj4);

	$pointSrc = new Point(4603488.29+$i*100, 5492322.42, $projL93);
	//echo $pointSrc->toShortString();
	$pointDest = $proj4->transform($projWGS84, $pointSrc);

	$base = $pointDest->toShortString();
	$base = explode(" ", $base);

	echo json_encode( array('x' => $base[1], 'y' => $base[0]) );
	$i++;
}

//echo 'access denied';

?>