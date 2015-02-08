<?php

date_default_timezone_set('Europe/Paris');

// Requirements
require dirname(__FILE__)."/event.php";

// Helpers
function h($s) { return htmlspecialchars($s); }

// Config
setlocale(LC_ALL, "fr_FR.utf8");

// Data
$EVENTS = array(
  new Event("2015-03-26 21:00", "", ""), # http://bit.ly/Quesapelorio-Cabaret-mars-2015
  new Event("2015-04-23 21:00", "", ""),
  new Event("2015-05-28 21:00", "", ""),
  new Event("2015-06-25 21:00", "", ""),
  new Event("2015-07-23 21:00", "", ""),
  new Event("2015-08-27 21:00", "", ""),
);

// View
$event = Event::current_event();
