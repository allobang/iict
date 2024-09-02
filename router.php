<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
// $uri =$_SERVER["REQUEST_URI"];

$route = [
    "/" => "controllers/index.php",
    "/faculty" => "controllers/faculty.php",
    "/subjects/WM" => "controllers/subjects.php",
    "/subjects/NS" => "controllers/subjects.php",
    "/subjects/create" => "controllers/subjects.php",
    "/schedule" => "controllers/schedule.php",
    "/schedule2" => "controllers/schedule2.php",
    "/schedule3" => "controllers/schedule3.php",
    "/loading" => "controllers/loading.php",
    "/evaluation" => "controllers/evaluation.php",
];

function abort($code = 404){
    http_response_code($code);
    $view ="views/{$code}.php";
    require "views/layout.view.php";
}

function routesToController($uri, $route){
    if(array_key_exists($uri,$route)){
        require $route[$uri];
    }else{
       abort();
    }
}

routesToController($uri,$route);