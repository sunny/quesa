<?php
class Event {
  function __construct($date, $description, $facebook_url, $location = "3arts") {
    $this->date = is_string($date) ? strtotime($date) : $date;
    $this->description = $description;
    $this->facebook_url = $facebook_url;
    $this->location = $location;
  }

  function location() {
    return $this->location;
  }

  function day() {
    return strftime("%d", $this->date);
  }

  function weekday() {
    return strftime("%A", $this->date);
  }

  function month() {
    return strftime("%B", $this->date);
  }

  function hour() {
    return strftime("%H", $this->date);
  }

  function timestamp() {
    return strftime("%FT%H:%M+01:00", $this->date);
  }

  function description() {
    return $this->description;
  }

  function facebook_url() {
    return $this->facebook_url;
  }

  static function current_event() {
    global $EVENTS;

    $now = time();
    $event = null;

    foreach ($EVENTS as $e) {
      if ($e->date > $now) {
        $event = $e;
        break;
      }
    }

    return $event;
  }
}
