<?php

$route = new Route();

//---------------- Route --------------- //

$route->url("api/getStudent/:nim/:privacy",  	    "home", "getStudent");
$route->url("api/getMembers/:nim_members/:privacy", "home", "getMembers");
