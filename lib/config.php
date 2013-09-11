<?php

// Requirements
require dirname(__FILE__)."/event.php";

// Helpers
function h($s) { return htmlspecialchars($s); }

// Config
setlocale (LC_ALL, "fr_FR");

// Data
$EVENTS = array(
  new Event(
    strtotime("2013-09-26 21:00"),
    "Après 2 mois de repos, les Quesapelorio ont repris du poil de la bête… (ou de la goutte de champion) et se préparent à attaquer cette rentrée <strong>en fanfare</strong> !!!\nNous vous attendons donc nombreux pour <strong>fêter cette rentrée</strong> et lancer avec nous cette nouvelle année d'impro 2013/2014, toujours sous le signe du rire !",
    "https://www.facebook.com/events/594713350572122/"
  ),
);

// View
$event = Event::current_event();

