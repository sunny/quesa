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
  new Event("2015-10-16 21:00", "Nous avons le plaisir venir à Hong Kong pour vous proposer 2 représentations exceptionnelles.", "https://www.facebook.com/events/519773924844064/", "hk"),
  new Event("2015-10-17 21:00", "Nous avons le plaisir venir à Hong Kong pour vous proposer 2 représentations exceptionnelles.", "https://www.facebook.com/events/519773924844064/", "hk"),
);

// View
$event = Event::current_event();
