<?php 

require 'config.php';

//DELETEghh

// $sql = "DELETE FROM for_fun WHERE id=?";

// $stmt = $conn -> prepare($sql);
// $id = 15;
// $stmt -> bind_param('i', $id);
// $stmt -> execute();
// $result = $stmt -> get_result();
// if ($result == TRUE){
//     echo 'succes';
// }else {
//     echo "0 results";
// }
// $conn->close();

//UPDATE

$sql = "UPDATE for_fun SET lastname = ? WHERE id = ?";
$stmt = $conn -> prepare($sql);
$lastname = 'Gegham';
$id = 17;
$stmt -> bind_param('si', $lastname, $id);
$stmt -> execute();
$result = $stmt -> get_result();
if ($result == TRUE){
    echo 'suuceess';
}else {
    die ('noooo' . $stmt -> error);
}
