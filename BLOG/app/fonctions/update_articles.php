<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// include database and object files
include_once 'database.php';
include_once 'articles.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
 
//
require_once('parsedown/Parsedown.php');
// prepare articles object
$articles = new Articles($db);

$Parsedown = new Parsedown();
 
// get id of articles to be edited
$data = json_decode(file_get_contents("php://input"));
 
// set ID property of articles to be edited
$articles->id =$data->id;
 
// set articles property values
$articles->name =$Parsedown->text($data->name);
$articles->description=$Parsedown->text($data->description);

 
// update the articles
if($articles->update()){
 
    // set response code - 200 ok
    http_response_code(200);
 
    // tell the user
    echo json_encode(array("message" => "Mise à jour d'aricle effectuée."));
}
 
// if unable to update the articles, tell the user
else{
 
    // set response code - 503 service unavailable
    http_response_code(503);
 
    // tell the user
    echo json_encode(array("message" => "Mise à jour d'aricle non effectuée."));
}
?>