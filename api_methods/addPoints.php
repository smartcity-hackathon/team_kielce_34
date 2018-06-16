<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2018
 * Time: 21:01
 */

// ToDo: zrobic wydajne

function haversineGreatCircleDistance(
    $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
    // convert from degrees to radians
    $latFrom = deg2rad($latitudeFrom);
    $lonFrom = deg2rad($longitudeFrom);
    $latTo = deg2rad($latitudeTo);
    $lonTo = deg2rad($longitudeTo);

    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
    return $angle * $earthRadius;
}

if ( isset($_GET['user_id']) && isset($_GET['locLat']) && isset($_GET['locLong']) ) {

    require './database.php';

    /*$userX = intval($_GET['locLong']);
    $userY = intval($_GET['locLat']);

    $i = 1;
    $places = connectWithDBAndGetResponse("SELECT indeks, list_json_geometry_coordinates FROM places_sp", null, null, null);

    $theClosestPlace;
    $dif = 300;
    foreach ($places as $place) {
        // ToDo: optymalizacja - ma brać najbliższy punkt i dopiero liczyć
        $i++;
        $coords_calculated = json_decode(file_get_contents("http://localhost/koordynaty/conv.php?ID=" . $i), true);

        if (empty($theClosestPlace) || $theClosestPlace['list_json_geometry_coordinates']['x'] - $coords_calculated['x'] > 0 || $theClosestPlace['list_json_geometry_coordinates']['y'] - $coords_calculated['y'] > 0 ) {
            if ($dif > ($userX - $coords_calculated['x']) + ($userY - $coords_calculated['y'])) {
                $theClosestPlace = $place;
                $theClosestPlace['list_json_geometry_coordinates'] = $coords_calculated;
            }
        }
    }

    print_r($coords_calculated);

    echo haversineGreatCircleDistance($_GET['locLat'], $_GET['locLong'], $theClosestPlace['list_json_geometry_coordinates']['y'], $theClosestPlace['list_json_geometry_coordinates']['x']) . "   ";
    if ( haversineGreatCircleDistance($_GET['locLat'], $_GET['locLong'], $theClosestPlace['list_json_geometry_coordinates']['y'], $theClosestPlace['list_json_geometry_coordinates']['x'] ) <= 200 ) {*/
        // Czy user wczesniej byl tu
        $resp = connectWithDBAndGetResponse("SELECT * FROM point_logs WHERE pl_id=:place_id AND u_id=:user_id",
            array(":place_id", ":user_id"),
            array($place['u_id'], $place['pl_id']),
            array(PDO::PARAM_INT, PDO::PARAM_INT)
        );

        if (empty($resp)) {
            //ToDo: nie byl, fajnie, wywolaj dalsza czesc

            echo "NIE BYL";
        } else {
            if (time() - $resp['date'] > 2592000) {

                // ToDo: nie byl tez, idz dalej
                echo "NIE BYL";

            } else {
                // Byl, nie dodajemy punktow
                echo json_encode(array(
                    "error" => "true",
                    "text" => "Dane miejsce było odwiedzone w przeciągu ostatniego miesiąca!"
                ));
                exit();
            }
        }
    //}
}