<?php

header('content-type:application/json');

include("condb.php")
$method = $_SERVER["REQUEST_METHOD"];
$response = ['status'=>'error','message '=>'invalid request'];

switch ($method) {
    case 'GET':
        $SQL = "SELECT*FROM blog ORDER BY id DESC";
        $stmt = $condb->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $blog = [];

       while ($row = $result->fetch_assoc()) {
            $blog[] = $row;
        }

        $response = ['status' => 'success', 'data' => $blog];
        break;

        
		case "DELETE":
        $data = file_get_contents("php://input");
        parse_str($data, $request_data);
        $id = $request_data['id'] ?? null;
        if ($id) {
            $sql = "DELETE FROM blog WHERE id = ?";
            $stmt = $condb->prepare($sql);
            $stmt->bind_param("i", $id);
            if ($stmt->execute())
                $response = ['status' => 'success', 'message' => 'Deleted'];
            else
                $response = ['status' => 'error', 'message' => $condb->error];
        } else
            $response = ['status' => 'success', 'message' => 'ID is null'];

        break;
}




echo json_encode($response);