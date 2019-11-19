<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once 'database.php';
// instantiate articles object
include_once 'articles.php';

//
require_once 'Faker/autoload.php';
 
$database = new Database();
$db=$database->getConnection();
 
$articles = new Articles($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
// make sure data is not empty
/*if(
    !empty($data->name) &&
    !empty($data->description)
){*/
 
    // set articles property values
   /* $articles->name = $data->name;
    $articles->description = $data->description;
    $articles->created = date('Y-m-d H:i:s');*/
	
	 //créer entre 4 ou 6 article
	 for($f=1;$f<=mt_rand(4,6);$f++)
       {
		   
	$faker = Faker\Factory::create("fr_FR");
	
	$content='<p>'.join($faker->paragraphs(2),
          '<p></p>').'</p>';
	      $articles->name=$faker->sentence();
	$articles->description=$content;
            $articles->created = date('Y-m-d H:i:s');
   
    // create the articles
    if($articles->create()){
 
        // set response code - 201 created
        http_response_code(201);
 
        // tell the user
        echo json_encode(array("message" => "articles was created."));
    }
 
    // if unable to create the articles, tell the user
    else{
 
        // set response code - 503 service unavailable
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create articles."));
    }
    }
	
/*}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    http_response_code(400);
 
    // tell the user
    echo json_encode(array("message" => "Unable to create articles. Data is incomplete."));
}*/
?>