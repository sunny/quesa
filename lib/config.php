<?php

// Requirements
require dirname(__FILE__)."/event.php";

// Helpers
function h($s) { return htmlspecialchars($s); }

// Config
setlocale (LC_ALL, "fr_FR");

// Data
$EVENTS = array(
  new Event("2013-10-24 21:00", "", "https://www.facebook.com/events/349197361893739/"),
  new Event("2013-11-28 21:00", "", ""),
  new Event("2013-12-18 21:00", "", ""),
  new Event("2014-01-23 21:00", "", ""),
  new Event("2014-02-27 21:00", "", ""),
  new Event("2014-03-27 21:00", "", ""),
  new Event("2014-04-24 21:00", "", ""),
  new Event("2014-05-22 21:00", "", ""),
  new Event("2014-06-26 21:00", "", ""),
);

// View
$event = Event::current_event();

