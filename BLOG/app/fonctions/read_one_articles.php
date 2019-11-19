<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once 'database.php';
include_once 'articles.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare articles object
$articles = new Articles($db);
 
// set ID property of record to read
$articles->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of articles to be edited
$articles->readOne();
 
if($articles->name!=null){
    // create array
    $articles_arr = array(
        "id" =>  $articles->id,
        "name" => $articles->name,
        "description" => $articles->description
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($articles_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user articles does not exist
    echo json_encode(array("message" => "articles does not exist."));
}
?>