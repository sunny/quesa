<?php

// Config
date_default_timezone_set('Europe/Paris');
setlocale(LC_ALL, "fr_FR.utf8");

// Requirements
require dirname(__FILE__) . "/event.php";
require dirname(__FILE__) . "/helpers.php";
require dirname(__FILE__) . "/../data.php";

// View
$event = Event::current_event();
