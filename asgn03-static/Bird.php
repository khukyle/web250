<?php

class Bird {
  public static $instance_count = 0;

    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = "yes";
    protected static $egg_num = 0;


    function can_fly() {
        if ( static::$flying == "yes" ) {
            $flying_string = "bird can fly";
        } else {
            $flying_string = "cannot fly and is stuck on the ground";
        }
        return  $flying_string ;
    }

    public static function create() {
      $class_name = get_called_class(); // must retrieve string first
      $obj = new $class_name;           // "new" expects a class or a string
      // $obj = new static              // self & static work here too!
      self::$instance_count++;
      return $obj;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
    protected static $egg_num = "3-4, sometimes 5."
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}
