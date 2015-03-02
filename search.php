

<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');
require_once('insertFunc.php');


/** Perform a POST request and echo the response
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest(); **/

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
//$url = 'https://api.twitter.com/1.1/followers/ids.json';
$query1 = $_POST["search1"];
$query2 = $_POST["search2"];

//Create a Unique Search ID that is used to relate the two search terms in the database.
//The ID will be composed of parts of both search terms and a timestamp

//Take the first 4 characters of the first search query to add to the Search ID
$search_id = substr($query1, 0,4);
//Add the first 4 characters of the second search query to add to the Search ID
$search_id .= substr($query2, 0,4);
//Add a timestamp to the SearchID
$search_id .= idate("U");

//Run the first search query through the API
searchNinsert($query1, $search_id);
//Run the second search query through the API
searchNinsert($query2, $search_id);


displayMatching($query1,$query2);


