<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2018
 * Time: 22:48
 */

require_once './config.php';
require_once './database.php';


update(1, 1);

function update($user_id, $update_amount) {

    $updatedAmount = 0;
    $resp = connectWithDBAndGetResponse("SELECT points FROM users WHERE u_id=:uid", [":uid"], [$user_id], [PDO::PARAM_INT]);

    if (empty($resp)) {
        echo json_encode( array(
            "error" => "true",
            "text" => "Dany uzytkownik nie istnieje!
        "));
        exit();
    }

    $updatedAmount = intval($resp['points']) + $update_amount;

    $time = time();
    connectWithDBAndQuery("INSERT INTO point_logs (u_id, points, date) VALUES ({$user_id}, {$update_amount}, {$time})");
    connectWithDBAndQuery("UPDATE users SET points={$updatedAmount} WHERE u_id={$user_id}");
}


function getCurrentPosition($user_id) {

}