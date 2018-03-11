<?php

$route = new Route();

//---------------- Route --------------- //

$route->url("api/getStudent/:nim",  	   "home", "getStudent");
$route->url("api/getMembers/:nim_members", "home", "getMembers");
