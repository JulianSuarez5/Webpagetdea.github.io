<?php
include("conexion.php");

header('Content-Type: application/json');

$response = array('success' => false, 'message' => '');

if (!empty($_POST["clientName"]) &&
    !empty($_POST["documentPerson"]) &&
    !empty($_POST["position"]) &&
    !empty($_POST["productQuality"]) &&
    !empty($_POST["serviceSatisfaction"]) &&
    !empty($_POST["responseTime"])) {

    $clientName = $_POST["clientName"];
    $documentPerson = $_POST["documentPerson"];
    $position = $_POST["position"];
    $productQuality = $_POST["productQuality"];
    $serviceSatisfaction = $_POST["serviceSatisfaction"];
    $responseTime = $_POST["responseTime"];
    $comments = !empty($_POST["comments"]) ? $_POST["comments"] : '';

    $sql = "INSERT INTO respuestas (clientName, documentPerson, position, productQuality, serviceSatisfaction, responseTime, comments)
            VALUES ('$clientName', '$documentPerson', '$position', '$productQuality', '$serviceSatisfaction', '$responseTime', '$comments')";

    if ($conn->query($sql) === TRUE) {
        $response['success'] = true;
    } else {
        $response['message'] = 'Error en la consulta SQL: ' . $conn->error;
    }
} else {
    $response['message'] = 'Por favor, complete todos los campos requeridos.';
}

echo json_encode($response);
?>