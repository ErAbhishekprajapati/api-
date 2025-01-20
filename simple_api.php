<?php
// Set the header to return JSON
//header('Content-Type: application/json');

// $data=[
//     "name"=>"abhishek",
//     "age"=>20,
//     "add"=>"banwari ka pura"
// ];
// echo json_encode($data);
// ?>

<?php
//$con = mysqli_connect("localhost", "root", "", "api");

// $response = array();
//header('content-type:application/json');
// if ($con) {
//     // SQL query to fetch data
//     $sql = "SELECT * FROM phpapi";
//     $res = mysqli_query($con, $sql);

//     //Loop through the result set and populate response
//     $i = 0;
//     while ($row = mysqli_fetch_assoc($res)) {
//         $response[$i]['Name'] = $row['Name'];
//         $response[$i]['email'] = $row['email'];
//         $response[$i]['mobile'] = $row['mobile'];
//         $response[$i]['address'] = $row['address'];
//         $i++;
//     }

//     //Return the response in JSON format
//     echo json_encode($response, JSON_PRETTY_PRINT);
// } else {
//     // In case of connection error
//     echo "Connection failed: " . mysqli_connect_error();
// }
// ?>
<?php

// // simple way me data fetch karna db se;
// $con = mysqli_connect("localhost", "root", "", "api");
// $sql="select * from phpapi";
// $res =mysqli_query($con,$sql);
// header('Content-Type: application/json');
// if($row=mysqli_fetch_assoc($res)){
//     $response=[
//         'Name'=>$row['Name'],
//         'email'=>$row['email'],
//         'mobile'=>$row['mobile'],
//         'address'=>$row['address']
//     ];
//     // Return the result as JSON
//     echo json_encode($response,JSON_PRETTY_PRINT);
// }

?>

<?php
// //data add karna in mysql db me 
// $con = mysqli_connect("localhost", "root", "", "api");
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST');

// // Get the raw POST data
// $data = json_decode(file_get_contents("php://input"), true);

// // If no data is provided, send an error message
// if (!$data) {
//     echo json_encode(array('msg' => 'No data received or invalid format.', 'status' => false));
//     exit(); // Stop further processing
// }

// // Sanitize the data
// $name = mysqli_real_escape_string($con, $data['name']);
// $email = mysqli_real_escape_string($con, $data['email']);
// $mobile = mysqli_real_escape_string($con, $data['mobile']);
// $address = mysqli_real_escape_string($con, $data['address']);

// // Insert data into the database
// $sql = "INSERT INTO phpapi (name, email, mobile, address) VALUES ('$name', '$email', '$mobile', '$address')";

// // Check if the insertion was successful
// if (mysqli_query($con, $sql)) {
//     echo json_encode(array('msg' => 'Inserted successfully.', 'status' => true));
// } else {
//     echo json_encode(array('msg' => 'Insertion failed.', 'status' => false));
// }

// // Close the database connection
// mysqli_close($con);






?>
<?php
// //update the db values;

// $con = mysqli_connect("localhost", "root", "", "api");
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: PUT');

// // Get the raw POST data
// $data = json_decode(file_get_contents("php://input"), true);

// // If no data is provided, send an error message
// if (!$data) {
//     echo json_encode(array('msg' => 'No data received or invalid format.', 'status' => false));
//     exit(); // Stop further processing
// }

// // Sanitize the data
// $name = mysqli_real_escape_string($con, $data['name']);
// $email = mysqli_real_escape_string($con, $data['email']);
// $mobile = mysqli_real_escape_string($con, $data['mobile']);
// $address = mysqli_real_escape_string($con, $data['address']);
// $old_name = mysqli_real_escape_string($con, $data['old_name']);

// // Insert data into the database
// $sql = "UPDATE phpapi SET Name = '$name', email = '$email', mobile = '$mobile', address = '$address' WHERE Name = '$old_name'";

// // Check if the insertion was successful
// if (mysqli_query($con, $sql)) {
//     echo json_encode(array('msg' => 'Inserted successfully.', 'status' => true));
// } else {
//     echo json_encode(array('msg' => 'Insertion failed.', 'status' => false));
// }

// // Close the database connection
// mysqli_close($con);

?>
<?php
//update the db values;

// $con = mysqli_connect("localhost", "root", "", "api");
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: DELETE');

// // Get the raw POST data
// $data = json_decode(file_get_contents("php://input"), true);

// // If no data is provided, send an error message
// if (!$data) {
//     echo json_encode(array('msg' => 'No data received or invalid format.', 'status' => false));
//     exit(); // Stop further processing
// }

// // Sanitize the data
// $name = mysqli_real_escape_string($con, $data['name']);
// $email = mysqli_real_escape_string($con, $data['email']);
// $mobile = mysqli_real_escape_string($con, $data['mobile']);
// $address = mysqli_real_escape_string($con, $data['address']);
// $old_name = mysqli_real_escape_string($con, $data['old_name']);

// // delete data into the database
// $sql = "DELETE FROM phpapi WHERE name='$old_name'";

// // Check if the delete was successful
// if (mysqli_query($con, $sql)) {
//     echo json_encode(array('msg' => 'deleted successful.', 'status' => true));
// } else {
//     echo json_encode(array('msg' => 'not deleted.', 'status' => false));
// }

// // Close the database connection
// mysqli_close($con);
?>
<?php
$con = mysqli_connect("localhost", "root", "", "api");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');

$data = json_decode(file_get_contents('php://input'), true);
//$search_val = mysqli_real_escape_string($con, $data['search']);  // Sanitize input optional

$sql = "SELECT * FROM phpapi WHERE name LIKE '%$search_val%'";
$result = mysqli_query($con, $sql) or die("Failed to search");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);  
    echo json_encode($output); //json me implement
} else {
    echo json_encode(["message" => "Values not found"]);
}

mysqli_close($con);
?>
