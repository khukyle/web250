<?php
  class Bird {

    var $commonName;
    var $food;
    var $nestPlacement;
    var $conservationLevel;

    function song() {
      
    }

    function canFly() {
      
    }

  }

  $bird1 = new Bird;
  $bird1->commonName = "Eastern Towhee";
  $bird1->food = "seeds, fruits, insects, spiders";
  $bird1->nestPlacement = "ground";
  $bird1->conservationLevel = "low";
  
  $bird2 = new Bird;
  $bird2->commonName = "Indigo Bunting";
  $bird2->food = "small seeds, berries, buds and insects";
  $bird2->nestPlacement = "roadsides and railroads";
  $bird2->conservationLevel = "low";

  echo "The " . $bird1->commonName . " eats " . $bird1->food . ".</br> It nests on " . $bird1->nestPlacement . " and its conservation level is " . $bird1->conservationLevel .".</br></br>";
  echo "The " . $bird2->commonName . " eats " . $bird2->food . ".</br> It nests on " . $bird2->nestPlacement . " and its conservation level is " . $bird2->conservationLevel .".</br></br>";
?>