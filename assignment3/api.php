<?php
include 'db.php';

// Set headers to allow cross-origin requests and return JSON content
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Function to get the request method
function getMethod() {
    return $_SERVER['REQUEST_METHOD'];
}

// Function to get request data
function getRequestData() {
    return json_decode(file_get_contents('php://input'), true);
}

// RESTful endpoints
switch (getMethod()) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo json_encode($result->fetch_assoc());
            } else {
                echo json_encode(["message" => "User not found"]);
            }
        } else {
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            $users = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            echo json_encode($users);
        }
        break;

    case 'POST':
        $data = getRequestData();
        $name = $data['name'];
        $email = $data['email'];
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "User created successfully"]);
        } else {
            echo json_encode(["message" => "Error creating user: " . $conn->error]);
        }
        break;

    case 'PUT':
        $data = getRequestData();
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "User updated successfully"]);
        } else {
            echo json_encode(["message" => "Error updating user: " . $conn->error]);
        }
        break;

    case 'DELETE':
        $data = getRequestData();
        $id = $data['id'];
        $sql = "DELETE FROM users WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "User deleted successfully"]);
        } else {
            echo json_encode(["message" => "Error deleting user: " . $conn->error]);
        }
        break;

    default:
        echo json_encode(["message" => "Request method not supported"]);
        break;
}

$conn->close();
?>
