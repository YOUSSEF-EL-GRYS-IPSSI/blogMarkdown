<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// database connection will be here
// include database and object files
include_once 'database.php';
include_once 'articles.php';
 
// instantiate database and articles object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$articles = new Articles($db);


require_once('parsedown/Parsedown.php');

//read articles will be here
$Parsedown = new Parsedown();

// query articles
$stmt = $articles->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    //articles array
    $articles_arr=array();
    $articles_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $articles_item=array(
            "id" => $id,
            "name" =>$Parsedown->text( $name),
            "description" => html_entity_decode($Parsedown->text($description))
          
        );
 
        array_push($articles_arr["records"], $articles_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($articles_arr);
}
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no products found
    echo json_encode(
        array("message" => "No products found.")
    );
}
 
// no products found will be here


?>