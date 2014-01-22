<?php

// Requirements
require dirname(__FILE__)."/event.php";

// Helpers
function h($s) { return htmlspecialchars($s); }

// Config
setlocale (LC_ALL, "fr_FR");

// Data
$EVENTS = array(
  new Event("2014-02-27 21:00", "", ""), # http://bit.ly/Quesapelorio-Cabaret-fevrier-2014
  new Event("2014-03-27 21:00", "", ""), # http://bit.ly/Quesapelorio-Cabaret-mars-2013
  new Event("2014-04-24 21:00", "", ""), # http://bit.ly/Quesapelorio-Cabaret-avril-2014
  new Event("2014-05-22 21:00", "", ""), # http://bit.ly/Quesapelorio-Cabaret-mai-2014
  new Event("2014-06-26 21:00", "", ""), # http://bit.ly/Quesapelorio-Cabaret-juin-2014
);

// View
$event = Event::current_event();

