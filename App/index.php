<?php

// Import the config file to get get the DB's ID
require_once("Config/Configuration.php");
// Import the route class to access to its members
require_once("Route/Route.php");
// Instanciate a route and use the route method to choose a path if the http request work
$_route = new Route();
if (http_response_code() == 200) {
    $_route->route();
} else {
    $_route->erreur();
}
